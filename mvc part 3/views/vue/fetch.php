<?php

//fetch.php;

$connect = new PDO("mysql:host=localhost; dbname=testpdo", "root", "1234");

if(isset($_POST['query']))
{
 $query = "
 SELECT customer_first_name FROM table6 
 WHERE customer_first_name LIKE '%".trim($_POST["query"])."%'
 ";

 $statement = $connect->prepare($query);

 $statement->execute();

 $result = $statement->fetchAll();

 $output = '';

 foreach($result as $row)
 {
  $output .= '
  <li class="list-group-item contsearch">
   <a href="javascript:void(0)" class="gsearch" style="color:#333;text-decoration:none;">'.$row["customer_first_name"].'</a>
  </li>
  ';
 }

 echo $output;
}

if(isset($_POST['email']))
{
 $query = "
 SELECT * FROM table6 
 WHERE customer_first_name = '".trim($_POST["email"])."' 
 LIMIT 1
 ";

 $statement = $connect->prepare($query);

 $statement->execute();

 $result = $statement->fetchAll();

 $output = '
 <table class="table table-bordered table-striped">
 ';

 foreach($result as $row)
 {
  $output .= '
  <tr>
   <input type="text" value="'.$row["customer_email"].'" class="form-control input-lg"></input>
   <input type="text" value="'.$row["customer_id"].'" class="form-control input-lg mt-3"></input>
   <input type="text" value="'.$row["customer_first_name"].'" class="form-control input-lg mt-3"></input>
   <input type="text" value="'.$row["customer_last_name"].'" class="form-control input-lg mt-3"></input>
  </tr>
  ';
 }
 $output .= '</table>';

 echo $output;
}





if(isset($_POST['quer']))
{
 $query = "
 SELECT nom FROM homme 
 WHERE nom LIKE '%".trim($_POST["quer"])."%'
 ";

 $statement = $connect->prepare($query);

 $statement->execute();

 $result = $statement->fetchAll();

 $output = '';

 foreach($result as $row)
 {
  $output .= '
  <li class="list-group-item contsearch">
   <a href="javascript:void(0)" class="gsearch" style="color:#333;text-decoration:none;">'.$row["nom"].'</a>
  </li>
  ';
 }

 echo $output;
}




