<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width,
     initial-scale=1.0">
    <title><?="New Page"; ?></title>
  </head>

  <body>
    <?php
    // ==================================================
    // class Point {
    //     private $x;
    //     private $y;
    //     public function setX($x) {
    //         $this->x = $x;
    //     }

    //     public function setY($y) {
    //         $this->y = $y;
    //     }

    //     public function getX() {
    //         return $this->x;
    //     }

    //     public function getY() {
    //         return $this->y;
    //     }

    //     public function distance() {
    //         return sqrt($this->getX()**2 + $this->getY()**2);
    //     }
    // }
    
    // $p1 = new Point();
    // $p1->setX(2);
    // $p1->setY(3);

    // echo $p1->distance();
// =======================================================
    // class Point {
    //     private $x;
    //     private $y;

    //     public static function printText() {
    //         return "Hello world!";
    //     }
    // }
    // echo Point::printText();
////=======================================================
    // class Page {
    //     static $content = 'Тело сайта <br>';
    //     public static function footer() {
    //         return "Это подвал сайта <br>";
    //     }
    //     public static function header() {
    //         return "Это шапка сайта <br>";
    //     }
    //     public static function site() {
    //         echo self::header().self::$content.self::footer();
    //         return "Это подвал сайта <br>";
    //     }
    // }

    // Page::site();
// ============================================
        // class People {
        //     private $name;
        //     public function __construct() {
        //         echo 'Call counstrutor';
        //         $this->name = "Ivan";
        //     }
        // }
        // $obj = new People();
        // echo '<pre>';
        // print_r($obj);
        // echo '</pre>';
// =====================================================
    // class Point {
    //     private $x;
    //     private $y;

    //     public function __construct($x =0, $y=0) {
    //         $this->x = $x;
    //         $this->y = $y;
    //     }

    //     public function __toString() {
    //         return "({$this->x}, {$this->y})";
    //     }
    // }

    // $obj = new Point(3, 4);
    //     echo '<pre>';
    //     print_r($obj);
    //     echo '</pre>';
    //     echo "{$obj}";
// ========================================================
    // class Animal {
    //     public $legs = 4;
    //     public function info_2() {
    //         echo "Hellooooo";
    //     }

    //     public function info(){
    //         echo "I have 4 hand".'<br>';
    //     }
    // }

    // $dog = new Animal();
    // $dog->info();

    // class Dog extends Animal {
    //     public $name = "Собака";
    //     public function voice () {
    //         echo "{$this->name} издает звук гав-гав".'<br>';
    //     }
    //     // можно также предопределить метод родиетльского класса
    //     public function parentInfo() {
    //         parent::info_2();
    //     }

    // }

    // $dog = new Dog();
    // $dog->info();
    // $dog->voice();

    // class Cat extends Animal {
    //     public $name = "Кошка";
    //     public function voice () {
    //         echo "{$this->name} издает звук мяу".'<br>';
    //     }
        
    // }

    // $cat = new Cat();
    // $cat->voice();
// =================================================
    abstract class Animal { // класс абстрактный и только наследуется, без создания объектов
        public $legs = 4;
        public function info_2() {
            echo "Hellooooo";
        }

        public function info(){
            echo "I have 4 hand".'<br>';
        }
        abstract public function color();
         // в дочерних классах 
            // он обязательно должен быбьт предопределн
    }

    $dog = new Animal();
    $dog->info();

    class Dog extends Animal {
        public $name = "Собака";
        public function voice () {
            echo "{$this->name} издает звук гав-гав".'<br>';
        }
        // можно также предопределить метод родиетльского класса
        public function parentInfo() {
            parent::info_2();
        }
        public function color()
        {
            return 0;
        }

    }

    $dog = new Dog();
    $dog->info();
    $dog->voice();

    class Cat extends Animal {
        public $name = "Кошка";
        public function voice () {
            echo "{$this->name} издает звук мяу".'<br>';
        }

        public function color()
        {
            return 0;
        }
    }
    final class Def{ // нельзя наследовать файнал классы
    }

    $cat = new Cat();
    $cat->voice();
    
    ?>
  </body>
</html>