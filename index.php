<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
<?php
    require_once './components/header.php';
?>
<div class="w-full flex flex-col items-center justify-between py-3 px-14 bg-green-200">
    <div class="flex flex-col items-center w-full px-10 py-5">
        <h3 class="text-md font-medium truncate">Nos combats</h3>
        <span class="text-sm">Héros du quotidien</span>
    </div>
    <div class="flex items-center justify-between pb-5">
        <div class="px-5 w-80">
            <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error at, perferendis debitis nihil commodi voluptates dolorem, aspernatur obcaecati earum nostrum fuga totam ducimus incidunt nisi esse ratione eius soluta quis?</p>
        </div>
        <div class="w-40">
            <a class="bg-blue-400 py-2 px-4 rounded-lg hover:text-white" href="./views/nuisance.php">Y accéder</a>
        </div>
    </div>
</div>
<?php
    require_once './components/footer.php';
?>
</body>

</html>