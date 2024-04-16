const contenedores = document.querySelectorAll('.contenedor-externo');

contenedores.forEach(contenedor => {
    const contenido = contenedor.querySelector('.interno2');

    contenedor.addEventListener('wheel', (e) => {
        e.preventDefault();
        contenido.scrollTop += e.deltaY;
    });
});