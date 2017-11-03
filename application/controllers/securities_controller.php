<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Securities
 *
 * @author ravi
 */
class Securities_Controller extends CI_Controller {

    /**
     * load the add security page
     */
    public function index() {
        $this->load->model('securities/Security_Model');
        $this->load->model('CDSAccounts_m');
        $this->load->model('Company_m');

        $userbean = $this->session->userdata('userbean');

        $data['security'] = $this->Security_Model->get_new();
        //get CDS Accounts 
        $data['CDSAccList'] = $this->CDSAccounts_m->getUserCDSAccounts($userbean->userid);
        $data['companyList'] = $this->Company_m->getAll();

        //get MARGIN_VALUE       
        $this->load->model('cal/Cal_Model');
        $param = $this->Cal_Model->getParamValue('MARGIN_VALUE');
        //echo '<tt><pre>'.var_export($param, TRUE).'</pre></tt>';
        foreach ($param as $rows) {
            $data['MARGIN_VALUE'] = $rows->value;
        }

        $this->load->view('securites_view/index', $data);
    }

    public function add() {

        $this->load->model('securities/Security_Model');
        $this->load->model('CDSAccounts_m');
        $this->load->model('Company_m');
        $this->load->model('fund/Fund_Model');

        $userbean = $this->session->userdata('userbean');

        $data['CDSAccList'] = $this->CDSAccounts_m->getUserCDSAccounts($userbean->userid); //CDS Account list
        $data['companyList'] = $this->Company_m->getAll(); //company list

        $data['security'] = $this->Security_Model->get_new(); //create empty fields
        $rules = $this->Security_Model->rules;

        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run() == TRUE) {

            //validation pass ready to insert into db
            echo 'validation pass<br>';
//            var_export($data['security']);
            $data_form = $this->Security_Model->array_from_post(array('effectdate', 'cdsaccid', 'comid', 'subtypeid', 'qty', 'amount', 'total',
                'UPTO_1', 'UPTO_2', 'UPTO_3', 'UPTO_4', 'UPTO_5',
                'OVER_1', 'OVER_2', 'OVER_3', 'OVER_4', 'OVER_5', 'netamount'));
//            var_export($data_form);
            $data_form['userid'] = $userbean->userid;
            $data_form['qty_init'] = $this->input->post('qty');




            //get broker balance
            $broker_detail = $this->CDSAccounts_m->getBrokerBalanceFromCDS($data_form['cdsaccid']);
            //$arr = array('brokercomid'=>$rows->brokercomid , 'balance'=> $rows->balance);

            if ($broker_detail['balance']) {

                echo 'Broker Balance:' . $broker_detail['balance'];

                $this->Security_Model->setUserSecurities($data_form);
                echo '<br>Data inserted';



                //set data into "summary_bought_sold_funds"
                $tax_amount = $data_form['netamount'] - $data_form['total'];
                //broker balance update
                $broker_new_bal = $broker_detail['balance'] - $data_form['netamount'];
                //clollect data 
                $cost_per_share = $data_form['netamount'] / $data_form['qty_init'];

                $data_summ = array('effectdate' => $data_form['effectdate'],
                    'comid' => $data_form['comid'],
                    'description' => 'BUY',
                    'qty' => $data_form['qty_init'],
                    'trade_price' => $data_form['amount'],
                    'gross_value' => $data_form['total'],
                    'tax' => 1.12,
                    'tax_value' => $tax_amount,
                    'buy' => $data_form['netamount'],
                    'balance' => $broker_new_bal,
                    'cost_per_share' => $cost_per_share,
                    'userid' => $userbean->userid
                );
                $this->Security_Model->setSummary_bought_sold_funds($data_summ);

                //update broker balance
                $txntime = date("Y-m-d h:i");
                $broker_bal_update = array('balance' => $broker_new_bal, 'lastupdated' => $txntime);
                //brokercomid , userid
                $this->Fund_Model->updateBrokerFund($broker_detail['brokercomid'], $userbean->userid, $broker_bal_update);

                $data['msg'] = "New Security created successfully";
            } else {
                echo 'Broker balance empty';
                $data['msg'] = "Insufficient Balance ";
            }

            $this->load->view('securites_view/message_page', $data);
            /*



             */
        }




        //$this->load->view('securites_view/index', $data);
        //redirect('/securities_controller/listUserSecurities/' . $userbean->userid);
    }

    public function getSubtype($cdsacc) {
//        echo $cdsacc;
        $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
//        header('Content-Type: application/json');
//        echo json_encode($arr);
        return $this->output
                        ->set_content_type('application/json')
                        ->set_status_header(200)
                        ->set_output(json_encode(array(
                            'a' => '111',
                            'b' => '555'
        )));

//        return json_encode($arr);
    }

    public function getCompSecSubtype($comid) {
        $this->load->model('securities/Security_Model');
        $resultData = $this->Security_Model->getCompSecSubtype($comid);

//        var_export($resultData);

        return $this->output
                        ->set_content_type('application/json')
                        ->set_status_header(200)
                        ->set_output(json_encode($resultData));
    }

    public function getCal() {
        $this->load->model('securities/Security_Model');
        $resultData = $this->Security_Model->getCal();
        return $this->output
                        ->set_content_type('application/json')
                        ->set_status_header(200)
                        ->set_output(json_encode($resultData));
    }

    public function getCalHistory($effectdate) {
        $this->load->model('securities/Security_Model');
//        $effectdate = $this->input->get('effectdate');
        $resultData = $this->Security_Model->getCalHistory($effectdate);
        return $this->output
                        ->set_content_type('application/json')
                        ->set_status_header(200)
                        ->set_output(json_encode($resultData));
    }

    public function listUserSecurities($param) {
        $this->load->model('securities/Security_Model');
        $this->load->model('CDSAccounts_m');

        $userbean = $this->session->userdata('userbean');
        //get company list for user 
        $data['userSecComList'] = $this->Security_Model->getUserSecCompanyList($param);
        //user broker CDS lisr
        $data['CDSAccList'] = $this->CDSAccounts_m->getUserBrokerCompanyList($userbean->userid);

//        echo var_export($data['userSecComList']);
        $data['userSecList'] = $this->Security_Model->getUserSecuritiesList($param);
        $this->load->view('securites_view/user_securities', $data);
    }

    public function listUserCompanySecurity() {
        $this->load->model('securities/Security_Model');
        $userbean = $this->session->userdata('userbean');
        $this->load->model('CDSAccounts_m');

        //get post value


        $data_form = $this->Security_Model->array_from_post(array('comid', 'brokercomid'));
        echo var_export($data_form);
//        echo '<br> form data:'. var_export($data_form);
//        $data['security'] = $this->Security_Model->get_new(); //create empty fields
//        $rules = $this->Security_Model->rules;
//        $this->form_validation->set_rules($rules);
//        if ($this->form_validation->run() == TRUE) {
//           //data oky
//        }else{
//            
//        }
//        
//        
//        
        //get company list for user 
        $data['userSecComList'] = $this->Security_Model->getUserSecCompanyList($userbean->userid);

        //user broker CDS lisr
        $data['CDSAccList'] = $this->CDSAccounts_m->getUserBrokerCompanyList($userbean->userid);

        $data['userSecList'] = $this->Security_Model->getUserCompanySecuritiesList($userbean->userid, $data_form['comid'], $data_form['brokercomid']);
//        echo var_export($data['userSecList']);
        $this->load->view('securites_view/user_securities_sell_init', $data);
    }

    public function loadGetUserSecurity($secid) {
        $this->load->model('securities/Security_Model');
        //get data from post 
        $Security = $this->Security_Model->get_new();
        $dataLst = $this->Security_Model->getUserSecurity($secid);
        foreach ($dataLst as $rows) {
            $Security->secid = $secid;
            $Security->cdsaccid = $rows->cdsaccid;
            $Security->comid = $rows->comid;
            $Security->subtypeid = $rows->subtypeid;
            $Security->qty = $rows->qty;
            $Security->amount = $rows->amount;
            $Security->total = $rows->total;
            $Security->com_name = $rows->com_name;
            $Security->cost_per_share = $rows->netamount / $rows->qty_init;
        }
//        var_export($Security);
        //load parameter
        //get MARGIN_VALUE       
        $this->load->model('cal/Cal_Model');
        $param = $this->Cal_Model->getParamValue('MARGIN_VALUE');
        //echo '<tt><pre>'.var_export($param, TRUE).'</pre></tt>';
        foreach ($param as $rows) {
            $data['MARGIN_VALUE'] = $rows->value;
        }

        $data['security'] = $Security;
        $this->load->view('securites_view/sell_user_securities', $data);
    }

    public function getPortfolio() {
        //group the securities list and display .
        //when clicking the title it segrigate 

        $this->load->model('securities/Security_Model');
        $this->load->model('CDSAccounts_m');

        $userbean = $this->session->userdata('userbean');
        //get company list for user 
        // $data['userSecComList'] = $this->Security_Model->getUserSecCompanyList($param);
        //user broker CDS lisr
        $data['CDSAccList'] = $this->CDSAccounts_m->getUserBrokerCompanyList($userbean->userid);


        $data['userSecList'] = $this->Security_Model->getUserSecuritiesGroupList($userbean->userid);
        //echo '<tt><pre>' . var_export($data['userSecList'], TRUE) . '</pre></tt>';
        $this->load->view('securites_view/user_portfolio', $data);
    }

    public function getPortfolioBrokers($param) {
        $this->load->model('securities/Security_Model');
        $this->load->model('CDSAccounts_m');
        //get the brokers contribution 
        
        $data['brokerDetailsList'] = $this->Security_Model->getPortfolioBrokersForcompany($param);
        ////echo '<tt><pre>'.var_export($data['brokerDetailsList'], TRUE).'</pre></tt>';
        
                $userbean = $this->session->userdata('userbean');

        
        //get company group
        $data['userSecList'] = $this->Security_Model->getUserSecuritiesGroupList($userbean->userid);
        //echo '<tt><pre>' . var_export($data['userSecList'], TRUE) . '</pre></tt>';
        $this->load->view('securites_view/user_portfolio', $data);
    }

    public function sellUserSecurities() {
        $this->load->model('securities/Security_Model');
        $this->load->model('CDSAccounts_m');
        $this->load->model('fund/Fund_Model');
        $userbean = $this->session->userdata('userbean');
        //get data from post 
        $data_form = $this->Security_Model->array_from_post(array('effectdate', 'secid', 'qty', 'amount', 'total',
            'UPTO_1', 'UPTO_2', 'UPTO_3', 'UPTO_4', 'UPTO_5',
            'OVER_1', 'OVER_2', 'OVER_3', 'OVER_4', 'OVER_5', 'netamount'));

        //get broker balance
        $cdsaccid = $this->input->post('cdsaccid');
        $broker_detail = $this->CDSAccounts_m->getBrokerBalanceFromCDS($cdsaccid);
        //$arr = array('brokercomid'=>$rows->brokercomid , 'balance'=> $rows->balance);

        if ($broker_detail['balance']) {

            //collect and prepare update data
            $secid = $this->input->post('secid');
            $maxqty = $this->input->post('maxqty');
            $comid = $this->input->post('comid');
            $cost_per_share_buy = $this->input->post('cost_per_share');
            echo '---------max QTY:' . $maxqty;
            $qtybal = $maxqty - $data_form['qty'];
            //update array for user_sec
            $data_form_2 = array("qty" => $qtybal);
            $data_form_2['lastupdated'] = date("Y-m-d");
            if ($qtybal == 0) {
                $data_form_2['status'] = 'SOLD';
            }

            $data_form['userid'] = $userbean->userid;
//        echo var_export($data_form);
            $this->Security_Model->setUserCompSelling($data_form, $secid, $data_form_2);
            //update original security 
            //set data into "summary_bought_sold_funds"
            $tax_amount = $data_form['netamount'] - $data_form['total'];



            //broker balance update
            $broker_balance_new = $broker_detail['balance'] + $data_form['netamount'];
            //clollect data 

            $cost_per_share = $data_form['netamount'] / $data_form['qty'];
            $profit_loss_per_share = ($data_form['netamount'] / $data_form['qty']) - $cost_per_share_buy;
            $profit_loss_amount = (($data_form['netamount'] / $data_form['qty']) - $cost_per_share_buy) * $data_form['qty'];
            $profit_loss = ((($data_form['netamount'] / $data_form['qty']) - $cost_per_share_buy ) / $cost_per_share_buy ) * 100;


            $data_summ = array('effectdate' => $data_form['effectdate'],
                'comid' => $comid,
                'description' => 'SELL',
                'qty' => $data_form['qty'],
                'trade_price' => $data_form['amount'],
                'gross_value' => $data_form['total'],
                'tax' => 1.12,
                'tax_value' => $tax_amount,
                'sell' => $data_form['netamount'],
                'balance' => $broker_balance_new,
                'cost_per_share' => $cost_per_share,
                'profit_loss_per_share' => $profit_loss_per_share,
                'profit_loss_amount' => $profit_loss_amount,
                'profit_loss' => $profit_loss,
                'userid' => $userbean->userid
            );
            $this->Security_Model->setSummary_bought_sold_funds($data_summ);

            //update broker balance
            $txntime = date("Y-m-d h:i");
            $broker_bal_update = array('balance' => $broker_balance_new, 'lastupdated' => $txntime);
            //brokercomid , userid
            $this->Fund_Model->updateBrokerFund($broker_detail['brokercomid'], $userbean->userid, $broker_bal_update);
            $data['msg'] = '<p class="bg-success">Transaction completed Successfully</p>';
        } else {
            $data['msg'] = '<p class="bg-danger">No Broker company balance amount Found</p>';
        }


        $this->load->view('securites_view/message_page', $data);
    }

    public function listSummaryView($userid) {
        $this->load->model('securities/Security_Model');
        $data['userSummaryList'] = $this->Security_Model->listUserSummaryView($userid);
        $this->load->view('securites_view/summury_view', $data);
    }

}
