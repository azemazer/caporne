<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaisei+Opti&family=Playwrite+CU:wght@100..400&display=swap"
        rel="stylesheet">
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    'vert': '#15803d',
                    'bleu': '#3970b2',
                    'jaune': '#ffff00',
                },
                fontFamily: {
                    kaisei: ["Kaisei Opti", "serif"],
                },
            }
        }
    }
    </script>
    <title>Cap Orne Accueil</title>
</head>

<body>

    <?php
    require_once './components/header.php';
?>
    <div class="w-full flex flex-col items-center justify-between p-6 space-x-6 w-">
        <div class="flex flex-col items-center space-x-3">
            <h3 class="text-sm font-medium truncate">Nos combats</h3>
            <span>Héros du quotidien</span>
        </div>
        <div class="flex">
            <div class="w-40">
                <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error at, perferendis
                    debitis nihil commodi voluptates dolorem, aspernatur obcaecati earum nostrum fuga totam ducimus
                    incidunt nisi esse ratione eius soluta quis?</p>
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