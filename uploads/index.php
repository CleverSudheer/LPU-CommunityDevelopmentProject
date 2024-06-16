<!DOCTYPE html>
<html lang="en">
<head>
    <title>uploade file</title>
</head>
<body>
    <form action="upload.php" method="POST"  enctype="multipart/form-data">
        <input type="file" name="file"><br><br>
        <button type="submit" name="submit" >UPLOAD</button>
    </form>
    
</body>
</html>

<!-- Simple php code to uploade img option -->

<!-- <?php 
$filename = $_FILES['file']['name'];
$tempname = $_FILES['file']['tmp_name'];
$folder = "uploads/".$filename;
echo"$folder";
move_uploaded_file($tempname, $folder);
?> -->
