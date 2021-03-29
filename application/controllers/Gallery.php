<?php
class Gallery extends CI_Controller
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
   $query=$this->db->get("gallery");
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
	 $this->load->view('gallerypage/gallerystatic',$data);
	 $this->load->view('include/footer',$data100);
	}  
	   function gallery()
  {
    if($this->session->userdata("email"))
    {
     $this->load->view('Admin/include/adminheader');
     $this->load->view('gallerypage/gallery');
     $this->load->view('Admin/include/adminfooter'); 
    }
    else
    {
      redirect('adminlogin/');
    }
  } 
  function viewgallery()
  {
    if($this->session->userdata("email"))
    {
     $query=$this->db->get("gallery");
     $data['records']=$query->result();
     $this->load->view('Admin/include/adminheader');
     $this->load->view('gallerypage/viewgallery',$data);
     $this->load->view('Admin/include/adminfooter'); 
    }
    else
    {
      redirect('adminlogin/');
    }
  }  
    function addgallery()
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
        $data1=array("name"=>$this->input->post("name"), "image"=>$file);
        $response=$this->MyModel->galleryadd($data1);
        $this->session->set_flashdata('msg1',"Data Inserted Successfully");
        $this->session->set_flashdata('msg_class','alert-success');

        //header("location:items");
        redirect('gallery/');
      }
      else
      {
        redirect('adminlogin/');
      }
      }
      function galleryupdate()
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
                $data=array("image"=>$newfile,"name"=>$this->input->post("name"));
            } 
                else{
               $data=array("name"=>$this->input->post("name"));
                }
            $this->db->set($data);
            $this->db->where('id', $id);
            $this->db->update('gallery',$data);

             redirect("viewgallery/");
    }
   function gallerydel()
   {
    $id=$this->uri->segment('2');
    $this->load->model('MyModel');
    $this->MyModel->delgallery($id);
    redirect("viewgallery/"); 
   }  
  
}
?>