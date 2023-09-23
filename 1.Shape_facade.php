<?php
class Circle{
    public function draw($value){
        //echo "Drawing a circle...";
        return $area = 3.1416*$value*$value;
    }
}

class Square{
   public function draw($side1,$side2){
       return $area = $side1 * $side2;
   }
}


class Triangle{
   public function draw($base,$height){
       return $area = ($base * $height)/2;
   }
}

class shapeFacade{
     private $circle;
     private $square;
     private $triangle;
     private $circle_param;

     public function __construct(){
        $this->circle = new Circle;
        $this->square = new Square;
        $this->triangle = new Triangle;
        
     }

     public function drawCircle($value){
        return $this->circle->draw($value);
     }

     public function drawSquare($side1,$side2){
        return $this->square->draw($side1,$side2);
     }

     public function drawTriangle($base,$height){
        return $this->triangle->draw($base,$height);
     }

}

$shape = new shapeFacade;
$area = $shape->drawTriangle(5,5);
echo $area;

// class Circle {
//     public function draw($value) {
//         //echo "Drawing a circle...";
//         $area = 3.1416 * $value * $value;
//         return $area;
//     }
// }

// class ShapeFacade {
//     private $circle;

//     public function __construct() {
//         $this->circle = new Circle();
//     }

//     public function drawCircle() {
//         return $this->circle->draw(5);
//     }
// }

// $shape = new ShapeFacade();
// $area = $shape->drawCircle();

// echo "The area of the circle is: $area";
  