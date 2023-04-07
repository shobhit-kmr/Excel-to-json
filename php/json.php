<?php

$a =$_POST['ajx'];
$resultjson=json_decode($a,true );

$localhost="localhost";
$username="root";
$password="";
$database="books";


$conn=mysqli_connect($localhost,$username,$password,$database);


for($i=0;$i<count($resultjson['Table 1']);$i++){
$query= "INSERT INTO `book` (`book_id`,`Title`,`Author`,`Subject`,`Publisher`,`Book_Name`) VALUES ('".$resultjson['Table 1'][$i]['id']."','".$resultjson['Table 1'][$i]['Title']."','".$resultjson['Table 1'][$i]['Author']."','".$resultjson['Table 1'][$i]['Subject']."','".$resultjson['Table 1'][$i]['Publisher']."','".$resultjson['Table 1'][$i]['Book_Name']."')";
echo $query."<br>";
$result=mysqli_query($conn,$query);

if(isset($result))
{
    echo "done";
}

else{
    echo "not done";
}

}





?>


