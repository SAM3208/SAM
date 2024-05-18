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
    <table class="w-full min-w-max table-auto divide-y divide-amber-200">
  <thead class="bg-amber-200">
    <tr>
      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
        ID
      </th>
      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
        Especie
      </th>
      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
        Raza
      </th>
      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
        Nombre
      </th>
      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
        Edad
      </th>
      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
        Vacuna
      </th>
      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
        Estado
      </th>
      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
        Foto
      </th>
      <th scope="col" class="relative px-6 py-3">
        <span class="sr-only">Accept</span>
      </th>
      <th scope="col" class="relative px-6 py-3">
        <span class="sr-only">Decline</span>
      </th>
    </tr>
  </thead>
  <tbody class="bg-white divide-y divide-gray-200">
    <tr>
      <td class="px-6 py-4 whitespace-nowrap">
        1
      </td>
      <td class="px-6 py-4 whitespace-nowrap">
        Perro
      </td>
      <td class="px-6 py-4 whitespace-nowrap">
        Labrador
      </td>
      <td class="px-6 py-4 whitespace-nowrap">
        Max
      </td>
      <td class="px-6 py-4 whitespace-nowrap">
        3
      </td>
      <td class="px-6 py-4 whitespace-nowrap">
        <img src="vacuna.jpg" alt="Vacuna" class="h-6 w-6 rounded-full">
      </td>
      <td class="px-6 py-4 whitespace-nowrap">
        Bueno
      </td>
      <td class="px-6 py-4 whitespace-nowrap">
        <img src="foto.jpg" alt="Foto" class="h-12 w-12 rounded-full">
      </td>
      <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
        <button class="text-green-600 hover:text-green-900">Accept</button>
      </td>
      <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
        <button class="text-red-600 hover:text-red-900">Decline</button>
      </td>
    </tr>
    <tr>
      <td class="px-6 py-4 whitespace-nowrap">
        2
      </td>
      <td class="px-6 py-4 whitespace-nowrap">
        gato
      </td>
      <td class="px-6 py-4 whitespace-nowrap">
        siames
      </td>
      <td class="px-6 py-4 whitespace-nowrap">
        messi
      </td>
      <td class="px-6 py-4 whitespace-nowrap">
        10
      </td>
      <td class="px-6 py-4 whitespace-nowrap">
        <img src="vacuna.jpg" alt="Vacuna" class="h-6 w-6 rounded-full">
      </td>
      <td class="px-6 py-4 whitespace-nowrap">
        de calle
      </td>
      <td class="px-6 py-4 whitespace-nowrap">
        <img src="foto.jpg" alt="Foto" class="h-12 w-12 rounded-full">
      </td>
      <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
        <button class="text-green-600 hover:text-green-900" >Accept</button>
      </td>
      <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
        <button class="text-red-600 hover:text-red-900">Decline</button>
      </td>
    </tr>
    <!-- More rows... -->
  </tbody>
</table>
    </main>
    
</body>
</html>