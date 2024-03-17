<?php
require('connection.php');
include('../dashboard.php');


$statusMsg = ''; 
 
// File upload directory 
$targetDir = "../images/user/"; 
 
if(isset($_POST["submit"])){ 

  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $password = $_POST['password'];
  $email = $_POST['email'];
    if(!empty($_FILES["image"]["name"])){ 
        $fileName = basename($_FILES["image"]["name"]); 
        $targetFilePath = $targetDir . $fileName; 
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION); 
     
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            // Upload file to server 
            if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)){ 
                // Insert image file name into database 
                $insert = $connect->query("INSERT INTO users (first_name, last_name, password, email, image, updated_at) VALUES ('$first_name', '$last_name', '$password', '$email', '$fileName', NOW())"); 
                if($insert){ 
                    $statusMsg = "The file ".$fileName. " has been uploaded successfully."; 
                }else{ 
                    $statusMsg = "File upload failed, please try again."; 
                }  
            }else{ 
                $statusMsg = "Sorry, there was an error uploading your file."; 
            } 
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select a file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg; 
$connect->close();

?>