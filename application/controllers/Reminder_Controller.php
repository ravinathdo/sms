<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Reminder_Controller
 *
 * @author ravi
 */
class Reminder_Controller extends CI_Controller {

    //put your code here
    public function reminder() {
        $this->load->model('Reminder_Model');
        $userbean = $this->session->userdata('userbean');
        $data['remindList'] = $this->Reminder_Model->getReminderList("ALL",$userbean->userid);
        $this->load->view('reminder_view/reminder', $data);
    }

    public function setReminder() {
        $this->load->model('Reminder_Model');
        $formData = $this->Reminder_Model->array_from_post(array('reminder', 'rdate', 'rtime'));
         $userbean = $this->session->userdata('userbean');
        $formData['userid'] = $userbean->userid; 
        $this->Reminder_Model->setReminder($formData);
        $data['remindList'] = $this->Reminder_Model->getReminderList("ALL",$userbean->userid);
        $date['msg'] = '<p class="bg-success"> Reminder created successfully </p>';
        $this->load->view('reminder_view/reminder', $data);
    }

}
