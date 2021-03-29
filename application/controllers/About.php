<?php
class About extends CI_Controller
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
   $query=$this->db->get("about");
   $data['records']=$query->result();
   $this->db->select("*");
   $this->db->from("tbl_slider");
   $this->db->where("is_active", "Y");
   $query1 = $this->db->get();
   $data['records1']=$query1->result();
   $query100=$this->db->get("settings_mng");
   $data100['records100']=$query100->result_array();
   $this->db->select("*");
   $this->db->from("social");
   $this->db->where("status", "Y");
   $query200 = $this->db->get();
   $data100['records200']=$query200->result();
   $this->load->view('include/header',$data100);
   $this->load->view('aboutpage/about',$data);
   $this->load->view('include/footer',$data100);
  }
  function aboutcontent()
  {
    if($this->session->userdata("email"))
    {
     $this->load->view('Admin/include/adminheader');
     $this->load->view('aboutpage/aboutcontent');
     $this->load->view('Admin/include/adminfooter'); 
    }
    else
    {
      redirect('adminlogin/');
    }
  }  
  function viewaboutcontent()
  {
    if($this->session->userdata("email"))
    {
     $query=$this->db->get("about");
     $data['records']=$query->result();
     $this->load->view('Admin/include/adminheader');
     $this->load->view('aboutpage/viewaboutcontent',$data);
     $this->load->view('Admin/include/adminfooter'); 
    }
    else
    {
      redirect('adminlogin/');
    }
  } 
    function addaboutcontent()
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
        $data=array("image"=>$file,"heading"=>$this->input->post("heading"), "about"=>$this->input->post("about"));
        $response=$this->MyModel->aboutcontentadd($data);
        $this->session->set_flashdata('msg1',"Data Inserted Successfully");
        $this->session->set_flashdata('msg_class','alert-success');

        //header("location:items");
        redirect('aboutcontent/');
      }
      else
      {
        redirect('adminlogin/');
      }
      }
      function aboutcontentupdate()
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
                $data=array("image"=>$newfile,"heading"=>$this->input->post("heading"), "about"=>$this->input->post("about"));
            } 
                else{
               $data=array("heading"=>$this->input->post("heading"), "about"=>$this->input->post("about"));
                }
            $this->db->set($data);
            $this->db->where('id', $id);
            $this->db->update('about',$data);

             redirect("viewaboutcontent/");
    }
   function aboutcontentdel()
   {
    $id=$this->uri->segment('2');
    // $this->load->model('MyModel');
    $this->MyModel->delabout($id);
    redirect("viewaboutcontent/"); 
   }
 }
 ?>