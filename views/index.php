<?php
    require_once './components/header.php';
    require_once './components/events.php';
    require_once './components/pres.php';
?>
<div class="w-full flex flex-col items-center justify-between py-3 px-14 bg-cover bg-vert text-white">
    <div class="flex flex-col items-center w-full px-10 py-5">
        <h3 class="text-md font-medium truncate">Nos combats</h3>
        <span class="text-sm">Héros du quotidien</span>
    </div>
    <div class="flex items-center justify-between pb-5">
        <div class="px-5 w-80">
            <p class="text-sm">Notre association lutte contre la pollution et l'urbanisation qui menacent la
                biodiversité de la rivière. Informez-vous sur ces enjeux cruciaux pour préserver cet écosystème fragile
                !</p>
        </div>
        <div class="w-40">
            <a class="bg-blue-400 py-2 px-4 rounded-lg text-black hover:text-white" href="nuisance">Y accéder</a>
        </div>
    </div>
</div>
<?php
    require_once './components/footer.php';
    ?>