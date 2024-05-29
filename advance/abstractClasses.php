

<?php
// http://localhost/Project1/PHP-Learning-Hub/advance/classes.php
abstract class Shape{
    protected $name;
    abstract public function calculateArea();

    public function __construct($name){
        $this->name = $name;
    }


    public function getName(){
        return $this->name;
    }

}


class Circle extends Shape{
    private $radius;

    public function __construct($name, $radius){
        parent::__construct($name);
        $this->radius = $radius;

    }

    public function calculateArea(){
        return pi() * pow($this->radius,2);
    }
}

$circle = new Circle('Circle',5);
echo $circle->calculateArea();
?>