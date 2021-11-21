<!----Zadanie 1 - oblicz index BMI ------->
<?php
//echo 6 + 5 ; 
//echo "6+5" ; //jak w js-cudzysłów to string
//echo "6 / 5" ;

//$number1 = 3;
//echo $number1 / 2 + $number1;
//echo $number1 ++; //powiekszenie o 1 -skrócona 
//echo $number1 --; //pomniejszenie o 1 -skrócona 
echo "BMI wynosi: <br/>" ;
$wzrost = 1.70;
$waga = 65 ;
$BMI = $waga / ( $wzrost * $wzrost ) ;
echo $BMI ;
//echo ($wzrost / ($waga * $waga)) ; inna forma zapisu
//echo "BMI wynosi: {$BMI}"; inna forma zapisu.Zmienną jak w js moze byc i string i number
echo strlen ($waga); //funkcja string length- wynik pokazuje liczbe znaków w zmiennej,lącznie ze spacjami
var_dump ($waga); //konwersja- funkcja wskazuje wartość i mowi jak interpretuje php zmienna. Init to  number, 
//float- number z wart. po przecinku, string to string , boolen- jesli zmienna jest true/false, poda to; 
//Do boolen jest jeszcze opcja (true && false) -true AND false,
// (true||false) - true OR false 
$funkcja = "" ;
var_dump(empty($funkcja)); //funkcja empty  bedzie miala zawsze wartosc true jeści zmienna jest pusta/liczba zero/string zero
//w kazdym innym przypadku funkcja empty bedzie miała wartoś false
$funkcja11 = "" ;
var_dump(isset($funkcja1)); //funkcja isset zawsze bedzie miala wartosc true, false bedzie tylko w przypadku gdy zmienna nie bedzie okreslona
//to dobra funkcja do sprawdzania czy zmienna jest  okreslona

$funkcja2 ="";
unset ($funkcja2); //unset- funkcja usuwa zmienna
var_dump(isset($funkcja2)); //pokazuje w wyniku false, bo fukcja2 nie istnieje- zostala wczesniej usunieta przez unset

?>


