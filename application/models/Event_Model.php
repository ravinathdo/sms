<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Event_Model extends CI_Model {

    //put your code here
    function __construct() {
        parent::__construct();
    }

    public function array_from_post($fields) {
        $data = array();
        foreach ($fields as $field) {
            $data[$field] = $this->input->post($field);
        }
        return $data;
    }

    function get_new() {
        $event = new stdClass();
        $event->eventid = '';
        $event->eventdate = '';
        $event->description = '';
    }

    public function setEvent($data) {
        $this->db->insert('calender_event', $data);
    }

    public function getEventList() {
        $this->db->select('calender_event.*');
        $this->db->from('calender_event');
        $this->db->order_by('eventid', 'desc');
        $query = $this->db->get();

        $result = $query->result();
        if ($result) {
            return $result;
        } else {
            return FALSE;
        }
    }

    public function removeEvent($eventid) {
        $this->db->where('eventid', $eventid);
        $this->db->delete('calender_event');
    }

}
