<?php
require_once 'connect.php';
class catelogy{
	function __construct(){

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
            $select="SELECT * FROM products WHERE id_type=$id";
            $results = $db->getList($select);
            $result= $results->fetchAll();
            return $result;
        }
    
   
    function getName($id){
            $db=new connect();
            $select="SELECT * FROM type_product WHERE id=$id";
            $results = $db->query($select);
            $result= $results->fetch();
            return $result['name'];

      }
    function getListName(){
            $db=new connect();
            $select="SELECT * FROM type_product";
            $results = $db->query($select);
            $result= $results->fetchAll();
            return $result;
    }
    
   



     


}


?>