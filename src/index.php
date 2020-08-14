<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP2</title>
</head>
<body>
    <?php 
        echo "XAMPP WORK";
    // lesson 1

        class Good {
            public $id_good;
            public $name;
            public $description;
            public $price;
            public $src;
            public $src_small;

            function __construct(int $id_good,string $name,string $description,int $price){
                $this->id_good = $id_good;
                $this->name = $name;
                $this->description = $description;
                $this->price = $price;
            }
        
            function viewGood(){
               echo "<h1>$this->name</h1>
                    <p>Описание: $this->description</p>
                    <p>Артикул: $this->id_good</p>
                    <p>Цена: $this->price &#8381</p>";
            }
        }    
        $someGood = new Good (5,"something", "nothing doing", 777);
        $someGood->viewGood();
   
    //задание 5    
        class A {
            public function foo() {
                static $x = 0; 
                // Ключивое слово static, Присваивание выполняется только один раз, при первом вызове функции
                // Значение помеченной таким образом переменной сохраняется после окончания работы функции
                // При последующих вызовах функции вместо присваивания переменная получает сохраненное ранее значение
                echo ++$x;
            }
        }
        $a1 = new A(); //создаем переменную типа A
        $a2 = new A(); //создаем переменную типа A
        
        // метод будет существовать лишь в одном экземпляре, просто при каждом вызове в него будет пробрасываться разный $this.
        $a1->foo(); //1
        $a2->foo(); //2
        $a1->foo(); //3
        $a2->foo(); //4

    //задание 6     
        class A {
            public function foo() {
                static $x = 0;
                echo ++$x;
            }
        }
        // Наследование приводит к созданию нового метода foo()
        class B extends A {
        }
        $a1 = new A();
        $b1 = new B();
        $a1->foo(); //1
        $b1->foo(); //1
        $a1->foo(); //2
        $b1->foo(); //2

    //задание 5 
        class A {
            public function foo() {
                static $x = 0;
                echo ++$x;
            }
        }
        class B extends A {
        }
        $a1 = new A; // нет скобок, значение не определено, не передаются данные в конструктор?
        $b1 = new B;
        $a1->foo(); //1
        $b1->foo(); //1
        $a1->foo(); //2
        $b1->foo(); //2
    ?>  
</body>
</html>