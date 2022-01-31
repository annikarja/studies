<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Alkon hinnasto 22.11.2021</title>
</head>
<body>
  <h1>Alkon hinnasto 22.11.2021</h1>
    <?php
        // connection
        require_once 'view/controller.php';
        require_once 'database/connection.php';

        $rows = 25;
    
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
        } else {
            $page = 1;
        }
        $start = ($page - 1) * $rows;
  
        require 'view/querys.php'
    ?>
    <div class="filters">
      <?php 
        require 'view/showfilters.php';
      ?>
    </div>
    <div class="table">
        <?php
          require 'view/showtable.php'
         ?>
    </div>

    <div class="pagination">
        <div class="buttonCenter">
          <?php            
          echo "</br>";    
          $total_pages = ceil($total_records / $rows);   
          $pagLink = "";       
          if($page>1)
          {
            echo "<a href='?page=".($page-1)."&".$httpquery."' class='button'> Edellinen </a>";
          }
          if($total_pages>$page)
          {
            echo "<a href='?page=".($page+1)."&".$httpquery."' class='button'> Seuraava </a>";
          }  
          ?>    
        </div>
    </div>   
</body>
</html>