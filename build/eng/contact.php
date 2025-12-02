<?php require_once './inc/header.php';?>

<body>
  <?php require_once './inc/nav.php';?>
    <!-- hero section -->
    <section style="background-image: url(./assets/img/blurimg.png);"
        class="bg-cover bg-center bg-no-repeat w-full 2xl:h-[337px] h-[220px]">
        <div class="text-center text-white 2xl:py-20 py-10 2xl:px-4 lg:px-10 px-5">
            <div>
                <h1 class="lg:text-3xl  md:text-3xl text-2xl leading-9 font-bold text-[#333333]">
                    Contactez-nous
                </h1>
            </div>
            <div class="2xl:pt-5 pt-3">
                <p class="text-xl lg:leading-7  leading-6 font-normal text-[#333333]">
                    Prêt à discuter de vos besoins d'assurance ? Notre équipe d'experts est là pour vous fournir des<br
                        class="lg:block hidden">
                    conseils personnalisés et une expertise adaptée à votre situation.
                </p>
            </div>
        </div>
    </section>
    <!-- end hero section -->

    <!-- Demande d'offre ou d'information    section -->
    <section class="w-full bg-white 2xl:px-36 lg:px-10 px-5 lg:pt-[60px] pt-10 pb-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

            <div class="bg-white 2xl:px-8 px-4 pt-8 rounded-2xl shadow 2xl:pb-28 lg:pb-4">
                <h2 class="lg:text-base text-base lg:leading-8 leading-7 font-bold text-[#333333]">Demande d'offre ou d'information</h2>
<form action="send.php" method="POST" class="space-y-5">
    <div class="grid grid-cols-2 gap-5">
        <div>
            <label class="block lg:text-base text-xs leading-5 font-normal pt-7 pb-3 text-[#333333]">Prénom</label>
            <input type="text" name="first_name"
                class="w-full bg-[#FCFCFC] border border-[#E9E7E2] rounded-md px-3 py-3 " required>
        </div>
        <div>
            <label class="block lg:text-base text-xs leading-5 font-normal pt-7 pb-3 text-[#333333]">Nom de famille</label>
            <input type="text" name="last_name"
                class="w-full bg-[#FCFCFC] border border-[#E9E7E2] rounded-md px-3 py-3 " required>
        </div>
    </div>

    <div>
        <label class="block lg:text-base text-xs leading-5 font-normal  pt-7 text-[#333333]">Adresse e-mail</label>
        <input type="email" name="email"
            class="w-full bg-[#FCFCFC] border border-[#E9E7E2] rounded-md px-4 py-2 mt-3" required>
    </div>

    <div>
        <label class="block lg:text-base text-xs leading-5 font-normal pt-7 text-[#333333]">Téléphone</label>
        <input type="tel" name="phone"
            class="w-full bg-[#FCFCFC] border border-[#E9E7E2] rounded-md px-4 py-2 mt-3">
    </div>

    <div>
        <label class="block lg:text-base text-xs leading-5 font-normal  pt-7 text-[#333333]">Objet du message</label>
        <textarea name="message" rows="4" placeholder="Décrivez votre demande ou vos besoins spécifiques."
            class="w-full bg-[#FCFCFC] border border-[#E9E7E2] rounded-md px-4 py-2 mt-3" required></textarea>
    </div>

    <button type="submit"
        class="w-full bg-[#D7B242] text-[#333333] lg:text-base text-xs leading-5 font-normal py-3 rounded-md flex items-center justify-center gap-2 mt-6 ">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M22 2L11 13"></path>
            <path d="M22 2L15 22L11 13L2 9L22 2Z"></path>
        </svg>
        Envoyer
    </button>
</form>

            </div>
            <div class="space-y-8">
                <div class="">
                    <div class="flex gap-4 ">
                        <div>
                            <div class="bg-[#D7B242] rounded-full lg:p-3 p-2">
            <i class="fa-solid fa-location-dot text-[#333333] text-2xl"></i>
            </div>
                        </div>
                        <div>
                            <div>
                                <h1 class="lg:text-base text-base lg:leading-8 leading-7 font-bold text-[#333333]">
                                    Adresse</h1>
                            </div>
                            <div class="pt-2">
                                <p class="lg:text-base text-xs leading-5 font-normal text-[#333333]">
                                   Rue de la Filature
                  42
                  <br class="lg:block md:block hidden">
                  1227 Carouge
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="flex gap-4 pt-8">
                        <div>
                            <img src="./assets/img/call2.png" class="2xl:w-full md:w-10 w-10" alt="">
                        </div>
                        <div>
                            <div>
                                <h1 class="2xl:text-base lg:text-base text-xl 2xl:leading-7 leading-5 font-bold">
                                    Téléphone
                                </h1>
                            </div>
                            <div class="pt-2">
                                <p class="2xl:text-sm text-xs 2xl:leading-6 leading-5 font-normal">
                                    022
                                    809 03 10</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex gap-4 pt-8">
                        <div>
                            <img src="./assets/img/mailbx.png" class="2xl:w-full md:w-10 w-10" alt="">
                        </div>
                        <div>
                            <div>
                                <h1 class="2xl:text-base  lg:text-base text-xl 2xl:leading-7 leading-5 font-bold">
                                    Email</h1>
                            </div>
                            <div class="pt-2">
                                <p class="2xl:text-sm  text-xs 2xl:leading-6 leading-5 font-normal">
                                    info@unigesta.ch</p>
                            </div>
                        </div>
                    </div> -->
                    <div class="flex gap-4 pt-8">
                        <div>
                                <div class="bg-[#D7B242] rounded-full lg:p-3 p-2">
            <i class="fa-regular fa-clock text-[#333333] text-2xl"></i>
            </div>
                        </div>
                        <div>
                            <div>
                                <h1 class="lg:text-base text-base lg:leading-8 leading-7 font-bold text-[#333333]">
                                    Horaires d'ouverture</h1>
                            </div>
                            <div class="pt-2">
                                <p class="lg:text-base text-xs leading-5 font-normal text-[#333333]">
                                   Lundi - Vendredi :
                  8h30 - 17h00<br class="xl:block md:block">
                  Samedi : Sur rendez-vous
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="bg-[#192634]/5 border border-[#192634]/10 p-6 rounded-lg ">
                    <h1 class="2xl:text-base lg:text-base text-xl 2xl:leading-7 leading-5 font-bold">Contact
                        direct</h1>
                    <a href="tel:0228090310"
                        class="block bg-[#D7B242] text-black py-3 px-4 rounded-lg font-normal flex items-center gap-3 mt-4 text-xs leading-5"><img
                            src="./assets/img/svgcal.png" alt="">Appelez-nous
                        : 022 809 03 10</a>
                    <a href="mailto:unigesta@unigesta.ch"
                        class="block bg-white border-2 border-black py-3 px-4 rounded-lg font-normal mt-3 text-[#192634] flex items-center gap-3 text-xs leading-5">
                        <div><img src="./assets/img/svgmail.png" alt=""></div>unigesta@unigesta.ch
                    </a>
                </div> -->

         

<!-- Embedded Google Map -->
<div class="flex flex-col items-center justify-center text-center bg-[#F6F5F3] border border-[#E9E7E2] 
     p-4 lg:p-6 rounded-lg transition h-auto lg:h-96 w-full">
  <!-- <div class="flex justify-center">
    <img src="./assets/img/locat.png" alt="Location" class="w-5 h-5 ">
  </div>

  <p class="pt-2 text-xs lg:text-base 2xl:text-sm leading-5 lg:leading-6 font-normal text-[#657381]">
    Rue de la Filature 42 <br>
    1227 Carouge (Genève)
  </p> -->

  <!-- Real Google Map -->
  <div class="w-full h-64 lg:h-80 mt-4 rounded-lg overflow-hidden">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2761.648523256085!2d6.134017476274621!3d46.18356397109039!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c6507c84a3ab5%3A0xe9fa6b22e5a24361!2sRue%20de%20la%20Filature%2042%2C%201227%20Carouge%2C%20Switzerland!5e0!3m2!1sen!2s!4v1728642075569!5m2!1sen!2s"
      width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</div>


            </div>

        </div>
    </section>
    <!-- end section -->
  
  <?php require_once './inc/footer.php';?>