<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
<?php
    require_once __DIR__ . '/../components/header.php';
?>
<section class="w-full mx-auto py-10 bg-gray-50">
    <div class="w-fit pb-1 px-2 mx-4 rounded-md place-self-center text-5xl font-semibold border-b-2 border-jaune">Nuisances</div>

    <div class="xl:w-[80%] sm:w-[85%] xs:w-[90%] mx-auto flex md:flex-row xs:flex-col lg:gap-4 xs:gap-2 justify-center lg:items-stretch md:items-center mt-4">
      <div class="lg:w-[50%] xs:w-full">
        <img class="lg:rounded-t-lg sm:rounded-sm xs:rounded-sm" src="https://images.pexels.com/photos/942560/pexels-photo-942560.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="disaster image" />
      </div>
      <div class="lg:w-[50%] sm:w-full xs:w-full bg-gray-100 md:p-4 xs:p-0 rounded-md">
        <h2 class="text-3xl font-semibold text-gray-900">Pollution industrielle</h2>
        <p class="text-md mt-4">La pollution industrielle est l'un des principaux facteurs de dégradation de la biodiversité des rivières. Les rejets chimiques et les métaux lourds des usines contaminent les eaux, nuisant à la faune aquatique et aux écosystèmes environnants. Ces substances toxiques perturbent la chaîne alimentaire et mettent en danger des espèces déjà fragiles, rendant essentielle la régulation de ces activités pour protéger notre patrimoine naturel.</p>
      </div>
    </div>
    <!-- col-2 -->
    <div class="xl:w-[80%] sm:w-[85%] xs:w-[90%] mx-auto flex md:flex-row xs:flex-col lg:gap-4 xs:gap-2 justify-center lg:items-stretch md:items-center mt-6">
      <!--  -->
      <div class="md:hidden sm:block xs:block xs:w-full">
        <img class="lg:rounded-t-lg sm:rounded-sm xs:rounded-sm" src="https://images.pexels.com/photos/3552472/pexels-photo-3552472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="disaster image" />
      </div>
      <!--  -->
      <div class="lg:w-[50%] xs:w-full bg-gray-100 md:p-4 xs:p-0 rounded-md">
        <h2 class="text-3xl font-semibold text-gray-900">Urbanisation excessive</h2>

        <p class="text-md mt-4">L'urbanisation excessive constitue une menace majeure pour les rivières. Le développement urbain entraîne le bétonnage des rives, la destruction des habitats et une augmentation du ruissellement, qui contribue à l'érosion et à la pollution. Cette expansion incontrôlée perturbe les écosystèmes locaux, réduisant la biodiversité et menaçant les espèces qui dépendent des milieux aquatiques pour survivre. Une planification urbaine durable est cruciale pour préserver ces environnements fragiles.</p>
      </div>
      <!--  -->
      <div class="md:block sm:hidden xs:hidden lg:w-[50%] xs:w-full">
        <img class="lg:rounded-t-lg xs:rounded-sm" src="https://images.pexels.com/photos/3552472/pexels-photo-3552472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="disaster image" />
      </div>
    </div>
  </section>

<?php
    require_once __DIR__ . '/../components/footer.php';
?>
</body>

</html>