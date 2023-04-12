<?php


    $name=$_POST['fname'];
    $mail=$_POST['mail'];
    $mobileno=$_POST['number'];
    $Date=$_POST['date'];
    $time=$_POST['time'];
   
    
   
        
            if(preg_match("/^[a-zA-Z-']*$/",$name)){
                
                    
                        if(strlen($mobileno)==10)
                        {
                            if(preg_match("/^([a-z A-Z 0-9 @+.-]+)(@[a-z A-Z 0-9 @+.-]+)(\.[a-zA-Z0-9])*$/",$mail)){
                                    echo '<script>alert("REGISTERED SUCCESSFULLY");</script>';
                            }
                            else{
                                echo '<script>alert("INVALID MAIL");</script>';
                            }
                        }
                       else {
                           echo '<script>alert("INVALID MOBILENO");</script>';
                       }
                     } 
            else{
            echo '<script>alert("INVALID NAME");</script>';}    
    $servername="localhost";
    $username="root";
    $password="";
    
    //$conn=new mysqli($servername,$username,$password);
    $conn=new mysqli($servername,$username,$password,"mydb");
    
    if($conn->connect_error)
    {
        die("connect fail:".$conn->connect_error);
    }
    echo "<h1><Center>registered sucessfully</center></h1>";
    
    $sql = "CREATE DATABASE myDB";
   //$sql = "Drop database mydb";
/*if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
 */
 /*
$sql2="create table appointment(name varchar(20),email varchar(30),mobile int,Appdate date,Apptime time)";
if ($conn->query($sql2) === TRUE) {
  echo "table created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}*/
    $sql3 = "Insert into appointment values ('".$name."','".$mail."','".$mobileno."','".$Date."','".$time."');";
if ($conn->query($sql3) === TRUE) {
  echo "Insertion Success";
} else {
  echo "Error kame: " . $conn->error;
}
$conn->close();
   
?>