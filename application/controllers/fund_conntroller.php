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
        $this->load->model('Company_m');

        $userbean = $this->session->userdata('userbean');
        //broker company list for user
        $data['companyList'] = $this->Company_m->getAll();

        //funds list for user_company
        $data['compFundList'] = $this->Fund_Model->getUserCompanyFundList($userbean->userid);
        //load the UI
        $this->load->view('fund_view/deposit', $data);
    }

}
