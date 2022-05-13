<?php
$info = readOne();
$l = $info;
 ?>
 <h4 class="text-center"><?=$l['first_name'] .' '. $l['last_name'];?></h4>
<p class="text-center"><?=$l['age'] .'ans,&nbsp je mesure '. $l['size'].'m, &nbspje suis '. $l['situation'].'&nbsp à l\'AFCI';?></p><br>