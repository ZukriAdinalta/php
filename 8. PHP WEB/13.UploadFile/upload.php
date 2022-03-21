<!-- Upload File
1. Selain mengirim data berupa Query Param dan Form Post, kadang kita juga butuh melakukan upload file dari client ke server
2. Dan PHP Web juga menerima upload file
 -->

<!-- PHP Upload File
1. Di PHP, untuk file yang di upload dari server, kita bisa menangkapnya dari global variable $_FILES
2. Setiap ada file yang di upload, secara otomatis $_FILES akan berisi informasi seputar file yang di upload
3. https://www.php.net/manual/en/features.file-upload.post-method.php 
4. Saat di upload ke server, file akan secara otomatis disimpan di temporary folder di server, dari situ kita bisa pindahkan ke lokasi yang kita inginkan
-->

<!-- $_FILES
'$_FILES['userfile']['name']' => nama filenya
'$_FILES['userfile']['type']' => type filenya. contoh kita upload gmbar jd tipe gambarnya ".jpg, .png"
'$_FILES['userfile']['size']' => ukuran file yang di upload
'$_FILES['userfile']['tmp_name']' => file yang diupload yang diletakkan di server
'$_FILES['userfile']['error']' => misalnya upload nya ada error 
 -->
<!-- Kode : Menerima File Upload -->
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $fileName = $_FILES['upload_file']['name'];
    $fileType = $_FILES['upload_file']['type'];
    $fileSize = $_FILES['upload_file']['size'];
    $fileTmpName = $_FILES['upload_file']['tmp_name'];
    $fileError = $_FILES['upload_file']['error'];

/* Memindahkan File Upload
1. Secara default, file upload akan disimpan di temporary folder
2. Kadang kita ingin memindahkan file tersebut ke lokasi dimana kita bisa mengakses file tersebut
3. Untuk melakukan hal tersebut, PHP memiliki banyak function untuk memanipulasi file dan folder
4. https://www.php.net/manual/en/ref.filesystem.php 
 */
// Kode : Memindahkan File Upload
move_uploaded_file($fileTmpName, __DIR__ . '/file/' . $fileName);
}
?>
<!-- Kode : Form Upload -->
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Upload File</title>
</head>

<body>

  <?php if($_SERVER["REQUEST_METHOD"] == "POST"){ ?>
  <h1>Upload File</h1>
  <table>
    <tr>
      <td>File Name</td>
      <td><?= $fileName ?></td>
    </tr>
    <tr>
      <td>File Type</td>
      <td><?= $fileType ?></td>
    </tr>
    <tr>
      <td>File Size</td>
      <td><?= $fileSize ?></td>
    </tr>
    <tr>
      <td>File Tmp Name</td>
      <td><?= $fileTmpName ?></td>
    </tr>
    <tr>
      <td>File error</td>
      <td><?= $fileError ?></td>
    </tr>
  </table>
  <?php } ?>
  <h1>Form Upload</h1>
  <form action="upload.php" method="POST" enctype="multipart/form-data">
    <label>File :
      <input type="file" name="upload_file">
    </label>
    </br>
    <input type="submit" value="Upload">
  </form>
</body>

</html>