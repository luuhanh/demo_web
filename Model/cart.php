<?php
require_once 'connect.php';
class cart{
	function __construct(){

		}
	 function addtocart($name, $description,$count,$img,$type,$price){
            $db = new connect();
            $select="INSERT INTO `products`( name, description,count,img,id_type,price) VALUES ('$name', '$description',$count,'$img',$type,'$price')";
            $result= $db-> exec($select);   
            if ($result){
                return true;
            } else {
                return false;
            }
        }
      function getList(){
            $db = new connect();
            $sql="SELECT * FROM products ";
            $result = $db -> getList($sql);
            $rows=$result->fetchAll();
            return $rows;
            
        }
     function selectById($id){
            $db=new connect();
            $select="SELECT * FROM products WHERE id=$id";
            $results = $db->getList($select);
            $result= $results->fetch();
            return $result;
        }
    function updateById($name, $description,$count,$img,$type,$price,$id){
            $db = new connect();
            $update="UPDATE `products` SET name='$name', description='$description', count=$count, img='$img',id_type='$type', price='$price' WHERE id=$id";
            $result= $db-> exec($update);   
            if ($result){
                return true;
            } else {
                return false;
            }
        }
    function deleteById($id){
            $db=new connect();
            $select="DELETE  FROM products WHERE id=$id";
            $result= $db-> exec($select);   
            if ($result){
                return true;
            } else {
                return false;
            }
        }



     


}


?>