 // Crear el header y el nav dinámicamente
 let header = document.querySelector('header');
 let nav = document.createElement('nav');
 nav.innerHTML = `
 <nav class="bg-white py-6 relative mb-18 ">
 <div class="container mx-auto items-center flex px-8 xl:p-0  ">
     <div class="flex flex-grow">
         <a href=""><img class="w-24" src="../img-prin/logo.png" alt=""></a>
     </div>
     <div class="flex lg:hidden" >
     <img  src="../img-prin/menu-line.png"onclick="openMenu();">
     </div>
     <div id="menu" class="lg:flex hidden flex-grow justify-between absolute lg:relative lg:top-0 top-20 bg-amber-400 lg:bg-white items-center left-0 w-full lg:w-auto py-14 lg:py-0 px-8 lg:px-0 z-50"> 
         <div class="">
          <ul class="flex flex-col lg:flex-row text-center w-full">
             <li class="mb-8 lg:mb-0"><a href="#" class="text-white  lg:bg-amber-400 py-2.5 px-5 rounded-md  transition duration-500 ease-in-out hover:text-white font-medium text-lg lg:mr-7 font-sans ">Inicio</a></li>
             <li class="mb-8 lg:mb-0"><a href="#" class="text-white lg:text-sky-500  py-2.5 px-5 rounded-md lg:hover:bg-amber-400 transition duration-500 ease-in-out hover:text-white font-medium text-lg lg:mr-7 ">Adopciones</a></li>
             <li class="mb-8 lg:mb-0"><a href="#" class="text-white lg:text-sky-500  py-2.5 px-5 rounded-md lg:hover:bg-amber-400 transition duration-500 ease-in-out hover:text-white font-medium text-lg lg:mr-7">Donaciones</a></li>
             <li class="group mb-8 lg:mb-0">
                 <a href="#" class="text-white lg:text-sky-500  py-2.5 px-5 rounded-md lg:hover:bg-amber-400 transition duration-500 ease-in-out hover:text-white font-medium text-lg lg:mr-7 ">Informes<i class="ri-arrow-down-s-line"></i></a>
                 <ul class="lg:absolute  top-9 hidden group-hover:block ">
                     <li><a href="#" class="text-white lg:text-sky-500 px-5 rounded-md lg:hover:bg-amber-400 transition duration-500 ease-in-out hover:text-white font-medium">Adoptadas</a></li>
                     <li><a href="#" class="text-white lg:text-sky-500 px-5 rounded-md lg:hover:bg-amber-400 transition duration-500 ease-in-out hover:text-white font-medium">Donadas</a></li>
                     <li><a href="#" class="text-white lg:text-sky-500 px-5 rounded-md lg:hover:bg-amber-400 transition duration-500 ease-in-out hover:text-white font-medium">Favoritos</a></li>
                 </ul>
             </li>
          </ul>
         </div> 
         <div >
          <ul class="flex flex-col lg:flex-row mx-auto items-center">   
             <svg class="h-8  text-white lg:text-sky-500 lg:mr-7 cursor-pointer lg:hover:text-amber-400 transition duration-500 ease-in-out mb-8 lg:mb-0"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M18.031 16.6168L22.3137 20.8995L20.8995 22.3137L16.6168 18.031C15.0769 19.263 13.124 20 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2C15.968 2 20 6.032 20 11C20 13.124 19.263 15.0769 18.031 16.6168ZM16.0247 15.8748C17.2475 14.6146 18 12.8956 18 11C18 7.1325 14.8675 4 11 4C7.1325 4 4 7.1325 4 11C4 14.8675 7.1325 18 11 18C12.8956 18 14.6146 17.2475 15.8748 16.0247L16.0247 15.8748Z"></path></svg>
             <svg class="h-8  text-white lg:text-sky-500 cursor-pointer lg:hover:text-amber-400 transition duration-500 ease-in-out mb-8 lg:mb-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22H18C18 18.6863 15.3137 16 12 16C8.68629 16 6 18.6863 6 22H4ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11Z"></path></svg>
          </ul> 
         </div> 
     </div>
 </div>
 </nav>
 `;
 nav.style.margin = '0';
        nav.style.padding = '0';
 
 // Insertar el nav dentro del header
 header.appendChild(nav);

 // Insertar el header en el body como el primer hijo
 document.body.insertBefore(header, document.body.firstChild);