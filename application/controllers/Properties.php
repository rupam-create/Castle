<?php
require_once(APPPATH.'libraries/class.phpmailer.php');
class Properties extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->helper('url');
    $this->load->library('session');
      // $this->load->library('cart');
    $this->load->helper('text'); 
    $this->load->model('MyModel');
  }
  function index()
  {
   $query100=$this->db->get("settings_mng");
   $data100['records100']=$query100->result_array();
   $this->db->select("*");
   $this->db->from("social");
   $this->db->where("status", "Y");
   $query200 = $this->db->get();
   $data100['records200']=$query200->result();
   $this->db->select('*');
   $this->db->from('properties');
   $query = $this->db->get();
   $data['records']=$query->result();
   
   $query2=$this->db->get("settings_mng");
   $data['records2']=$query2->result_array();


   $this->load->view('include/header',$data100);
   $this->load->view('propertiespage/properties',$data);
   $this->load->view('include/footer',$data100);
  }
  function properties_details()
  {
   $slug=$this->uri->segment('2');
   $this->db->select('*');
   $this->db->from('properties');
   $this->db->where("slug",$slug);
   $query = $this->db->get();
   $data['records']=$query->result();
   
   foreach($data['records'] as $r)
   {
   $this->db->select('*');
   $this->db->from('propertyimage');
   $this->db->where("propid",$r->id);
   $query1 = $this->db->get();
   $data['records2']=$query1->result();
   }
   $query100=$this->db->get("settings_mng");
   $data100['records100']=$query100->result_array();
   $this->db->select("*");
   $this->db->from("social");
   $this->db->where("status", "Y");
   $query200 = $this->db->get();
   $data100['records200']=$query200->result();

   $this->db->select('*');
   $this->db->from('properties');
   $this->db->where('slug!=', $slug);
   $query3 = $this->db->get();
   $data['records3']=$query3->result();
   


   $this->load->view('include/header',$data100);
   $this->load->view('propertiespage/properties_details',$data);
   $this->load->view('include/footer',$data100);
  }
  function propertiescontent()
  {
    if($this->session->userdata("email"))
    {
     $this->load->view('Admin/include/adminheader');
     $this->load->view('propertiespage/propertiescontent');
     $this->load->view('Admin/include/adminfooter'); 
    }
    else
    {
      redirect('adminlogin/');
    }
  } 
    function addpropertiescontent()
    {
        $file=$_FILES['file']['name'];
         if($file!='')
        {
            $fileExt=@end(explode('.', $file));
            $filetest=strtolower($fileExt);
            $newfile=time().'.'.$filetest;
            $filepath= './upload/properties/'.$newfile;
            move_uploaded_file($_FILES['file']['tmp_name'], $filepath);
        }
        $file1=$_FILES['file1']['name'];
         if($file1!='')
        {
            $fileExt1=@end(explode('.', $file1));
            $filetest1=strtolower($fileExt1);
            $newfile1=time().'.'.$filetest1;
            $filepath1= './upload/properties/'.$newfile1;
            move_uploaded_file($_FILES['file1']['tmp_name'], $filepath1);
        }
        $data=array("feature_image"=>$newfile,'floor_plan'=>$newfile1,'name'=>$this->input->post('name'),'slug'=>$this->input->post('slug'),'descriptions'=>$this->input->post('descriptions'),'short_description'=>$this->input->post('short_description'), 'amount'=>$this->input->post('amount'), 'size'=>$this->input->post('size'), 'number_of_bathroom'=>$this->input->post('number_of_bathroom'), 'number_of_bedroom'=>$this->input->post('number_of_bedroom'), 'number_of_garage'=>$this->input->post('number_of_garage'), 'is_feature'=>$this->input->post('is_feature'), 'address'=>$this->input->post('address'), 'features'=>$this->input->post('features'), 'property_map'=>$this->input->post('property_map'));
        $this->load->model("MyModel");
        if($this->MyModel->propertiesadd($data))
        {
          redirect('propertiescontent/');  
        }
    }
    function viewpropertiescontent()
  {
    if($this->session->userdata("email"))
    {
     $this->db->select('*');
     $this->db->from('properties');
     $query = $this->db->get();
     $data['records']=$query->result();
     $this->load->view('Admin/include/adminheader');
     $this->load->view('propertiespage/viewpropertiescontent',$data);
     $this->load->view('Admin/include/adminfooter'); 
    }
    else
    {
      redirect('adminlogin/');
    }
  } 
  function addpropertyimage()
  {
    if($this->session->userdata("email"))
    {
           if(!empty($_FILES['file']['name'])){
                $config['upload_path'] = 'upload/properties/';
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
        $data1=array("propid"=>$this->input->post("propid"), "image"=>$file);
        $response=$this->MyModel->propertiesimageadd($data1);
        $this->session->set_flashdata('msg1',"Data Inserted Successfully");
        $this->session->set_flashdata('msg_class','alert-success');

        //header("location:items");
        redirect('viewpropertiescontent/');
      }
      else
      {
        redirect('adminlogin/');
      }
      }
    function propertiesupdate()
    {
     $id=$this->uri->segment('2');
     $query=$this->db->get_where("properties",array("id"=>$id));
     $data['records']=$query->result();
     $this->db->select("*");
     $this->db->from("propertyimage");
     $this->db->where("propid",$id);
     $query2 = $this->db->get();
      $data['records2']=$query2->result();
      $this->load->view('Admin/include/adminheader');
      $this->load->view('propertiespage/propertiesupdate',$data);
      $this->load->view('Admin/include/adminfooter');
    }
    function propertiesimagedel()
    {
    $id=$this->uri->segment('2');
    $this->load->model('MyModel');
    $this->MyModel->delpropertiesimage($id);
    redirect("viewpropertiescontent");
    // redirect('propertiesupdate/'.$id, 'refresh');
    }
    function propertiesdel()
    {
    $id=$this->uri->segment('2');
    $this->load->model('MyModel');
    $this->MyModel->delproperties($id);
    redirect("viewpropertiescontent");
    }
    function updatepropertiescontent()
    {
        $id=$this->input->post("id");
           $file=$_FILES['file']['name'];
            if($file!='')
            {
                $fileExt=@end(explode('.', $file));
                $filetest=strtolower($fileExt);
                $newfile=time().'.'.$filetest;
                $filepath= './upload/properties/'.$newfile;
                move_uploaded_file($_FILES['file']['tmp_name'], $filepath);

                $data=array("feature_image"=>$newfile, 'name'=>$this->input->post('name'),'slug'=>$this->input->post('slug'),'descriptions'=>$this->input->post('descriptions'),'short_description'=>$this->input->post('short_description'), 'amount'=>$this->input->post('amount'), 'size'=>$this->input->post('size'), 'number_of_bathroom'=>$this->input->post('number_of_bathroom'), 'number_of_bedroom'=>$this->input->post('number_of_bedroom'), 'number_of_garage'=>$this->input->post('number_of_garage'), 'is_feature'=>$this->input->post('is_feature'), 'address'=>$this->input->post('address'), 'features'=>$this->input->post('features'), 'property_map'=>$this->input->post('property_map'));
            }
            else
            {
               $data=array('name'=>$this->input->post('name'),'slug'=>$this->input->post('slug'),'descriptions'=>$this->input->post('descriptions'),'short_description'=>$this->input->post('short_description'), 'amount'=>$this->input->post('amount'), 'size'=>$this->input->post('size'), 'number_of_bathroom'=>$this->input->post('number_of_bathroom'), 'number_of_bedroom'=>$this->input->post('number_of_bedroom'), 'number_of_garage'=>$this->input->post('number_of_garage'), 'is_feature'=>$this->input->post('is_feature'), 'address'=>$this->input->post('address'), 'features'=>$this->input->post('features'), 'property_map'=>$this->input->post('property_map')); 
            }
             $this->db->set($data);
           $this->db->where('id', $id);
            $this->db->update('properties');
            //  $query=$this->db->get('testimonial');
            // $data['records']=$query->result();
            // // $this->load->view('adminheader');
            // // $this->load->view('testimonial',$data);
            // // $this->load->view('adminfooter'); 


            $file1=$_FILES['file1']['name'];
            if($file1!='')
            {
                $fileExt1=@end(explode('.', $file1));
                $filetest1=strtolower($fileExt1);
                $newfile1=time().'.'.$filetest1;
                $filepath= './upload/properties/'.$newfile1;
                move_uploaded_file($_FILES['file1']['tmp_name'], $filepath);

               $data=array('floor_plan'=>$newfile1,'name'=>$this->input->post('name'),'slug'=>$this->input->post('slug'),'descriptions'=>$this->input->post('descriptions'),'short_description'=>$this->input->post('short_description'), 'amount'=>$this->input->post('amount'), 'size'=>$this->input->post('size'), 'number_of_bathroom'=>$this->input->post('number_of_bathroom'), 'number_of_bedroom'=>$this->input->post('number_of_bedroom'), 'number_of_garage'=>$this->input->post('number_of_garage'), 'is_feature'=>$this->input->post('is_feature'), 'address'=>$this->input->post('address'), 'features'=>$this->input->post('features'), 'property_map'=>$this->input->post('property_map'));
            }
            else
            {
              $data=array('name'=>$this->input->post('name'),'slug'=>$this->input->post('slug'),'descriptions'=>$this->input->post('descriptions'),'short_description'=>$this->input->post('short_description'), 'amount'=>$this->input->post('amount'), 'size'=>$this->input->post('size'), 'number_of_bathroom'=>$this->input->post('number_of_bathroom'), 'number_of_bedroom'=>$this->input->post('number_of_bedroom'), 'number_of_garage'=>$this->input->post('number_of_garage'), 'is_feature'=>$this->input->post('is_feature'), 'address'=>$this->input->post('address'), 'features'=>$this->input->post('features'), 'property_map'=>$this->input->post('property_map'));  
            }
           $this->db->set($data);
           $this->db->where('id', $id);
            $this->db->update('properties');
            redirect('propertiesupdate/'.$id, 'refresh');
    }
    function propertyform()
    {
      $data=array("location"=>$this->input->post("location"),"propertytype"=>$this->input->post("propertytype"), "phone"=>$this->input->post("phone"), "status"=>$this->input->post("status"), "name"=>$this->input->post("name"));
     $this->load->model('MyModel');
     $result=$this->MyModel->propertyformadd($data);
     $to = ('castlerealtyzone@gmail.com');
     $emailContent =  '
      <h3 align="center">Enquiry Details</h3>
        <table border="1" width="100%" cellpadding="5">
          <tr>
            <td width="30%">Name</td>
            <td width="70%">'.$this->input->post("name").'</td>
          </tr>
           <tr>
            <td width="30%">Contact Number</td>
            <td width="70%">'.$this->input->post("phone").'</td>
          </tr>
          <tr>
            <td width="30%">Location</td>
            <td width="70%">'.$this->input->post("location").'</td>
          </tr>
           <tr>
            <td width="30%">Property Type</td>
            <td width="70%">'.$this->input->post("propertytype").'</td>
          </tr>
          <tr>
            <td width="30%">Status</td>
            <td width="70%">'.$this->input->post("status").'</td>
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
                  $mail ->Subject = 'Property Enquiry';
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
       redirect('Home/',$data);
     }
     else
     {
        // $data['msg']='Mail not sent';
        $this->session->set_flashdata('msg',"Message not sent!");
        // $this->session->set_flashdata('msg_class','alert-success');
        redirect('Home/',$data);
     }
    }
    function propertyformview()
  {
    if($this->session->userdata("email"))
      {
    $query=$this->db->get("propertyform");
    $data['records']=$query->result();
    $this->load->view('Admin/include/adminheader');
    $this->load->view('propertiespage/viewpropertyform',$data);
    $this->load->view('Admin/include/adminfooter');
      }
      else
      {
        redirect('adminlogin/');
      }
  }
  function propertyformdel()
  {
    $id=$this->uri->segment('2');
    $this->load->model('MyModel');
    $this->MyModel->delpropertyform($id);
    redirect("propertyformview/");
  } 
}
?>