<?php 
     abstract class pais{
          abstract function ciudad($city);
     }
     

     class fruit extends pais{
          // Properties
          public $name;
          public $color;

          function __construct($name){
               $this->name=$name;
          }

          // Methods get and set
          function set_name($name){
               $this->name = $name;
          }
          function get_name():string{
               return $this->name;
          }

          function ciudad($city){
               return $city;
          }
     }

     class blackberry extends fruit{
          public $weight;
          function __construct(string $name,string $color,int $weight){
               $this->name=$name;
               $this->color=$color;
               $this->weight=$weight;
          }
          function proteins(){
               echo 'my favorite fruit';
          }
     }

     $apple=new blackberry('mora','red',12);
     
     $apple->set_name('Banana');
     echo $apple->get_name();
     echo $apple->proteins();

     echo $apple->ciudad('peru');
?>