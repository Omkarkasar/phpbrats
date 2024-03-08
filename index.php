<php
$servername="localhost";
$username="root";
$password="";
$dbName="PHPCRUD";


$conn=@mysqli_connect($servername,$username,$password,$dbName)
if(conn)
{
    echo "connection is succesful";
}
else{
 echo "connection is unsuccesful";
}



>