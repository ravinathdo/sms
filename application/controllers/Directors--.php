<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {

	public function index(){

			$this->load->model('Directors_m');
			$data['com'] = 	$this->Directors_m->getAll();
			$this->load->view('company/add',$data);
	}
	public function add(){
		$this->edit();
	}

	public function edit($id = NULL){
		$this->load->model('add');
		$data['stu'] = 	$this->add->getAll();

		//controller code - company.php
			//get data from sector table
			//$data['com_sectors'] = $this->Company_m->getSector();
		//end


		if ($id) {
			$data['directors'] = $this->add->get($id);
		}
		else{
			$data['directors'] = $this->add->get_new(); //create empty fields
		}

		$rules = $this->add->rules;
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() == TRUE){
			//	$fff= this->case->upper($this->input->post('symbol'));
				$formdata = $this->add->array_from_post(array('comid','title','initial','fname','mname', 'lname'));
				$this->add->save($formdata, $id);
				redirect('add/');
		}

		$this->load->view('company_view/add',$data);
	}
//-----------view company info
	public function dirinfo($dirid)
	{
			$this->load->model('Directors_m');
		$data['dirctors'] = $this->Directors_m->getDirectorsByID($dirid);

		$this->load->view('company_view/info', $data);
	}
//-------------------------

}
