<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
    class Food{
      private $name;
      private $price;
      public function __construct($name,$price){
        $this->name=$name;
        $this->price=$price;
      }
      public function show_price() {
      return $this->price;
     }
    }
    class Animal{
      private $name;
      private $height;
      private $weight;
      public function __construct($name,$height,$weight){
        $this->name=$name;
        $this->height=$height;
        $this->weight=$weight;
      }
      public function show_height() {
        return $this->height;
      }
    }
    $poteto=new Food('poteto',250);
    $dog=new Animal('dog',60,5000);
    print_r($poteto);
    print_r($dog);
    echo '<br>';
    echo $poteto->show_price().'<br>';
    echo $dog->show_height().'<br>';
    ?>
  </p>
</body>
</html>
