<?php include 'FilesLogic.php';?>
<!DOCTYPE html >
<html>
    <head>
        
        
        <!-- <style>
            * {box-sizing: border-box;}

            body { 
              margin: 0;
              font-family: "Open Sans", sans-serif;
            }

            .header {
              overflow: hidden;
              background-color: #fff;
                box-shadow: 0px 20px 15px rgba(0, 0, 0, 0.1);
              padding: 18px 50px;
            }

            ul {
                 list-style-type: none;
                 margin: 0;
                 text-align: right  ;
                 margin-top: 18px;

            }
             ul li {
                 display: inline-block;
                 margin: 0 20px;
            }
             a {
                 font-size: 18px;
                 color: #584e4a;
                 position: relative;
                 text-decoration: none;
                 padding-bottom: 8px;
            }
             a:before, a:after {
                 content: '';
                 position: absolute;
                 bottom: 2px;
                 left: 0;
                 right: 0;
                 height: 2px;
                 background-color: #f37272;
            }
             a:before {
                 opacity: 0;
                 transform: translateY(- 8px);
                 transition: transform 0s cubic-bezier(0.175, 0.885, 0.32, 1.275), opacity 0s;
            }
             a:after {
                 opacity: 0;
                 transform: translateY(4px);
                 transition: transform 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275), opacity 0.2s;
            }
             a:hover:before, a:focus:before, a:hover:after, a:focus:after {
                 opacity: 1;
                 transform: translateY(0);
            }
             a:hover:before, a:focus:before {
                 transition: transform 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275), opacity 0.2s;
            }
             a:hover:after, a:focus:after {
                 transition: transform 0s 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275), opacity 0s 0.2s;
            }
        </style>
        --->
        <title>PHP File Uplod Application </title>
        <link rel="stylesheet" href="style/style.css"/>
    </head>
    <body>
        
        <div class="header">
            <ul>
            <li><a href="..//index.html" >Home</a></li>
            <li><a href="index1.php" >Download Project</a></li>
            </ul> 
        </div>
                
        <div class="container">
            <div class="row">
                <form action="index.php" method="post" enctype="multipart/form-data">
                    <h3>Upload Files</h3>                    
                    <input type="file" name="myfile"><br>
                     Description: <input type="text" name="fname" /><br>
                    <button type="submit" name="save">Upload</button>
                </form>
            </div>
        </div>
        
    </body>
</html>    