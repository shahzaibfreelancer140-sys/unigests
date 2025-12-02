<!-- navbar -->
  <nav>
    <div class="flex justify-between items-center 2xl:px-36 lg:px-10 px-5 py-4">
      <!-- Logo -->
      <div><a href="./index.php">
                <img src="./assets/img/Logo Unigesta Vectorisé[1].png" class="2xl:w-[200px] lg:w-[185px] w-28" alt=""></a>
      </div>

      <!-- Desktop Menu (lg and above) -->
      <ul class="hidden lg:flex gap-11">
        <li class="text-[#333333] 2xl:text-base lg:text-base text-lg leading-5 font-normal"><a
            href="./index.php">Accueil</a></li>
        <li class="text-[#333333] 2xl:text-base lg:text-base text-lg leading-5 font-normal"><a
            href="./service.php">Nos services</a></li>
        <li class="text-[#333333] 2xl:text-base lg:text-base text-lg leading-5 font-normal"><a
            href="./contact.php">Contactez-nous</a></li>
      </ul>
  
    <div class="relative flex gap-3 top-2">
  <!-- Language + Login -->
    <div class="items-center hidden lg:block ">
      <div class="relative inline-block text-left">
        <div class="relative inline-block text-left top-1">
          <button onclick="toggleDropdown()" class="flex items-center">
            <img id="currentFlag" src="./assets/img/france.png" class="w-6 h-6" alt="flag">
            <svg class="w-4 h-4 ml-2 text-[#D7B242]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
        
          <div id="dropdownMenu" class="hidden absolute mt-4 w-24 bg-[#D7B242] border border-[#D7B242] z-10">
            <ul class="py-1 text-sm text-gray-700 text-center">
              <li>
                <a href="#" onclick="event.preventDefault(); setFlag('./assets/img/united-kingdom.png', this.href)" class="block flex justify-center hover:text-white px-4 py-2 hover:bg-white">
                  <img src="./assets/img/france.png" class="w-7" alt="England Flag">
                </a>
              </li>
              <li>
                <a href="./eng/index.php" onclick="event.preventDefault(); setFlag('./assets/img/france.png', this.href)" class="block flex justify-center hover:text-white px-4 py-2 hover:bg-white">
                  <img src="./assets/img/united-kingdom.png" class="w-7" alt="France Flag">
                </a>
              </li>
            </ul>
          </div>
        </div>
        
        <script>
          function toggleDropdown() {
            document.getElementById("dropdownMenu").classList.toggle("hidden");
          }
        
          function setFlag(flagPath, redirectUrl) {
            document.getElementById("currentFlag").src = flagPath;
            document.getElementById("dropdownMenu").classList.add("hidden");
        
            // Delay page redirect so flag updates first
            setTimeout(function () {
              window.location.href = redirectUrl;
            }, 100);
          }
        </script>
        
        
      
      </div>
     
    </div>
 <!-- Desktop Button (lg and above) -->
  <a href="tel:+41228090315">
      <div class="hidden lg:block bg-[#D7B242] rounded-md py-2 px-4">
        
                       <span  class="2xl:text-base text-xs leading-5 font-normal text-[#333333]">
  +41 22 809 03 15
        </span>
      </div>
      </a>
    </div>
     
      <!-- Mobile + MD Toggle -->
      <div class="lg:hidden relative">
        <button id="menu-toggle" class="p-2">
          <!-- Hamburger Icon -->
          <svg id="hamburger-icon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-black" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>

          <!-- Close Icon (hidden by default) -->
          <svg id="close-icon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-black hidden" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>

        
        
      </div>
      <!-- Mobile/MD Menu -->
      <ul id="mobile-menu"
          class="absolute top-[72px] left-0 right-0 w-full bg-white shadow-lg hidden z-50 px-5 py-7 text-center">
          <li class="text-[#333333] text-xs leading-5 font-normal py-2">
            <a href="./index.php" class="block">Accueil</a>
          </li>
          <li class="text-[#333333] text-xs leading-5 font-normal py-2">
            <a href="./service.php" class="block">Nos services</a>
          </li>
          <li class="text-[#333333] text-xs leading-5 font-normal py-2">
            <a href="./contact.php" class="block">Contactez-nous</a>
          </li>
          <a href="tel:+41228090315">
          <li class="bg-[#D7B242] rounded-md my-2 text-center">
           <span  class="text-xs leading-5 font-normal w-full py-1 text-[#333333]">022 809 03 10</span>
          </li>
          </a>
        </ul>
    </div>
  </nav>
  <!-- navbar end -->