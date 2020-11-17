<html>
  <head>
    <title>Upload File</title>
  </head>
  <body>
    <form method="post" enctype="multipart/form-data" action="upload.php">
    Pilih file 
    <input type="hidden" name="MAX_FILE_SIZE" value="2000000"> 
    <input name="userfile" type="file">
    <input name="upload" type="submit" value="Upload">
    </form>
  </body>
</html>