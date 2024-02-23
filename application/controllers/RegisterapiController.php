<?php

require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';
use chriskacerguis\RestServer\RestController;

defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterapiController extends RestController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('RegisterapiModel');
    }

    //fetch the data for particular id
    public function select_get($id)
    {
        $model = new RegisterapiModel();
        $data = $model->select($id);

        if($data == false)
        {
            $this->response([
                'status' => false,
                'message' => 'No data found',
                'data' => [],
            ], 404);
        }
        else
        {
            $this->response([
                'status' => true,
                'message' => 'Data found Successfully',
                'data' => $data
            ], 200);
        }
    }

    //for state
    public function state_post()
    {
        $cid = $this->post('country_id'); //country_id is stored in $cid
        $model = new RegisterapiModel();
        $data = $model->state($cid); //data from model is stored in $data

        if($data == false)
        {
            $this->response([
                'status' => false,
                'message' => 'No data found',
                'data' => []
            ], 404);
        }
        else
        {
            $this->response([
                'status' => true,
                'message' => 'Data found Successfully', 
                'data' => $data
            ], 200);
        }
    }

    public function selectall_get()
    {
        $model = new RegisterapiModel();
        $data = $model->selectall();

        if($data == false)
        {
            $this->response([
                'status' => false,
                'message' => 'No data found',
                'data' => []
            ], 404);
        }
        else
        {
            $this->response([
                'status' => true,
                'message' => 'Data found Successfully',
                'data' => $data
            ], 200);
        }
    }


    //for city
    public function city_post()
    {
        $sid = $this->post('state_id'); //state_id is stored in $sid
        $model = new RegisterapiModel();
        $data = $model->city($sid); //data from model is stored in $data

        if($data == false)
        {
            $this->response([
                'status' => false,
                'message' => 'No data found',
                'data' => []
            ], 404);
        }
        else
        {
            $this->response([
                'status' => true,
                'message' => 'Data found Successfully', 
                'data' => $data
            ], 200);
        }
    }

    
    //insert
    public function insert_post()
    {
        $model = new RegisterapiModel();
        if($this->form_validation->run('register'))
        {
            $data = $this->input->post();
            $fname = $data['fname'];
            $lname = $data['lname'];
            $data['uname']=$fname.$lname;
            $result = $model->insert($data);
            if($result == 1)
            {
                $this->response(['status' => true,'message' => 'inserted successfully'], RestController::HTTP_OK);
            }
            else
            {
                $this->response(['status' => false,'message' => 'insertion failed'], RestController::HTTP_BAD_REQUEST);
            }
        }
        else
        {
            $this->response(['status' => false,'message' => validation_errors()], RestController::HTTP_BAD_REQUEST);
        }
    }

    //country
    public function country_get()
    {
        $model = new RegisterapiModel();
        $result = $model->country();
        if($result == false)
        {
            $this->response(['status' => false, 'message' => 'country not found'], RestController::HTTP_NOT_FOUND);
        }
        else
        {
            $this->response(['status' => true,'message' => 'country found','result' => $result], RestController::HTTP_OK);
        }
    }

    //update
    public function update_put($id) 
    {
    $register = new RegisterapiModel();
    $data = 
    [                                  
      'fname' => $this->put('fname'),
      'lname' => $this->put('lname'),
      'dob' => $this->put('dob'),
      'gender' => $this->put('gender'),
      'country' => $this->put('country'),
      'state' => $this->put('state'),
      'city' => $this->put('city'),
      'email' => $this->put('email'),
      'contact' => $this->put('contact'),
      'uname' => $this->put('uname'),
      'password' => $this->put('password'),
     ];

    //  $this->response($data);
    //  die();
     $update_result = $register->update($id,$data);
     if($update_result>0)
     {
        $this->response([
          'status'=> true,
          'message'=> 'Data Updated Successfully.'
        ],RestController::HTTP_OK);
     }
     else
     {
      $this->response([
        'status'=> false,
        'message'=> 'Data is not Updated.'
      ],RestController::HTTP_BAD_REQUEST);
      
     }
  }

}