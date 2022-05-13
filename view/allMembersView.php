<?php 
$list = readAll();
foreach($list as $l){  

    
//     // echo $l['first_name'] . '<br>';
//     // echo $l['last_name']. '<br>';
//     // echo $l['age']. '<br>';
//     // echo $l['size']. '<br>';
//     // echo $l['situation']. '<br>';

// }
?>

<h4 class="text-center"><?=$l['first_name'] .' '. $l['last_name'];?></h4>
<p class="text-center"><?=$l['age'] .'ans,&nbsp je mesure '. $l['size'].'m, &nbspje suis '. $l['situation'].'&nbsp à l\'AFCI';?></p><br>
<?php
}
