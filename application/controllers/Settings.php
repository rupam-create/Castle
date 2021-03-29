<?php
class Settings extends CI_Controller
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

  }
  function settings()
  {
    if($this->session->userdata("email"))
    {
     $query=$this->db->get("settings_mng");
     $data['records']=$query->result_array();
     $this->load->view('Admin/include/adminheader');
     $this->load->view('settings/setting',$data);
     $this->load->view('Admin/include/adminfooter'); 
    }
    else
    {
      redirect('adminlogin/');
    }
  }
  function addsettings()
   {
            //updatepart
         $settings_type=$this->input->post('settings_type');
        
         $query= $this->db->get_where('settings_mng',array('settings_type'=>$settings_type));
         $data['records']=$query->result();
         if(!empty($data['records']))
         {  
           $file=$_FILES['file']['name'];
            if($file!='')
            {
                $fileExt=@end(explode('.', $file));
                $filetest=strtolower($fileExt);
                $newfile=time().'.'.$filetest;
                $filepath= './upload/logo/'.$newfile;
                move_uploaded_file($_FILES['file']['tmp_name'], $filepath);

                $data=array("logo"=>$newfile, 'site_name'=>$this->input->post('site_name'),'tagline'=>$this->input->post('tagline'),'description'=>$this->input->post('description'),'owner_name'=>$this->input->post('owner_name'), 'owner_name'=>$this->input->post('owner_name'),'email'=>$this->input->post('email'), 'support_email'=>$this->input->post('support_email'), 'from_email'=>$this->input->post('from_email'), 'reply_to'=>$this->input->post('reply_to'), 'support_number'=>$this->input->post('support_number'), 'toll_free_no'=>$this->input->post('toll_free_no'), 'phone_no'=>$this->input->post('phone_no'), 'whatsapp_no'=>$this->input->post('whatsapp_no'), 'address_one_heading'=>$this->input->post('address_one_heading'), 'address'=>$this->input->post('address'), 'address_two_heading'=>$this->input->post('address_two_heading'), 'address_two'=>$this->input->post('address_two'), 'map'=>$this->input->post('map'), 'playstore_link'=>$this->input->post('playstore_link'));
            }
            else
            {
               $data=array('site_name'=>$this->input->post('site_name'),'tagline'=>$this->input->post('tagline'),'description'=>$this->input->post('description'),'owner_name'=>$this->input->post('owner_name'), 'owner_name'=>$this->input->post('owner_name'),'email'=>$this->input->post('email'), 'support_email'=>$this->input->post('support_email'), 'from_email'=>$this->input->post('from_email'), 'reply_to'=>$this->input->post('reply_to'), 'support_number'=>$this->input->post('support_number'), 'toll_free_no'=>$this->input->post('toll_free_no'), 'phone_no'=>$this->input->post('phone_no'), 'whatsapp_no'=>$this->input->post('whatsapp_no'), 'address_one_heading'=>$this->input->post('address_one_heading'), 'address'=>$this->input->post('address'), 'address_two_heading'=>$this->input->post('address_two_heading'), 'address_two'=>$this->input->post('address_two'), 'map'=>$this->input->post('map'), 'playstore_link'=>$this->input->post('playstore_link'));  
            }
             $this->db->set($data);
           $this->db->where('settings_type', $settings_type);
            $this->db->update('settings_mng'); 


            $file1=$_FILES['file1']['name'];
            if($file1!='')
            {
                $fileExt1=@end(explode('.', $file1));
                $filetest1=strtolower($fileExt1);
                $newfile1=time().'.'.$filetest1;
                $filepath1= './upload/logo/'.$newfile1;
                move_uploaded_file($_FILES['file1']['tmp_name'], $filepath1);

                $data=array('footer_logo'=>$newfile1,'site_name'=>$this->input->post('site_name'),'tagline'=>$this->input->post('tagline'),'description'=>$this->input->post('description'),'owner_name'=>$this->input->post('owner_name'), 'owner_name'=>$this->input->post('owner_name'),'email'=>$this->input->post('email'), 'support_email'=>$this->input->post('support_email'), 'from_email'=>$this->input->post('from_email'), 'reply_to'=>$this->input->post('reply_to'), 'support_number'=>$this->input->post('support_number'), 'toll_free_no'=>$this->input->post('toll_free_no'), 'phone_no'=>$this->input->post('phone_no'), 'whatsapp_no'=>$this->input->post('whatsapp_no'), 'address_one_heading'=>$this->input->post('address_one_heading'), 'address'=>$this->input->post('address'), 'address_two_heading'=>$this->input->post('address_two_heading'), 'address_two'=>$this->input->post('address_two'), 'map'=>$this->input->post('map'), 'playstore_link'=>$this->input->post('playstore_link'));
            }
            else
            {
              $data=array('site_name'=>$this->input->post('site_name'),'tagline'=>$this->input->post('tagline'),'description'=>$this->input->post('description'),'owner_name'=>$this->input->post('owner_name'), 'owner_name'=>$this->input->post('owner_name'),'email'=>$this->input->post('email'), 'support_email'=>$this->input->post('support_email'), 'from_email'=>$this->input->post('from_email'), 'reply_to'=>$this->input->post('reply_to'), 'support_number'=>$this->input->post('support_number'), 'toll_free_no'=>$this->input->post('toll_free_no'), 'phone_no'=>$this->input->post('phone_no'), 'whatsapp_no'=>$this->input->post('whatsapp_no'), 'address_one_heading'=>$this->input->post('address_one_heading'), 'address'=>$this->input->post('address'), 'address_two_heading'=>$this->input->post('address_two_heading'), 'address_two'=>$this->input->post('address_two'), 'map'=>$this->input->post('map'), 'playstore_link'=>$this->input->post('playstore_link')); 
            }
           $this->db->set($data);
           $this->db->where('settings_type', $settings_type);
           $this->db->update('settings_mng');

          $file2=$_FILES['file2']['name'];
            if($file2!='')
            {
                $fileExt2=@end(explode('.', $file2));
                $filetest2=strtolower($fileExt2);
                $newfile2=time().'.'.$filetest2;
                $filepath2= './upload/logo/'.$newfile2;
                move_uploaded_file($_FILES['file2']['tmp_name'], $filepath2);

                $data=array('favicon'=>$newfile2,'site_name'=>$this->input->post('site_name'),'tagline'=>$this->input->post('tagline'),'description'=>$this->input->post('description'),'owner_name'=>$this->input->post('owner_name'), 'owner_name'=>$this->input->post('owner_name'),'email'=>$this->input->post('email'), 'support_email'=>$this->input->post('support_email'), 'from_email'=>$this->input->post('from_email'), 'reply_to'=>$this->input->post('reply_to'), 'support_number'=>$this->input->post('support_number'), 'toll_free_no'=>$this->input->post('toll_free_no'), 'phone_no'=>$this->input->post('phone_no'), 'whatsapp_no'=>$this->input->post('whatsapp_no'), 'address_one_heading'=>$this->input->post('address_one_heading'), 'address'=>$this->input->post('address'), 'address_two_heading'=>$this->input->post('address_two_heading'), 'address_two'=>$this->input->post('address_two'), 'map'=>$this->input->post('map'), 'playstore_link'=>$this->input->post('playstore_link'));
            }
            else
            {
              $data=array('site_name'=>$this->input->post('site_name'),'tagline'=>$this->input->post('tagline'),'description'=>$this->input->post('description'),'owner_name'=>$this->input->post('owner_name'), 'owner_name'=>$this->input->post('owner_name'),'email'=>$this->input->post('email'), 'support_email'=>$this->input->post('support_email'), 'from_email'=>$this->input->post('from_email'), 'reply_to'=>$this->input->post('reply_to'), 'support_number'=>$this->input->post('support_number'), 'toll_free_no'=>$this->input->post('toll_free_no'), 'phone_no'=>$this->input->post('phone_no'), 'whatsapp_no'=>$this->input->post('whatsapp_no'), 'address_one_heading'=>$this->input->post('address_one_heading'), 'address'=>$this->input->post('address'), 'address_two_heading'=>$this->input->post('address_two_heading'), 'address_two'=>$this->input->post('address_two'), 'map'=>$this->input->post('map'), 'playstore_link'=>$this->input->post('playstore_link')); 
            }
           $this->db->set($data);
           $this->db->where('settings_type', $settings_type);
           $this->db->update('settings_mng');

           redirect("settings/");
         }
         else
         {
            //adding part
          $file=$_FILES['file']['name'];
         if($file!='')
          {
            $fileExt=@end(explode('.', $file));
            $filetest=strtolower($fileExt);
            $newfile=time().'.'.$filetest;
            $filepath= './upload/logo/'.$newfile;
            move_uploaded_file($_FILES['file']['tmp_name'], $filepath);
          }
          $file1=$_FILES['file1']['name'];
         if($file1!='')
         {
            $fileExt1=@end(explode('.', $file1));
            $filetest1=strtolower($fileExt1);
            $newfile1=time().'.'.$filetest1;
            $filepath1= './upload/logo/'.$newfile1;
            move_uploaded_file($_FILES['file1']['tmp_name'], $filepath1);
          }
           $file2=$_FILES['file2']['name'];
          if($file2!='')
         {
            $fileExt2=@end(explode('.', $file2));
            $filetest2=strtolower($fileExt2);
            $newfile2=time().'.'.$filetest2;
            $filepath2= './upload/logo/'.$newfile2;
            move_uploaded_file($_FILES['file2']['tmp_name'], $filepath1);
          }
          $data=array("logo"=>$newfile,'footer_logo'=>$newfile1,'site_name'=>$this->input->post('site_name'),'tagline'=>$this->input->post('tagline'),'description'=>$this->input->post('description'),'owner_name'=>$this->input->post('owner_name'), 'owner_name'=>$this->input->post('owner_name'),'email'=>$this->input->post('email'), 'support_email'=>$this->input->post('support_email'), 'from_email'=>$this->input->post('from_email'), 'reply_to'=>$this->input->post('reply_to'), 'support_number'=>$this->input->post('support_number'), 'toll_free_no'=>$this->input->post('toll_free_no'), 'phone_no'=>$this->input->post('phone_no'), 'whatsapp_no'=>$this->input->post('whatsapp_no'), 'address_one_heading'=>$this->input->post('address_one_heading'), 'address'=>$this->input->post('address'), 'address_two_heading'=>$this->input->post('address_two_heading'), 'address_two'=>$this->input->post('address_two'), 'favicon'=>$newfile2, 'map'=>$this->input->post('map'), 'playstore_link'=>$this->input->post('playstore_link'), 'settings_type'=>$this->input->post('settings_type'));
          $this->load->model("MyModel");
          if($this->MyModel->settingsadd($data))
          {
            $this->settings();
          }
          }
         
      }
}
?>

}
?>
