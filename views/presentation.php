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
    <h1>Hello World All</h1>

</body>

</html>