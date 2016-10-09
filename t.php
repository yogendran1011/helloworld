<?php
Class Math{
public  function sini($angle){
 return cos($angle);

}
public function sinus($anglo){

return sin($anglo);
}


}

 $x = new Math;


echo $x->sini(13);



Class libary{
 private $booki;
 private $namy="HELLO";

 protected function setproperty($book){
   $this->booki= $book;
   echo $this->booki;


 }
 public function name (){

$namu=$this->namy;
echo $namu;

 }


}

class lib extends libary{

public function hello(){
    return $this->setproperty("hellena");

}


}

$y=new lib;
echo $y->hello();
echo $y->name();
echo var_dump($y);





?>
