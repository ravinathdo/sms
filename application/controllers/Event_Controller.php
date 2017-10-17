<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Event_Controller
 *
 * @author ravi
 */
class Event_Controller extends CI_Controller {

    //put your code here

    public function loadEvent() {
        $this->load->model('Event_Model');
        $data['eventList'] = $this->Event_Model->getEventList();
        $this->load->view('event_view/event_manage', $data);
    }

    public function add() {
        $this->load->model('Event_Model');
        //collect input 
        $data_form = $this->Event_Model->array_from_post(array('eventdate', 'description'));
        $chk = $this->input->post('marketclose');
        $data_form['marketclose'] = "NO";
        if($chk){
        $data_form['marketclose'] = "YES";
//            echo 'checked';  
        }
        echo '<tt><pre>' . var_export($data_form, TRUE) . '</pre></tt>';
        $this->Event_Model->setEvent($data_form);
        $data['eventList'] = $this->Event_Model->getEventList();
        $data['msg'] = "New event inserted";
        $this->load->view('event_view/event_manage', $data);
    }

    public function EventList() {
        
    }

    public function EventRemove($param) {
        $this->load->model('Event_Model');
        $this->Event_Model->removeEvent($param);
        $data['msg'] = "Record Removed";
        $data['eventList'] = $this->Event_Model->getEventList();
        $this->load->view('event_view/event_manage', $data);
    }

}
