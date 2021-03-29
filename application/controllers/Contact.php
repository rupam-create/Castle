<?php
require_once(APPPATH.'libraries/class.phpmailer.php');

class Contact extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('session');
      // $this->load->library('cart');
    $this->load->model('MyModel');
	}
	function index()
	{
   $this->db->select("*");
   $this->db->from("tbl_slider");
   $this->db->where("is_active", "Y");
   $query1 = $this->db->get();
   $data['records1']=$query1->result();
   $query2=$this->db->get("settings_mng");
   $data['records2']=$query2->result_array();
   $query100=$this->db->get("settings_mng");
   $data100['records100']=$query100->result_array();
   $this->db->select("*");
   $this->db->from("social");
   $this->db->where("status", "Y");
   $query200 = $this->db->get();
   $data100['records200']=$query200->result();
	 $this->load->view('include/header',$data100);
	 $this->load->view('contactpage/contact',$data);
	 $this->load->view('include/footer',$data100);
	}  
		function sendmail()
    {
        $data=array("name"=>$this->input->post("name"),"email"=>$this->input->post("email"), "phone_number"=>$this->input->post("phone_number"), "details"=>$this->input->post("details"));
     $this->load->model('MyModel');
     $result=$this->MyModel->contactpageadd($data);
     $to = ('castlerealtyzone@gmail.com');
     $emailContent =  '
      <h3 align="center">Enquiry Details</h3>
        <table border="1" width="100%" cellpadding="5">
          <tr>
            <td width="30%">Name</td>
            <td width="70%">'.$this->input->post("name").'</td>
          </tr>
          <tr>
            <td width="30%">Email Address</td>
            <td width="70%">'.$this->input->post("email").'</td>
          </tr>
           <tr>
            <td width="30%">Contact Number</td>
            <td width="70%">'.$this->input->post("phone_number").'</td>
          </tr>
          <tr>
            <td width="30%">Message</td>
            <td width="70%">'.$this->input->post("details").'</td>
          </tr>
        </table>
      ';  //   Post message available here

            
        $mail = new PHPMailer();
                  $mail ->IsSmtp();
                  $mail ->SMTPDebug = 0;
                  $mail ->SMTPAuth = true;
                  //$mail ->SMTPSecure = 'ssl';
                  $mail ->Host = "mail.oots.in";
                  $mail ->Port = 587; // or 587
                  $mail ->IsHTML(true);
                  $mail ->Username = "noreply@oots.in";
                  $mail ->Password = "ndRd(V*V9r,a";
                  $mail ->SetFrom("noreply@CastleRealty");
                  $mail ->FromName = 'Castle Realty';
                  $mail ->Subject = 'Enquiry';
                  $mail ->Body = $emailContent;
                  $mail ->AddAddress($to);
                    //$mail->Send();
                $mail->IsHTML(true);  
                // if($mail->send()){
                //          echo "send successfull" ;
                //      }
                //      else{
                //          echo $mail->ErrorInfo;
                //      }


    
     if($mail->send())
     {
            $this->session->set_flashdata('msg',"Message sent!");
        // $this->session->set_flashdata('msg_class','alert-success');
       // $data['msg']='Mailsent! Please check your email';
       redirect('contact/',$data);
     }
     else
     {
        // $data['msg']='Mail not sent';
        $this->session->set_flashdata('msg',"Message not sent!");
        // $this->session->set_flashdata('msg_class','alert-success');
        redirect('contact/',$data);
     }
   } 
  function contactfetch()
  {
    if($this->session->userdata("email"))
      {
    $query=$this->db->get("contact");
    $data['records']=$query->result();
    $this->load->view('Admin/include/adminheader');
    $this->load->view('contactpage/viewcontact',$data);
    $this->load->view('Admin/include/adminfooter');
      }
      else
      {
        redirect('adminlogin/');
      }
  }  
   function contactdel()
   {
    $id=$this->uri->segment('2');
    $this->load->model('MyModel');
    $this->MyModel->delcontact($id);
    redirect("viewcontact/"); 
   }



  
}
?>