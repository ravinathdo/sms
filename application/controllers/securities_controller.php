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

        $this->load->view('securites_view/index', $data);
    }

    public function add() {

        $this->load->model('securities/Security_Model');
        $this->load->model('CDSAccounts_m');
        $this->load->model('Company_m');

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
            
            $this->Security_Model->setUserSecurities($data_form);
            echo '<br>Data inserted';
        }
        //$this->load->view('securites_view/index', $data);

        redirect('/securities_controller/listUserSecurities/' . $userbean->userid);
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
        //get company list for user 
        $data['userSecComList'] = $this->Security_Model->getUserSecCompanyList($param);
//        echo var_export($data['userSecComList']);
        $data['userSecList'] = $this->Security_Model->getUserSecuritiesList($param);
        $this->load->view('securites_view/user_securities', $data);
    }

    public function listUserCompanySecurity() {
        $this->load->model('securities/Security_Model');
        $userbean = $this->session->userdata('userbean');
        //get post value


        $data_form = $this->Security_Model->array_from_post(array('comid'));
//        echo '<br> form data:'. var_export($data_form);
//        $data['security'] = $this->Security_Model->get_new(); //create empty fields
//        $rules = $this->Security_Model->rules;
//        $this->form_validation->set_rules($rules);
//        if ($this->form_validation->run() == TRUE) {
//           //data oky
//        }else{
//            
//        }
        //get company list for user 
        $data['userSecComList'] = $this->Security_Model->getUserSecCompanyList($userbean->userid);
        $data['userSecList'] = $this->Security_Model->getUserCompanySecuritiesList($userbean->userid, $data_form['comid']);
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
        }
//        var_export($Security);

        $data['security'] = $Security;
        $this->load->view('securites_view/sell_user_securities', $data);
    }

    public function sellUserSecurities() {
        $this->load->model('securities/Security_Model');
        $userbean = $this->session->userdata('userbean');
        //get data from post 
        $data_form = $this->Security_Model->array_from_post(array('effectdate', 'secid', 'qty', 'amount', 'total',
            'UPTO_1', 'UPTO_2', 'UPTO_3', 'UPTO_4', 'UPTO_5',
            'OVER_1', 'OVER_2', 'OVER_3', 'OVER_4', 'OVER_5', 'netamount'));


        //collect and prepare update data
        $secid = $this->input->post('secid');
        $maxqty = $this->input->post('maxqty');
        echo '---------max QTY:'.$maxqty;
        $qtybal = $maxqty - $data_form['qty'];
        //update array for user_sec
        $data_form_2  =  array("qty"=>$qtybal);
        $data_form_2['lastupdated'] = date("Y-m-d");
        if ($qtybal == 0) {
            $data_form_2['status'] = 'SOLD';
        }

        $data_form['userid'] = $userbean->userid;
//        echo var_export($data_form);
        $this->Security_Model->setUserCompSelling($data_form, $secid ,$data_form_2);
        //update original security 
        $data['msg'] = '<p class="bg-success">Transaction completed Successfully</p>';
        $this->load->view('securites_view/message_page',$data);
    }

}
