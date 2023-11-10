<?php

class Profile extends Main_controller
{
  public function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
    if(isset($_SESSION['users'])){
      $this->load_views('profile');
    }else{
      header("Location: " . $this->base_url('halaman'));
      exit;
    }
  }
}
