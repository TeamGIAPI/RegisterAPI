<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterapiModel extends CI_Model
{
    public function select($id)
    {
        $query = $this->db->get_where('register', ['id' => $id]);
        $data = $query ->row(); //for particular row
        
        if($query->num_rows() > 0)
        {
            return $data;
        }
        else
        {
            return false;
        }
    }
    public function state($cid)
    {
        $this->db->select(['state_id','state_name']); //select state_id and state_name from database
        $this->db->where('country_id', $cid); //where country_id = $cid 
        $query = $this->db->get('state'); //get the data from state table
        
        if($query->num_rows() > 0)
        {
            return $query->result_array(); //return the data of $query in array 
        }
        else
        {
            return false;
        }
    }

    public function selectall()
    {
        $query = $this->db->get('register');
        $data = $query ->result_array(); //for particular row
        
        if($query->num_rows() > 0)
        {
            return $data;
        }
        else
        {
            return false;
        }
    }

    public function city($sid)
    {
        $this->db->select(['city_id','city_name']); //select city_id and city_name from database
        $this->db->where('state_id', $sid); //where state_id = $sid 
        $query = $this->db->get('city'); //get the data from city table
        
        if($query->num_rows() > 0)
        {
            return $query->result_array(); //return the data of $query in array 
        }
        else
        {
            return false;
        }
    }

    public function insert($data)
    {
        return $this->db->insert('register', $data);
    }

    public function country()
    {
        $query = $this->db->get('country');
        if($query->num_rows() > 0)
        {
            return $query->result_array();
        }
        else
        {
            return false;
        }
    }

    public function update($id,$data)
    {
        $this->db->where('id',$id);
        return $this->db->update('register',$data);
    }
}