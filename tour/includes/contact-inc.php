<?php
if(isset($_POST["submit"])){
    require("database.php");
    $errors = array();
    // Validate name
    if(!preg_match("/^[A-Za-z ]+$/", $_POST["name"])) {
        $errors['name'] = "Must contain only letters and spaces.";
    }
 

if(empty($errors)){
    $sql = "INSERT INTO contact (email, phone, message) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if($stmt){
        mysqli_stmt_bind_param($stmt, "sss",$_POST["email"],$_POST["phone"],$_POST["message"]);        
        // Execute the statement
        mysqli_stmt_execute($stmt);
      // Save the image to file system if insert is successful
      if (mysqli_stmt_affected_rows($stmt) > 0) {
        echo
        "<script>
            alert('Message sent!');
            document.location.href = '../index.php';
        </script>";
    } else{
        echo
        "<script>
            alert('Error sending message. Pls try again.');
            document.location.href = '../index.php';
        </script>";
    }
    
    // Close the statement
    mysqli_stmt_close($stmt);
    } else {
        echo "<script>alert('Error preparing SQL statement. Pls try again.');
        document.location.href = '../index.php';
        </script>";
    }
}

mysqli_close($conn);
        
}


?>