<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../index.css" />
    <link rel="stylesheet" href="./lk.css" />
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
                 <a href="authorization.html">
                    <img src="../images/user.svg" />
                 </a>
            </div>
        </div>
    </header>

    <?php
      include('../connect.php');
      if ($_COOKIE['user'] != '') :

        $email = $_COOKIE['user'];
        $request = "SELECT * FROM User WHERE email = '$email'";
        $orderRequest = "SELECT * FROM orders WHERE userEmail = '$email'";
        $result = $link->query($request);
        $ordersResult = $link->query($orderRequest);
        $ordersArray = $ordersResult->fetch_assoc();
      ?>

    <section class="lk">
        <div class="lk__wrapper container">

            <div class="lk__info">
                <h2>Личный кабинет</h2>

                <div style="margin: 20px 0px;">
                    <img style="max-width: 100px;" src="https://cdn-icons-png.flaticon.com/512/219/219986.png" alt="avatar" />
                </div>

                <div>
                    <div>
                        <?= $email ?>
                    </div>
                </div>
                <br>
                <a href="/projects/editProduct/editProduct.php" class="button-purple">Добавить товар</a>
            </div>

            <div class="lk__history">
                <h2>Личный кабинет</h2>

                <?php if (empty($ordersArray)) :
                    ?>
                    <div class="no-order">
                        <p>you don't have any orders yet</p>
                    </div>
                    <?
                    ?>
                    <?php else :
                    while ($ordersArrayWhile = $ordersResult->fetch_assoc()) {
                    ?>
                        <div class="lk__snicker-card">
                            <div>
                                <img src="<?= $ordersArrayWhile['productImg'] ?>" />
                            </div>
                            <div class="lk__snicker-card__content">
                                <h4><?= $ordersArrayWhile['productTitle'] ?></h4>
                                <span><?= $ordersArrayWhile['productPrice'] ?></span>
                            </div>
                        </div>
                    <?
                    }
                    ?>
                    <?php endif; ?>

            </div>

        </div> 
    </section>

    <?php else :
        echo '<script>document.location.href="?page=login"</script>';
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