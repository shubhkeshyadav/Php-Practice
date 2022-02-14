<?php

$conn = mysqli_connect("localhost","root","","test");

function pr($data)
{ 
  echo "<pre>";
    print_r($data);
  echo "</pre>";
}

function createItem($arr)
{ 
  $uploadedFileName = storeItemImage();
  $item_code  = isset($arr['item_code'])?$arr['item_code']:'';
  $item_name  = isset($arr['item_name'])?$arr['item_name']:'';
  $uom        = isset($arr['uom'])?$arr['uom']:'';
  $item_rate  = isset($arr['item_rate'])?$arr['item_rate']:'';

  $con =  $GLOBALS['conn'];

  $sql = "INSERT INTO items (item_code, item_name, uom,item_rate,image)
  VALUES ('$item_code', '$item_name', '$uom','$item_rate','$uploadedFileName')";

  if (mysqli_query($con, $sql)) 
  {
    return true;
  } 

  return false;
}

function storeItemImage()
{
  $file = $_FILES['image'];

  $uploadedFileName = '';

  if(isset($_FILES['image']))
  { 
      $target_dir = "uploads/";
      $target_file = $target_dir . basename($_FILES["image"]["name"]);

      if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file))
      {
        $uploadedFileName = $_FILES["image"]["name"];
      }
  }

  return $uploadedFileName;
}

function getSuggestion()
{
  $keyword =trim($_POST['keyword']);

  $data =   [];
  $conn =  $GLOBALS['conn'];

 $sql = "SELECT id, item_name from items where item_name like '%$keyword%' OR item_code like '%$keyword%'";
  $result = $conn->query($sql);

  if (isset($result->num_rows) && $result->num_rows > 0)
  { 

    while($row = $result->fetch_assoc()) 
    {
      $data[$row['id']]  = $row['item_name'];
    }
  } 

  return $data;
}

function getItemDetail($id)
{

  $data   =   [];
  $conn   =   $GLOBALS['conn'];
  $sql    =   "SELECT * from items where id = $id";
  $result =   $conn->query($sql);

  if (isset($result->num_rows) && $result->num_rows > 0)
  { 
    $data = $result->fetch_assoc();
  } 

  return $data;
}

function createOrder()
{ 
  $data = $_POST;

  $con =  $GLOBALS['conn'];

  $client_code = $data['client_code'];
  $client_name = $data['client_name'];
  $contact_no = $data['contact_no'];
  $address = $data['address'];
  $items = $data['items'];
  $qtys = $data['qty'];
  $amts = $data['amt'];

  $sql = "INSERT INTO users (client_code, client_name, contact_no,address)
  VALUES ('$client_code', '$client_name', '$contact_no','$address')";

  if (mysqli_query($con, $sql)) 
  {
    $userId = mysqli_insert_id($con);


    
    if($items)
    { 
      foreach($items as $key => $itemId)
      {
        $qty = isset($qtys[$key])?$qtys[$key]:'';
        $amt = isset($amts[$key])?$amts[$key]:'';

        if($qty & $amt)
        {
          $sql = "INSERT INTO orders (qty, amt, user_id,item_id)
          VALUES ('$qty', '$amt', '$userId','$itemId')";
          mysqli_query($con, $sql);
        }

      }

      return true;
    }
  } 

  return false;

}

?>