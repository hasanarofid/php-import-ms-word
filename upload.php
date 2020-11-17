<?php

$fileupload = 'fileku.doc';
$tmpName  = $_FILES['userfile']['tmp_name']; 
 
if (move_uploaded_file($tmpName, $fileupload)) 
{
    echo "<p>File telah diupload</p>";
} 
else
{
    echo "<p>File gagal diupload</p>";
}
 
/* proses baca isi dari file fileku.doc
   isi file lalu disimpan dalam file data.txt */
 
// path lokasi direktori msword
$path = 'E:/xampp/htdocs/msword/';
 
$filetxt = 'data.txt';
exec($path.'antiword.exe -m cp850.txt '.$fileupload.' > '.$filetxt);
 
/* proses pembacaan karakter pada data.txt
   untuk selanjutnya diproses untuk dihitung jumlah masing-masing huruf vokal */
    
$file = fopen($filetxt, 'r');
 
$jumA = 0; $jumI = 0; $jumU = 0;
$jumE = 0; $jumO = 0;
 
while (!feof($file))
{
    $char = strtoupper(fgetc($file));
    if ($char == "A") $jumA++;
    else if ($char == "I") $jumI++;
    else if ($char == "U") $jumU++;
    else if ($char == "E") $jumE++;
    else if ($char == "O") $jumO++;
}
fclose($file);
 
// tampilkan jumlah masing-masing huruf vokal
echo "Jumlah huruf A : ".$jumA."<br>";
echo "Jumlah huruf I : ".$jumI."<br>";
echo "Jumlah huruf U : ".$jumU."<br>";
echo "Jumlah huruf E : ".$jumE."<br>";
echo "Jumlah huruf O : ".$jumO."<br>";
?>