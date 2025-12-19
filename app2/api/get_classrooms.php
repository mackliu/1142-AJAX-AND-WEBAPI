<?php 
include_once "DB.php";

$Student=new DB('students');
$rows=$Student->all(" group by `classroom` ");
$temp=[];
foreach($rows as $row){
    $temp[]=$row['classroom'];
}
echo json_encode($temp);   