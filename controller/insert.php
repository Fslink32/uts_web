<?php

class Insert extends Main_controller
{
  private $conn;
  public function __construct()
  {
    parent::__construct();
    $db = new Database_conn();
    $this->conn = $db->getConnection();
  }
  public function index()
  {
    if (isset($_SESSION['users'])) {
      $this->load_views('insert');
    } else {
      header("Location: " . $this->base_url('home'));
      exit;
    }
  }

  public function store()
  {
    if (!empty($_POST)) {
      $kode = $_POST['kode'];
      $jenis = $_POST['jenis'];
      $nama = $_POST['nama'];
      $harga = intval($_POST['harga']);
      $satuan = $_POST['satuan'];
      $bahan = $_POST['bahan'];
      $sql = "INSERT INTO barang_elektronik (kode, jenis, nama, harga, satuan, bahan)
                VALUES ('$kode', '$jenis', '$nama','$harga','$satuan','$bahan')";
      if ($this->conn->query($sql) === true) {
        header("Location: " . $this->base_url('login'));
        exit;
      } else {
        header("Location: " . $this->base_url('register'));
        exit;
      }
    }
  }
}
