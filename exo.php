
<?php
// $a = readline ("giva a ");
// $b = readline ("giva b ");

// switch ($a.$b) {
//     case ($a>0 & $b<0) || ($b>0 & $a<0):
//         echo "negatif";
//         break;

//     case $a==0 || $b==0 :
//         echo "0";
//         break;

//     default:
//         echo "positif";
//         break;
// }

//----------------------------------------

// $a = readline("give age ");
// switch ($a) {
//     case $a>=6 && $a<=7  :
//         echo "poussin";
//         break;
//     case $a>=8 && $a<=9  :
//         echo "pupille";
//         break;
//     case $a>=10 && $a<=11  :
//         echo "minime";
//         break;
//     case $a>=12:
//         echo "cadet";
//         break;
//     default:
//         echo "no";
//         break;
// }

//----------------------------------------

// $heure = readline ("heure?");
// $minutes = readline ("minutes?");

// if ($heure==23 && $minutes==59) {
//     $heure=0; 
//     $minutes=0;
//     echo ("il est ".$heure."h ".$minutes);
// } elseif ($minutes==59){
//     $heure++; 
//     $minutes=0;
//     echo ("il est ".$heure."h ".$minutes);
// } else {
//     $minutes++;
//     echo ("il est ".$heure."h ".$minutes);
// }
//----------------------------------------

// $a = readline ("nombre?");
// switch ($a) {
//     case $a<=10:
//         $prix= $a*0.1;
//         echo $prix;
//         break;

//     case $a<=30:
//         $prix= 1 + $a*0.09;
//         echo $prix;
//         break;

//     default:
//         $prix= 2.8 + $a*0.08;
//         echo $prix;
//         break;
// }
//----------------------------------------

// $age = readline ("age?");
// $sexe = readline ("sexe?");

// switch ($sexe) {
//     case "h": 
//         if ($age>=20) {
//             echo "imposable";
//         }
//         else {
//             echo "nonimposable";
//         }
//         break;

//     case "f":
//         if ($age>=18 && $age<=35) {
//             echo "imposable";
//         }
//         else {
//             echo "nonimposable";
//         }
//         break;

//     default:
//         echo "WRONG";
//         break;
//     }

//----------------------------------------

// function election (){
//     $c1 = readline ("candidat1?") ;
//     $c2 = readline ("candidat2?") ;
//     $c3 = readline ("candidat3?") ;
//     $c4 = readline ("candidat4?") ;


//     $estElimine = false ;
//     $estFavorable = false;
//     if ( $c2 > 50 || $c3 > 50 || $c4 > 50 || $c1 < 12.5) {
//         $estElimine = true ;
//     }
//     elseif ($c1 > $c2 && $c1 > $c3 && $c1 > $c4) {
//         $estFavorable = true;
//     }
// 	if($estElimine==true){
// 		return("Candidat 1 battu");
// 	} elseif ($c1 > 50){
// 		return("Candidat 1 élu");
// 		} elseif ($c1 >= 12.5 && $estFavorable==true){
//             return("Deuxieme tour en ballottage favorable");
// 			} elseif ($c1 >= 12.5){
// 				return("Deuxieme tour en ballottage défavorable");
// 				}
// }
// echo election() ;

//----------------------------------------

// function dateval()
// {
//     $estBisextile = false;
//     $estDateMois30Invalide = false;
//     $estDateBisextileInvalide = false;
//     $jours = readline ("jour");
//     $mois = readline ("mois");
//     $annee = readline ("annee");

//     if (($annee % 4 == 0 && $annee % 100 != 0) || $annee % 400 == 0) {
//         $estBisextile = true;
//     }
//     if ($mois == 2 && (($estBisextile && $jours > 29) || (!$estBisextile && $jours > 28))) {
//         $estDateBisextileInvalide = true;
//     }
//     if ($mois == 2 && ($jours > 30 && ($mois == 4 || $mois == 6 || $mois == 9 || $mois == 11))) {
//         $estDateMois30Invalide = true;
//     }
//     if ($jours > 31 || $mois > 12 || $estDateBisextileInvalide==true || $estDateMois30Invalide==true) {
//         return("date invalide");
//     } else {
//         return("date valide");
//     }	


// }
// echo dateval();
//----------------------------------------

// function cou($a)
// {
//     $b = $a +10;
//     while ($a <= $b) {
//         echo $a," ";
//         $a++;
//     }
// }

// cou (52)
//----------------------------------------

// function mult($a)
// {
//     for ($i=1; $i < 10; $i++) { 
//         echo ($i*$a." ");
//     }
// }
// mult(15);

//----------------------------------------

// function tabl()
// {
//     for ($i=0; $i < 9; $i++) { 
//         $tab[$i]= readline("valeur") ;
//         echo ($tab[$i]. " ");
//     }
// }
// tabl()

//----------------------------------------
// function tabl()
// {
//     $suite[0] = 1;
//     $suite[1] = 1;
//     $stock = 0;
//     for ($i=2; $i < 7; $i++) { 
//         $suite[$i] = $suite[$i-1] + $suite[$i-2];
//     }
//     for ($j=0; $j < 7; $j++) { 
//         echo($suite[$j]." ");
//         $stock =$stock + $suite[$j] ;
//     }
//     echo ("moyenne est ". ($stock/7));
// }

// tabl();

//----------------------------------------
// function what()
// {
//     $pos = 0;
//     $neg = 0;
//     $tab[-1] = 999;
//     for ($i=0; $tab[$i-1] != 0; $i++) { 
//         $tab[$i] = readline("valeur ");
//         if ($tab[$i]>0) {
//             $pos++;
//         }elseif ($tab[$i]<0) {
//             $neg++;
//         }
//     }
//     echo ($pos. " ".$neg);
// }

// what();

//----------------------------------------

// function funk()
// {
//     $tab1[0] = 4;
//     $tab1[1] = 8;
//     $tab1[2] = 7;
//     $tab1[3] = 9;
//     $tab1[4] = 1;

//     $tab2[0] = 7;
//     $tab2[1] = 6;
//     $tab2[2] = 5;
//     $tab2[3] = 2;
//     $tab2[4] = 1;

//     for ($i=0; $i < 5; $i++) { 
//         $tab3[$i]= $tab1[$i]+$tab2[$i];
//         echo ($tab3[$i]. " ");
//     }
// }
// funk();

//----------------------------------------
// function funk()
// {
//     $tab1[0] = 4;
//     $tab1[1] = 8;
//     $tab1[2] = 7;
//     $tab1[3] = 12;

//     $tab2[0] = 3;
//     $tab2[1] = 6;

//     $shrtoum=0;

//     for ($j=0; $j < 2; $j++) { 
//         for ($i=0; $i < 4; $i++) { 
//             $shrtoum = $shrtoum + ($tab1[$i]*$tab2[$j]);
//         }
//     }
//     echo $shrtoum;
// }
// funk();

//----------------------------------------

// function cons()
// {
//     for ($i = 0; $i < 5; $i++) {
//     $t[$i] = readline("type the value : ");
//     }

//     function isConsecutive($tob)
//     {
//         for ($j = 1; $j < 5; $j++) {
//             if ($tob [$j - 1] != $tob[$j] - 1) {
//                 return false;
//             }
//         }
//         return true;
//     }


//     if (isConsecutive($t) == true) {
//         echo ("consecutive");
//     } else {
//         echo ("not consecutive");
//     }
// }
// cons();

//----------------------------------------

// function estUneVoyelle($lettre)
// {
//     $VOYELLES = "aoiuye";

//     for ($i = 0; $i < strlen($VOYELLES); $i++) {
//         if ($VOYELLES[$i] == $lettre) {
//             return true;
//         }
//     }
//     return false;
// }

// $phrase = readline("Saisir une phrase : ");
// $compteur = 0;

// for ($i = 0; $i < strlen($phrase); $i++) {
//     if (estUneVoyelle($phrase[$i])) {
//         $compteur++;
//     }
// }
// print_r ($compteur);

//----------------------------------------


		
function indexOF($lettre) {
    $ALPHABET = "abcdefghijklmnopqrstuvwxyz";
	
	for($i=0; $i <  strlen($ALPHABET); $i++){
		if($lettre == $ALPHABET[$i]){
			return $i;
		}
	}
	return -1;
}
function chiffrer($message){
    $ALPHABET = "abcdefghijklmnopqrstuvwxyz";
	
	for($i=0; $i < strlen($message) ; $i++){
		if($message[$i] == 'z'){
			$message[$i] = 'a';
		} else {
			$index = indexOF($message[$i]);
			$message[$i] = $ALPHABET[$index+1];
		}
	}
	return $message;
}

$message = readline("message?");
echo(chiffrer($message));
?>