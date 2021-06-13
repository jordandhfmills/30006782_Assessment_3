<?php

    $mysqli = new mysqli('localhost', 'a3000678_scpuser', 'jordan853', 'a3000678_scp');
    
    $result = $mysqli->query("select * from scp"); 
    
    if(isset($_POST['create']))
    {
        $item = $_POST['item'];
        $class = $_POST['class'];
        $description = $_POST['description'];
        $containment = $_POST['containment'];
        $image = $_POST['image'];
        
        $insert = "insert into scp(item, class, containment, description, image)
        values('$item', '$class', '$containment', '$description', '$image')";
        
        if($mysqli->query($insert) === TRUE){
            echo "
                <h1>Record was added successfully</h1>
                <p><a href='home.php'>Home</a></p>
            ";
        }else{
            echo "
                <h1>Error submitting data</h1>
                <p>{$mysqli->error()}</p>
                <p><a href='home.php'>Home</a></p>
            ";
        }
    }
    
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $item = $_POST['item'];
        $class = $_POST['class'];
        $containment = $_POST['containment'];
        $description = $_POST['description'];
        $image = $_POST['image'];
        
       /* echo "
        <p>{$id}</p>
        <p>{$item}</p>
        <p>{$class}</p>
        <p>{$containment}</p>
        <p>{$description}</p>
        "; */
       
        $update = "update scp set item='$item', class='$class', containment='$containment', description='$description', image='$image' where id='$id'";
       
        if($mysqli->query($update) === TRUE)
        {
            echo "
            <h1>Record Updated</h1>
            <p><a href='home.php'>Back to index page</a></p>
           
            ";
        }
        else
        {
            echo "
            <h1>Error Updating Record</h1>
            <p>{$mysqli->error()}</p>
            <p><a href='home.php'>Back to index page</a></p>
            ";
        }
        
    }
   
    if(isset($_GET['delete']))
    {
        $id = $_GET['delete'];
       
        $delete = "delete from scp where id=$id";
       
        if($mysqli->query($delete) === TRUE)
        {
            echo "
            <h1>Record Deleted</h1>
            <p><a href='home.php'>Back to index page</a></p>
           
            ";
        }
        else
        {
            echo "
            <h1>Error Deleting Record</h1>
            <p>{$mysqli->error()}</p>
            <p><a href='home.php'>Back to index page</a></p>
            ";
        }
    }

?>