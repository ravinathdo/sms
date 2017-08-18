<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyBrokerCom extends CI_Controller {

	public function mybrokercompany(){
			$this->load->model('MyBrokerCom_m');
			$data['brocom'] = $this->MyBrokerCom_m->getAll();
			$this->load->view('brokers_view/mybrokerview',$data);
	}

	public function add(){
		$this->edit();
	}

	public function edit($id = NULL){
		$this->load->model('MyBrokerCom_m');
		$data['brocom'] = $this->MyBrokerCom_m->getAll();

		if ($id) {
			$data['brokers'] = $this->MyBrokerCom_m->get($id);
		}
		else{
			$data['brokers'] = $this->MyBrokerCom_m->get_new(); //create empty fields
		}

		$rules = $this->MyBrokerCom_m->rules;
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() == TRUE){

				$formdata = $this->MyBrokerCom_m->array_from_post(array('name','symbol','address1','address2', 'address3', 'address4', 'address5'));
				$this->MyBrokerCom_m->save($formdata, $id);
				redirect('brokers/');
		}

		$this->load->view('brokers_view/mybrokerview',$data);
	}


	public function mybrokercom(){
			$this->load->model('MyBrokerCom_m');

	$data['brocom'] = $this->MyBrokerCom_m->getAllBrokers();

		$this->load->view('brokers_view/mybrokerview', $data);
	}
	
}
