


    <div class="profile">
        <div class="container">
            <div class="profile_title">Личный кабинет</div>
            <div class="profile_cart">
                <div class="profile_image">
                    <img src="" alt="" class="profile_img">
                    <input type="file" name="img" id="img">
                </div>
                <div class="profile_info">
                    <div class="profile_name">Имя:  <?= $users['name']?></div>
                    <div class="profile_mail">Почта: <?= $users['email']?></div>
                </div>
            </div>

            <div class="orders">
                <div class="profile_title">Мои заказы</div>
                <div class="orders_inner">
                    <div class="order_list">
                        <div class="orders_list_title">ID заказа</div>
                        <div class="orders_list_text">1</div>
                        <div class="orders_list_text">2</div>
                        <div class="orders_list_text">3</div>
                        <div class="orders_list_text">4</div>
                    </div>
                    <div class="orders_list">
                        <div class="orders_list_title">Дата заказа</div>
                        <div class="orders_list_text">20.02.20</div>
                        <div class="orders_list_text">20.02.20</div>
                        <div class="orders_list_text">20.02.20</div>
                        <div class="orders_list_text">20.02.20</div>
                    </div>
                    <div class="orders_list">
                        <div class="orders_list_title">Статус</div>
                        <div class="orders_list_text green">Доставлено</div>
                        <div class="orders_list_text yellow">Отправлено</div>
                        <div class="orders_list_text red">Обработка заказа</div>
                        <div class="orders_list_text red">Обработка заказа</div>
                    </div>
                    <div class="orders_list">
                        <div class="order_list_title">Количество</div>
                        <div class="order_list_text">1 шт.</div>
                        <div class="order_list_text">2 шт.</div>
                        <div class="order_list_text">3 шт.</div>
                        <div class="order_list_text">4 шт.</div>
                    </div>
                    <div class="orders_list">
                        <div class="orders_list_title">Стоимость</div>
                        <div class="orders_list_text">1 990₽</div>
                        <div class="orders_list_text">2 990₽</div>
                        <div class="orders_list_text">18 990₽</div>
                        <div class="orders_list_text">34 990₽</div>
                    </div>
                </div>
                
            </div>

            <div class="sum_orders">Итого: 200 143₽</div>

        </div>
    </div>