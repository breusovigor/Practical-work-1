<?php
class Figure {
    const SIDES_COUNT = NULL;

    protected $area;
    protected $color;

    public function infoAbout() {
        return "Это геометрическая фигура";
    }

}

class Rectangle extends Figure {
    const SIDES_COUNT = 4;

    private $a;
    private $b;

    function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    function getArea()
    {
        return "прямоугольника " . $this->a * $this->b;
    }

    final public function infoAbout()
    {
        return "Это класс " . get_class($this) . ". Количество сторон " . self::SIDES_COUNT;
    }
}

class Triangle extends Figure {
    const SIDES_COUNT = 3;

    private $a;
    private $b;
    private $c;

    function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    function getArea() {
        $p = ($this->a + $this->b + $this->c) / 2;
        $s = sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c));
        return "треугольника " . $s;
    }

    final public function infoAbout()
    {
        return "Это класс " . get_class($this) . ". Количество сторон " . self::SIDES_COUNT;
    }
}

class Square extends Figure {
    const SIDES_COUNT = 4;

    private $a;

    function __construct($a)
    {
        $this->a = $a;
    }

    function getArea()
    {
        return "квадрата " . $this->a ** 2;
    }

    final public function infoAbout()
    {
        return "Это класс " . get_class($this) . ". Количество сторон " . self::SIDES_COUNT;
    }
}

$area = [];
$area[] = new Rectangle(2, 4);
$area[] = new Triangle(4, 3, 5);
$area[] = new Square(4);
$area[] = new Rectangle(10, 14);
$area[] = new Triangle(14, 13, 15);
$area[] = new Square(14);

foreach ($area as $result) {
    echo "Площадь " . $result->getArea() . '</br>';
}

echo $area[0]->infoAbout() . '</br>';
echo $area[1]->infoAbout() . '</br>';
echo $area[2]->infoAbout() . '</br>';


?>