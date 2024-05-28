/*if (isset($_POST)) {
$name=$_POST["name"];
$description=$_POST["description"];
$amount=$_POST["amount"];
$days=$_POST["days"];
  // get details of the uploaded file
  $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
  $fileName = $_FILES['uploadedFile']['name'];
  $fileSize = $_FILES['uploadedFile']['size'];
  $fileType = $_FILES['uploadedFile']['type'];
  $fileNameCmps = explode(".", $fileName);
  $fileExtension = strtolower(end($fileNameCmps));
  $newFileName =  $fileName. '.' . $fileExtension;
  $allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc');
  if (in_array($fileExtension, $allowedfileExtensions)) {
    $uploadFileDir = 'C:/xampp/htdocs/fitnessclub/assets/';
    //echo realpath($uploadFileDir);
    $dest_path = $uploadFileDir . $newFileName;
     
    if(move_uploaded_file($fileTmpPath, $dest_path))
    {
      $message ='File is successfully uploaded.';

    }
    else
    {
      $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
    }
    $_SESSION['message'] = $message;
    //redirect('admin/html/addpackage.php');
    Redirect('http://www.google.com/', false);
  }*/