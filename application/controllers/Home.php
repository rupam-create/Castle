<?php
require_once(APPPATH.'libraries/class.phpmailer.php');
require_once(APPPATH.'libraries/class.smtp.php');
class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('session');
      // $this->load->library('cart');
    $this->load->model('MyModel');
    $this->load->helper('text');
	}
	function index()
	{
   $this->db->select("*");
   $this->db->from("tbl_slider");
   $this->db->where("is_active", "Y");
   $query = $this->db->get();
   $data['records']=$query->result();
   $query1=$this->db->get("home");
   $data['records1']=$query1->result();
   $this->db->select('*');
   $this->db->from('gallery');
   $this->db->limit(6);
   $query2=$this->db->get();
   $data['records2']=$query2->result();
   $this->db->select("*");
   $this->db->from("counter");
   $this->db->where("status", "Y");
   $query3 = $this->db->get();
   $data['records3']=$query3->result();
   $query4=$this->db->get("services");
   $data['records4']=$query4->result();
   $query100=$this->db->get("settings_mng");
     $data100['records100']=$query100->result_array();
   $query5=$this->db->get("faq");
   $data['records5']=$query5->result();

   $query7=$this->db->get("properties");
   $data['records7']=$query7->result();

     $this->db->select('*');
     $this->db->from('customerfdbk');
     $query8 = $this->db->get();
     $data['records8']=$query8->result();


   $this->db->select("*");
   $this->db->from("social");
   $this->db->where("status", "Y");
   $query200 = $this->db->get();
   $data100['records200']=$query200->result();
   $this->load->view('include/header',$data100);
	 $this->load->view('homepage/index',$data);
	 $this->load->view('include/footer',$data100);
	}  

function banner()
  {
    if($this->session->userdata("email"))
    {
     $this->load->view('Admin/include/adminheader');
     $this->load->view('homepage/homeslider');
     $this->load->view('Admin/include/adminfooter'); 
    }
    else
    {
      redirect('adminlogin/');
    }
  }  
  function viewbanner()
  {
    if($this->session->userdata("email"))
    {
     $query=$this->db->get("tbl_slider");
     $data['records']=$query->result();
     $this->load->view('Admin/include/adminheader');
     $this->load->view('homepage/viewslider',$data);
     $this->load->view('Admin/include/adminfooter'); 
    }
    else
    {
      redirect('adminlogin/');
    }
  } 
    function addbanner()
  {
    if($this->session->userdata("email"))
    {
           if(!empty($_FILES['file']['name'])){
                $config['upload_path'] = 'upload/slider/';
                $config['allowed_types'] = '*';
                $config['file_name'] = $_FILES['file']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('file')){
                    $uploadData = $this->upload->data();
                    $file = $uploadData['file_name'];
                }else{
                    $file = '';
                }
            }else{
                $file = '';
        }
        $data=array("image"=>$file,"title"=>$this->input->post("title"), "is_active"=>$this->input->post("is_active"));
        $response=$this->MyModel->homeslideradd($data);
        $this->session->set_flashdata('msg1',"Data Inserted Successfully");
        $this->session->set_flashdata('msg_class','alert-success');

        //header("location:items");
        redirect('banner/');
      }
      else
      {
        redirect('adminlogin/');
      }
      }
      function bannerupdate()
    {
      $id=$this->input->post("id");
      $file=$_FILES['file']['name'];
            if($file!='')
            {
                $fileExt=@end(explode('.', $file));
                $filetest=strtolower($fileExt);
                $newfile=time().'.'.$filetest;
                $filepath= './upload/slider/'.$newfile;
                move_uploaded_file($_FILES['file']['tmp_name'], $filepath);
                $data=array("image"=>$newfile,"title"=>$this->input->post("title"));
            } 
                else{
               $data=array("title"=>$this->input->post("title"));
                }
            $this->db->set($data);
            $this->db->where('id', $id);
            $this->db->update('tbl_slider',$data);

             redirect("viewbanner/");
    }
   function bannerdel()
   {
    $id=$this->uri->segment('2');
    // $this->load->model('MyModel');
    $this->MyModel->delbanner($id);
    redirect("viewbanner/"); 
   }

   function social()
  {
    if($this->session->userdata("email"))
    {
     $this->load->view('Admin/include/adminheader');
     $this->load->view('homepage/social');
     $this->load->view('Admin/include/adminfooter'); 
    }
    else
    {
      redirect('adminlogin/');
    }
  }  
  function viewsocial()
  {
    if($this->session->userdata("email"))
    {
     $this->db->select('*');
     $this->db->from('social');
     $this->db->where('is_deleted', 0);
     $query = $this->db->get();
     $data['records']=$query->result();
     $this->load->view('Admin/include/adminheader');
     $this->load->view('homepage/viewsocial',$data);
     $this->load->view('Admin/include/adminfooter'); 
    }
    else
    {
      redirect('adminlogin/');
    }
  } 
    function addsocial()
  {
    if($this->session->userdata("email"))
    {
        $data=array("name"=>$this->input->post("name"), "icon"=>$this->input->post("icon"), "link"=>$this->input->post("link"), "status"=>$this->input->post("status"));
        $response=$this->MyModel->socialadd($data);
        $this->session->set_flashdata('msg1',"Data Inserted Successfully");
        $this->session->set_flashdata('msg_class','alert-success');

        //header("location:items");
        redirect('social/');
      }
      else
      {
        redirect('adminlogin/');
      }
      }
      function updatesocial()
    {
       $id=$this->input->post("id");
       $data=array("name"=>$this->input->post("name"), "icon"=>$this->input->post("icon"), "link"=>$this->input->post("link"), "status"=>$this->input->post("status"));

            $this->db->set($data);
            $this->db->where('id', $id);
            $this->db->update('social',$data);

             redirect("viewsocial/");
    }
   function socialdel()
   {
    $id=$this->uri->segment('2');
    $this->load->model('MyModel');
    $this->MyModel->delsocial($id);
    redirect("viewsocial/"); 
   }
   function services()
  {
    if($this->session->userdata("email"))
    {
     $this->load->view('Admin/include/adminheader');
     $this->load->view('homepage/services');
     $this->load->view('Admin/include/adminfooter'); 
    }
    else
    {
      redirect('adminlogin/');
    }
  }
  function viewservices()
  {
    if($this->session->userdata("email"))
    {
     $query=$this->db->get("services");
     $data['records']=$query->result();
     $this->load->view('Admin/include/adminheader');
     $this->load->view('homepage/viewservices',$data);
     $this->load->view('Admin/include/adminfooter'); 
    }
    else
    {
      redirect('adminlogin/');
    }
  }    
    function addservices()
  {
    if($this->session->userdata("email"))
    {
           if(!empty($_FILES['file']['name'])){
                $config['upload_path'] = 'upload/gallery/';
                $config['allowed_types'] = '*';
                $config['file_name'] = $_FILES['file']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('file')){
                    $uploadData = $this->upload->data();
                    $file = $uploadData['file_name'];
                }else{
                    $file = '';
                }
            }else{
                $file = '';
        }
        $data1=array("name"=>$this->input->post("name"), "description"=>$this->input->post("description"),"image"=>$file);
        $response=$this->MyModel->servicesadd($data1);
        $this->session->set_flashdata('msg1',"Data Inserted Successfully");
        $this->session->set_flashdata('msg_class','alert-success');

        //header("location:items");
        redirect('services/');
      }
      else
      {
        redirect('adminlogin/');
      }
      }
      function servicesupdate()
    {
      $id=$this->input->post("id");
      $file=$_FILES['file']['name'];
            if($file!='')
            {
                $fileExt=@end(explode('.', $file));
                $filetest=strtolower($fileExt);
                $newfile=time().'.'.$filetest;
                $filepath= './upload/gallery/'.$newfile;
                move_uploaded_file($_FILES['file']['tmp_name'], $filepath);
                $data=array("image"=>$newfile,"name"=>$this->input->post("name"), "description"=>$this->input->post("description"));
            } 
                else{
               $data=array("name"=>$this->input->post("name"), "description"=>$this->input->post("description"));
                }
            $this->db->set($data);
            $this->db->where('id', $id);
            $this->db->update('services',$data);

             redirect("viewservices/");
    }
   function servicesdel()
   {
    $id=$this->uri->segment('2');
    $this->load->model('MyModel');
    $this->MyModel->delservices($id);
    redirect("viewservices/"); 
   }
  function counter()
  {
    if($this->session->userdata("email"))
    {
     $this->load->view('Admin/include/adminheader');
     $this->load->view('homepage/counter');
     $this->load->view('Admin/include/adminfooter'); 
    }
    else
    {
      redirect('adminlogin/');
    }
  }  
  function viewcounter()
  {
    if($this->session->userdata("email"))
    {
     $this->db->select('*');
     $this->db->from('counter');
     $query = $this->db->get();
     $data['records']=$query->result();
     $this->load->view('Admin/include/adminheader');
     $this->load->view('homepage/viewcounter',$data);
     $this->load->view('Admin/include/adminfooter'); 
    }
    else
    {
      redirect('adminlogin/');
    }
  } 
    function addcounter()
  {
    if($this->session->userdata("email"))
    {
        $data=array("counter_name"=>$this->input->post("counter_name"), "counter"=>$this->input->post("counter"), "status"=>$this->input->post("status"));
        $response=$this->MyModel->counteradd($data);
        $this->session->set_flashdata('msg1',"Data Inserted Successfully");
        $this->session->set_flashdata('msg_class','alert-success');

        //header("location:items");
        redirect('counter/');
      }
      else
      {
        redirect('adminlogin/');
      }
      }
      function updatecounter()
    {
       $id=$this->input->post("id");
       $data=array("counter_name"=>$this->input->post("counter_name"), "counter"=>$this->input->post("counter"), "status"=>$this->input->post("status"));

            $this->db->set($data);
            $this->db->where('id', $id);
            $this->db->update('counter',$data);

             redirect("viewcounter/");
    }
   function counterdel()
   {
    $id=$this->uri->segment('2');
    $this->load->model('MyModel');
    $this->MyModel->delcounter($id);
    redirect("viewcounter/"); 
   }
     function homecontents()
  {
    if($this->session->userdata("email"))
    {
     $this->load->view('Admin/include/adminheader');
     $this->load->view('homepage/homecontents');
     $this->load->view('Admin/include/adminfooter'); 
    }
    else
    {
      redirect('adminlogin/');
    }
  }  
  function viewhomecontents()
  {
    if($this->session->userdata("email"))
    {
     $this->db->select('*');
     $this->db->from('home');
     $query = $this->db->get();
     $data['records']=$query->result();
     $this->load->view('Admin/include/adminheader');
     $this->load->view('homepage/viewhomecontents',$data);
     $this->load->view('Admin/include/adminfooter'); 
    }
    else
    {
      redirect('adminlogin/');
    }
  } 
    function addhomecontents()
  {
    if($this->session->userdata("email"))
    {
        $data=array("heading_one"=>$this->input->post("heading_one"), "heading_two"=>$this->input->post("heading_two"), "paragraph"=>$this->input->post("paragraph"), "about"=>$this->input->post("about"), "youtube_link"=>$this->input->post("youtube_link"));
        $response=$this->MyModel->homecontentsadd($data);
        $this->session->set_flashdata('msg1',"Data Inserted Successfully");
        $this->session->set_flashdata('msg_class','alert-success');

        //header("location:items");
        redirect('homecontents/');
      }
      else
      {
        redirect('adminlogin/');
      }
      }
      function updatehomecontents()
    {
       $id=$this->input->post("id");
       $data=array("heading_one"=>$this->input->post("heading_one"), "heading_two"=>$this->input->post("heading_two"), "paragraph"=>$this->input->post("paragraph"), "about"=>$this->input->post("about"), "youtube_link"=>$this->input->post("youtube_link"));

            $this->db->set($data);
            $this->db->where('id', $id);
            $this->db->update('home',$data);

             redirect("viewhomecontents/");
    }
   function homecontentsdel()
   {
    $id=$this->uri->segment('2');
    $this->load->model('MyModel');
    $this->MyModel->delhomecontents($id);
    redirect("viewhomecontents/"); 
   }
      function faq()
  {
    if($this->session->userdata("email"))
    {
     $this->load->view('Admin/include/adminheader');
     $this->load->view('homepage/faq');
     $this->load->view('Admin/include/adminfooter'); 
    }
    else
    {
      redirect('adminlogin/');
    }
  }  
  function viewfaq()
  {
    if($this->session->userdata("email"))
    {
     $this->db->select('*');
     $this->db->from('faq');
     $query = $this->db->get();
     $data['records']=$query->result();
     $this->load->view('Admin/include/adminheader');
     $this->load->view('homepage/viewfaq',$data);
     $this->load->view('Admin/include/adminfooter'); 
    }
    else
    {
      redirect('adminlogin/');
    }
  } 
    function addfaq()
  {
    if($this->session->userdata("email"))
    {
        $data=array("question"=>$this->input->post("question"), "answer"=>$this->input->post("answer"));
        $response=$this->MyModel->faqadd($data);
        $this->session->set_flashdata('msg1',"Data Inserted Successfully");
        $this->session->set_flashdata('msg_class','alert-success');

        //header("location:items");
        redirect('faq/');
      }
      else
      {
        redirect('adminlogin/');
      }
      }
      function updatefaq()
    {
       $id=$this->input->post("id");
        $data=array("question"=>$this->input->post("question"), "answer"=>$this->input->post("answer"));

            $this->db->set($data);
            $this->db->where('id', $id);
            $this->db->update('faq',$data);

             redirect("viewfaq/");
    }
   function faqdel()
   {
    $id=$this->uri->segment('2');
    $this->load->model('MyModel');
    $this->MyModel->delfaq($id);
    redirect("viewfaq/"); 
   }
   function consultation()
   {
     $data=array("email"=>$this->input->post("email"), "message"=>$this->input->post("message"));
     $this->load->model('MyModel');
     $result=$this->MyModel->consultationadd($data);
     $to = ('castlerealtyzone@gmail.com');
     $emailContent =  '
      <h3 align="center">Enquiry Details</h3>
        <table border="1" width="100%" cellpadding="5">
          <tr>
            <td width="30%">Email Address</td>
            <td width="70%">'.$this->input->post("email").'</td>
          </tr>
          <tr>
            <td width="30%">Message</td>
            <td width="70%">'.$this->input->post("message").'</td>
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
       redirect('home/',$data);
     }
     else
     {
        // $data['msg']='Mail not sent';
        $this->session->set_flashdata('msg',"Message not sent!");
        // $this->session->set_flashdata('msg_class','alert-success');
        redirect('home/',$data);
     }
   }
    function viewconsultation()
  {
    if($this->session->userdata("email"))
      {
    $query=$this->db->get("consultation");
    $data['records']=$query->result();
    $this->load->view('Admin/include/adminheader');
    $this->load->view('homepage/viewconsultation',$data);
    $this->load->view('Admin/include/adminfooter');
      }
      else
      {
        redirect('adminlogin/');
      }
  }
     function consultationdel()
   {
    $id=$this->uri->segment('2');
    $this->load->model('MyModel');
    $this->MyModel->delconsultation($id);
    redirect("viewconsultation/"); 
   } 

  function customerfdbk()
  {
    if($this->session->userdata("email"))
    {
     $this->load->view('Admin/include/adminheader');
     $this->load->view('homepage/customerfdbk');
     $this->load->view('Admin/include/adminfooter'); 
    }
    else
    {
      redirect('adminlogin/');
    }
  }  
  function viewcustomerfdbk()
  {
    if($this->session->userdata("email"))
    {
     $this->db->select('*');
     $this->db->from('customerfdbk');
     $query = $this->db->get();
     $data['records']=$query->result();
     $this->load->view('Admin/include/adminheader');
     $this->load->view('homepage/viewcustomerfdbk',$data);
     $this->load->view('Admin/include/adminfooter'); 
    }
    else
    {
      redirect('adminlogin/');
    }
  } 
    function addcustomerfdbk()
  {
    if($this->session->userdata("email"))
    {
        $data=array("name"=>$this->input->post("name"), "comment"=>$this->input->post("comment"));
        $response=$this->MyModel->customerfdbkadd($data);
        $this->session->set_flashdata('msg1',"Data Inserted Successfully");
        $this->session->set_flashdata('msg_class','alert-success');

        //header("location:items");
        redirect('customerfdbk/');
      }
      else
      {
        redirect('adminlogin/');
      }
      }
      function updatecustomerfdbk()
    {
       $id=$this->input->post("id");
       $data=array("name"=>$this->input->post("name"), "comment"=>$this->input->post("comment"));

            $this->db->set($data);
            $this->db->where('id', $id);
            $this->db->update('customerfdbk',$data);

             redirect("viewcustomerfdbk/");
    }
   function customerfdbkdel()
   {
    $id=$this->uri->segment('2');
    $this->load->model('MyModel');
    $this->MyModel->delcustomerfdbk($id);
    redirect("viewcustomerfdbk/"); 
   }
 
}
?>