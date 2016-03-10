<?php

$name = array(Nikita, Dima, Alex, Sergey, Vlad, Andrey, Artem, Ivan, Anton, Maxim, Oleg, Roman);
$surname = array(Melnyk, Shevchenko, Boyko, Kovalenko, Bondarenko, Tkachenko, Kovalchuk, Kravchenko,
                Oliynyk, Shevchuk, Polishchuk, Lysenko);

for($i=1; $i <= 30; $i++){
    $rand_name = array_rand($name, 1);
    $rand_surname = array_rand($surname, 1);
    $rand_age = rand(18, 60);
    $players[$i]=array('name' => $name[$rand_name],
                        'surname' => $surname[$rand_surname],
                        'age' => $rand_age);
}

echo '<pre>';
echo '<h2>Весь список игроков команды:</h2>';
print_r($players);
echo "<h2>Игра началась</h2>";

for($day=1; $day <= 30; $day++){

    $rand_players = array_rand($players, 1);
    $rand_player = $players[$rand_players];
    $player =" ";
    foreach($rand_player as $key => $val){
        
		if ($key == 'age'){
			$player .= ", ".$val." age";
		}else{
			$player .= " ".$val;
		}
    }
    if($day == 30){
        echo '<b>' . $day . '.02.2016 </b><br>';
        echo '<h2>The winner</h2><h3>'.$player.'</h3><br>';
        //проверка
        //print_r($players);
    }else {
        echo '<b>' . $day . '.02.2016 </b><br>';
        echo 'out -' . $player . '<br><br>';
    }
   unset($players[$rand_players]);
}
//print_r($players);
