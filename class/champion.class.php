<?php
class Champion{
    protected $firstName;
    protected $lastName;
    protected $age;
    protected $size;
    protected $situation;

    public function getfirstName(){
        return $this->firstName;
    }
    public function setfirstName($firstName){
        $this->firstName=$firstName;
        return $this;
    }

    public function getlastName(){
        return $this->lastName;
    }
    public function setlastName($lastName){
        $this->lastName=$lastName;
        return $this;
    }

    public function getage(){
        return $this->age;
    }
    public function setage($age){
        $this->age=$age;
        return $this;
    }
    public function getsize(){
        return $this->size;
    }
    public function setsize($size){
        $this->size=$size;
        return $this;
    }
    public function getsituation(){
        return $this->situation;
    }
    public function setsituation($situation){
        $this->situation=$situation;
        return $this;
    }
   
    public function displayMembers(){
        $listchampionDwwm2 = $this->readAll();
        foreach ($listchampionDwwm2 as $member) {
           echo '<p><b>Prenom :</b> '.$member['first_name'].'<br><b>Nom:</b> '.$member['last_name'].'<br><b>Age:</b> '.$member['age'].'<br><b>size :</b> '.$member['size'].'<br><b>Situation</b> '.$member['situation'].'</br></p>';?>
           
            <?php
        }
      }
  
    
    //   public function createAll($firstName,$lastName,$age,$size,$situation){
    //     $db = $this->dbConnect();
    //     $sql = "INSERT INTO `championDwwm2`( `first_name`,`last_name`, `age`,`size`, `situation`) VALUES (:first_name,:last_name, :age, :size, :situation)";
    //     $prepare = $db->prepare($sql);
       
    //     $prepare->execute([
    //         'first_name'=>$firstName,
    //         'last_name'=>$lastName,
    //         'age'=>$age,
    //         'size'=>$size,
    //         'situation'=>$situation
          
    //     ]);
       
    }

    ?>