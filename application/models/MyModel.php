<?php
class MyModel extends CI_Model
{
 function __construct()
 {
  parent::__construct();
 }

    function contactpageadd($data)
    {
      if($this->db->insert("contact",$data))
      return true;
    }
    function consultationadd($data)
    {
     if($this->db->insert("consultation",$data))
      return true; 
    }
    function homeslideradd($data)
    {
      if($this->db->insert("tbl_slider",$data))
      return true;
    }
    function updatehomeslider($data,$homeslider_type)
    {
       $this->db->set($data);
       $this->db->where("homeslider_type",$homeslider_type);
       $this->db->update("tbl_slider",$data);
    }
     function socialadd($data)
    {
      if($this->db->insert("social",$data))
      return true;
    }
    function faqadd($data)
    {
      if($this->db->insert("faq",$data))
      return true;
    }
    function settingsadd($data)
    {
      if($this->db->insert("settings_mng",$data))
      return true;
    }
    function customerfdbkadd($data)
    {
     if($this->db->insert("customerfdbk",$data))
      return true; 
    }
    function delcustomerfdbk($id)
    {
      $this->db->delete("customerfdbk","id=".$id);
    }
    function delbanner($id)
    {
      $this->db->delete("tbl_slider","id=".$id);
    }
    function delcontact($id)
    {
      $this->db->delete("contact","id=".$id);
    }
    function delsocial($id)
    {
      $this->db->delete("social","id=".$id);
    }
    function delfaq($id)
    {
      $this->db->delete("faq","id=".$id);
    }
    function delgallery($id)
    {
      $this->db->delete("gallery","id=".$id);
    }
     function galleryadd($data1)
    {
     if($this->db->insert("gallery",$data1))
      return true; 
    }
     function servicesadd($data1)
    {
     if($this->db->insert("services",$data1))
      return true; 
    }
    function delservices($id)
    {
      $this->db->delete("services","id=".$id);
    }
    function delcounter($id)
    {
      $this->db->delete("counter","id=".$id);
    }
    function counteradd($data)
    {
      if($this->db->insert("counter",$data))
      return true;
    }
     function delhomecontents($id)
    {
      $this->db->delete("home","id=".$id);
    }
    function homecontentsadd($data)
    {
      if($this->db->insert("home",$data))
      return true;
    }
    function aboutcontentadd($data)
    {
      if($this->db->insert("about",$data))
      return true;
    }
     function delaboutcontent($id)
    {
      $this->db->delete("home","id=".$id);
    }
    function delconsultation($id)
    {
      $this->db->delete("consultation","id=".$id); 
    }
    function propertiesadd($data)
    {
       if($this->db->insert("properties",$data))
      return true;
    }
    function propertiesimageadd($data1)
    {
      if($this->db->insert("propertyimage",$data1))
      return true;
    }
    function delpropertiesimage($id)
    {
     $this->db->delete("propertyimage","id=".$id);
    }
    function delproperties($id)
    {
      $this->db->delete("properties","id=".$id);
    }
    function propertyformadd($data)
    {
      if($this->db->insert("propertyform",$data))
      return true;
    }
    function delpropertyform($id)
    {
      $this->db->delete("propertyform","id=".$id);
    }
}

?>