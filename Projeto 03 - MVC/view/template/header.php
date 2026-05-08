 <nav class="text-gray-200 flex justify-between items-center top-0 h-16 bg-gray-900 fixed w-full px-4 md:px-10 lg:px-20 z-50">
     <div class="flex items-center space-x-2 m-3">
         <button id="menuBtn" class="md:hidden flex flex-col space-y-1 mr-2"> <img src="img/more.png"
                 class="w-8 bg-yellow-600 rounded-l-xl hover:bg-yellow-500">
         </button>
         <img src="img/like.png" class="w-8 rounded-xl hover:shadow-[-4px_-4px_10px_rgba(234,179,8,0.6)]">
         <img src="img/cart.png" class="w-8 rounded-xl hover:shadow-[-4px_-4px_10px_rgba(234,179,8,0.6)]">
         <div id="divSerch" class="flex items-center relative -ml-2">
             <input id="searchInput" type="text" placeholder="Buscar..." class="w-0 opacity-0 transition-all duration-300 bg-gray-800 text-white rounded-lg px-2 py-1 focus:outline-none">
             <img id="searchIcon" src="img/search.webp" class="w-8 rounded-xl cursor-pointer hover:shadow-[-4px_-4px_10px_rgba(234,179,8,0.6)]">
         </div>
     </div>
     <div class="hidden md:flex items-center space-x-6 text-sm md:text-lg">
         <a href="../" class="font-semibold hover:text-yellow-600">Home</a>
         <a href="../hardware" class="font-semibold hover:text-yellow-600">Hardware</a>
         <a href="../perifericos" class="font-semibold hover:text-yellow-600">Periféricos</a>
         <a href="../outros" class="font-semibold hover:text-yellow-600">Outros</a>
     </div>
     <div class="flex items-center m-3">
         <img src="img/perfil_user.jpg" class="w-8 md:w-10 rounded-full cursor-pointer hover:shadow-[-4px_-4px_10px_rgba(234,179,8,0.6)]">
     </div>
 </nav>

 <div id="mobileMenu" class="hidden flex-col bg-gray-900 text-white w-full absolute top-16 left-0 p-4 space-y-4 md:hidden z-40 transition-all duration-300 items-center space-x-3">
     <a href="../" class="font-semibold hover:text-yellow-600">Home</a>
     <a href="../hardware" class="font-semibold hover:text-yellow-600">Hardware</a>
     <a href="../perifericos" class="font-semibold hover:text-yellow-600">Periféricos</a>
     <a href="../outros" class="font-semibold hover:text-yellow-600">Outros</a>
 </div>