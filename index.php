<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="prank.css"/>
    <title>LPU-NGO</title>
</head>
<body bgcolor="white">
    <!-- <div class="container"> -->
        
        <div class="login-box">
            <img src="lpu.png" alt="lpuimg" width="200" height="80" style="margin-top: 10px">
            <h2 style="text-align:center">Registration Form</h2>
            <p style="text-align:center">Community Development Project</p>
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <div class="field">
                    <label for="username">Uploade Photo</label>
                    <input type="file" name="file" required >
                </div>
                

                <div class="field input">
                    <label for="username">First Name</label>
                    <input type="varchar" name="firstname" maxlength="25" id="firstname" autocomplete="off" required>
                </div>

                <div class="field">
                    <label for="lastname">Last Name</label>
                    <input type="varchar" name="lastname" maxlength="25" id="lastname" autocomplete="off" required>
                </div>

                <div class="field">
                    <label for="email">email</label>
                    <input type="varchar" name="email" maxlength="30" id="email" autocomplete="off" required>
                </div>
                <div class="field">
                    <label for="regno">Reg No</label>
                    <input type="int" maxlength="8" name="regno" id="regno" autocomplete="off" required>
                </div>
                <div class="field">
                    <label for="MOBILE">Phone Number</label>
                    <input type="int" name="phno" maxlength="10" id="phno" autocomplete="off" required>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="SUBMIT" required>
                </div>
                
            </form>
            
        </div>
    <!-- </div> -->
    
</body>
</html>