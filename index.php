<!DOCTYPE html>
<html>

<head>
    <script src="https://cdn.tailwindcss.com"></script>

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


</head>

<body>
    <?php
    require_once './components/header.php';

    require_once './components/events.php'

    ?>
    <div class="w-full flex flex-col items-center justify-between p-6 space-x-6">
        <div class="flex flex-col items-center space-x-3">
            <h3 class="text-sm font-medium truncate">Nos combats</h3>
            <span>Héros du quotidien</span>
        </div>
        <div class="flex">
            <div class="w-40">
                <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error at, perferendis debitis nihil commodi voluptates dolorem, aspernatur obcaecati earum nostrum fuga totam ducimus incidunt nisi esse ratione eius soluta quis?</p>
            </div>
            <div class="w-40">
                <a href="./views/nuisance.php">Y accéder</a>
            </div>
        </div>
    </div>
    <?php
    require_once './components/footer.php';
    ?>
</body>

</html>