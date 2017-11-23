<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of fund_conntroller
 *
 * @author ravi
 */
class Fund_Conntroller extends CI_Controller {

    //put your code here
    //list available funds for company 
    public function depositFunds($userid) {
        $this->load->model('fund/Fund_Model');
        $this->load->model('CDSAccounts_m');


        $userbean = $this->session->userdata('userbean');
        //get CDS Accounts 
        $data['CDSAccList'] = $this->CDSAccounts_m->getUserCDSAccounts($userbean->userid);

        //funds list for user_company
        $data['compFundList'] = $this->Fund_Model->getUserCompanyFundList($userbean->userid);
        
        //vailable funds
        $this->load->model('Brokers_m'); // get chart data for user
        $data['bokerBalanceList'] = $this->Brokers_m->getBrokerFunndsForUser($userbean->userid);

        //load the UI
        $this->load->view('fund_view/deposit', $data);
    }
    //list available funds for company 
    public function depositFundsReport($userid) {
        $this->load->model('fund/Fund_Model');
        $this->load->model('CDSAccounts_m');


        $userbean = $this->session->userdata('userbean');
        //get CDS Accounts 
        $data['CDSAccList'] = $this->CDSAccounts_m->getUserCDSAccounts($userbean->userid);

        //funds list for user_company
        $data['compFundList'] = $this->Fund_Model->getUserCompanyFundList($userbean->userid);
        
        //vailable funds
        $this->load->model('Brokers_m'); // get chart data for user
        $data['bokerBalanceList'] = $this->Brokers_m->getBrokerFunndsForUser($userbean->userid);

        //load the UI
        $this->load->view('fund_view/deposit_report', $data);
    }

    public function setBrokerTransaction() {
        $this->load->model('fund/Fund_Model');
        $this->load->model('CDSAccounts_m');
        $userbean = $this->session->userdata('userbean');
        //get CDS Accounts 
        $data['CDSAccList'] = $this->CDSAccounts_m->getUserCDSAccounts($userbean->userid);


        //collect data from post
        $data_from = $this->Fund_Model->array_from_post(array('brokercomid', 'txn', 'amount'));
        //echo var_export($data_from);
        $txntime = date("Y-m-d h:i");
        //try insert into broker_fund
        $data_brokerfund = array('brokercomid' => $data_from['brokercomid'],
            'balance' => $data_from['amount'], 'userid' => $userbean->userid,
            'lastupdated' => $txntime);

        // echo '<tt><pre>'.var_export($data_brokerfund, TRUE).'</pre></tt>';
        $flag = $this->Fund_Model->setBrokerFund($data_brokerfund);

        if ($flag) {
            //get broker current balance
            $result = $this->Fund_Model->getUserBrokerCompanyBalance($data_from['brokercomid'], $userbean->userid);
            //echo var_export($result);
            $balance = 0;
            foreach ($result as $rows) {
                $balance = $rows->balance;
            }

            //echo 'Balance:' . $balance;

            $data_fund_history = array('brokercomid' => $data_from['brokercomid'],
                'userid' => $userbean->userid,
                'txntime' => $txntime
            );

            switch ($data_from['txn']) {
                case 'D':
                    $balance = $balance + $data_from['amount'];
                    $data_fund_history ['deposit'] = $data_from['amount'];
                    $data_fund_history ['balance'] = $balance;
                    $data_fund_history ['txntype'] = "DEPOSIT";
                    break;
                case 'W':
                    $balance = $balance - $data_from['amount'];
                    $data_fund_history ['withdraw'] = $data_from['amount'];
                    $data_fund_history ['balance'] = $balance;
                    $data_fund_history ['txntype'] = "WITHDRAW";
                    break;
            }
            //update balance
            $data['msg'] ='<p class="bg-success">Broker funds updated.</p>';
            $updatedata = array('balance' => $balance);
            $this->Fund_Model->updateBrokerFund($data_from['brokercomid'], $userbean->userid, $updatedata);
        } else {
            //new broker init done

            $data_fund_history = array('brokercomid' => $data_from['brokercomid'],
                'userid' => $userbean->userid,
                'txntime' => $txntime
            );

            switch ($data_from['txn']) {
                case 'D':
                    $data_fund_history ['deposit'] = $data_from['amount'];
                    $data_fund_history ['balance'] = $data_from['amount'];
                    $data_fund_history ['txntype'] = "DEPOSIT";
                    break;
                case 'W':
                    $data_fund_history ['withdraw'] = $data_from['amount'];
                    $data_fund_history ['balance'] = $data_from['amount'];
                    $data_fund_history ['txntype'] = "WITHDRAW";
                    break;
            }
        }

        //insert into broker_fund_history
        $this->Fund_Model->setBrokerFundHistory($data_fund_history);


        //vailable funds
        $this->load->model('Brokers_m'); // get chart data for user
        $data['bokerBalanceList'] = $this->Brokers_m->getBrokerFunndsForUser($userbean->userid);



        //funds list for user_company
        $data['compFundList'] = $this->Fund_Model->getUserCompanyFundList($userbean->userid);
        $this->load->view('fund_view/deposit', $data);
    }

}
