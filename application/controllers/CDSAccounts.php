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
        $data['cdsac'] = $this->CDSAccounts_m->getAll();

        //get data from Stock Broker
        $data['brokercom'] = $this->CDSAccounts_m->getBrokercom();
        //end


        if ($id) {
            $data['CDSAccounts'] = $this->CDSAccounts_m->getcdsdetils($id);
        } else {
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

            redirect('CDSAccounts/');
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

}
