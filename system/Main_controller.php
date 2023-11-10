<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
require_once('Database_conn.php');

class Main_controller extends Database_conn
{
    public $base_url;
    public $url;
    public $apppath;
    public function __construct()
    {
        parent::__construct();
        session_start();
        $this->url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
        $this->url .= "://" . @$_SERVER['HTTP_HOST'];
        $this->url .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
        $this->apppath = $_SERVER['DOCUMENT_ROOT'];
    }

    public function load_views($file = null, $data = [])
    {
        if (!empty($data) && is_array($data)) {
            foreach ($data as $key => $value) {
                $$key = $value;
            }
        }
        require_once('./views/' . $file . '.php');
    }
    public function base_url($url = '')
    {
        return $this->url . $url;
    }
}
