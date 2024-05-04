<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>クラスを2つ作ってそれぞれのインスタンスを出力しよう</title>
</head>

<body>
    <?php
    // Foodクラスを定義する
    class Food
    {
        // プロパティを定義する
        private  $name;
        private  $price;

        // コンストラクタを定義する
        public function __construct($name, $price)
        {
            $this->name = $name;
            $this->price = $price;
        }
        // メソッドを定義する
        public function show_price()
        {
            echo $this->price;
        }
    }

    // Animalクラスを定義する
    class Animal
    {
        // プロパティを定義する
        private  $name;
        private  $height;
        private  $weight;

        // コンストラクタを定義する
        public function __construct($name, $height, $weight)
        {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
        }

        // メソッドを定義する
        public function show_height()
        {
            echo $this->height;
        }
    }

    // インスタンス化する
    $food = new Food('potato', 250);
    $animal = new Animal('dog', 60, 5000);


    // print出力
    print_r($food);
    echo '<br>';
    print_r($animal);
    echo '<br>';

    // メソッドにアクセスして実行する
    $food->show_price();
    echo '<br>';
    $animal->show_height();
    ?>
</body>

</html>