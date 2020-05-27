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
     function login($username,$password){
        $status=0;
        $tmpUser= array();
        $db= new connect();
        $select="SELECT * FROM account WHERE username='$username'";
        $result= $db->getInstance($select);
        if($result == null){
           
                $tmpUser[0]=0;
                $tmpUser[1]="";
                $tmpUser[2]="";

            } else {
                if(password_verify($password,$result['password'])){
                $tmpUser[0]=2;
                $tmpUser[1]=$result["fullname"];
                $tmpUser[2]=$result["avatar"];
                $tmpUser[3]=$result["vaitro"];

            } else {
                $tmpUser[0]=1;
                $tmpUser[1]=$result["username"];
                $tmpUser[2]=$result["avatar"];
            }

        } 
        return $tmpUser;
    }
     


}


?>