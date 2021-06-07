<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>About</title>
  </head>
  <body class="container">
      <div class="p-5 mb-2 bg-light text-white">
      
    <?php
    
    include 'post.php';
    
    ?>
      
    <br><br>
     <ul class="nav">
        <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="form.php">Create</a></li>
        
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Forms</a>
            
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <?php foreach($result as $item): ?>
                    <li><a class="dropdown-item" href="home.php?scp='<?php echo $item['item']; ?>'"><?php echo $item['item']; ?></a></li>
                <?php endforeach; ?> 
            </ul>
        </li>
        
        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
    </ul> 
      
    <br><br>
    
    <div class="p-3">
    <h1 style="color: black">About</h1>
    
    <br><br><br>

    <h2 style="color: black">About the Creator</h2>
    <p style="color: black">Hi, my name is Jordan Mills and I created this web-form. I am a student of Toi Ohomai on the Tauranga campus based in Windermere.</p>

    <?php

            if(isset($_GET['scp'])){
            $scp = trim($_GET['scp'], "'");
            $record = $mysqli->query("select * from scp where item='$scp'") or die ($mysqli->error);
            $row = $record->fetch_assoc();
        
            echo "
        
                <h1>{$row['item']}</h1>
                <h2>{$row['class']}</h2>
                <h4>{$row['description']}</h4>
                <h4>{$row['containment']}</h4>
                <p>{$row['image']}</p>
        
            ";
    }else{
        
    }
    
    ?>
    
    </div>
    
    </div>

    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
  </body>
</html>