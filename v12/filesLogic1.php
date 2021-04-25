<?php 
/*

$servername = "localhost";
$username = "id14996888_root";
$password = "Ei)IFOM!Q7+n0AY^"; // no password for localhost
$database = "id14996888_upload"; // name of database 
*/

$servername = "localhost";
$username = "root";
$password = "";
$database = "upload";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);


$sql = "SELECT * FROM files";

$result = mysqli_query($conn,$sql);

$files = mysqli_fetch_all($result,MYSQLI_ASSOC);


 if (isset($_GET['file_id']))
 {
     $id = $_GET['file_id'];
     
     
     $sql= "SELECT * FROM files WHERE id=$id";
     
     $result = mysqli_query($conn,$sql);
     
     $file = mysqli_fetch_assoc($result);
     
     $filepath = 'upt/' . $file['name'];
     
     
     if(file_exists($filepath))
     {
         header('Content-Type: application/octet-stream');
         
         header('Content-Description: File Transfer');
         
         header('Content-Disposition: attachment; filename='. basename($filepath));
         
         header('Expires: 0');
         
         header('Cache-Control: must-revalidate');
         
         header('Pragma:public');
         
         header('Content-Length:' .filesize('upt/'.$file['name']));
      
         readfile('upt/' . $file['name']);
         
         
         $newCount = $file['downloads']+1;
       
         $updatQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";
         
         mysqli_query($conn,$updatQuery);
         
         exit;
        
     }
 }

?>