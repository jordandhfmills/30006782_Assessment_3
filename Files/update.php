<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Update</title>
  </head>
  <body class="container">
    
    <?php
   
        include 'post.php';
        $id = $_GET['update'];
        $record = $mysqli->query("select * from scp where id=$id") or die($mysqli->error());
        $row = $record->fetch_assoc();
   
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
    <h1>Update</h1>
    <br>
    
    <form class="form-group" method="post" action="post.php">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>" ?>
        <label>Item: </label>
        <br>
        <input type="text" class="form-control" name="item" value="<?php echo $row['item']; ?>">
        
        <br>
        <label>Class: </label>
        <br>
        <input type="text" class="form-control" name="class" value="<?php echo $row['class']; ?>">
        
        <br>
        <label>Containment: </label>
        <br>
        <textarea class="form-control" name="containment"><?php echo $row['containment']; ?></textarea>
        
        <br>
        <label>Description: </label>
        <br>
        <textarea class="form-control" name="description"><?php echo $row['description']; ?></textarea>
        
        <br>
        <label>Image: </label>
        <br>
        <input type="text" class="form-control" name="image" value="<?php echo $row['image']; ?>">
        
        <br><br>
        <input type="submit" class="btn btn-primary" name="update" value="Update"></input>
        
    </form>
    
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