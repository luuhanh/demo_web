<?php
  session_start();
  include_once './Model/product.php'; 
  include_once './Model/cato.php'; 
  include_once './Model/user.php'; 

  if(isset($_SESSION['vaitro'])){
    if($_SESSION['vaitro']==1){

    }else{
      header('Location:../index.php');
    }
  }else{
      header('Location:../index.php');
    }

  if(isset($_GET['page'])){
    $view=$_GET['page'];
  } else {
    $view = 'trangchinh.php';
  }
  if(isset($_GET['action'])){
    $action=$_GET['action'];
  }else{
    $action='df';
  }
  if(isset($_GET['id'])){
    $id=$_GET['id'];
  }

  switch ($view) {
    case 'trangchinh':
      $VIEWNAME= 'trangchinh.php';
      break;
    case 'sanpham':
            switch ($action) {
              case 'df':
                if(isset($_POST['goback'])){
                  header("Location:index.php?page=sanpham"); //  sự kiện trở về trang chủ
                }
                
                if(isset($_POST['addproduct'])){
                  $name=$_POST['name'];
                  $description=$_POST['description'];
                  $file = $_FILES['img']['tmp_name'];
                  $path = "../Public/Images/Products/".$_FILES['img']['name'];
                  move_uploaded_file($file, $path);
                  $img=basename($_FILES['img']['name']);
                  $price=$_POST['price'];
                  $count=$_POST['count'];
                  $type=$_POST['type'];
                  $product = new product();
                  $result = $product->addproduct($name, $description,$count,$img,$type,$price);
                  if($result) {
                    $success=true; // thêm biến này để làm màu cho thông báo , thành công màu xanh
                    $msg="Thêm thành công !";
                  } else {
                    $success=false; // thất bại màu đỏ
                    $msg="Thêm thất bại";
                  }
                }else if (isset($_POST['updateproduct'])){
                  $id=$_POST['id'];
                  $name=$_POST['name'];
                  $description=$_POST['description'];
                  
                  $price=$_POST['price'];
                  $count=$_POST['count'];
                  $type=$_POST['type'];
                  $product = new product();
                  $result = $product->updateById($name, $description,$count,$type,$price,$id);
                  if($result) {
                    $success=true; // thêm biến này để làm màu cho thông báo , thành công màu xanh
                    $msg="Cập nhật thành công !";
                  } else {
                    $success=false; // thất bại màu đỏ
                    $msg="Cập nhật thất bại";
                  }

                } else{
                  $product = new product();
                
                }
              
                $items= $product->getList();
                $VIEWNAME= 'Product/product.php';
                break;
              
              case 'view':
                $id=$_GET['id'];
                $product= new product();
                $cato=new cato();
                $rows=$cato->getList();
                $result=$product->selectById($id);
                extract($result);
                $VIEWNAME= 'Product/view-product.php';
                break;
              case 'add':
                $cato=new cato();
                $rows=$cato->getList();
                $VIEWNAME='Product/add-product.php';
              break;
              case 'edit':
                $id=$_GET['id'];
                $cato=new cato();
                $rows=$cato->getList();
                $product= new product();
                $result=$product->selectById($id);
                extract($result);
                $VIEWNAME= 'Product/view-product.php';
                break;
              case 'delete':
                $id=$_GET['id'];
                $product= new product();
                $result=$product->deleteById($id);
                if($result) {
                    $success=true; // thêm biến này để làm màu cho thông báo , thành công màu xanh
                    $msg="Xóa thành công !";
                  } else {
                    $success=false; // thất bại màu đỏ
                    $msg="Xóa thất bại";
                  }

                $items= $product->getList();
                $VIEWNAME= 'Product/product.php';
                break;

            }

            
      break;
    case 'taikhoan':
      switch ($action) {
              case 'df':
                if(isset($_POST['goback'])){
                  header("Location:index.php?page=taikhoan"); //  sự kiện trở về trang chủ
                }
                
                if(isset($_POST['adduser'])){
                  $fullname=$_POST['fullname'];
                  $username=$_POST['username'];
                  $password=$_POST['password'];
                  $avatar=$_POST['avatar'];
                  $vaitro=$_POST['vaitro'];
                  
                  $user = new user();
                  $result = $user->adduser($fullname, $username,$vaitro,$password,$avatar);
                  if($result) {
                    $success=true; // thêm biến này để làm màu cho thông báo , thành công màu xanh
                    $msg="Thêm thành công !";
                  } else {
                    $success=false; // thất bại màu đỏ
                    $msg="Thêm thất bại";
                  }
                }else if (isset($_POST['updateuser'])){
                  $id=$_POST['id'];
                  $fullname=$_POST['fullname'];
                  $username=$_POST['username'];
                  $password=$_POST['password'];
                  $avatar=$_POST['avatar'];
                  $vaitro=$_POST['vaitro'];
                  $user = new user();
                  $result = $user->updateById($fullname, $username,$vaitro,$password,$avatar,$id);
                  if($result) {
                    $success=true; // thêm biến này để làm màu cho thông báo , thành công màu xanh
                    $msg="Cập nhật thành công !";
                  } else {
                    $success=false; // thất bại màu đỏ
                    $msg="Cập nhật thất bại";
                  }

                } else{
                  $user = new user();
                
                }
              
                $items= $user->getList();
                $VIEWNAME= 'Account/account.php';
                break;
              
              case 'view':
                $id=$_GET['id'];
                $user= new user();
                $result=$user->selectById($id);
                extract($result);
                $VIEWNAME= 'Account/view-account.php';
                break;
              case 'add':
                $user=new user();
                $rows=$user->getList();
                $VIEWNAME='Account/add-account.php';
              break;
              case 'edit':
                $id=$_GET['id'];
                $user=new user();
                
               
                $result=$user->selectById($id);
                extract($result);
                $VIEWNAME= 'Account/view-account.php';
                break;
              case 'delete':
                $id=$_GET['id'];
                $user= new user();
                $result=$user->deleteById($id);
                if($result) {
                    $success=true; // thêm biến này để làm màu cho thông báo , thành công màu xanh
                    $msg="Xóa thành công !";
                  } else {
                    $success=false; // thất bại màu đỏ
                    $msg="Xóa thất bại";
                  }

                $items= $user->getList();
                $VIEWNAME= 'Account/account.php';
                break;

            }

      break;
    case 'danhmuc';
            switch ($action) {
              case 'df':
                if(isset($_POST['goback'])){
                  header("Location:index.php?page=danhmuc"); //  sự kiện trở về trang chủ
                }
                if(isset($_POST['addcato'])){
                  $name=$_POST['name'];
                  
                  $cato = new cato();
                  $result = $cato->addcato($name);
                  if($result) {
                    $success=true; // thêm biến này để làm màu cho thông báo , thành công màu xanh
                    $msg="Thêm thành công !";
                  } else {
                    $success=false; // thất bại màu đỏ
                    $msg="Thêm thất bại";
                  }
                }else if (isset($_POST['updatecato'])){
                  $id=$_POST['id'];
                  $name=$_POST['name'];
                  
                  $cato = new cato();
                  $result = $cato->updateById($name,$id);
                  if($result) {
                    $success=true; // thêm biến này để làm màu cho thông báo , thành công màu xanh
                    $msg="Cập nhật thành công !";
                  } else {
                    $success=false; // thất bại màu đỏ
                    $msg="Cập nhật thất bại";
                  }

                } else{
                  $cato = new cato();
                
                }
              
                $items= $cato->getList();
                $VIEWNAME= 'Danhmuc/cato.php';
                break;
                 
              case 'add':
                $VIEWNAME='Danhmuc/add-cato.php';
              break;
              case 'edit':
                $id=$_GET['id'];
                $cato= new cato();
                $result=$cato->selectById($id);
                extract($result);
                $VIEWNAME= 'Danhmuc/view-cato.php';
                break;
             

            
              
             
            }
      break;
  }
  require_once './View/layout.php';
?>

