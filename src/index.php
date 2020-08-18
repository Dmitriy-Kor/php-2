<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP2_LESSON2</title>
</head>
<body>
    <?php 
        // lesson 2

        abstract class AbstractGoods {
            abstract protected function getProfit();
        }

        class DigitalGood extends AbstractGoods {
            public $name;
            public $price;
            public $qantity;

            function __construct(string $name, int $price, int $qantity){
                $this->name = $name;
                $this->price = $price;
                $this->qantity =$qantity;

            }

            function getProfit(){
               return $total = $this->price * intval($this->qantity);
            }

            function viewGood(){
               echo "<h1>$this->name</h1>
                    <p>Количество: $this->qantity</p>
                    <p>Цена за штуку: $this->price &#8381</p>
                    <p>Итого: {$this->getProfit()} &#8381</p><br>";
            }
        }
        class NormalGood extends DigitalGood {
            function __construct(string $name, int $price, int $qantity){
                parent::__construct($name,$price,$qantity);
            }
            function getProfit(){
                // даем скидку
                if ($this->qantity >= 10){
                    return $total = intval($this->qantity) * ($this->price - $this->price * 0.10) ;
                } else{ 
                    return $total = $this->price * $this->qantity;
                }
             }
        } 

        class WeightGood extends DigitalGood {
            function __construct(string $name, int $price, int $qantity){
                parent::__construct($name,$price,$qantity);
            }
            function getProfit(){ 
                    return $total = $this->price * $this->qantity;
                }
            function viewGood(){
                echo "<h1>$this->name</h1>
                     <p>Количество: $this->qantity кг.</p>
                     <p>Цена за кг: $this->price &#8381</p>
                     <p>Итого: {$this->getProfit()} &#8381</p><br>";
            }
        } 

        $digitalGood = new DigitalGood ("WOW", 100, 3);
        $digitalGood->viewGood();
        $normalGood = new NormalGood ("Snikers" , 20 , 11);
        $normalGood->viewGood();
        $weightGood = new WeightGood ("Rice", 10, 222);
        $weightGood->viewGood();
    ?>

    
</body>
</html>