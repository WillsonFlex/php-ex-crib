<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css" />
    <title>Main</title>
</head>
<body>

    <?php include("./connect.php") ?>
    
    <header>
        <div class="header__wrapper container">
            <div>
                <img src="./images/logo.svg" alt="logo" />
            </div>
            <div>
                 <a href="/projects/lk/lk.php">
                    <img src="./images/cart.svg" />
                 </a>
                 <a href="/projects/login/login.php">
                    <img src="./images/user.svg" />
                 </a>
            </div>
        </div>
    </header>

    <div class="promotion container">
        <h2>ЛЕТНЯЯ РАСПРОДАЖА! СКИДКИ ДО 75%</h2>
        <a href="" alt="">ЗА ПОКУПКАМИ</a>
    </div>

    <main>

        <section class="promotion-top">
            <h1 class="promotion__title">БОЛЕЕ 50 000 МОДЕЛЕЙ КРОССОВОК</h1>
            <button class="button-purple">КАТАЛОГ</button>
        </section>

        <section class="products container">

            <h2 class="h2-title">КАТАЛОГ ТОВАРОВ</h2>

            <div class="products__wrapper">

            <?php
                $query = "SELECT * FROM products";
                if (isset($link)) {
                $result = $link->query($query);
                }
                while ($products = $result->fetch_assoc()) {
                ?>
                <div class="product-card">
                    <div class="product-card__image">
                        <img src="<?= $products['img'] ?>" alt="snicker" />
                    </div>
                    <div class="product-card__content">
                        <h4 class="product-card__name"><?= $products['title'] ?></h4>
                        <a href="/projects/productCard/productCard.php?page=item&id=<?= $products['id'] ?>" class="button-small">В корзину</a>
                    </div>
                </div>
                <? }
            ?>

            </div>

        </section>

        <section class="promotion-bottom">
            <h1 class="promotion__title">БЕСПЛАТНАЯ ДОСТАВКА ПО РОССИИ</h1>
        </section>

    </main>

    <footer>
        <div class="footer__wrapper container">
            <div>
                <img src="./images/logo.svg" alt="logo" />
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