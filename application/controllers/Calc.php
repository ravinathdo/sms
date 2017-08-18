<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calc extends CI_Controller {



	public function add(){
		$this->edit();
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


	function index() {
   $this->load->view('cal_veiw/calculator');
   $this->getValue();
  }


	public function getvalue()
	{
		//$this->input->post('name');
		if ($this->input->post('submit')==true) {
		$data['buy']=$this->input->post('buy');
		$data['sell']=$this->input->post('sell');

		$data['result'] = $data['sell'] - $data['buy'];

$this->load->view('cal_view/calcResult',$data);
		}

	}



	//	$this->load->view('calc_view/calcResult', $data);




}
