<?php include 'filesLogic1.php';?>
<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `files` WHERE CONCAT(`id`, `name`, `size`, `fname`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `files`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "upload");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
         <link rel="stylesheet" href="style/style1.css"/>
        
    </head>
    
    
    
<body>
        <header>
        
        </header>
         <br><br>
        <script src="js/app.js"></script>
        <script></script>
    
    
    <form action="index1.php" method="post">
        <style>
            input[type=text] {
            position: absolute;
            right: 40%;
            width: 30%;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            background-color: #ccc;
            background-image: url('https://img.icons8.com/windows/32/000000/search-account.png');
            background-position: 0px 5px; 
            background-repeat: no-repeat;
            padding: 12px 20px 12px 40px;
            }
            
            input[type=submit] {
            position: absolute;
            left: 60%;    
            background-color: #e43c5c;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 15px;
            padding: 15px 36px;
            
            cursor: pointer;
            }
        </style>
        <input type="text" name="valueToSearch" placeholder="   Search Project">
        <input type="submit" name="search" value="Search"><br><br><br><br><br><br><br>
        
            <!-- populate table from mysql database -->
            <div class="grid"> 
                <?php while($row = mysqli_fetch_array($search_result)):?>
                    <div class="grid__item">
                        <div class="card">
                            <div class="card__content">    
                                <!-- <img class="card__img" src="https://images.unsplash.com/photo-1506318164473-2dfd3ede3623?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=3300&amp;q=80" alt="Canyons"> -->
                                <!--<h4 class="card__text"><?php echo $row['id']; ?></h4>-->
                                <h3 class="card__header"><?php echo $row['name']; ?></h3>
                                <p class="card__text"><?php echo $row['fname']; ?></p>
                                <h4 class="card__text"><?php echo $row['size'] / 1000 . " KB"; ?></h4>
                                <h4 class="card__text"><?php echo $row['downloads']; ?></h4>
                                <a class="card__btn" href="index1.php?file_id=<?php echo $row['id']?>">Download<span>&#8681;</span></a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
    </form>
</body>
</html>
