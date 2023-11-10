<?php
class Database_conn
{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'project_uts';
    private $conn;

    public function __construct()
    {
        $this->createDatabase();
        $this->connectDatabase();
        $this->createTable();
    }

    private function connectDatabase()
    {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
    private function createDatabase()
    {
        $conn = new mysqli($this->host, $this->username, $this->password);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "CREATE DATABASE IF NOT EXISTS $this->database";
        if ($conn->query($sql) === TRUE) {
        }
        $conn->close();
    }

    private function createTable()
    {
        $sql = 'CREATE TABLE IF NOT EXISTS users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(255),
            password TEXT,
            location VARCHAR(255),
            email VARCHAR(255),
            phone VARCHAR(255)
            );';
        $sql .= 'CREATE TABLE IF NOT EXISTS member (
            id_member INT AUTO_INCREMENT PRIMARY KEY,
            nama VARCHAR(255),
            tanggal_lahir VARCHAR(255),
            phone_number VARCHAR(255),
            join_time VARCHAR(255)
            );';
        $sql .= 'CREATE TABLE IF NOT EXISTS barang_elektronik (
            kode INT AUTO_INCREMENT PRIMARY KEY,
            Jenis VARCHAR(255),
            nama VARCHAR(255),
            harga INT,
            satuan VARCHAR(255),
            bahan VARCHAR(255)
            );';
        // $sql .=
        //     "CREATE TABLE IF NOT EXISTS product (
        //     id INT AUTO_INCREMENT PRIMARY KEY,
        //     nama VARCHAR(255),
        //     harga VARCHAR(255),
        //     deskripsi TEXT,
        //     file VARCHAR(255)
        //     );";
        // $sql .=
        //     "CREATE TABLE IF NOT EXISTS cart (
        //     id INT AUTO_INCREMENT PRIMARY KEY,
        //     user_id VARCHAR(255),
        //     product_id VARCHAR(255),
        //     jumlah TEXT
        //     );";
        // $sql .=
        //     "CREATE TABLE IF NOT EXISTS tabel_admin (
        //     id INT AUTO_INCREMENT PRIMARY KEY,
        //     nomor_induk VARCHAR(255),
        //     nama_lengkap VARCHAR(255),
        //     tanggal_lahir VARCHAR(255)
        //     );";

        if ($this->conn->multi_query($sql) === true) {
            do {
                if ($result = $this->conn->store_result()) {
                    $result->free();
                }
            } while ($this->conn->next_result());
        } else {
            die("Error creating table: " . $this->conn->error);
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }
}
