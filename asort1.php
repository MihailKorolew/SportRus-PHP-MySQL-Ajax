<?php
$connection=mysqli_connect('MySQL-5.7', 'root', '', 'SportRus');
$sql = "SELECT * FROM `new_table`;";
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
                            <a href="http://stackoverflow.com"><button class = "knopka_come"><p class = "come">Войти</p></button></a>
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
                            <img src="./img/cros1.png" alt="SportRusCros" class="Crosovk1">
                        </a>

                        <ul class="o_toware">
                            <?php $id =0; ?>
                            <li class="thing" id = "list">
                              <?php
                                $i = 0;
                                $count = $id;
                                $result=mysqli_query($connection,$sql);
                                while($food = mysqli_fetch_assoc($result)){
                                  if($i == $count){
                                    echo $food['name'];
                                  }
                                  $i = $i + 1;
                                }


                              ?>
                            </li>

                            <li class="price">
                                Цена: <?php
                                  $i = 0;
                                  $count = $id;
                                  $result=mysqli_query($connection,$sql);
                                  while($food = mysqli_fetch_assoc($result)){
                                    if($i == $count){
                                      echo $food['price'];
                                    }
                                    $i = $i + 1;
                                  }
                                ?> рублей
                            </li>

                            <button class="buy">
                                <p class="kupit">Купить</p>
                            </button>

                        </ul>
                    </li>

                    <li class="part2">
                        <a href="/" class="intro5_picture1">
                            <img src="./img/cros2.png" alt="SportRusCros" class="Crosovk1">
                        </a>

                        <ul class="o_toware">
                            <?php $id =1; ?>
                            <li class="thing" id = "list">
                              <?php
                                $i = 0;
                                $count = $id;
                                $result=mysqli_query($connection,$sql);
                                while($food = mysqli_fetch_assoc($result)){
                                  if($i == $count){
                                    echo $food['name'];
                                  }
                                  $i = $i + 1;
                                }


                              ?>
                            </li>

                            <li class="price">
                                Цена: <?php
                                  $i = 0;
                                  $count = $id;
                                  $result=mysqli_query($connection,$sql);
                                  while($food = mysqli_fetch_assoc($result)){
                                    if($i == $count){
                                      echo $food['price'];
                                    }
                                    $i = $i + 1;
                                  }
                                ?> рублей
                            </li>

                            <button class="buy">
                                <p class="kupit">Купить</p>
                            </button>

                        </ul>
                    </li>

                    <li class="part2">
                        <a href="/" class="intro5_picture1">
                            <img src="./img/cros3.png" alt="SportRusCros" class="Crosovk1">
                        </a>

                        <ul class="o_toware">
                            <li class="thing" id = "list">
                              <?php $id =2; ?>
                              <li class="thing" id = "list">
                                <?php
                                  $i = 0;
                                  $count = $id;
                                  $result=mysqli_query($connection,$sql);
                                  while($food = mysqli_fetch_assoc($result)){
                                    if($i == $count){
                                      echo $food['name'];
                                    }
                                    $i = $i + 1;
                                  }
                                ?>
                            </li>

                            <li class="price">
                                Цена: <?php
                                  $i = 0;
                                  $count = $id;
                                  $result=mysqli_query($connection,$sql);
                                  while($food = mysqli_fetch_assoc($result)){
                                    if($i == $count){
                                      echo $food['price'];
                                    }
                                    $i = $i + 1;
                                  }
                                ?> рублей
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
