<?php
//load core functions
require_once('functions.php');

//always display errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//start session
session_start();

//detect page
$page=detectPage();

// detect login
$currentUser=null;

//connect database
$db = new PDO('mysql:host=localhost;dbname=demo1;charset=utf8', 'root', '');

if(isset($_SESSION['userId'])){
  $currentUser= findUserById($_SESSION['userId']);
  
  
}

 /*<?php
// PHP hiển thị lỗi
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Khởi tạo session
session_start();
// Gán biến page giống với tên file
$page = basename($_SERVER['SCRIPT_NAME'], '.php');
// Kết nối CSDL
$db = new PDO('mysql:host=localhost;dbname=btcn08;charset=utf8', 'root', 'root');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// Kiểm tra thông tin người dùng
$currentUser = null;
require_once 'functions.php';
if (isset($_SESSION['userId'])) {
  $currentUser = findUserById($_SESSION['userId']);
}*/
