<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller {

	public function index(){

			$this->load->model('Students_m');
			$data['stu'] = 	$this->Students_m->getAll();
			$this->load->view('students_view/index',$data);
	}
	public function add(){
		$this->edit();
	}

	public function edit($id = NULL){
		$this->load->model('Students_m');
		$data['stu'] = 	$this->Students_m->getAll();

		if ($id) {
			$data['student'] = $this->Students_m->get($id);
		}
		else{
			$data['student'] = $this->Students_m->get_new(); //create empty fields
		}

		$rules = $this->Students_m->rules;
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() == TRUE){

				$formdata = $this->Students_m->array_from_post(array('fname','lname','address','mobile'));
				$this->Students_m->save($formdata, $id);
				redirect('students/');
		}

		$this->load->view('students_view/add',$data);
	}

	public function all_list(){
			$this->load->model('Students_m');

	$data['stu'] = 	$this->Students_m->getAllStudents();

		$this->load->view('students_v/list', $data);
	}
}
