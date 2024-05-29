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
                <h1 class="intro4_title">
                    Регистрация
                </h1>

                <p class="intro4_text1">
                    Строки для заполнения
                </p>
                <form action="register.php" method="post">
                    <label for="email" class = "podpis1"> Email </label>
                    <input type="text" id="email" placeholder="Email" class = "pole1" name = "email">
                    <p class="probel"> <br> </p>
                    <label for="tel" class = "podpis2"> Номер телефона </label>
                    <input type="text" id="tel" placeholder="Номер телефона" class = "pole1" name = "tel">
                    <p class="probel"> <br> </p>
                    <label for="password" class = "podpis3"> Пароль </label>
                    <input type="text" id="password" placeholder="Пароль" class = "pole1" name = "pass">
                    <p class="probel"> <br> </p>
                    <label for="adres" class = "podpis4"> Адрес </label>
                    <input type="text" id="adres" placeholder="Адрес" class = "pole1" name = "adres">

                    <p class="probel"> <br> </p>

                    <button class = "icon_button"><p class = "podpis6">Отправить</p></button>
                </form>
                <script src="https://ajax.googleapis.com/ajax/libs/cesiumjs/1.78/Build/Cesium/Cesium.js"></script>
            </div>
        </section>
    </main>
</body>
</html>