 <?php
class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('MyModel');
		$this->load->model('Login_Model');
	}
	function index()
	{
    if($this->session->userdata("email"))
    {
	 $this->load->view('Admin/include/adminheader');
	 $this->load->view('Admin/adminpanel');
	 $this->load->view('Admin/include/adminfooter');
    }
    else
    {
      redirect('adminlogin/');
    }
	}  
    function adminlogout()
   {
    $this->session->sess_destroy();
    //   redirect('Login');
     $this->load->view('adminlogin');
   }
    function auth1(){
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
            'last_name'  => $last_name,
            'email'     => $email,
            "type"     => $type,
            'logged_in' => TRUE,
            'id' => $id
        );

        $this->session->set_userdata($sesdata);

        if($type == 0)
        {
          $this->load->view('Admin/include/adminheader');
          $this->load->view('Admin/adminpanel');
	     $this->load->view('Admin/include/adminfooter');
        // elseif($usertype == 'partner')
        // {
        //   $this->load->view('header');
        //   $this->load->view('dashboard-search-result-tyer-popup');
        //   $this->load->view('footer');
        }
        else
        {
          $this->session->set_flashdata('msg',"Wrong Email id or password !!");
          $this->session->set_flashdata('msg_class','alert-success');
          $this->load->view('adminlogin');
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
        echo $this->session->set_flashdata('msg','Email id or Password is Wrong');
        $this->load->view('adminlogin');
    }
 

}
   function adminlogin()
   {
     $this->load->view('adminlogin');
   }
}
?>