<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/site.css">
    <script src="scripts/jquery.js"></script>
    <script src="scripts/site.js"></script>
    <title>Онлайн магазин</title>
</head>
<body>
<header>
    <div id="headerInside">
        <div id="logo"></div>
        <div id="companyName">Brand</div>
        <div id="navWrap">
            <a href="/">
                Главная
            </a>
            <a href="index.php?page=shop">
                Магазин
            </a>
        </div>
    </div>
</header>

<div id="content">
    <?php
        $goods = [
            [
                'id'=> 1,
                'name'=> 'Iphone',
                'desc'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia a, minus cupiditate esse! Molestiae fuga, ducimus accusamus animi aut quas nisi consectetur architecto voluptatum tempore, rem distinctio libero optio voluptatibus.',
                'img' => '/images/goods/iphone.jpg',
                'price' => '2000 $'
            ],
            [
                'id'=> 2,
                'name'=> 'HTC',
                'desc'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia a, minus cupiditate esse! Molestiae fuga, ducimus accusamus animi aut quas nisi consectetur architecto voluptatum tempore, rem distinctio libero optio voluptatibus.',
                'img' => '/images/goods/htc.jpg',
                'price' => '1200 $'
            ],
            [
                'id'=> 3,
                'name'=> 'Samsung',
                'desc'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia a, minus cupiditate esse! Molestiae fuga, ducimus accusamus animi aut quas nisi consectetur architecto voluptatum tempore, rem distinctio libero optio voluptatibus.',
                'img' => '/images/goods/samsung.jpg',
                'price' => '1400 $'
            ]
        ];

        $page = $_GET['page'];
        if (!isset($page)) {
            require('templates/main.php');
        }
        elseif ($page == 'shop') {
            require('templates/shop.php');
        }
        elseif ($page == 'product') {
            $id = $_GET['id'];
            $good = [];
            foreach ($goods as $product) {
                if ($product['id'] == $id) {
                    $good = $product;
                    break;
                }
            }
            require('templates/openedProduct.php');
        }
    ?>
</div>

<footer>
    <div id="footerInside">

        <div id="contacts">
            <div class="contactWrap">
                <img src="images/envelope.svg" class="contactIcon">
                info@brandshop.ru
            </div>
            <div class="contactWrap">
                <img src="images/phone-call.svg" class="contactIcon">
                8 800 555 00 00
            </div>
            <div class="contactWrap">
                <img src="images/placeholder.svg" class="contactIcon">
                Москва, пр-т Ленина, д. 1 офис 304
            </div>
        </div>

        <div id="footerNav">
            <a href="/">Главная</a>
            <a href="index.php?page=shop">Магазин</a>
        </div>

        <div id="social">
            <img class="socialItem" src="images/vk-social-logotype.svg">
            <img class="socialItem" src="images/google-plus-social-logotype.svg">
            <img class="socialItem" src="images/facebook-logo.svg">
        </div>

        <div id="copyrights">&copy; Brandshop</div>
    </div>
</footer>

</body>
</html>