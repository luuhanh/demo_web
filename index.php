<?php
	session_start();
	include './Model/user.php';
	include './Model/product.php';
	include './Model/catology.php';

	if(!isset($_GET['page'])){
		$page = 'df';
	} else {
		$page=$_GET['page'];
	}

switch ($page) {
	case 'df':
		if(isset($_POST['login'])){
			$username = $_POST['name'];
			$password = $_POST['password'];
			$user = new user();
			$tmpUser = $user ->login($username,$password);
			if($tmpUser[0]==0){
				$msg="Tài khoản không tồn tại!";
			}else if($tmpUser[0]==1){
				$msg ="Sai mật khẩu";
			} else if($tmpUser[0]==2){
				$_SESSION['user']=$tmpUser[1];
				$_SESSION['avatar']=$tmpUser[2];
				$_SESSION['vaitro']=$tmpUser[3];

			}
		}
		$product=new product();
		$items=$product ->getList();
		$VIEWNAME='./Page/product.php';
		break;
	case 'dangky':
		if(isset($_POST['btn_register'])){
			$username = $_POST['name'];
			$password = $_POST['password'];
			$re_password = $_POST['re_password'];
			$fullname = $_POST['fullname'];
			$email = $_POST['email'];
			
			$file = $_FILES['avatar']['tmp_name'];
            $path = "./Public/Images/User/".$_FILES['avatar']['name'];
            move_uploaded_file($file, $path);
            $avatar=basename($_FILES['avatar']['name']);
           if($avatar==''){
           	$avatar='default.png';
           }

			$vaitro=0;
			$password= password_hash($password, PASSWORD_DEFAULT);
			$user = new user();
		$result = $user -> adduser($fullname, $username,$vaitro,$password,$avatar);
		if($result==true){
			$MESSAGE = "Đăng ký thành công!";
			$success=true;
		} else {
			$MESSAGE = "Đăng ký không thành công!";
			$success=false;
		}
		}

		$VIEWNAME='./Page/signup.php';
		break;
	case 'dangxuat':
		unset($_SESSION['user']);
		unset($_SESSION['avatar']);
		unset($_SESSION['vaitro']);
		$product=new product();
		$items=$product ->getList();

		$VIEWNAME='./Page/product.php';
		break;
		break;
	case 'chitiet':
		if(!isset($_GET['id'])){
			$VIEWNAME='./Page/notfound.php';
		} else {
			$id=$_GET['id'];
			$VIEWNAME='./Page/detail.php';
			$product= new product();
			$result=$product ->selectById($id);
		}
		break;
	case 'giohang':
		$VIEWNAME = './Page/cart.php';
		break;
	case 'danhmuc':
		
		if(!isset($_GET['id_danhmuc'])){
			$VIEWNAME='./Page/notfound.php';
		} else {
			$id_danhmuc=$_GET['id_danhmuc'];
			$VIEWNAME = './Page/catelogy.php';	
			$catelogy= new catelogy();
			$items=$catelogy ->selectById($id_danhmuc);
			$name_cato=$catelogy->getName($id_danhmuc);
			
		}
		break;
	
}
require_once 'layout.php';
?>