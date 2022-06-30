<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../index.css" />
    <link rel="stylesheet" href="./login.css" />
    <title>Auth</title>
</head>
<body>
    
    <header>
        <div class="header__wrapper container">
            <a href="/projects">
                <img src="../images/logo.svg" alt="logo" />
            </a>
            <div>
                 <a href="cart.html">
                    <img src="../images/cart.svg" />
                 </a>
                 <a href="authorization.html">
                    <img src="../images/user.svg" />
                 </a>
            </div>
        </div>
    </header>

    <?php
      if ($_COOKIE['user'] == "") :
    ?>

    <section class="register container">

        <form action="../signin.php" method="POST" class="form">
            <h1>Авторизация</h1>

            <div class="form__inputs">
                <input class="input" name="email" type="email" required placeholder="Введите email" />
                <input class="input" name="password" type="password" required placeholder="Введите Пароль" />
            </div>

            <div style="margin: 20px 0px;">
                <a href="/projects/authorization/authorization.php">Нет акаунта?</a>
            </div>

            <button class="button-small">войти</button>

        </form>

    </section>

    <?php else :
        echo '<script>document.location.href="http://z192.pautinaweb.ru/projects/lk/lk.php"</script>';
    ?>
    <?php endif; ?>
    <footer>
        <div class="footer__wrapper container">
            <div>
                <img src="../images/logo.svg" alt="logo" />
            </div>

            <div class="footer__links__wrapper">
                <div>
                    <ul>
                        <li>
                            <a href="#">Главная</a>
                        </li>
                        <li>
                            <a href="#">Акции</a>
                        </li>
                        <li>
                            <a href="#">Новости</a>
                        </li>
                        <li>
                            <a href="#">Социальные сети</a>
                        </li>
                        <li>
                            <a href="#">Техподдержка</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <ul>
                        <li>
                            <a href="#">Главная</a>
                        </li>
                        <li>
                            <a href="#">Акции</a>
                        </li>
                        <li>
                            <a href="#">Новости</a>
                        </li>
                        <li>
                            <a href="#">Социальные сети</a>
                        </li>
                        <li>
                            <a href="#">Техподдержка</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <ul>
                        <li>
                            <a href="#">Главная</a>
                        </li>
                        <li>
                            <a href="#">Акции</a>
                        </li>
                        <li>
                            <a href="#">Новости</a>
                        </li>
                        <li>
                            <a href="#">Социальные сети</a>
                        </li>
                        <li>
                            <a href="#">Техподдержка</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>

</body>
</html>