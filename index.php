<?php
// require 'class/champion.class.php';
require_once 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<?php
require 'class/header.php';
?>
<body>
    <img src="img/Avatar.png" alt="Avatar">
    
<?php

if(isset($_GET['readAll'])){
    include_once 'view/allMembersView.php';
}
if(isset($_GET['truncateAll'])){
    truncateAll();
}
if (isset($_GET['createTable'])){
    createTable();
} 
if (isset($_GET['deleteTable'])){
   dropTable();
}



if(isset($_GET['createAll'])){
   createAll();  
}

if(isset($_GET['readOne'])){
    include_once 'view/oneView.php';
    
}

if(isset($_GET['updateOne'])){
    updateOne();

}
if(isset($_GET['deleteOne'])){
   deleteOne('3');
}
if(isset($_GET['listByAge'])){
    include_once 'view/ascMembersView.php';
 }



?>
    








<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>

<footer>
&copy; <?php echo date ('Y'); ?><h6> Copyright Yuliya BERT</h6>

</footer> 

</html>