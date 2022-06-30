<?php 

    if (isset($_POST['reg'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        $checkEmailUser = "SELECT * FROM users WHERE email = '$email'";
        $fetchUserQuery = $link -> query($checkEmailUser);
        $arrayEmails = $fetchUserQuery -> fetch_assoc();

        if ($arrayEmails) {
            $error .= 'Вы уже зарегистрированы!';
        } else {
            if (strlen($name) < 3) {
                $error .= 'Длина имени не может быть меньше 3-ёх символов!';
            }
            if (strlen($password) < 6) {
                $error .= 'Длина пароля не может быть меньше 6-ёх символов!';
            }

            if ($password != $confirmPassword) {
                $error .= 'Пароли не совпадают';
            }
        }

        if (empty($error)) {
            $password = md5($password);
            $registerQuery = "INSERT INTO users (name, email, password)
                              VALUES ('$name', '$email', '$password')";
            $link -> query($registerQuery);
            echo '<script>document.location.href="?page=login"</script>';
        }
    }

?>

    <div class="login">
        <form class="login_inner" name="reg" method="post">
            <div class="login_title">Создать аккаунт Level Up</div>
            <input required type="text" placeholder="Имя" name="name" class="input_login">
            <input required type="text" placeholder="Email" name="email" class="input_login">
            <input required type="password" placeholder="Пароль" name="password" class="input_login">
            <input required type="password" placeholder="Повторите пароль" name="confirmPassword" class="input_login">
            <input required type="submit" class="btn_login" name="reg" value="Зарегестрироваться">
            <?php
                echo $error;
            ?>
            <div class="login_reg">Есть аккаунт? <a class="login_reg_link" href="login.html">Войти</a></div>
        </form>
    </div>