<?php
class Login extends CI_Controller{
  function __construct(){
    parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->helper('download');
    $this->load->model('Login_Model');
  }
  function index()
  {
            //   $this->session->set_userdata($sesdata);
          $this->load->view('include/header');
          $this->load->view('login');
          $this->load->view('include/footer');
    // $this->load->view('login');
  }
 
  function auth(){
    $redirect_url=$this->input->post('redirect_url');
    //print_r($redirect_url);
    //die();
    $email    = $this->input->post('email',TRUE);
    $password = $this->input->post('password',TRUE);
    $validate = $this->Login_Model->validate($email,$password);

    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $first_name  = $data['first_name'];
        $last_name  = $data['last_name'];
        $email = $data['email'];
        $type = $data['type'];
        $id = $data['id'];
        $sesdata = array(
            'first_name'  => $first_name,
            'last_name'     => $last_name,
             'email' => $email,
            "type"     => $type,
            'logged_in' => TRUE,
            'id' => $id
        );

        $this->session->set_userdata($sesdata);

        // if($usertype == 'admin')
        // {
        //   $this->load->view('adminheader');
        //   $this->load->view('adminpanel');
        //   $this->load->view('adminfooter');
        // } 
        if($type == 1)
        {
          if($redirect_url)
          {
            //print_r($data);
            //die();
            redirect($redirect_url);
          }
          else
          {
          redirect('Home/');
          } 
        }
        else
        {
          $this->session->set_flashdata('msg',"Wrong Email id or password !!");
          $this->session->set_flashdata('msg_class','alert-success');
          redirect('Login');
        }
      }


        /*// access login for admin
        if("type" == 0){
            redirect('admin');
 
        // access login for staff
        }elseif("type" == 1){
            redirect('employee');
 
        // access login for author
        }else{
            redirect('login');
        }*/
    else
    {
        echo $this->session->set_flashdata('msg',"Wrong Email id or password !!");
        redirect('Login');
    }
 

}
 function logout()
  {
      $this->session->sess_destroy();
    //   redirect('Login');
     redirect('login');
  }
  
  function employeeregister()
  {
    $this->load->view('include/header');
    $this->load->view('register');
    $this->load->view('include/footer');
  }
  function candidateregister()
  {
    $this->load->view('include/header');
    $this->load->view('candidateregister');
    $this->load->view('include/footer');
  }
  function doregister()
  {
     $email=$this->input->post("email");
     $query = $this->db->where('email', $email)->get("users");
     if ($query->num_rows() > 0)
        {
          $this->session->set_flashdata('msg',"Email id already exists !!");
          $this->session->set_flashdata('msg_class','alert-danger');
          $this->register();
        }
    else
    {
       $data=array("first_name"=>$this->input->post("first_name"), "last_name"=>$this->input->post("last_name"), "email"=>$email, "password"=>$this->input->post("password"),"phone"=>$this->input->post("phone"));
    $this->load->model('MyModel');
    if($this->MyModel->addregister($data))
    { 
      $this->session->set_flashdata('msg',"Form Submited Succesfully");
      $this->session->set_flashdata('msg_class','alert-success'); 
      $this->register();
    }
    else
      $this->session->set_flashdata('msg',"Form not Submited");
      $this->session->set_flashdata('msg_class','alert-danger'); 
      $this->register();

    }
   
  }
 
}
?>