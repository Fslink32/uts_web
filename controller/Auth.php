<?php

class Auth extends Main_controller
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
    }

    public function login()
    {
        $id_member = $_POST['id_member'];
        $join_time = $_POST['join_time'];
        $sql = "SELECT * FROM member WHERE id_member = '$id_member'";
        $result = $this->conn->query($sql);
        $row = $result->fetch_assoc();
        // var_dump($row);
        // exit;
        if ($row) {
            if ($row['join_time'] == $join_time) {
                $_SESSION['users']['nama'] = $row['nama'];
                $_SESSION['users']['phone_number'] = $row['phone_number'];
                // $_SESSION['users']['location'] = $row['location'];
                // $_SESSION['users']['phone'] = $row['phone'];


                header("Location: " . $this->base_url('home'));
                exit;
            } else {
                header("Location: " . $this->base_url('login'));
                exit;
            }
        } else {
            header("Location: " . $this->base_url('login'));
            exit;
        }
    }
    public function register()
    {
        $nama = $_POST['nama'];
        $tanggal_lahir = date('Y-m-d', $_POST['tanggal_lahir']);
        $phone_number = $_POST['phone_number'];
        $id_member = intval($_POST['id_member']);
        // var_dump($id_member);
        // exit;
        $join_time = date('d-m-Y');
        $sql = "INSERT INTO member (id_member, nama, tanggal_lahir, phone_number, join_time)
                VALUES ('$id_member', '$nama', '$tanggal_lahir','$phone_number','$join_time')";
        if ($this->conn->query($sql) === true) {
            header("Location: " . $this->base_url('login'));
            exit;
        } else {
            header("Location: " . $this->base_url('register'));
            exit;
        }
    }
    public function logout()
    {
        session_destroy();
        header("Location: " . $this->base_url('login'));
        exit;
    }
}
