const usoData = {
    labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
    datasets: [{
        label: 'Uso',
        data: [10, 15, 25, 30, 20],
        backgroundColor: 'rgba(75, 192, 192, 0.2)',
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 1
    }]
};

const usuariosData = {
    labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
    datasets: [{
        label: 'Nuevos usuarios',
        data: [5, 10, 20, 15, 10],
        backgroundColor: 'rgba(153, 102, 255, 0.2)',
        borderColor: 'rgba(153, 102, 255, 1)',
        borderWidth: 1
    }]
};

const mascotasAgregadasData = {
    labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
    datasets: [{
        label: 'Mascotas agregadas',
        data: [8, 12, 18, 22, 16],
        backgroundColor: 'rgba(255, 159, 64, 0.2)',
        borderColor: 'rgba(255, 159, 64, 1)',
        borderWidth: 1
    }]
};

const mascotasAdoptadasData = {
    labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
    datasets: [{
        label: 'Mascotas adoptadas',
        data: [3, 7, 12, 14, 9],
        backgroundColor: 'rgba(255, 99, 132, 0.2)',
        borderColor: 'rgba(255, 99, 132, 1)',
        borderWidth: 1
    }]
};

const configUso = {
    type: 'bar',
    data: usoData,
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
};

const configUsuarios = {
    type: 'bar',
    data: usuariosData,
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
};

const configMascotasAgregadas = {
    type: 'bar',
    data: mascotasAgregadasData,
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
};

const configMascotasAdoptadas = {
    type: 'bar',
    data: mascotasAdoptadasData,
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
};

const usoChart = new Chart(
    document.getElementById('usoChart'),
    configUso
);

const usuariosChart = new Chart(
    document.getElementById('usuariosChart'),
    configUsuarios
);

const mascotasAgregadasChart = new Chart(
    document.getElementById('mascotasAgregadasChart'),
    configMascotasAgregadas
);

const mascotasAdoptadasChart = new Chart(
    document.getElementById('mascotasAdoptadasChart'),
    configMascotasAdoptadas
);
