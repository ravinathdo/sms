<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Login_Controller extends CI_Controller {

    public function showLogin() {
        $this->load->view('users_view/login');
    }

    public function login() {
        $this->load->helper('form');
        $this->load->model('Login_Model');
        $this->load->model('CDSAccounts_m'); // get CDS account list for user
        $this->load->model('securities/Security_Model'); // get chart data for user
        $this->load->model('Brokers_m'); // get chart data for user



        $data = array(
            'username' => $this->input->post('username'),
            'password' => sha1($this->input->post('password'))
        );
        $doLogin = $this->Login_Model->doLogin($data);



        if ($doLogin) {
            //  var_export($doLogin);
//          echo $doLogin[0]->email;

            $cdsAccList = $this->CDSAccounts_m->getUserCDSAccounts($doLogin[0]->userid);


            $newdata = array(
                'userbean' => $doLogin[0],
                'logged_in' => TRUE,
                'cdsacclist' => $cdsAccList
            );
//            }

            $this->session->set_userdata($newdata);
            //echo '<tt><pre>'. var_export($newdata, TRUE).'</pre></tt>';
            //echo '<tt><pre>'. var_export($newdata['userbean']->role, TRUE).'</pre></tt>';
            //=======================
            //
                //get event list 
            $this->load->model('Event_Model');
            $data['eventList'] = $this->Event_Model->getEventList();


            //market open or close
            //saturday || sunday || 9-to-4
            date_default_timezone_set("Asia/Colombo");
            $nowDate = date("Y-m-d h:i:sa");
            //echo '<br>' . $nowDate;
            $start = '9:00:00';
            $end = '17:00:00';
            $time = date("H:i:s", strtotime($nowDate));
            $this->isWithInTime($start, $end, $time);



            $newdata['logintime'] = $nowDate;
            $isweekend = FALSE;
            $isclosetime = FALSE;
            if ($this->isWeekend($nowDate)) {
                $isweekend = TRUE;
            }

            if (!$this->isWithInTime($start, $end, $time)) {
                $isclosetime = TRUE;
            }


            if ($isweekend || $isclosetime) {
                $newdata['marketclose'] = TRUE;
            }

            $this->session->set_userdata($newdata);
            //chart data
            $userbean = $this->session->userdata('userbean');

            //login trace
            $ip = $this->input->ip_address();
            //echo $ip;
            $trace = array('username' => $userbean->email, 'IP' => $ip);
            $this->Login_Model->setLogTrace($trace);
            //=======================




            if ($newdata['userbean']->role == 'user') {
                $data['userSecList'] = $this->Security_Model->getUserSecuritiesGroupList($userbean->userid);
                //broker balance
                $data['bokerBalanceList'] = $this->Brokers_m->getBrokerFunndsForUser($userbean->userid);
                //echo '<tt><pre>' . var_export($data['bokerBalanceList'], TRUE) . '</pre></tt>';
                $this->load->view('users_view/home', $data);
            } if ($newdata['userbean']->role == 'admin') {

                //get login list 
                $data['loginList'] = $this->Login_Model->getLogTrace(20);

                $this->load->view('users_view/home', $data);
            }if ($newdata['userbean']->role == 'business_analyst') {

                //get reminder list 
                $this->load->model('Reminder_Model');
                $userbean = $this->session->userdata('userbean');
                $data['remindList'] = $this->Reminder_Model->getReminderList("ACTIVE", $userbean->userid);
               // echo '<tt><pre>' . var_export($data['remindList'], TRUE) . '</pre></tt>';
                $this->load->view('users_view/home', $data);
            }
        } else {
            $data = array(
                'msg' => 'Invalid username or password',
                'heading' => 'My Heading',
                'message' => 'My Message'
            );
            $this->load->view('users_view/login', $data);
        }
    }

    public function loadhome() {
        //echo 'loadhome working';
        //get event list 
        $this->load->model('Login_Model');
        $this->load->model('CDSAccounts_m'); // get CDS account list for user
        $this->load->model('securities/Security_Model'); // get chart data for user
        $this->load->model('Event_Model');
        $this->load->model('Brokers_m'); // get chart data for user

        $data['eventList'] = $this->Event_Model->getEventList();

        //chart data
        $userbean = $this->session->userdata('userbean');
        $data['userSecList'] = $this->Security_Model->getUserSecuritiesGroupList($userbean->userid);
        //echo '<tt><pre>' . var_export($data['userSecList'], TRUE) . '</pre></tt>';


        $data['bokerBalanceList'] = $this->Brokers_m->getBrokerFunndsForUser($userbean->userid);



        if ($userbean->role == 'business_analyst') {

            //get reminder list 
            $this->load->model('Reminder_Model');
            $userbean = $this->session->userdata('userbean');
            $data['remindList'] = $this->Reminder_Model->getReminderList("ACTIVE", $userbean->userid);
            //echo '<tt><pre>' . var_export($data['remindList'], TRUE) . '</pre></tt>';
            $this->load->view('users_view/home', $data);
        }


        if ($userbean->role == 'admin') {

            //get login list 
            $data['loginList'] = $this->Login_Model->getLogTrace(20);
        }

        $this->load->view('users_view/home', $data);
    }

    function isWeekend($date) {
        $weekDay = date('w', strtotime($date));
        return ($weekDay == 0 || $weekDay == 6);
    }

    function isWithInTime($start, $end, $time) {

        if (($time >= $start ) && ($time <= $end)) {
            // echo 'OK';
            return TRUE;
        } else {
            //echo 'Not OK';
            return FALSE;
        }
    }

    public function logout() {
        $this->session->unset_userdata('userbean');
        $this->session->unset_userdata('logged_in');
        $this->load->view('users_view/login');
    }

}
