<?php
 
 $config = array(
    'register' => array (
        array(
                'field' => 'fname',
                'label' => 'First name',
                'rules' => 'required|trim|alpha',
                'errors' => array(
                        'required' => '%s is required.',
                        'alpha' => 'Only letters are allowed.'
                ),
            ),
            
            array(
                'field' => 'lname',
                'label' => 'Last name',
                'rules' => 'required|trim|alpha',
                'errors' => array(
                        'required' => '%s is required.',
                        'alpha' => 'Only letters are allowed.'
                ),
            ),

            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|trim|valid_email|is_unique[register.email]',
                'errors' => array(
                        'required' => '%s is required.',
                        'valid_email' => 'Invalid email address.',
                        'is_unique' => '%s already exists.'
                ),
            ),

            // array(
            //     'field' => 'dob',
            //     'label' => 'Address',
            //     'rules' => 'required|trim',
            //     'errors' => array(
            //             'required' => '%s is required.'
            //     ),
            // ),

            array(
                'field' => 'dob',
                'label' => 'Date Of Birth',
                'rules' => 'required',
                'errors' => array(
                        'required' => '%s is required.'
                ),
            ),

            array(
                'field' => 'gender',
                'label' => 'Gender',
                'rules' => 'required',
                'errors' => array(
                        'required' => '%s is required.'
                ),
            ),

            array(
                'field' => 'country',
                'label' => 'Select country',
                'rules' => 'required',
                'errors' => array(
                        'required' => '%s is required.'
                ),
            ),

            array(
                'field' => 'state',
                'label' => 'Select state',
                'rules' => 'required',
                'errors' => array(
                        'required' => '%s is required.'
                ),
            ),

            array(
                'field' => 'city',
                'label' => 'Select city',
                'rules' => 'required',
                'errors' => array(
                        'required' => '%s is required.'
                ),
            ),
        
            array(
                'field' => 'contact',
                'label' => 'Contact number',
                'rules' => 'required|trim|numeric|max_length[10]',
                'errors' => array(
                        'required' => '%s is required.',
                        'numeric' => 'Only numbers are allowed.',
                        'max_length' => 'Only 10 numbers are allowed.'
                ),
            ),

            

            // array(
            //     'field' => 'uname',
            //     'label' => 'User name',
            //     'rules' => 'required|trim|alpha_dash|is_unique[register.uname]',
            //     'errors' => array(
            //             'required' => '%s is required.',
            //             'alpha_dash' => 'Only letters, numbers and dashes are allowed.',
            //             'is_unique' => '%s already exists.'
            //     ),
            // ),

            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|trim|min_length[8]|max_length[15]',
                'errors' => array(
                        'required' => '%s is required.',
                        'min_length' => 'Password must be at least 8 characters long.',
                        'max_length' => 'Password must be at most 15 characters long.'
                ),
            ),

            // array(
            //     'field' => 'cpass',
            //     'label' => 'Confirm Password',
            //     'rules' => 'required|trim|min_length[8]|max_length[15]|matches[pass]',
            //     'errors' => array(
            //             'required' => '%s is required.',
            //             'min_length' => 'Password must be at least 8 characters long.',
            //             'max_length' => 'Password must be at most 15 characters long.',
            //             'matches' => 'Passwords do not match.'
            //     ),
            // )
        ),

    'signin' => array (
        array(
                'field' => 'uname',
                'label' => 'Username',
                'rules' => 'required|trim|alpha_dash',
                'errors' => array(
                        'required' => '%s is required.',
                        'alpha_dash' => 'Only letters, numbers and dashes are allowed.'
                ),
            ),

            array(
                'field' => 'pass',
                'label' => 'Password',
                'rules' => 'required|trim',
                'errors' => array(
                        'required' => '%s is required.'
                ),
            ),
        ),

    'product' => array (
        array(
                'field' => 'name',
                'label' => 'Product Name',
                'rules' => 'required|trim|alpha_numeric_spaces',
                'errors' => array(
                        'required' => '%s is required.',
                        'alpha_numeric_spaces' => 'Only letters, numbers and spaces are allowed.'
                ),
            ),

            // array(
            //     'field' => 'image',
            //     'label' => 'Product Image',
            //     'rules' => 'required',
            //     'errors' => array(
            //             'required' => '%s is required.'
            //     ),
            // ),

            array(
                'field' => 'description',
                'label' => 'Product Description',
                'rules' => 'required|trim|alpha_numeric_spaces',
                'errors' => array(
                        'required' => '%s is required.',
                        'alpha_numeric_spaces' => 'Only letters, numbers and spaces are allowed.'
                ),
            ),

            array(
                'field' => 'price',
                'label' => 'Product Price',
                'rules' => 'required|trim|numeric',
                'errors' => array(
                        'required' => '%s is required.',
                        'numeric' => 'Only numbers are allowed.'
                ),
            ),
    )
);

$config['error_prefix']='<div class="text text-danger text-capitalize mt-1 mb-2">';
$config['error_suffix']='</div>';
// $this->form_validation->set_rules($config);