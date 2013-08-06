<?php

class Admin extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    function Admin()
    {
        //parent::Controller();
        #parent::Controller();
        //$this->load->model('News_model');

        $this->load->library('validation');
    }

    function index()
    {
       if (!$this->session->userdata("admin"))
       {
           redirect("admin/login");
       }
       $this->load->view('admin/index');
    }



    function editPassword()
    {
        if (!$this->session->userdata("admin"))
        {
            redirect("admin/login");
        }
        $msg['error'] = '';
        $this->load->view('admin/editPassword',$msg);
    }

    function updatePassword()
    {
        $rules['old'] = "required";
        $rules['password'] = "required";
        $rules['password2'] = "required|matches[password]";
        $this->form_validation->set_rules($rules);

        $fields['old'] = '旧密码';
        $fields['password'] = '新密码';
        $fields['password2'] = '密码确认';
        $this->form_validation->set_rules($fields);


        $msg['error'] = '';

        if ($this->form_validation->run() == FALSE){
            $this->load->view('admin/editPassword',$msg);
        }
        else
        {
            $this->db->where('username',$this->session->userdata("admin"));
            $this->db->where('password',md5($this->input->post("old")));
            $query = $this->db->get("admin");
            if ($query->num_rows() > 0)
            {
                //$query = $query->row_array();
                $data = array(
                    'password'=>md5($this->input->post("password")),
                );
                $this->db->where('username',$this->session->userdata("admin"));
                $this->db->update('admin', $data);
                $this->session->sess_destroy();
                redirect('admin/index','refresh');
            }
            else
            {
                $msg['error'] = "旧密码错误！";
                $this->load->view('admin/editPassword',$msg);
            }
        }
    }

    function login()
    {
        $msg['error'] = "";
        $this->load->view('admin/login',$msg);
    }

    function checklogin()
    {
       if ($this->session->userdata("admin"))
       {
           redirect("admin/index");
       }
        //$this->form_validation->set_message('Url check is invalid');
        $msg['error'] = "";

        $rules['username'] = "required";
        $rules['password'] = "required";
        $this->form_validation->set_rules($rules);



        if ($this->form_validation->run() == FALSE){
            $this->load->view('admin/login',$msg);
        }
        else
        {
            $this->db->where('username',$this->input->post("username"));
            $this->db->where('password',md5($this->input->post("password")));
            $query = $this->db->get("admin");
            if ($query->num_rows() > 0)
            {
                //$query = $query->row_array();
                $session_data = array('admin'=>$this->input->post("username"));
                $this->session->set_userdata($session_data);
                redirect('admin/index');
            }
            else
            {
                $msg['error'] = "密码错误！";
                $this->load->view('admin/login',$msg);
            }
        }
    }


    function logout(){
        $this->session->sess_destroy();
        redirect();
    }
}

/* End of file admin.php */
/* Location: ./system/application/controllers/admin.php */