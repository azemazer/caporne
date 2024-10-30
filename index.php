<?php  require_once './vendor/autoload.php'; ?>

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

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


</head>


<body>
<?php 
    define( 'ABSPATH', dirname( __FILE__ ) . '/' );
    require_once "./classes/Router.php";
    $router = new Router($_GET['url']); 
    $router->get('/', function(){ echo "Bienvenue sur ma homepage !"; }); 
    $router->get('/posts/:id', function($id){ echo "Voila l'article $id"; }); 
    $router->get('/home', function(){ require_once './views/index.php'; });
    $router->get('/nuisance', function(){ require_once './views/nuisance.php'; });
    $router->get('/presentation', function(){ require_once './views/presentation.php'; });
    $router->get('/evenements', function(){ require_once './views/agenda.php'; });
    $router->run(); 
?>
</body>

</html>