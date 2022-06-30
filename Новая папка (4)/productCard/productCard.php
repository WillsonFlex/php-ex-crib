<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../index.css" />
    <link rel="stylesheet" href="./productCard.css" />
    <title>Card</title>
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
                 <a href="/projects/authorization/authorization.php">
                    <img src="../images/user.svg" />
                 </a>
            </div>
        </div>
    </header>

    <section class="productCard">
        <div class="productCard__wrapper container">

        <?php
            include('../connect.php');
            if (isset($link)) {
            if (isset($_GET['id'])) {
                $item_id = $_GET['id'];
                $query = "SELECT * FROM products WHERE id = '$item_id'";
                $result = $link->query($query);
                $item = $result->fetch_assoc();

                if (isset($_POST['order'])) {
                $userEmail = $_COOKIE['user'];
                $productTitle = $item['title'];
                $productPrice = $item['price'];
                $productImg = $item['img'];

                $requestOrder = "INSERT INTO orders (productId, productImg, productPrice, productTitle, userEmail)
                                            VALUES ('$item_id', '$productImg', '$productPrice', '$productTitle', '$userEmail')";
                $link->query($requestOrder);
                echo '<script>document.location.href="http://z192.pautinaweb.ru/projects/lk/lk.php"</script>';
                }
            }
            }
        ?>

            <div class="productCard__image">
                <img style="max-width: 400px; width: 100%;" src="<?= $item['img'] ?>" alt="snicker" />
            </div>

    
            <div class="productCard__info">
                <h1><?= $item['title'] ?></h1>
                <br>

                <div style="margin-bottom: 25px;">
                    <span><?= $item['price'] ?> Рублей</span>
                </div>

                <p>
                    КРОССОВКИ FORUM LOW МОСКВА посвящены городу, который никогда не спит.
                     Москва – это город, где круглосуточно кипит жизнь, здесь всегда 
                     доступен любой сервис и множество мест, где в любое время можно
                     встретиться с друзьями.
                </p>
            
                <form name="order" method="POST">
                    <button type="submit" name="order" class="button-purple button">В корзину</button>
                </form>

            </div>

        </div> 
    </section>

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