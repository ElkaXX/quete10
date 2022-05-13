<?php 
function dbConnect(){
    try{
        $db = new PDO('mysql:host=localhost;dbname=poo;charset=utf8', 'root', '');
        return $db;
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
}
function readAll(){
       
        $db = dbConnect();
        $sql = 'SELECT * FROM championDwwm2';
        $prepare = $db->prepare($sql);
        $prepare->execute();
        $listchampionDwwm2 = $prepare->fetchall();
        return $listchampionDwwm2;
        
    }

    function readOne() {
        $db = dbConnect();
        $sql="SELECT * FROM championDwwm2 WHERE id = 6";
        $prepare = $db->prepare($sql);
        $prepare->execute();
        $listchampionDwwm2 = $prepare->fetch();
        return $listchampionDwwm2;
       
    }

function truncateAll(){
        $db = dbConnect();
     
        $sql = "TRUNCATE TABLE championDwwm2";
        $prepare = $db->prepare($sql);
        $prepare->execute();
       
    }
function createtable(){
        $db = dbConnect();
        $sql = "CREATE TABLE `poo`.`championdwwm2` ( `id` INT NOT NULL AUTO_INCREMENT , `first_name` VARCHAR(64) NOT NULL , `last_name` VARCHAR(64) NOT NULL , `age` INT NOT NULL , `size` FLOAT NOT NULL , `situation` VARCHAR(30) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
        $prepare = $db->prepare($sql);
        $prepare->execute();
    }
function droptable(){
        $db = dbConnect();  
        $sql = "DROP TABLE championdwwm2";
        $prepare = $db->prepare($sql);
        $prepare->execute();
}

function createAll(){
    $db = dbConnect();
    $sql =  ("INSERT INTO championDwwm2 (first_name, last_name, age, size, situation)  VALUES
     ('Yuliya', 'BERT', '55', '1.6', 'champion'),
     ('Valentin', 'BRUNEEL', '27', '1.74', 'champion'),
     ('Colin', 'CALBET', '24', '1.76', 'champion'),
     ('Nicolas', 'CAPPELAERE', '20', '1.77', 'champion'),
     ('Jeane-Rene', 'DECOSTER', '33', '1.75', 'champion'),
     ('Omar', 'DEROUICH', '20', '1.73', 'champion'),
     ('Anne', 'DEVOS', '54', '1.70', 'champion'),
     ('Jean-Baptist', 'DUBAR', '24', '1.81', 'champion'),
     ('Fabian', 'GREAUX', '37', '1.79', 'champion'),
     ('Allan', 'RYCKELYNCK', '22', '1.8', 'champion'),
     ('Aymeric', 'PARIS', '28', '1.72', 'champion')");
     
     $prepare = $db->prepare($sql);
     $prepare->execute();
  
}



function updateOne(){
    $db = dbConnect();
    $sql="SELECT * FROM championDwwm2 WHERE id=5";
    $prepare = $db->prepare($sql);
    $prepare->execute();
    $info=$prepare->fetch();
     
    $age=$info['age'];
    $age++;
    $sql ="UPDATE championDwwm2 SET `age` = $age WHERE id=5";
    $prepare = $db->prepare($sql);
    $prepare->execute();
}
    

function deleteOne($id) {
    $db = dbConnect();

    $sql="DELETE FROM championDwwm2 WHERE id=$id";
    $prepare = $db->prepare($sql);
    $prepare->execute();
   
}
function listByAge() {
    $db = dbConnect();
    $sql="SELECT * FROM championDwwm2 ORDER BY age ASC";
    $prepare = $db->prepare($sql);
    $prepare->execute();
    $listchampionDwwm2=$prepare->fetchAll();
    return $listchampionDwwm2;
    
}

    ?>