<!--<style>
div.echo-massage {
    padding: 50px ;
    text-align: center;
}
    
</style> -->
<?php 
     
 $conn = mysqli_connect("localhost","id14996888_root","Ei)IFOM!Q7+n0AY^","id14996888_upload"); 

  /* $conn = mysqli_connect("localhost","root","","upload");*/

$sql = "SELECT * FROM files";

$result = mysqli_query($conn,$sql);

$files = mysqli_fetch_all($result,MYSQLI_ASSOC);


if(isset($_POST['save']))
{   
    
    $filename = $_FILES['myfile']['name'];
    
    $destination = 'upt/' .$filename;
    
    $extension = pathinfo($filename,PATHINFO_EXTENSION);
    
    $file = $_FILES['myfile']['tmp_name'];
   
    $size = $_FILES['myfile']['size'];

$fname=$_POST["fname"];
    
    
    if(!in_array($extension,['zip','pdf','PNG','png','JPG','txt','docx','jpg','java','class','JAVA','xlsx','xls','py','sb3']))
    {
        /*echo"your file extension must be .zip, .pdf, .png, .JPG, .docx, .txt , .class, .xlsx, .xls, .py";
        
        echo '<div class="echo-massage">your file extension must be .zip, .pdf, .png, .JPG, .docx, .txt , .class, .xlsx, .xls, .py</div>';*/
        
        echo '<script>alert("your file extension must be .zip, .pdf, .png, .JPG, .docx, .txt , .class, .xlsx, .xls, .py")</script>';
    }
    elseif($_FILES['myfile']['size'] > 100000000)
    {
        /*echo "file size is too large";
        echo '<div class="echo-massage">file size is too large</div>';
        */
        echo '<script>alert("file size is too large")</script>';
    }
     

    else{
        if(move_uploaded_file($file,$destination))
        {
            $sql = "INSERT INTO files(name, size,downloads,fname)
            VALUES('$filename','$size',0,'$fname')";
            
            if(mysqli_query($conn,$sql))
            { 
                 /*echo  "file uploded successfully";
                echo '<div class="echo-massage">file uploded successfully</div>';
                */
                echo '<script>alert("file uploded successfully")</script>';
            }
            else{
                 /*echo "faild to upload file";
                echo '<div class="echo-massage">faild to upload file</div>';
                */
                echo '<script>alert("faild to upload file")</script>';
            }
        }     
    } 
}


/* for css the echo statement 
<style>
div.echo-massage {
    padding: 50px ;
    text-align: center;
}
</style>
<body>

<?php
echo '<div class="echo-massage">Hello world!</div>';
?>
echo '<div class="echo-massage">your file extension must be .zip, .pdf, .png, .JPG, .docx, .txt , .class, .xlsx, .xls, .py</div>';
echo '<div class="echo-massage">file size is too large</div>';
echo '<div class="echo-massage">file uploded successfully</div>';
echo '<div class="echo-massage">faild to upload file</div>';
</body>
*/

/* alert box in php

echo '<script>alert("your file extension must be .zip, .pdf, .png, .JPG, .docx, .txt , .class, .xlsx, .xls, .py")</script>';
echo '<script>alert("file size is too large")</script>';
echo '<script>alert("file uploded successfully")</script>';
echo '<script>alert("faild to upload file")</script>';
*/
?>
