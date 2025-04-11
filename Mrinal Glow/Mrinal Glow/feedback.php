<?php
session_start();
$conn=mysqli_connect("localhost","root", "", "mrinal glow");
if(mysqli_connect_error()){
    echo"<script>
    alert('cannot connect to database');
   
    </script>";
    exit();
}

    
    if(isset($_POST['Submit'])){
      
        $name = $_POST['name'];
        $contact = $_POST['contact'];
        $message = $_POST['message'];
       
   
        
        $sql = "INSERT INTO `feedback`(`Name`, `Email_Phone`, `Message`) VALUES ('$name',' $contact','$message')";
    
        if($conn->query($sql) === TRUE){
           echo" <script>
            alert('Feedback Submitted');
            window.location.href='index.php';
            </script>";
    }
        } else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
       
        $conn->close();
    
  
    ?>