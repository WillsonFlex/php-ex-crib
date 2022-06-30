<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../index.css" />
    <link rel="stylesheet" href="../productCard/productCard.css" />
    <title>Edit Product</title>
</head>
<body>
    
<?php
    include ('../connect.php');
    if (isset($_POST['addProduct'])) {
        $title = $_POST['title'];
        $price = $_POST['price'];
        $img = $_POST['img'];


        $addQuery = "INSERT INTO products (img, price, title)
                VALUES ('$img', '$price', '$title')";

        if (!empty($link)) {
            $link->query($addQuery);
        }
    }


?>


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

    <section class="productCard">
        <div style="flex-direction: column;" class="productCard__wrapper">        
            <h2 style="text-align: center;">
                Добавить товар
            </h2>
            <div class="container">

                <form name="addProduct" method="POST">
                    <label style="flex-direction: column; display: flex; margin-top: 50px;">
                        <span style="font-weight: bold;">Загрузите картинку</span>
                        <input name="img" style="border: 1px solid #D8D4EC; padding: 10px 20px; margin: 20px 0px;" type="text" required placeholder="url" />
                    </label>

                    <label style="flex-direction: column; display: flex;">
                        <span style="font-weight: bold;">Название товара</span>
                        <input name="title" style="border: 1px solid #D8D4EC; padding: 10px 20px; margin: 20px 0px;" type="text" required placeholder="Кроссовки" />
                    </label>

                    <label style="flex-direction: column; display: flex;">
                        <span style="font-weight: bold;">Цена</span>
                        <input name="price" style="border: 1px solid #D8D4EC; padding: 10px 20px; margin: 20px 0px;" type="text" required placeholder="9999" />
                    </label>

                    <button type="submit" name="addProduct" class="button-purple">Добавить</button>
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