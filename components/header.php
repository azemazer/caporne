

<header class="bg-vert flex justify-between items-center px-4 ">
    <img class="w-24 h-24 rounded-lg bg-white my-4" src="assets/caporne.svg" alt="">
    <ul class="self-end flex gap-2 text-lg text-white">
        <li><a class="" href="home">Accueil</a></li>
        <li class="">|</li>
        <li class="" ><a href="evenements">Agenda</a></li>
        <li class="">|</li>
        <li class="" ><a href="nuisance">Nos combats</a></li>
    </ul>
    <div class="flex flex-col gap-4 items-center">
        <p class="font-kaisei text-xl text-white">CAP ORNE</p>
        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" type="button" class="p-2 bg-white rounded-lg flex gap-2 items-center">
            <span>Se connecter</span>
            <svg xmlns="http://www.w3.org/2000/svg" height="16px" width="16px" viewBox="0 0 448 512">
                <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z"/>
            </svg>
        </button>
    </div>
</header>

<?php require 'modal.php';?>
