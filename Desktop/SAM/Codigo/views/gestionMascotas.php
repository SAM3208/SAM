<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>

<body>

    <header class="flex flex-col m-0 p-0 w-full  ">
        <?php
        include_once __DIR__ . '/header.php';
        ?>
    </header>


    <main>
        <div class="h-full bg-yellow-50 dark:bg-gray-900">
            <!-- Container -->
            <div class="mx-auto">
                <div class="flex justify-center px-6 py-12">
                    <!-- Row -->
                    <div class="w-full xl:w-3/4 lg:w-11/12 flex shadow-black shadow-2xl">
                        <!-- Col -->
                        <div class="w-full h-auto bg-blue-200 dark:bg-gray-800 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
                            style="background-image: url('../img-prin/imgPerroGato.jpg'); background-position: center;">
                        </div>
                        <!-- Col -->
                        <div class="w-full lg:w-7/12 bg-white dark:bg-gray-700 p-5 rounded-lg lg:rounded-l-none">
                            <h3 class="py-4 text-2xl text-center text-gray-800 dark:text-white">REGISTRO DE MASCOTAS
                            </h3>
                            <form class="px-8 pt-6 pb-8 mb-4 bg-white dark:bg-gray-800 rounded">
                                <div class="mb-4 md:flex md:justify-between">
                                    <div class="mb-4 md:mr-2 md:mb-0">
                                        <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white"
                                            for="firstName">
                                            Especie
                                        </label>
                                        <input
                                            class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                            id="especie" type="text" placeholder="especie" />
                                    </div>
                                    <div class="md:ml-2">
                                        <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white"
                                            for="lastName">
                                            Raza
                                        </label>
                                        <input
                                            class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                            id="raza" type="text" placeholder="raza" />
                                    </div>
                                </div>
                                <div class="mb-4 md:flex md:justify-between">
                                    <div class="mb-4 md:mr-2 md:mb-0">
                                        <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white"
                                            for="password">
                                            Nombre
                                        </label>
                                        <input
                                            class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 dark:text-white border border-red-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                            id="nombre" type="text" placeholder="nombre" />
                                        <p class="text-xs italic text-red-500">por favor, rellenar campo.</p>
                                    </div>
                                    <div class="md:ml-2">
                                        <p class="block mb-2 text-sm font-bold text-gray-700 dark:text-white">Vacuna</p>
                                        <div class="relative">
                                            <label
                                                class="cursor-pointer flex items-center gap-3 px-3  before:border-gray-400/60 hover:before:border-gray-300 group before:bg-gray-100 before:absolute before:inset-0 before:rounded-3xl before:border before:border-dashed before:transition-transform before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95">
                                                <div class="w-max relative">
                                                    <img class="w-10"
                                                        src="https://www.svgrepo.com/show/485545/upload-cicle.svg"
                                                        alt="">
                                                </div>
                                                <div class="relative">
                                                    <span
                                                        class="block text-base font-semibold relative text-gray-300 group-hover:text-amber-300 transition duration-150">
                                                        adjuntar carnet
                                                    </span>
                                                </div>
                                                <input hidden="" type="image" id="Vacunas">
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <div class="mb-4 md:flex md:justify-between">
                                    <div class="mb-4 md:mr-2 md:mb-0">
                                        <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white"
                                            for="password">
                                            Edad
                                        </label>
                                        <input
                                            class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 dark:text-white border border-red-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                            id="edad" type="number" placeholder="edad" />
                                        <p class="text-xs italic text-red-500">por favor, rellenar campo.</p>
                                    </div>
                                    <div class="md:ml-2">
                                        <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white"
                                            for="c_password">
                                            Estado
                                        </label>
                                        <input
                                            class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                            id="estado" type="text" placeholder="estado" />
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white"
                                        for="email">
                                        Descripción
                                    </label>
                                    <input
                                        class="w-full h-14 px-3 py-2 mb-3 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="descripcion" type="text" placeholder="jugueton, ciudad, condiciones etc..." />
                                </div>
                                <div class="flex items-center justify-center w-full">
                                    <label 
                                        class="flex flex-col items-center justify-center w-full h-40 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 20 16">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                            </svg>
                                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                                    class="font-semibold">Click para subir</span> o arrastrar y soltar
                                            </p>
                                            <p class="text-xs text-gray-500 dark:text-gray-400"> PNG, JPG </p>
                                        </div>
                                        <input id="imagenMascota" type="image" class="hidden" />
                                    </label>
                                </div>

                                <div class="mb-6 text-center m-10">
                                    <button
                                        class="w-full px-4 py-2 font-bold text-black bg-yellow-300 ease-in-out duration-700 rounded-full hover:bg-yellow-500 dark:bg-yellow-500 dark:text-black dark:hover:bg-yellow-500 focus:outline-none focus:shadow-outline"
                                        type="button">
                                        Inscribir mascota
                                    </button>
                                </div>
                                <hr class="mb-6 border-t" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>



    <footer>
        <div class="w-full mx-auto p-4 md:py-8 bg-yellow-300 rounded-lg shadow dark:bg-gray-900">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="#" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                    <img src="../img-prin/logo.png" class="h-8" alt="SAM" />
                </a>
                <ul
                    class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-700 sm:mb-0 dark:text-gray-700">
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">About</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Contact</a>
                    </li>
                </ul>
            </div>
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="#"
                    class="hover:underline">SAM™</a>. All Rights Reserved.</span>
        </div>
    </footer>


</body>

</html>