<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <style>
          *{
               padding: 0;
               margin: 0;
          }
          body{
               display: flex;
               align-items: center;
               justify-content: center;
               flex-direction: column;
          }
     </style>
</head>
<body>
     <?php
     //inicio
     /* 
     basic variables, echo, data types, strings, numbers, conversion types, operators, if..else, match, loops, functions, compose data types, exceptions
     intermediate oop, cookies, sessions, filters
     advance form handling, laravel
     */

     $number=3;
     $text='Hello wordl!';
     $float=2.71738478;
     $bool=true;
     $convert_to_string=(string)$float;
     
     #constants
     define('pi',3.1446);

     #operator arithmetic, comparison, logical
     $x=8;
     $y=2;
     $add=$x+$y;
     $substract=$x-$y;
     $multiply=$x*$y;
     $division=$x/$y;
     $module=$x%$y;
     $pow=$x**$y;

     $array=['carro','moto','perro'];
     array_push($array,'rancio');
     unset($array[0]);
     ?>

     <h1><?php echo $number.' '.$text.' '.$float.' '.$bool.' '.strlen($text)?></h1>
     <h1><?php echo strtoupper($text).' '.strrev($text)?></h1>
     <h1><?php echo substr($text,3,6).' '.$convert_to_string?></h1>
     <h1><?php echo pi?></h1>
     <h1><?php echo $add.' '.$substract.' '.$multiply.' '.$division.' '.$module.' '.$pow?></h1>
     <h1><?php echo '==='.($x===$y).'!== '.($x!==$y).'<= '.($x<=$y).'>= '.($x>=$y).'< '.($x<$y).'> '.($x>$y).'&& '.(($x<$y) && ($x>$y)).'|| '.(($x<$y) || ($x>$y)).'! '.(!($x<$y) || ($x>$y))?></h1>
     <h1>
          <?php 
          if ($x!==$y) {
               echo 'verdad';
          }else{
               echo 'falso';
          }
          $asw=!($x!==$y)?'verdad':'falso';
          echo ' '.$asw;
          ?>
     </h1>

     <?php
     $age=1;
     $age_section=match(true){
          $age<2  => 'eres un bebe',
          $age<10 => 'eres un niño',
          $age<18 => 'eres un adolescente',
          $age<30 => 'eres un adulto joven',
          default => 'eres adulto'
     }
     ?>
     <h1>
          <?php echo $age_section;
          echo implode(', ',$array)?>
     </h1>
     <h1>
          <?php
          $i=0;
          while ($i<6) {
               echo $i;
               $i++;
          }
          $i=0;
          for ($i=0; $i < 10; $i++) { 
               echo $i;
          }

          function isprime(int $number=3){
               $prime=0;
               if($number>1){
                    for ($d=1; $d <= $number; $d++) { 
                         if ($number%$d===0) {
                              $prime++;
                         }
                    }
               }
               return $prime===2;
          }

          $asw = isprime() ? 'es primo' : 'no es primo' ;
          echo $asw;
          $asw = isprime(10) ? 'es primo' : 'no es primo' ;
          echo $asw;

          function divide($dividend, $divisor) {
               if($divisor == 0) {
                    throw new Exception("Division by zero");
               }
               return $dividend / $divisor;
          }
          
          try {
               echo divide(5, 0);
          } catch(Exception $e) {
               echo "Unable to divide.";
          }
          ?>
     </h1>

</body>
</html>