<?php
use Carbon\Carbon;

require_once ABSPATH . '/components/header.php';


?>

<section class="max-w-screen-lg	mx-auto mb-12">

    <h1 class='text-2xl uppercase my-2'>
        <span class="bg-green-700 px-2 text-white font-[kaisei]">Tous nos événéments</s>
    </h1>


    <h2 class="text-2xl mt-6 mb-4">
        Bienvenue sur notre agenda. Vous pouvez consulter ici l'ensemble des événements publics et ouverts à tous que nous organisons.
    </h2>


    <div id="events-list" class="grid grid-cols-3 gap-3">

        <?php
        $mutable = Carbon::now();

        ?>
        <?php for ($i = 0; $i < 10; $i++) : ?>

            <article class="rounded-2xl relative bg-white border border-gray-200 rounded-lg shadow ">
                <span class="absolute right-2 top-2 bg-green-100 text-green-800 text-sm font-medium px-2.5 py-0.5 rounded"><?= $mutable->add($i, 'day')->isoFormat("DD/MM/YYYY") ?></span>

                <a href="#">
                    <img class="w-100 rounded-t-lg" src="./../assets/pexels-surdu-horia-743788511-29062581.jpg" alt="" />
                </a>
                <div class="p-4 relative">
                    <a href="#">
                        <h5 class="mb-1 text-xl font-bold tracking-tight text-gray-900 ">Noteworthy technology acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <p class='flex justify-end'>
                        <a href="#" class="relative right-1 bottom-1 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            En savoir +
                        </a>

                    </p>
                </div>
            </article>

        <?php endfor; ?>



    </div>




</section>