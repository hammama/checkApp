<?php
$notes = [10, 10, 10, 10, 11, [0, 5, 2]];
$eleve = ['nom' => 'hamama',
          'prenom' => 'sara',
          'note' => [10, 12, 13] 
         ];
$nom = "sara";
echo $notes[5][1];
?>
<br>

<?php
echo $eleve['note'][2];

if ($notes[5][1] > 10) {
echo "bravo $nom tu as validé";
} else {
echo "oups tu n'as pas validé bonne chance!!";
}

function hello($var){
	echo "$var";
}






















?>