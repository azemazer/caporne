<section class="max-w-screen-lg	mx-auto mb-12">



  <h2 class='text-2xl uppercase my-2'>
    <span class="bg-green-700 px-2 text-white">Evenements à venir</span>
  </h2>



  <div class="flex flex-row items-center">
    <!-- CONTENEUR 1/3 -->
    <div class="w-1/3 p-6 text-xl pb-32 ">

      <div>
        <p>
          Lorem ipsum dolores, oui c'est je sais pas la suite.
          Lorem ipsum dolores, oui c'est je sais pas la suite.

        </p>
        <!-- Retrouvez quelques événements à venir prochainement organisés par notre association. -->


        <div class='flex items-center mt-4'>
          <a class='mx-auto p-3 bg-green-700 text-white rounded inline-flex items-center gap-2 cursor-pointer hover:scale-110 hover:bg-green-800 transition duration-300'>
            Tous nos évènements
            <img class="animate-bounce transform transition-transform duration-300 " src="./assets/agenda.svg" />
          </a>
        </div>



      </div>
    </div>


    <!-- CONTENEUR 2/3 -->
    <div class="w-2/3 px-6 ">
      <!-- DEBUT DU SWIPER -->
      <div class="swiper multiple-slide-carousel swiper-container relative w-full">
        <div class="swiper-wrapper mb-4">

          <?php for ($i = 0; $i < 3; $i++) : ?>
            <div class="swiper-slide">
              <div class="bg-indigo-50 rounded-2xl h-100 flex justify-center items-center">
                <!-- <span class="text-2xl font-semibold text-indigo-600">Evenement 1</span> -->



                <article class="rounded-2xl relative bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                  <span class="absolute right-2 top-2 bg-green-100 text-green-800 text-sm font-medium px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">12-11-2024</span>

                  <a href="#">
                    <img class="w-100 rounded-t-lg" src="./assets/pexels-surdu-horia-743788511-29062581.jpg" alt="" />
                  </a>
                  <div class="p-4 relative">
                    <a href="#">
                      <h5 class="mb-1 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <p class='flex justify-end'>
                      <a href="#" class="relative right-1 bottom-1 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-green-700 dark:focus:ring-blue-800">
                        En savoir +
                      </a>

                    </p>
                  </div>
                </article>


              </div>
            </div>
          <?php endfor; ?>




        </div>


        <div class="absolute flex justify-center items-center m-auto left-0 right-0 w-fit bottom-12">
          <button id="slider-button-left" class="swiper-button-prev group !p-2 flex justify-center items-center border border-solid border-green-600 !w-12 !h-12 transition-all duration-500 rounded-full  hover:bg-green-700 !-translate-x-16" data-carousel-prev>
            <svg class="h-5 w-5 text-green-600 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
              <path d="M10.0002 11.9999L6 7.99971L10.0025 3.99719" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
          <button id="slider-button-right" class="swiper-button-next group !p-2 flex justify-center items-center border border-solid border-green-700 !w-12 !h-12 transition-all duration-500 rounded-full hover:bg-green-700 !translate-x-16" data-carousel-next>
            <svg class="h-5 w-5 text-green-600 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
              <path d="M5.99984 4.00012L10 8.00029L5.99748 12.0028" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
        </div>
      </div>
      <!-- FIN DU SWIPER -->


    </div>
    <!-- FIN DU CONTENEUR 2/3 -->

  </div>



  <div>













  </div>
</section>










<style>
  .swiper-wrapper {
    width: 100%;
    height: max-content !important;
    padding-bottom: 64px !important;
    -webkit-transition-timing-function: linear !important;
    transition-timing-function: linear !important;
    position: relative;
  }

  .swiper-pagination-bullet {
    background: #4f46e5;
  }

  .swiper-button-prev::after,
  .swiper-button-next::after {
    content: none;
  }
</style>


<!--JAVASCRIPT CODE-->
<script>
  var swiper = new Swiper(".multiple-slide-carousel", {
    loop: false,
    slidesPerView: 2,
    spaceBetween: 20,
    navigation: {
      nextEl: ".multiple-slide-carousel .swiper-button-next",
      prevEl: ".multiple-slide-carousel .swiper-button-prev",
    },
    breakpoints: {
      // 1920: {
      //     slidesPerView: 3,
      //     spaceBetween: 30
      // },
      // 1028: {
      //     slidesPerView: 2,
      //     spaceBetween: 30
      // },
      // 990: {
      //     slidesPerView: 1,
      //     spaceBetween: 0
      // }
    }
  });
</script>