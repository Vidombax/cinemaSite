<head>
    <link rel="stylesheet" href="/src/assets/css/promocode.css">
    <?php
        require_once('../db/connection.php');

        $sql_promocodes = "SELECT * FROM `promocodes`";
        $data_promocodes = $pdo -> query($sql_promocodes);
        $line_promocodes = $data_promocodes -> fetchAll();
    ?>
</head>
<body>
    <div>
        <?php
            foreach ($line_promocodes as $mas) {?>
                <div class="flex items-center justify-center relative divPromocode">
                    <div class="couponExplanation flex absolute items-center text-center">
                        <p class="colorWhite"><?=$mas['explanation']?></p>
                    </div>
                    <div class="coupon items-center">
                        <p class="boldFont text-4xl"><?=$mas['namePromocode']?></p>
                        <img src="src/public/question.png" width="60px" height="60px" alt="question" class="question" id="question">
                        <img src="src/public/coupon.png" alt="<?=$mas['code']?>" class="couponImg">
                    </div>
                </div>
            <?}
        ?>
    </div>
    <script src="./src/assets/js/promocode.js"></script>
</body>
