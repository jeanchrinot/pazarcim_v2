<?php
// all functions for turkish are here
// require connect.php
//require_once("includes/connect.php");

function filterProducts($filter){
	global $connect;
	$result = "";
	 if($filter!=""){
          $get_products="";
          if($filter=="enucuz"){
              $get_products = $connect->query("SELECT * FROM products WHERE featured=1 ORDER BY price");
          }
          else if($filter=="enpahali"){
              $get_products = $connect->query("SELECT * FROM products WHERE featured=1 ORDER BY price DESC");
          }
          else if($filter=="sebze"){
              $get_products = $connect->query("SELECT * FROM products WHERE featured=1 AND category=1");
          }
          else if($filter=="meyve"){
              $get_products = $connect->query("SELECT * FROM products WHERE featured=1 AND category=2");
          }
          else{
              $get_products = $connect->query("SELECT * FROM products WHERE featured=1");
          }


        if($get_products->rowCount()!=0){

        	$result = $get_products;
        }
        else{
        	$result = "noresult";
        }

        return $result;
  }

}

function getProducts($limit){
	global $connect;
	$result = "";
	$query = $connect->prepare("SELECT * FROM products WHERE featured=1 ORDER BY id DESC LIMIT 15");
	$query->execute(array());
	if($query->rowCount()>0){
		return $query;
	}
	else{
		return "noresult";
	}

}

function getProduct($id){
	global $connect;
	$result = "";
	$query = $connect->prepare("SELECT * FROM products WHERE featured=1 AND id=?");
	$query->execute(array($id));
	if($query->rowCount()>0){
		return $query;
	}
	else{
		return "noresult";
	}

}


?>
