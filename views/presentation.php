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
    <?php require_once "../components/header.php" ?>
    <main class="flex flex-col gap-4 mt-4">
        <h2 class='text-2xl uppercase m-2'>
            <span class="bg-green-700 px-2 text-white font-kaisei">Qui sommes nous ?</span>
        </h2>
        <section class="flex bg-vert items-center mx-2">
            <img class="w-1/2" src="../assets/photo_5_personnes_riviére.png" alt="">
            <p class="w-1/2 text-xl text-white p-8">Cap Orne est une association dédiée à la préservation et à la
                valorisation de la biodiversité des berges de la rivière Orne. En protégeant cet environnement naturel
                unique, nous nous engageons à préserver l’habitat de nombreuses espèces, à sensibiliser les habitants,
                et à promouvoir des actions durables et respectueuses de notre écosystème local.
                <br class="my-6">
                Nos équipes, composées de passionnés de la nature et de spécialistes de la biodiversité, travaillent sur
                des projets de restauration écologique, de nettoyage des berges, et de reforestation. Nous organisons
                également des ateliers et des sorties éducatives pour les écoles et le grand public, afin d'encourager
                chacun à devenir un acteur de la préservation de cet espace naturel.
                <br class="my-6">
                Rejoindre Cap Orne, c’est s'engager pour un avenir où la nature et l'homme cohabitent en harmonie.
                Ensemble, contribuons à un Orne plus vert, plus riche et plus vivant !
            </p>
        </section>
        <h2 class='text-2xl uppercase m-2'>
            <span class="bg-green-700 px-2 text-white font-kaisei">Nos valeurs</span>
        </h2>
        <ul class="flex bg-vert m-2 gap-6 p-4">
            <li class="w-1/4 flex flex-col items-center">
                <img class="w-1/2" src="../assets/valeur_lieu.png" alt="">
                <p class="text-white text-center text-xl px-4">Prendre soin des lieux naturels des bords de l'orne</p>
            </li>
            <li class="w-1/4 flex flex-col items-center">
                <img class="w-1/2" src="../assets/valeur_transport.png" alt="">
                <p class="text-white text-center text-xl px-4">Encourager l'utilisation de vehicules non polluant et
                    plus
                    respectueux de l'environnement</p>
            </li>
            <li class="w-1/4 flex flex-col items-center">
                <img class="w-1/2" src="../assets/valeur_recyclage.png" alt="">
                <p class="text-white text-center text-xl px-4">Encourager l'utilisation de vehicules non polluant et
                    plus
                    respectueux de l'environnement</p>
            </li>
            <li class="w-1/4 flex flex-col items-center">
                <img class="w-1/2" src="../assets/valeur_travail.png" alt="">
                <p class="text-white text-center text-xl px-4">Encourager l'utilisation de vehicules non polluant et
                    plus
                    respectueux de l'environnement</p>
            </li>
        </ul>
    </main>


</body>

</html>