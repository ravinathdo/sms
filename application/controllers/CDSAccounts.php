<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CDSAccounts extends CI_Controller {

    public function index() {
        $this->load->model('CDSAccounts_m');
        $data['cdsac'] = $this->CDSAccounts_m->getAll();
        $this->load->view('CDSAccounts_view/index', $data);
    }

//Add details
    public function add() {
        $this->edit();
    }

//Edit
    public function edit($id = NULL) {
        $this->load->model('CDSAccounts_m');
        $userbean = $this->session->userdata('userbean');

        $data['cdsac'] = $this->CDSAccounts_m->getAll();

        //get data from Stock Broker not already egsist
        if ($id) {
            $data['brokercom'] = $this->CDSAccounts_m->getBrokercom();
        } else {
            $data['brokercom'] = $this->CDSAccounts_m->getBrokercomNotInMy($userbean->userid);
        }
        //end


        if ($id) {
          //  echo 'y';
            $data['CDSAccounts'] = $this->CDSAccounts_m->getcdsdetils($id);
        } else {
            //stdClass Instance
          //  echo 'x';
            $data['CDSAccounts'] = $this->CDSAccounts_m->get_new(); //create empty fields
        }

        $rules = $this->CDSAccounts_m->rules;
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == TRUE) {

            $formadv = $this->CDSAccounts_m->array_from_post(array('adviserfname', 'adviserlname', 'tel_mob', 'tel_direct', 'email'));
            $adviserid = $this->CDSAccounts_m->advisersave($formadv, $id);

            //save to the stockbroker table
            $formdata = $this->CDSAccounts_m->array_from_post(array('userid', 'brokercomid', 'cdsaccno', 'opendate'));
            $formdata['stockbrokerid'] = $adviserid;

            $this->CDSAccounts_m->save($formdata, $id);
            //redirect('CDSAccounts/');
            //Save to stockbroker table

            redirect('CDSAccounts/myCDSAccount');
        }

        $this->load->view('CDSAccounts_view/add', $data);
    }

    /*
      public function all_list(){
      $this->load->model('CDSAccounts_m');

      $data['cdsac'] = 	$this->CDSAccounts_m->getAllBrokers();

      $this->load->view('CDSAccounts_v/list', $data);
      }
     */

    public function getUserCDSAccounts() {
        $this->load->model('CDSAccounts_m');

        //get session user
//        $this->session->set_userdata($newdata);
        $userbean = $this->session->userdata('userbean');
        $data['cdsAccList'] = $this->CDSAccounts_m->getUserCDSAccounts($userbean->userid);
//        $data['cdsac'] = $this->CDSAccounts_m->getAll();

        $this->load->view('CDSAccounts_view/cdsacc_list', $data);
    }

    public function myBrokerCompanies() {
        $this->load->model('CDSAccounts_m');
        //get session user
        //$this->session->set_userdata($newdata);
        $userbean = $this->session->userdata('userbean');
        $data['myBrokerList'] = $this->CDSAccounts_m->getMyBrokerCompanies($userbean->userid);
        //$data['cdsac'] = $this->CDSAccounts_m->getAll();
        $this->load->view('CDSAccounts_view/cdsacc_list', $data);
    }

    /**
     * USERS CDS Accounts
     */
    public function myCDSAccount() {
        $this->load->model('CDSAccounts_m');
        //get session user
        $userbean = $this->session->userdata('userbean');
        $data['cdsAccList'] = $this->CDSAccounts_m->getUserCDSAccounts($userbean->userid);
        $this->load->view('CDSAccounts_view/userCDS', $data);
    }

    /**
     * USER
     * @param type $cdsaccid
     */
    public function showBrokerAdditional($id) {
        $this->load->model('CDSAccounts_m');
        $userbean = $this->session->userdata('userbean');
        $data['detailsList'] = $this->CDSAccounts_m->getBrokerAdditional($id);
        $data['cdsaccid'] = $id;
        $this->load->view('CDSAccounts_view/additional', $data);
    }

    /**
     * USER
     */
    public function setBrokerAdditional() {
//        echo 'setBrokerAdditional';
        $this->load->model('CDSAccounts_m');
        $userbean = $this->session->userdata('userbean');

        $this->input->post('detaillabel');
        $this->input->post('value');

       $arrInput =  $this->CDSAccounts_m->array_from_post(array('lable', 'value','cdsaccid'));
       $arrInput['userid'] = $userbean->userid;
       $cdsaccid = $arrInput['cdsaccid'];  //cdsaccount.cdsaccid
//       $lable=$this->input->post('lable');
//        $data = array(
//            'userid' => $lable,
//            'cdsaccid' => $lable,
//            'lable' => $lable,
//            'value' => $lable
//        );
//
//

//       var_export($arrInput);
       $this->CDSAccounts_m->setBrokerAdditional($arrInput);

        $data['detailsList'] = $this->CDSAccounts_m->getBrokerAdditional($cdsaccid);
        $data['cdsaccid'] = $cdsaccid;
        $this->load->view('CDSAccounts_view/additional', $data);
//        $this->load->view('CDSAccounts_view/additional');
    }

    /**
     * USER
     * @param type $cdsaccid
     */
    public function removeBrokerAdditional($id,$cdsaccid) {
        //echo 'setBrokerAdditional';
        $this->load->model('CDSAccounts_m');
        $userbean = $this->session->userdata('userbean');
        $this->CDSAccounts_m->removeBrokerAdditional($id);
        $data['cdsaccid'] = $cdsaccid;
        $data['detailsList'] = $this->CDSAccounts_m->getBrokerAdditional($cdsaccid);
        $this->load->view('CDSAccounts_view/additional', $data);
    }

    /**
      View Bank Details
     */
    public function bankAccount($id) {
        $this->load->model('CDSAccounts_m');
        $userbean = $this->session->userdata('userbean');
        $data['brBkDetail'] = $this->CDSAccounts_m->getBrokerBkAccDetail($id);
        $data['cdsaccid'] = $id;
        $this->load->view('CDSAccounts_view/bankAccount', $data);
    }

    /**
      Add Bank Details
     */
    public function addBankAccount($id) {
        $this->load->model('CDSAccounts_m');
        $userbean = $this->session->userdata('userbean');
        $data['detailsList'] = $this->CDSAccounts_m->getBrokerAdditional($id);
        $data['cdsaccid'] = $id;
        $this->load->view('CDSAccounts_view/addBankDetail', $data);
    }

}
