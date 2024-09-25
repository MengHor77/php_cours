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
    public $price;
    public $title;

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