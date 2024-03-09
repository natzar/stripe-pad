<div class="flex items-center gap-x-6 bg-green-700 px-6 py-2.5 sm:px-3.5 hidden  sm:flex sm:before:flex-1">
  <p class="text-sm leading-6 text-white">
    <a href="#">
      <strong class="font-semibold">Welcome!</strong><svg viewBox="0 0 2 2" class="mx-2 inline h-0.5 w-0.5 fill-current" aria-hidden="true"><circle cx="1" cy="1" r="1" /></svg>Get a 20% discount with <strong>"WELCOME20"</strong> coupon code
    </a>
  </p>
  <div class="flex flex-1 justify-end">
    
  </div>
</div>



<div class="bg-transparent  shadow-lg ">
  <header class=" z-50 border-b relative border-gray-800 ">
    <nav class="flex items-center justify-between p-6 lg:px-8 border-b-1 border-gray-600" aria-label="Global">
      <div class="flex lg:flex-1">
        <a href="<?= HOMEPAGE_URL ?>" class="-m-1.5 p-1.5 text-gray-100 hover:text-green-500 font-bold">
          <span class="sr-only">Domstry</span>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline items-center">
  <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
</svg> <span class="nunito">Domstry</span>
        </a>
      </div>
      <div class="flex lg:hidden">
        <button id="button_open_mobile_menu" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-400">
          <span class="sr-only">Open main menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
      <div class="hidden lg:flex lg:gap-x-12">
      
        
        <a href="<?= APP_DOMAIN ?>domain-list" class="text-base font-semibold leading-6 text-gray-600 px-3 py-1  hover:bg-gray-900 hover:text-green-500 rounded-full">Search</a>
        
        <a href="<?= APP_DOMAIN ?>builtwith" class="text-base font-semibold leading-6 text-gray-600 px-3 py-1 hover:bg-gray-900 hover:text-green-500 rounded-full">Technologies</a>
        
        <a href="<?= APP_DOMAIN ?>browse/hosting" class="text-base font-semibold leading-6 text-gray-600 px-3 py-1 hover:bg-gray-900 hover:text-green-500 rounded-full">Networks</a>

        <a href="<?= APP_DOMAIN ?>browse/lang" class="text-base font-semibold leading-6 text-gray-600 px-3 py-1 hover:bg-gray-900 hover:text-green-500 rounded-full">Languages</a>

        <a href="<?= APP_DOMAIN ?>browse/country" class="text-base font-semibold leading-6 text-gray-600 px-3 py-1 hover:bg-gray-900 hover:text-green-500 rounded-full">Geolocation</a>

      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        <a href="login" class="text-sm font-semibold leading-6 text-gray-600">Log in <span aria-hidden="true">&rarr;</span></a>
      </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden hidden" role="dialog" aria-modal="true" id="mobile_menu">
      <!-- Background backdrop, show/hide based on slide-over state. -->
      <div class="fixed inset-0 z-50"></div>
      <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-gray-900 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-white/10">
        <div class="flex items-center justify-between">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Domstry</span>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" class="w-8 h-8 inline items-center">
  <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
</svg> 
          </a>
          <button type="button" id="button_close_mobile_menu" class="-m-2.5 rounded-md p-2.5 text-gray-400">
            <span class="sr-only">Close menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="mt-6 flow-root">
          <div class="-my-6 divide-y divide-gray-500/25">
            <div class="space-y-2 py-6">
             


        <a href="<?= APP_DOMAIN ?>domain-list" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-400 hover:bg-gray-800">Search</a>
        
        <a href="<?= APP_DOMAIN ?>builtwith" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-400 hover:bg-gray-800">Technologies</a>
        
        <a href="<?= APP_DOMAIN ?>browse/hosting" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-400 hover:bg-gray-800">Networks</a>

        <a href="<?= APP_DOMAIN ?>browse/lang" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-400 hover:bg-gray-800">Languages</a>

        <a href="<?= APP_DOMAIN ?>browse/country" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-400 hover:bg-gray-800">Geolocation</a>

   
        


              
            </div>
            <div class="py-6">
              
              

              <? if (!isset($_SESSION['user']) ): ?>
                 <a href="login" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-400 hover:bg-gray-800">Login</a>
                <a href="signup" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-400 hover:bg-gray-800">Sign Up</a> 
            <? else: ?>

            	<!-- <span>Credits: 0/0</span>
            	<a href="https://buy.stripe.com/cN25lUaKsaq4aE89AE" target="_blank" class="bg-indigo-500 hover:bg-blue-500 px-2 py-1  ml-4">Buy 500 Credits</a>
 -->

<a href="actionLogout" class="text-gray-800 hover:text-gray-800 hover:font-bold ml-4">Logout</a>
            <? endif; ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

</div>
