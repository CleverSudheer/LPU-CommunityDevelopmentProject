<!DOCTYPE html>
<html>

<head>
    <title>register php</title>
    <link rel="stylesheet" href="prank.css"/>
    <style>
        .message{
            color: red;
            background-color: white;
            width: 30%;
            padding-top: 30px;
            padding-bottom: 30px;
            margin-top: 20%;
            border-radius:1.5rem 1.5rem 0 0;
            border-top: 2px solid black;
            border-left: 2px solid black;
        }

        .message2{
            background-color: white;
            width: 30%;
            margin-top: -1.3%;
            padding-top: 30px;
            padding-bottom: 30px;
            border-radius:0 0 1.5rem 1.5rem;
            border-bottom: 2px solid black;
            border-right: 2px solid black;
        }
        .btn2{
            background-color: aqua;
            text-align: center;
            font: bold;
            font-size:medium;
            font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            border-radius: 1rem;
            margin-left: 40%;
            margin-right: 40%;
            width: 20%;
        }
    </style>
</head>

<body bgcolor="white">
    <center>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "prank");
    
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
    
        // Taking all 5 values from the form data(input)
        $file =  $_POST['file'];
        $firstname =  $_POST['firstname'];
        $lastname =  $_POST['lastname'];
        $email =  $_POST['email'];
        $regno =  $_POST['regno'];
        $phno =  $_POST['phno'];
        // verify email
        $verify_query = mysqli_query($conn,"SELECT email FROM friends WHERE email='$email' ");
        if(mysqli_num_rows($verify_query) != 0){
            // echo "<script>alert('This Email is Already Used Try with Another One')</script>";
            echo "<div class='message'>
                      <p class='text'>This Email is Already Used</p>
                  </div> <br>" ;
            echo "<div class='message2'><a href='javascript:self.history.back()'><button class='btn2'>Go Back</button></a></div>";
            // echo "<script>location.replace('registerpage.php')</script>";
        }
        else{
            $sql = "INSERT INTO friends  VALUES ('$file','$firstname', 
            '$lastname','$email','$regno','$phno')";
        }
    
        // Performing insert query execution
        // here our table name is college

        
        
    
        if(mysqli_query($conn, $sql)){
            if (isset($_POST['submit'])) {
                $filename = $_FILES['file']['name'];
                $tempname = $_FILES['file']['tmp_name'];
                $folder = "uploads/".$filename;
                echo"$folder";
                move_uploaded_file($tempname, $folder);
            
                echo "<script>alert('Sucessfully register')</script>"; 
            
                header("Location: index.php?uploadesucess");
            }else{
                echo "sidhu";
            }

            //echo nl2br("\n$name\n $pass\n "
            //    . "$mobile\n $dob");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
    
        // Close connection
        ?>

    </center>
</body>
</html>