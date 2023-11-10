<?php

class Register extends Main_controller
{
  public function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
    if (isset($_SESSION['users'])) {
      header("Location: " . $this->base_url('halaman'));
      exit;
    } else {
      $this->load_views('register');
    }
  }
}
