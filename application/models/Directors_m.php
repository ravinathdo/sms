<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Directors_m extends CI_Model {

    protected $_primary_key = 'dirid';
    protected $_table_name = 'directors';
    protected $_primary_filter = 'intval';
//validation rules
    public $rules = array(
        'title' => array(
            'field' => 'title',
            'label' => 'title',
            'rules' => 'trim|required'
        ),
        'initial' => array(
            'field' => 'initial',
            'label' => 'Initials',
            'rules' => 'trim|required'
        ),
        'fname' => array(
            'field' => 'fname',
            'label' => 'First Name',
            'rules' => 'trim|required'
        ),
        'mname' => array(
            'field' => 'mname',
            'label' => 'Midle Name',
            'rules' => 'trim|required'
        ),
        'lname' => array(
            'field' => 'lname',
            'label' => 'Last Name',
            'rules' => 'trim|required'
        ),
    );

    function get_new() { //
        $directors = new stdClass();
        $directors->dirid = '';
        $directors->comid = '';
        $directors->title = '';
        $directors->initial = '';
        $directors->fname = '';
        $directors->mname = '';
        $directors->lname = '';
        return $directors;
    }

    public function array_from_post($fields) {
        $data = array();

        foreach ($fields as $field) {
            $data[$field] = $this->input->post($field);
        }
        return $data;
    }

    public function get($id = NULL, $single = FALSE) {

        if ($id != NULL) {
            $filter = $this->_primary_filter;
            $id = $filter($id);
            $this->db->where($this->_primary_key, $id);
            $method = 'row';
        } elseif ($single == TRUE) {
            $method = 'row';
        } else {
            $method = 'result';
        }

        return $this->db->get($this->_table_name)->$method();
    }
    
    
    
    
    
    public function getFiltered($compid) {
        
    }
    
    
    
    
    
    
    
    
    
    

    public function get_by($where, $single = FALSE) {

        $this->db->where($where);
        return $this->get(NULL, $single);
    }

    public function save($data, $id = NULL) {

        //Insert
        if ($id === NULL) { //new employee
            !isset($data[$this->_primary_key]) || $data[$this->_primary_key] = NULL;
            $this->db->set($data);
            $this->db->insert($this->_table_name);
            $id = $this->db->insert_id();
        }
        //Update
        else {
            $filter = $this->_primary_filter;
            $id = $filter($id);
            $this->db->set($data);
            $this->db->where($this->_primary_key, $id);
            $this->db->update($this->_table_name);
        }


        return $id;
    }

    public function delete($id) {
        $filter = $this->_primary_filter;
        $id = $filter($id);
        if (!$id) {
            return FALSE;
        }

        $this->db->where($this->_primary_key, $id);
        $this->db->limit(1);
        $this->db->delete($this->_table_name);
    }

    public function getAll($companyid) {
        $this->db->order_by($this->_primary_key, 'DESC');
        $this->db->where('comid', $companyid);
        $query = $this->get();
        if ($query) {
            return $query;
        } else {
            return FALSE;
        }
    }

    /* public function getDirectorsByID($dirid)
      {
      $this->db->order_by($this->_primary_key, 'DESC');
      $this->db->where('dirid',$dirid);
      $query = $this->get();
      if($query){
      return $query;
      }else{
      return FALSE;
      }
      } */

    //Show Directors
    public function getDirectors() {
        $query = $this->db->get('directors')->result();
        //var_dump($this->db->last_query());
        if ($query) {
            return $query;
        } else {
            return FALSE;
        }
    }

    /* public function getDirectorsByID($dirid) //show the directors by id
      {
      $this->db->join('company','company.comid=directors.dirid','left');
      //$this->db->where('comid', $id);
      $query = $this->get($id);
      var_dump($this->db->last_query());
      if($query){
      return $query;
      }else {
      return FALSE;
      }
      } */

    public function getDirectorsByID($dirid) { //show the directors in company info page under directors
        $this->db->select('*');
        // $this->db->from('boardofdirectors');
        $this->db->join('company', 'company.comid=boardofdirectors.comid');
        $this->db->join('directors', 'directors.dirid=boardofdirectors.dirid');
        $this->db->join('prefix', 'prefix.preid=directors.title'); //To get prefix
        //$this->db->where('boardofdirectors.comid', $dirid);
        //$this->db->where('comid', $id);
        $query = $this->getcomdir($dirid);
        //var_dump($this->db->last_query());
        if ($query) {
            return $query;
        } else {
            return FALSE;
        }
    }

    public function getCEOByID($dirid) { //show the CEO in company info page under directors
        $this->db->select('*');
        // $this->db->from('boardofdirectors');
        $this->db->join('company', 'company.comid=boardofdirectors.comid');
        $this->db->join('directors', 'directors.dirid=boardofdirectors.dirid');
        $this->db->join('prefix', 'prefix.preid=directors.title'); //To get prefix
        $this->db->where('designation = 3');
        //$this->db->where('comid', $id);
        $query = $this->getcomdir($dirid);
        //  var_dump($this->db->last_query());
        if ($query) {
            return $query;
        } else {
            return FALSE;
        }
    }

// Boardofdirecters save/update
    public function boardofdirsave($data, $id = NULL) {
        if ($id === NULL) { //new insert to table
            //check exists
            $this->db->where('comid', $data['comid']);
            $this->db->where('dirid', $data['dirid']);
            $result = $this->db->get('boardofdirectors')->result();
            if ($result) {
                return false;
            } else {
                $this->db->set($data);
                $this->db->insert('boardofdirectors');
                $id = $this->db->insert_id();
            }
        } else { //Update
            $filter = $this->_primary_filter;
            $id = $filter($id);
            $this->db->set($data);
            $this->db->where('boardofdirid', $id);
            $this->db->update('boardofdirectors');
        }
        return $id;
    }

    public function getcomdir($boardofdirid) {
        $this->db->where('boardofdirectors.comid', $boardofdirid);
        $query = $this->db->get('boardofdirectors')->result();
        if ($query) {
            return $query;
        } else {
            return FALSE;
        }
    }

    function get_newdir() { //
        $director = new stdClass();
        $director->dirid = '';
        $director->appointeddate = '';
        return $director;
    }

    public function getAllByComID($companyid) {

        /*
          SELECT boardofdirectors.*,CONCAT(prefix.prefix,directors.initial,directors.fname,directors.lname) AS fullname ,directordesignation.dirdesignation
         *  FROM boardofdirectors
          INNER JOIN directors
          ON boardofdirectors.dirid = directors.dirid
          INNER JOIN directordesignation
          ON boardofdirectors.designation = directordesignation.dirdesigid
          INNER JOIN prefix
          ON prefix.preid = directors.title
         */
        
        
        $this->db->select('boardofdirectors.*,CONCAT(prefix.prefix,directors.initial,directors.fname,directors.lname) AS fullname ,directordesignation.dirdesignation');
        $this->db->from('boardofdirectors');
        $this->db->join('directors','boardofdirectors.dirid = directors.dirid');
        $this->db->join('directordesignation','boardofdirectors.designation = directordesignation.dirdesigid');
        $this->db->join('prefix','prefix.preid = directors.title');
        $where = "  boardofdirectors.comid = ".$companyid;
        $this->db->where($where);
        $query = $this->db->get()->result();
//          $this->db->join('directors','directors.dirid=boardofdirectors.dirid');
//          $this->db->join('prefix','prefix.preid=directors.title'); //to get Title (prefix)
//           $this->db->where('comid',$companyid);
//           $query = $this->db->get('boardofdirectors ')->result();

        if ($query) {
            return $query;
        } else {
            return FALSE;
        }
    }

    public function deletedir($boardofdirid) {
        $filter = $this->_primary_filter;
        $id = $filter($id);
        if (!$id) {
            return FALSE;
        }
        $this->db->where($this->_primary_key, $id);
        $this->db->limit(1);
        $this->db->delete($this->boardofdirectors);
    }

    //get data from "directordesignation" table - model code
    public function getDesignation() {
        $query = $this->db->get('directordesignation')->result();
        if ($query) {
            return $query;
        } else {
            return FALSE;
        }
    }

    //end of model code
}

?>
