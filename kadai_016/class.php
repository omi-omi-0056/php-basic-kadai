<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>kadai_016</title>
</head>

<body>
  <p>
    <?php
    //Foodのクラス定義
    class Food
    {
      public $name;
      public $price;

      // コンストラクタを定義する
      public function __construct(string $name, int $price)
      {
        $this->name = $name;
        $this->price = $price;
      }
      // メソッドを定義
      public function show_price()
      {
        echo $this->price . '<br>';
      }
    }

    // インスタンス化
    $food = new Food('ポテト', 250);
    // インスタンス$foodの各プロパティの値を出力する
    print_r($food);
    echo '<br>';
    // $foodの値段を出力
    $food->show_price();

    // アニマルのクラスを定義
    class Animal
    {
      public $name;
      public $height;
      public $weight;

      public function __construct(string $name, int $height, int $weight)
      {
        $this->name = $name;
        $this->weight = $weight;
        $this->height = $height;
      }

      public function show_height()
      {
        echo $this->height . '<br>';
      }
    }

    // インスタンス化
    $animal = new Animal('猫', 60, 5);
    // インスタンス$animalの各プロパティの値を出力する
    print_r($animal);
    echo '<br>';
    // $animalの高さを出力
    $animal->show_height();
    ?>
  </p>
</body>

</html>