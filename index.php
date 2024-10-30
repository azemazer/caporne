<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- PAS TOUCHE -->

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>




    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaisei+Opti&family=Playwrite+CU:wght@100..400&display=swap"
        rel="stylesheet">
    <script>
    tailwind.config = {
        theme: {
            colors: {
                'vert': '#15803d',
                'bleu': '#3970b2',
                'jaune': '#ffff00'
            },
            extend: {
                fontFamily: {
                    kaisei: ["Kaisei Opti", serif],
                },
            }
        }
    }
    </script>
    <title>Cap Orne Accueil</title>

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


</head>


<body>
    <?php
    require_once './components/header.php';
    require_once './components/events.php';
?>
<div class="w-full flex flex-col items-center justify-between py-3 px-14 bg-cover bg-[url('./resource/section-nuisance-bg.svg')]">
    <div class="flex flex-col items-center w-full px-10 py-5">
        <h3 class="text-md font-medium truncate">Nos combats</h3>
        <span class="text-sm">Héros du quotidien</span>
    </div>
    <div class="flex items-center justify-between pb-5">
        <div class="px-5 w-80">
            <p class="text-sm">Notre association lutte contre la pollution et l'urbanisation qui menacent la biodiversité de la rivière. Informez-vous sur ces enjeux cruciaux pour préserver cet écosystème fragile !</p>
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