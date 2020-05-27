<?php
require_once 'connect.php';
class user{
	function __construct(){

		}
	  function adduser($fullname, $username,$vaitro,$password,$avatar){
        	$db = new connect();
        	$select="INSERT INTO `account`( fullname, username,vaitro,password,avatar) VALUES ('$fullname', '$username',$vaitro,'$password','$avatar')";
        	$result= $db-> exec($select);	
        	if ($result){
        		return true;
        	} else {
        		return false;
        	}
        }
      function getList(){
        	$db = new connect();
        	$sql="SELECT * FROM account ";
        	$result = $db -> getList($sql);
        	$rows=$result->fetchAll();
        	return $rows;
        	
        }
     function selectById($id){
            $db=new connect();
            $select="SELECT * FROM account WHERE id=$id";
            $results = $db->getList($select);
            $result= $results->fetch();
            return $result;
        }
    function updateById($fullname, $username,$vaitro,$password,$avatar,$id){
            $db = new connect();
            $update="UPDATE `account` SET fullname='$fullname', username='$username', vaitro=$vaitro, password='$password',avatar='$avatar' WHERE id=$id";
            $result= $db-> exec($update);   
            if ($result){
                return true;
            } else {
                return false;
            }
        }
    function deleteById($id){
            $db=new connect();
            $select="DELETE  FROM account WHERE id=$id";
            $result= $db-> exec($select);   
            if ($result){
                return true;
            } else {
                return false;
            }
        }


}


?>