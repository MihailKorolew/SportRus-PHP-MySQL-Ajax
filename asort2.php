<?php
  $db = new PDO("mysql:host=MySQL-5.7;dbname=SportRus", "root", "");

  $info = [];

  if($query = $db->query("SELECT * FROM `new_table`")){
     $info = $query->fetchAll(PDO::FETCH_ASSOC);
  }
  else{
    print_r($db->errorInfo());
  }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header class = "header">
        <div class="wrapper">
            <div class="header_wrapper">
                <div class="header_logo">
                    <a href="/" class="header_logo-link">
                        <img src="./img/svg/logo.svg" alt="SportRus" class="header_logo-pic">
                    </a>
                </div>
                <nav class="header_nav">
                    <ul class="header_list">
                        <li class="header_item">
                            <a href="indexx.php" class="header_link">Главная</a>
                        </li>

                        <li class="header_item">
                            <a href="indexx2.php" class="header_link">Ассортимент</a>
                        </li>

                        <li class="header_item">
                            <a href="indexx3.php" class="header_link">Представители</a>
                        </li>

                        <li class="header_item">
                            <a href="com(ajax here).php"><button class = "knopka_come"><p class = "come">Войти</p></button></a>
                        </li>

                        <li class="header_item">
                            <a href="regpole.php"><button class = "knopka_reg"><p class = "reg">Регистрация</p></button> </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main class="main">
        <section class="intro">
            <div class="wrapper">
                <h1 class="intro2_title">
                    Ассортимент
                </h1>
                <input id = "searchbar" class ="searchtowar" onkeyup="search_towar()" type = "text" name = "search" placeholder = "Поиск товара">
                <ul class="str_crosovok">
                    <li class="part2">
                        <a href="/" class="intro5_picture1">
                            <img src="./img/gantel1.png" alt="SportRusCros" class="Crosovk1">
                        </a>

                        <ul class="o_toware">
                            <li class="thing">
                                <?php
                                  $i = 0;
                                  foreach ($info as $data):
                                    echo $info['name'];
                                    $i = $i + 1;
                                 ?>
                               <?php endforeach; ?>
                            </li>

                            <li class="price">
                                Цена: 5000 рублей
                            </li>

                            <button class="buy">
                                <p class="kupit">Купить</p>
                            </button>

                        </ul>
                    </li>

                    <li class="part2">
                        <a href="/" class="intro5_picture1">
                            <img src="./img/gantel2.png" alt="SportRusCros" class="Crosovk1">
                        </a>

                        <ul class="o_toware">
                            <li class="thing">
                                Гантели 1 кг
                            </li>

                            <li class="price">
                                Цена: 1000 рублей
                            </li>

                            <button class="buy">
                                <p class="kupit">Купить</p>
                            </button>

                        </ul>
                    </li>

                    <li class="part2">
                        <a href="/" class="intro5_picture1">
                            <img src="./img/gantel3.png" alt="SportRusCros" class="Crosovk1">
                        </a>

                        <ul class="o_toware">
                            <li class="thing">
                                Гантели 10 кг
                            </li>

                            <li class="price">
                                Цена: 10000 рублей
                            </li>

                            <button class="buy">
                                <p class="kupit">Купить</p>
                            </button>

                        </ul>
                    </li>



                </ul>


            </div>
            <script src="dinam.js"></script>
        </section>
    </main>
</body>
</html>
