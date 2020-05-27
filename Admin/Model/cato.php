<?php
require_once 'connect.php';
class cato{
	function __construct(){

		}
	  function addcato($name){
        	$db = new connect();
        	$select="INSERT INTO `type_product`( name) VALUES ('$name')";
        	$result= $db-> exec($select);	
        	if ($result){
        		return true;
        	} else {
        		return false;
        	}
        }
      function getList(){
        	$db = new connect();
        	$sql="SELECT * FROM type_product ";
        	$result = $db -> getList($sql);
        	$rows=$result->fetchAll();
        	return $rows;
        	
        }
     function selectById($id){
            $db=new connect();
            $select="SELECT * FROM type_product WHERE id=$id";
            $results = $db->getList($select);
            $result= $results->fetch();
            return $result;
        }
    function updateById($name, $id){
            $db = new connect();
            $update="UPDATE `type_product` SET name='$name' WHERE id=$id";
            $result= $db-> exec($update);   
            if ($result){
                return true;
            } else {
                return false;
            }
        }
    function deleteById($id){
            $db=new connect();
            $select="DELETE  FROM type_product WHERE id=$id";
            $result= $db-> exec($select);   
            if ($result){
                return true;
            } else {
                return false;
            }
        }


}


?>