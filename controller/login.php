<?php

class Login extends Main_controller
{
  public function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
    if (isset($_SESSION['users'])) {
      header("Location: " . $this->base_url('home'));
      exit;
    } else {
      $this->load_views('login');
    }
  }
}
