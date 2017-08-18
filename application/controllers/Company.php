<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {

	public function index(){
			$this->load->model('Company_m');
			$data['com'] = 	$this->Company_m->getAll();
		//	$data['dirinfo'] = 	$this->Directors_m->getDirectorsByID();

			$this->load->view('company_view/index',$data);
	}

	public function add(){
		$this->edit();
	}

	public function edit($id = NULL){
		$this->load->model('Company_m');
		$data['com'] = 	$this->Company_m->getAll();

		//controller code - company.php
			//get data from sector table
			$data['com_sectors'] = $this->Company_m->getSector();
			//end

			//get data from listedboard table
			$data['list_Board'] = $this->Company_m->getListedBoard();
			//end

			//get data from companysecretary table
			$data['com_Secretary'] = $this->Company_m->getCompanySecretary();
			//end

		if ($id) {
			$data['company'] = $this->Company_m->get($id);
		}
		else{
			$data['company'] = $this->Company_m->get_new(); //create empty fields
		}

		$rules = $this->Company_m->rules;
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() == TRUE){
			//	$fff= this->case->upper($this->input->post('symbol'));
				$formdata = $this->Company_m->array_from_post(array('symbol','com_name','address1','address2','address3','address4','tel','fax','email','website','sectorid','boardid','secid','chairman','ceo','deputychairman'));
				$this->Company_m->save($formdata, $id);
				redirect('company/');
		}

		$this->load->view('company_view/add',$data);
	}

//-----------view company info
	public function info($id)
	{
		$this->load->model('Company_m');
		$this->load->model('Directors_m');
		$this->load->model('eqsecurities_m');
		$data['company'] = $this->Company_m->getCompanySecByID($id);
		$data['board'] = $this->Company_m->getListedBoardByID($id); // get company listed board
		$data['sect'] = $this->Company_m->getComapnySecretaryByID($id); // get company listed board
		$data['dirinfo'] = 	$this->Directors_m->getDirectorsByID($id); //get directors detials according to company
		$data['ceoinfo'] = 	$this->Directors_m->getCEOByID($id); //get CEO details
		$data['dirinfo'] = 	$this->eqsecurities_m->getDirectorsByID($id); //get directors detials according to company
		$data['ceoinfo'] = 	$this->eqsecurities_m->getCEOByID($id); //get CEO details

		$this->load->view('company_view/info', $data);
	}
//-------------------------

//----------Add Directors
public function directors($companyid, $tab = 'list',  $boardofdirid = NULL){
	//var_dump($boardofdirid);
	$this->load->model('Directors_m');
	$this->db->join('prefix','prefix.preid=directors.title'); //get title from prefix table
	$data['directors'] = $this->Directors_m->get(); //to view dropdown menu
	$data['companyid']= $companyid;

	//get data from "directordesignation" table to dropdwon list
	$data['desigtype'] = $this->Directors_m->getDesignation();
	//end
//	var_dump($this->db->last_query());


	if($tab== 'list' ){
		//$data['companyid'] = $companyid;
		$data['directors_list'] = $this->Directors_m->getAllByComID($companyid);
		$view = 'directorslist';
			}elseif ($tab = 'add' ) { //}|| $tab = 'edit') {

		if ($boardofdirid) {
			$data['director'] = $this->Directors_m->getcomdir($boardofdirid);
		}
		else{
			$data['director'] = $this->Directors_m->get_newdir(); //create empty fields (call stdClass at employee_m)

			//var_dump($this->db->last_query());
		}
		//var_dump($data['director']);

		 $rules  = array(
			'dirid' => array(
				'field' => 'dirid',
				'label' => 'Director',
				'rules' => 'trim|required'
			),
			'appointeddate' => array(
				'field' => 'appointeddate',
				'label' => 'Appointed date',
				'rules' => 'trim|required'
			),
			'designation' => array(
				'field' => 'designation',
				'label' => 'Designation',
				'rules' => 'trim|required'
			),
		);
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() == TRUE){
				$formdata = $this->Directors_m->array_from_post(array('dirid','designation','appointeddate')); //form inputs
				$formdata['comid'] = $companyid;
				//$this->Directors_m->boardofdirsave($formdata, $boardofdirid);
				//var_dump($this->db->last_query());
				if ($this->Directors_m->boardofdirsave($formdata, $boardofdirid)==FALSE) {
					$this->session->set_flashdata('status', 'Already assign');
				}else {
					$this->session->set_flashdata('status', 'Directer assign');
				}
				redirect('company/directors/'.$companyid);
		}

		$view = 'directorsadd';
	}
	//-----------------

//get data from 'directors' table
// $data['dir_edit'] = $this->Directors_m->getDirectors($companyid);
//end


//---------
	$this->load->view('company_view/'.$view,$data);

}
//---------end of add directors

/*
	//-----------view diretors info
public function directorsinfor($dirid)
	{
		$this->load->model('Directors_m');
		$data['dirinfo'] = $this->Directors_m->getDirectorsByID($dirid);
		$this->load->view('company_view/info', $data);
	}
	//-------------------------
	*/

//Edit directors - 16/08/2016
/*public function editdirectors($dirid = NULL){
	$this->load->model('Directors_m');
	$data['directors_list'] = 	$this->Directors_m->getDirectorsByID($dirid);

	if ($dirid) {
		$data['directors'] = $this->Directors_m->get($dirid);

	}
	else{
		$data['directors'] = $this->Directors_m->get_new(); //create empty fields
	}

	$rules = $this->Directors_m->rules;
	$this->form_validation->set_rules($rules);

	if($this->form_validation->run() == TRUE){
		//	$fff= this->case->upper($this->input->post('symbol'));
			$formdata = $this->Directors_m->array_from_post(array('title','initial','fname','mname','lname'));
			$this->Directors_m->save($formdata, $dirid);
			redirect('company_view/directors/');
	}

	$this->load->view('company_view/directors',$data);
} */
//End of edit directors


//remove directors
public function delete($companyid,$id){ //1st parameter to redirect, 2nd to delete
		$this->load->model('Directors_m');

		$this->Directors_m->deletedir($id);
		redirect('company/directors/'.$companyid);
	}


	//----------Add Securities
	public function eqsecurities($companyid, $tab = 'list',  $boardofdirid = NULL){
		// var_dump($boardofdirid);
		$this->load->model('eqsecurities_m');
	//	$this->db->join('prefix','prefix.preid=directors.title'); //get title from prefix table
		$data['sectype'] = $this->eqsecurities_m->get(); //to view dropdown menu
		$data['companyid']= $companyid;
		var_dump($this->db->last_query());





		if($tab== 'list' ){
			//$data['companyid'] = $companyid;
			$data['eqsecurities_list'] = $this->eqsecurities_m->getAllByComID($companyid);
			$view = 'securitieslist';
				}elseif ($tab = 'add' ) { //}|| $tab = 'edit') {

			if ($boardofdirid) {
				$data['director'] = $this->eqsecurities_m->getcomdir($boardofdirid);
			}
			else{
				$data['director'] = $this->eqsecurities_m->get_newdir(); //create empty fields (call stdClass at employee_m)

				//var_dump($this->db->last_query());
			}
			//var_dump($data['director']);

			 $rules  = array(
				'subtypename' => array(
					'field' => 'subtypename',
					'label' => 'Sub Type',
					'rules' => 'trim|required'
				),
				'qty' => array(
					'field' => 'qty',
					'label' => 'Quantity',
					'rules' => 'trim|required'
				),

			);
			$this->form_validation->set_rules($rules);

			if($this->form_validation->run() == TRUE){
					$formdata = $this->eqsecurities_m->array_from_post(array('subtypename','qty')); //form inputs
					$formdata['comid'] = $companyid;
					//$this->Directors_m->boardofdirsave($formdata, $boardofdirid);
					//var_dump($this->db->last_query());
					if ($this->eqsecurities_m->boardofdirsave($formdata, $boardofdirid)==FALSE) {
						$this->session->set_flashdata('status', 'Already assign');
					}else {
						$this->session->set_flashdata('status', 'Directer assign');
					}
					redirect('company/eqsecurities/'.$companyid);
			}

			$view = 'securitiesadd';
		}
		//-----------------

	//get data from 'directors' table
	// $data['dir_edit'] = $this->Directors_m->getDirectors($companyid);
	//end


	//---------
		$this->load->view('company_view/'.$view,$data);

	}
	//---------end of add Securities


}
