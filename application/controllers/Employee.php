<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

	public function index(){

			$this->load->model('Employee_m');
			$data['emp'] = 	$this->Employee_m->getAll();
			$this->load->view('employee_view/index',$data);
	}
	public function add(){
		$this->edit();
	}

	public function edit($id = NULL){
		$this->load->model('Employee_m');
		$data['emp'] = 	$this->Employee_m->getAll();

		if ($id) {
			$data['employee'] = $this->Employee_m->get($id);
		}
		else{
			$data['employee'] = $this->Employee_m->get_new(); //create empty fields (call stdClass at employee_m)
		}

		$rules = $this->Employee_m->rules;
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() == TRUE){

				$formdata = $this->Employee_m->array_from_post(array('name','nic','gender')); //form inputs
				$this->Employee_m->save($formdata, $id);
				redirect('Employee/');
		}

		$this->load->view('employee_view/add',$data);
	}

	public function all_list(){
			$this->load->model('Employee_m');

	$data['emp'] = 	$this->Employee_m->getAllEmployee();

		$this->load->view('employee_v/list', $data);
	}
}
