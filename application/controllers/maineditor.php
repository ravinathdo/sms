<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class maineditor extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('maineditor_m');
    }

    public function index() {
        //	$this->load->model('maineditor_m');
        $data['medit'] = $this->maineditor_m->getAll();
        $data['getdir'] = $this->maineditor_m->getdirdetils();
        $data['dirdesig'] = $this->maineditor_m->getdirdesignations();
        $data['comsec'] = $this->maineditor_m->getComSectors();
        $data['comsecre'] = $this->maineditor_m->getComSecretary();
        $data['brotype'] = $this->maineditor_m->getBorkerComType(); //Get Boker Company Type
        $data['banks'] = $this->maineditor_m->getBanks(); //Get Banks

        $this->load->view('maineditor_view/index', $data);
    }

//Add details
    public function add() {
        $this->edit();
    }

//Edit
    public function edit($id = NULL) {
        $this->load->model('maineditor_m');
        $data['medit'] = $this->maineditor_m->getAll();

        if ($id) {
            $data['prefix'] = $this->maineditor_m->get($id);
        } else {
            $data['prefix'] = $this->maineditor_m->get_new(); //create empty fields
        }

        $rules = $this->maineditor_m->rules;
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == TRUE) {
            $formdata = $this->maineditor_m->array_from_post(array('prefix'));
            $this->maineditor_m->save($formdata, $id);
            redirect('maineditor/');
        }

        $this->load->view('maineditor_view/addtitle', $data);
    }

    public function delete($id) {
//	$this->load->model('maineditor_m');
        $this->maineditor_m->delete($id);
//	$this->session->flashdata();
        redirect('maineditor/');
    }

//Add Directors details
    public function adddir() {
        $this->editdir();
    }

//Edit Directors Detials
    public function editdir($id = NULL) {
        $this->load->model('DirectorsAdd_m');
        $data['medit'] = $this->DirectorsAdd_m->getAll();

        //get data from Title (Prefix) table
        $data['title'] = $this->DirectorsAdd_m->getTitle();
        //end

        if ($id) {
            $data['prefix'] = $this->DirectorsAdd_m->get($id);
        } else {
            $data['prefix'] = $this->DirectorsAdd_m->get_new(); //create empty fields
        }

        $rules = $this->DirectorsAdd_m->rules;
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == TRUE) {
            $formdata = $this->DirectorsAdd_m->array_from_post(array('title', 'initial', 'fname', 'mname', 'lname'));
            $this->DirectorsAdd_m->save($formdata, $id);
            redirect('maineditor/');
        }

        $this->load->view('maineditor_view/adddirs', $data);
    }

//End edit directors
//Add Directors details
    public function addDesig() {
        $this->editDesignation();
    }

    //Edit Directors Designation
    public function editDesignation($id = NULL) {
        $this->load->model('DirectorsDesig_m');
        $data['dirdesig'] = $this->DirectorsDesig_m->getAll();

        if ($id) {
            $data['desigedit'] = $this->DirectorsDesig_m->get($id);
        } else {
            $data['desigedit'] = $this->DirectorsDesig_m->get_new(); //create empty fields
        }

        $rules = $this->DirectorsDesig_m->rules;
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == TRUE) {
            $formdata = $this->DirectorsDesig_m->array_from_post(array('dirdesignation'));
            $this->DirectorsDesig_m->save($formdata, $id);
            redirect('maineditor/');
        }

        $this->load->view('maineditor_view/addDesig', $data);
    }

//end of Director's Designation
    //Add Company Sector
    public function addSectors() {
        $this->editSectors();
    }

    //Edit Company Sector
    public function editSectors($id = NULL) {
        $this->load->model('ComSector_m');
        $data['comsec'] = $this->ComSector_m->getAll();

        if ($id) {
            $data['sectoredit'] = $this->ComSector_m->get($id);
        } else {
            $data['sectoredit'] = $this->ComSector_m->get_new(); //create empty fields
        }

        $rules = $this->ComSector_m->rules;
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == TRUE) {
            $formdata = $this->ComSector_m->array_from_post(array('sec_name'));
            $this->ComSector_m->save($formdata, $id);
            redirect('maineditor/');
        }
        $this->load->view('maineditor_view/addSector', $data);
    }

//end of Edit Company Sector
    //Add Company Secretary
    public function addSecretary() {
        $this->editSecretary();
    }

    //Edit Company Secretary
    public function editSecretary($id = NULL) {
        $this->load->model('ComSecretary_m');
        $data['comsecre'] = $this->ComSecretary_m->getAll();

        if ($id) {
            $data['secredit'] = $this->ComSecretary_m->get($id);
        } else {
            $data['secredit'] = $this->ComSecretary_m->get_new(); //create empty fields
        }

        $rules = $this->ComSecretary_m->rules;
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == TRUE) {
            $formdata = $this->ComSecretary_m->array_from_post(array('secretaryname', 'address', 'tel1', 'tel2', 'fax', 'email', 'contactperson'));
            $this->ComSecretary_m->save($formdata, $id);
            redirect('maineditor/');
        }

        $this->load->view('maineditor_view/addSecretary', $data);
    }

//end of Edit Company Secretary
    //Add Broker Company Type
    public function addBrokerComType() {
        $this->editBrokerComType();
    }

    //Edit Broker Company Type
    public function editBrokerComType($id = NULL) {
        $this->load->model('BrokerComType_m');
        $data['brcomtype'] = $this->BrokerComType_m->getAll();

        if ($id) {
            $data['BrokerType'] = $this->BrokerComType_m->get($id);
        } else {
            $data['BrokerType'] = $this->BrokerComType_m->get_new(); //create empty fields
        }

        $rules = $this->BrokerComType_m->rules;
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == TRUE) {
            $formdata = $this->BrokerComType_m->array_from_post(array('type'));
            $this->BrokerComType_m->save($formdata, $id);
            redirect('maineditor/');
        }

        $this->load->view('maineditor_view/addBroComType', $data);
    }

//end of Broker Company Type
    //Add Banks
    public function addBanks() {
        $this->editBanks();
    }

    //Edit Banks
    public function editBanks($id = NULL) {
        $this->load->model('BankAdd_m');
        $data['BkType'] = $this->BankAdd_m->getAll();

        if ($id) {
            $data['BanksType'] = $this->BankAdd_m->get($id);
        } else {
            $data['BanksType'] = $this->BankAdd_m->get_new(); //create empty fields
        }

        $rules = $this->BankAdd_m->rules;
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == TRUE) {
            $formdata = $this->BankAdd_m->array_from_post(array('bankname', 'bankcode'));
            $this->BankAdd_m->save($formdata, $id);
            redirect('maineditor/');
        }

        $this->load->view('maineditor_view/Banks', $data);
    }

//end of Banks
    //Branches for a particuler Bank View
    public function BkBranch($id) {
        $this->load->model('maineditor_m');

        $data['BkBr'] = $this->maineditor_m->getBankBranch($id);
        $data['bkname'] = $this->maineditor_m->getBanks($id); //get Bank names to display

        $this->load->view('maineditor_view/BankBranch', $data);
    }

    //All Bank Branches View
    public function BankBranches() {
        $this->load->model('maineditor_m');

        $data['AllBkBr'] = $this->maineditor_m->getAllBankBranches();

        $this->load->view('maineditor_view/BankBranches_All', $data);
    }

//End of All Bank Branches View
    //Add Bank Branch
    public function addBankBranch() {
        $this->editBankBranch();
    }

    //Edit Bank branches
    public function editBankBranch($id = NULL) {
        $this->load->model('BankBrAdd_m');
        $data['BkBrType'] = $this->BankBrAdd_m->getAll();

        if ($id) {
            $data['BankBrType'] = $this->BankBrAdd_m->get($id);
        } else {
            $data['BankBrType'] = $this->BankBrAdd_m->get_new(); //create empty fields
        }

        $rules = $this->BankBrAdd_m->rules;
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == TRUE) {
            $formdata = $this->BankBrAdd_m->array_from_post(array('branchname'));
            $this->BankBrAdd_m->save($formdata, $id);
            redirect('maineditor/');
        }

        $this->load->view('maineditor_view/AddBankBr', $data);
    }

//end of Bank branches
    //All Bank Grade View
    public function BankGrade() {
        $this->load->model('maineditor_m');

        $data['BkGrade'] = $this->maineditor_m->getAllGrade();

        $this->load->view('maineditor_view/BankBrGrade', $data);
    }

//End of All Bank Branche Grade
    //Add Bank Grade
    public function addBankBrGrade() {
        $this->editBankBrGrade();
    }

    //Edit Bank Grades
    public function editBankBrGrade($id = NULL) {
        $this->load->model('BankBrGradeAdd_m');
        $data['BkGrade'] = $this->BankBrGradeAdd_m->getAll();

        if ($id) {
            $data['BankGrType'] = $this->BankBrGradeAdd_m->get($id);
        } else {
            $data['BankGrType'] = $this->BankBrGradeAdd_m->get_new(); //create empty fields
        }

        $rules = $this->BankBrGradeAdd_m->rules;
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == TRUE) {
            $formdata = $this->BankBrGradeAdd_m->array_from_post(array('gradename'));
            $this->BankBrGradeAdd_m->save($formdata, $id);
            redirect('maineditor/');
        }

        $this->load->view('maineditor_view/AddBankGrade', $data);
    }

//end of Bank Grades
    //Assign Bank Branch
    public function assignBankBranch() {
        $this->editAssignBankBranch();
    }

    //Edit Assign Bank Branch
    public function editAssignBankBranch($id = NULL) {
        $this->load->model('BankBranchAssign_m');
        $data['BranchAssign'] = $this->BankBranchAssign_m->getAll();

        if ($id) {
            $data['BkBranchAssign'] = $this->BankBranchAssign_m->get($id);
        } else {
            $data['BkBranchAssign'] = $this->BankBranchAssign_m->get_new(); //create empty fields
        }

        $rules = $this->BankBranchAssign_m->rules;
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == TRUE) {
            $formdata = $this->BankBranchAssign_m->array_from_post(array('branchname', 'branchcode', 'grade', 'address', 'tel1', 'tel2'));
            $this->BankBranchAssign_m->save($formdata, $id);
            redirect('maineditor/');
        }

        $this->load->view('maineditor_view/BankBranch_Assign', $data);
    }

//end of Assign Bank Branch



    function loadCalValueEditor() {
        //get cal table values
        $this->load->model('securities/Security_Model');
        $this->load->model('cal/Cal_Model');
        $resultData = $this->Security_Model->getCal();
        //echo '<tt><pre>' . var_export($resultData, TRUE) . '</pre></tt>';
        $data = array('calval' => $resultData);

        //get MARGIN_VALUE
        $param = $this->Cal_Model->getParamValue('MARGIN_VALUE');
        //echo '<tt><pre>'.var_export($param, TRUE).'</pre></tt>';
        foreach ($param as $rows) {
            $data['MARGIN_VALUE'] = $rows->value;
        }


        $this->load->view('maineditor_view/CalValueEdit', $data);
        // 
    }

    function updateCalValue() {
        //collect the input from page
        $this->load->model('securities/Security_Model');
        $this->load->model('cal/Cal_Model');
        $data1 = $this->Security_Model->array_from_post(array('UP_50_1', 'OV_50_1'));
        $this->Cal_Model->updateCalData(array('transcostupto50' => $data1['UP_50_1'], 'transcostover50' => $data1['OV_50_1']), 1);
        $data2 = $this->Security_Model->array_from_post(array('UP_50_2', 'OV_50_2'));
        $this->Cal_Model->updateCalData(array('transcostupto50' => $data2['UP_50_2'], 'transcostover50' => $data2['OV_50_2']), 2);
        $data3 = $this->Security_Model->array_from_post(array('UP_50_3', 'OV_50_3'));
        $this->Cal_Model->updateCalData(array('transcostupto50' => $data3['UP_50_3'], 'transcostover50' => $data3['OV_50_3']), 3);
        $data4 = $this->Security_Model->array_from_post(array('UP_50_4', 'OV_50_4'));
        $this->Cal_Model->updateCalData(array('transcostupto50' => $data4['UP_50_4'], 'transcostover50' => $data4['OV_50_4']), 4);
        $data5 = $this->Security_Model->array_from_post(array('UP_50_5', 'OV_50_5'));
        $this->Cal_Model->updateCalData(array('transcostupto50' => $data5['UP_50_5'], 'transcostover50' => $data5['OV_50_5']), 5);


        $resultData = $this->Security_Model->getCal();
        //echo '<tt><pre>' . var_export($resultData, TRUE) . '</pre></tt>';
        $data = array('calval' => $resultData);
        $data['msg'] = "Records Updated";
        $this->load->view('maineditor_view/CalValueEdit', $data);

//        $json = '{"string":"Hello World"}';
//        
//         $obj = new stdClass();
//         $obj->msg = '';
//         
//        return $this->output
//                        ->set_content_type('application/json')
//                        ->set_status_header(200)
//                        //->set_output(json_encode($resultData));
//                        ->set_output($json);
    }

    public function updateLimit() {
        $this->load->model('securities/Security_Model');
        $this->load->model('cal/Cal_Model');

        //get the form data and update
        $paramData = $this->Security_Model->array_from_post(array('MARGIN_VALUE'));
        $this->Cal_Model->updateParam($paramData['MARGIN_VALUE'],'MARGIN_VALUE');
        
        $resultData = $this->Security_Model->getCal();
        //echo '<tt><pre>' . var_export($resultData, TRUE) . '</pre></tt>';
        $data = array('calval' => $resultData);
        $data['msg_val'] = "Margine value Updated";
        
        //get MARGIN_VALUE
        $param = $this->Cal_Model->getParamValue('MARGIN_VALUE');
        //echo '<tt><pre>'.var_export($param, TRUE).'</pre></tt>';
        foreach ($param as $rows) {
            $data['MARGIN_VALUE'] = $rows->value;
        }
        
        $this->load->view('maineditor_view/CalValueEdit', $data);
    }

}
