<?php 
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_md = md5($password);

        if (empty($email)) {
            $error.='<p class="error_styles">Введите email</p>';
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error.='<p class="error_styles">Неправильный формат ввода email</p>';
            }
                $emailCheckQuery = "SELECT * FROM users WHERE email = '$email' AND password = '$password_md'";
                $result = $link -> query($emailCheckQuery);
                $countEmails = $result -> num_rows;

                if (empty($countEmails)) {
                    $error .= 'Вы еще не зареганы';
                }
        }


        if (empty($error)) {
            $users = $result -> fetch_assoc();
            $uid = $users['id'];
            $_SESSION['uid'] = $uid;

            echo '<script>document.location.href="?page=user"</script>';
        } else {
            echo '<script>document.location.href="?page=about"</script>';
        }
    }
?>


    <div class="login">
        <form class="login_inner" name="login" method="post">
            <div class="login_title">Войти в аккаунт Level Up</div>
            <input required type="email" placeholder="Email" name="email" class="input_login">
            <input required type="password" placeholder="Пароль" name="password" class="input_login">
            <input type="submit" class="btn_login" name="login" value="Войти">
            <div class="login_reg">Нет аккаунта? <a class="login_reg_link" href="reg.html">Создать</a></div>
        </form>
    </div>