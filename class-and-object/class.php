<?php
 class phpClass {
   var   $v1;
    var  $v2="hello word ";


    function myfuntion(){
    // stetement
    }
 }
 


?>

<!-- example of class book  -->
<?php
class Book {

    // member variable
    private $price;
    private $title;

    // member fionction 
    public function setPrice($p){
        $this->price = $p;
    }
    public function getPrice(){
       echo  $this->price ."</br>";
    }
    public function setTitle($t){
        $this->title= $t;
    }

    public function getTitle(){
        echo $this->title ."</br>";
    }
}

// creat object 
$physic =new Book;
$math = new Book;
$chemistry = new Book ;



// call member  adnd set value 

//set value


$physic->setTitle(" physic for hight school");
$chemistry->setTitle(" advance chemistry");
$math->setTitle(" algebra"); 

$physic->setPrice( 20 );
$chemistry->setPrice(10);
$math->setPrice(23);

// get value 


$physic->getTitle();
$chemistry->getTitle();
$math->getTitle();

$physic->getPrice();
$chemistry->getPrice();
$math->getPrice();


?>






<?php


// exampl about  consrtructor 
class Book2{
    

     // member variable
     private $price1;
     private $title1;
 
     public function __construct($p1, $t1){

        $this->price1= $p1;
        $this->title1 =$t1;
        }
     // member fionction 
     public function setPrice($p1){
         $this->price1 = $p1;
     }
     public function getPrice(){
        echo  $this->price1 ."</br>";
     }
     public function setTitle($t1){
         $this->title1= $t1;
     }
 
     public function getTitle(){
         echo $this->title1 ."</br>";
     }
  
    
}

// initialize constructor 
$physic1  = new Book2( "physic for hight school ", 10);
$chemistry1  = new Book2( "chemistry for hight school ", 100);
$math1  = new Book2( "math for hight school ", 108);

// get value


$physic1->getPrice();
$chemistry1->getPrice();
$math1->getPrice(); 

$physic1->getTitle();
$chemistry1->getTitle();
$math1->getTitle();




?>