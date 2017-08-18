<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cost extends CI_Controller {

	public function index(){

			$this->load->model('Cost_m');
			$data['cost'] = 	$this->Cost_m->getAll();
			$this->load->view('cal_view/index',$data);
	}
	public function add(){
		$this->edit();
	}

	public function edit($id = NULL){
		$this->load->model('Cost_m');
		$data['cost'] = 	$this->Cost_m->getAll();

		if ($id) {
			$data['allcost'] = $this->Cost_m->get($id);
		}
		else{
			$data['allcost'] = $this->Cost_m->get_new(); //create empty fields
		}

		$rules = $this->Cost_m->rules;
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() == TRUE){

				$formdata = $this->Cost_m->array_from_post(array('transcostupto50'));
				$this->Cost_m->save($formdata, $id);
				redirect('Cost/');
		}

		$this->load->view('cal_view/add',$data);
	}


	public function calculator($id = NULL){
		$this->load->model('Calculator_m');
		$data['calc'] = 	$this->Calculator_m->getAll();

		if ($id) {
			$data['calculate'] = $this->Calculator_m->get($id);
		}
		else{
			$data['calculate'] = $this->Calculator_m->get_new(); //create empty fields
		}

		$rules = $this->Calculator_m->rules;
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() == TRUE){

				$formdata = $this->Calculator_m->array_from_post(array('buy','sell','qty'));
				$this->Calculator_m->save($formdata, $id);
				redirect('calculator/');
		}

		$this->load->view('cal_view/calculator',$data);
	}



}
