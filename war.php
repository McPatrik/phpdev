<?php

include './Unit.php';

$army1 = new Army("Ульф Фасе");
$army1->addPehota(200);
$army1->addLuchniki(30);
$army1->addKonnica(15);

$army2 = new Army("Александр Ярославич");
$army2->addPehota(90);
$army2->addLuchniki(65);
$army2->addKonnica(25);

foreach ($army1->units as $unit => $value) {


    $damage1 += $value->damage * $value->count;
    $health1 += $value->health * $value->count + $value->armour * $value->count;
    
}

$damage2 = 0;
$health2 = 0;

foreach ($army2->units as $unit => $value) {
    $damage2 += $value->damage * $value->count;
    $health2 += $value->health * $value->count + $value->armour * $value->count;
    
}



?>

 <table border="1">
     <tr>
         <th></th>
         <th><?=$army1->nameArmy?></th>
         <th><?=$army2->nameArmy?></th>
     </tr>
     <tr>
         <th>Army units:</th>
         <td>Пехота <?=$army1->units["Pehota"]->count?>, Лучники <?=$army1->units["Luchniki"]->count?>, Конница <?=$army1->units["Konnica"]->count?></td>
         <td>Пехота <?=$army2->units["Pehota"]->count?>, Лучники <?=$army2->units["Luchniki"]->count?>, Конница <?=$army2->units["Konnica"]->count?></td>
     </tr>
 <?php
$duration = 0;
while ($health1 >= 0 && $health2 >= 0) {
    $health1 -= $damage2;
    $health2 -= $damage1;
    $duration++;
}
?>
     <tr>
         <th>Health after <?=$duration?> hits:</th>
         <td><?=$health1?></td>
         <td><?=$health2?></td>
     </tr>
     <tr>
         <th>Result</th>
         <td><?=$health1 > $health2 ? 'WINNER' : 'LOOSER'?></td>
         <td><?=$health2 > $health1 ? 'WINNER' : 'LOOSER'?></td>
     </tr>
 </table>
 <?php