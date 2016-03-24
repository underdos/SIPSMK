<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_models extends CI_Model {
	public function getDataBy($username, $password){
    $password = md5($password);
    $query = $this->db->query("select nama from user where username='$username' and password='$password';");
    if($query->num_rows() > 0){
      foreach($query->result() as $result){
        $sess = array(
          'username' => $username,
          'nama'     => $result->nama
        );
        $this->session->set_userdata($sess);
        redirect(base_url().'home');
      }
    }else{
      $this->session->set_flashdata('status', 'Username atau Password Salah');
      redirect(base_url().'login');
    }
  }
}
