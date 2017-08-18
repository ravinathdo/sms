<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brokers extends CI_Controller {

	public function index(){

			$this->load->model('Brokers_m');
			$data['bro'] = 	$this->Brokers_m->getAll();
			$this->load->view('brokers_view/index',$data);
	}
	public function add(){
		$this->edit();
	}

	public function edit($id = NULL){
		$this->load->model('Brokers_m');
		$data['bro'] = 	$this->Brokers_m->getAll();

		//get data from brokercomtype table to dropdwon list
		$data['brocomtype'] = $this->Brokers_m->getBrokercomtype();
		//end


		if ($id) {
			$data['brokers'] = $this->Brokers_m->get($id);
		}
		else{
			$data['brokers'] = $this->Brokers_m->get_new(); //create empty fields
		}

		$rules = $this->Brokers_m->rules;
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() == TRUE){

				$formdata = $this->Brokers_m->array_from_post(array('name','symbol','brocomtypeid','address1','address2', 'address3', 'address4', 'address5'));
				$this->Brokers_m->save($formdata, $id);
				redirect('brokers/');
		}

		$this->load->view('brokers_view/add',$data);
	}

	public function all_list(){
			$this->load->model('Brokers_m');

	$data['bro'] = 	$this->Brokers_m->getAllBrokers();

		$this->load->view('brokers_v/list', $data);
	}

//get stock brokers - members only
	public function members(){
			$this->load->model('Brokers_m');
			$data['bro'] = 	$this->Brokers_m->getMembers();
			$this->load->view('brokers_view/members',$data);
	}
	//end of get stock brokers - members only


	//get stock brokers - members only
		public function getlist($type){

				$this->load->model('Brokers_m');
				$typeid = $this->Brokers_m->gettypeid($type);

				$data['bro'] = 	$this->Brokers_m->getMembers($typeid);
				$this->load->view('brokers_view/index',$data);
		}
		//end of get stock brokers - members only

//list of mybrokercom view
		public function mybrokercom(){
				$this->load->model('Brokers_m');
				$data['bro'] = $this->Brokers_m->getAllBrokers();
				$this->load->view('brokers_view/mybrokerview', $data);
		}

}
