<<<<<<< Updated upstream:proyectoPillBits/pages/tablas.js

class Users {
  constructor(nombre, apell, CI, fecNac) {
    this.nombre = nombre;
    this.apell = apell;
    this.CI = CI;
    this.fecNac = fecNac;
  }
}

const formulario = document.getElementById('cuenta');
const listaUsers = document.getElementById('lista-users');
const users = [];

formulario.addEventListener('submit', function (event) {
  event.preventDefault();

  const nombre = document.getElementById('nomb').value;
  const apellido = document.getElementById('apell').value;
  const CI = document.getElementById('CI').value;
  const fecNac = document.getElementById('fecNac').value;

  const user = new Users(nombre, apellido, CI, fecNac);
  users.push(user);

  // Limpiar formulario de usuarios
  formulario.reset();

  // Actualizar la lista de usuarios
  mostrarUsers();
});

function mostrarUsers() {
  // Limpiar la tabla de usuarios
  listaUsers.innerHTML = '';

  // Crear encabezados de tabla
  const encabezados = ['Nombre', 'Apellido', 'C.I', 'Fecha de Nacimiento', 'Acciones'];
  const thead = document.createElement('thead');
  const encabezadosRow = document.createElement('tr');

  encabezados.forEach(encabezado => {
    const th = document.createElement('th');
    th.textContent = encabezado;
    encabezadosRow.appendChild(th);
  });

  thead.appendChild(encabezadosRow);
  listaUsers.appendChild(thead);

  // Mostrar cada usuario en la tabla
  const tbody = document.createElement('tbody');

  users.forEach((user, index) => {
    const fila = document.createElement('tr');

    ['nombre', 'apell', 'CI', 'fecNac'].forEach(propiedad => {
      const celda = document.createElement('td');
      celda.textContent = user[propiedad];
      fila.appendChild(celda);
    });

    const accionesCelda = document.createElement('td');
    const eliminarBoton = document.createElement('button');
    eliminarBoton.textContent = 'Eliminar';
    eliminarBoton.addEventListener('click', () => eliminarUsuario(index));
    accionesCelda.appendChild(eliminarBoton);
    fila.appendChild(accionesCelda);

    tbody.appendChild(fila);
  });

  listaUsers.appendChild(tbody);
}

function eliminarUsuario(index) {
  users.splice(index, 1);
  mostrarUsers();
}

// Mostrar la tabla inicialmente
mostrarUsers();



=======
class Users {
  constructor(nombre, apell, CI, fecNac) {
    this.nombre = nombre;
    this.apell = apell;
    this.CI = CI;
    this.fecNac = fecNac;
  }
}

const formulario = document.getElementById('cuenta');
const listaUsers = document.getElementById('lista-users');
const users = [];

formulario.addEventListener('submit', function (event) {
  event.preventDefault();

  const nombre = document.getElementById('nomb').value;
  const apellido = document.getElementById('apell').value;
  const CI = document.getElementById('CI').value;
  const fecNac = document.getElementById('fecNac').value;

  const user = new Users(nombre, apellido, CI, fecNac);
  users.push(user);

  // Limpiar formulario de usuarios
  formulario.reset();

  // Actualizar la lista de usuarios
  mostrarUsers();
});

function mostrarUsers() {
  // Limpiar la tabla de usuarios
  listaUsers.innerHTML = '';

  // Crear encabezados de tabla
  const encabezados = ['Nombre', 'Apellido', 'C.I', 'Fecha de Nacimiento', 'Acciones'];
  const thead = document.createElement('thead');
  const encabezadosRow = document.createElement('tr');

  encabezados.forEach(encabezado => {
    const th = document.createElement('th');
    th.textContent = encabezado;
    encabezadosRow.appendChild(th);
  });

  thead.appendChild(encabezadosRow);
  listaUsers.appendChild(thead);

  // Mostrar cada usuario en la tabla
  const tbody = document.createElement('tbody');

  users.forEach((user, index) => {
    const fila = document.createElement('tr');

    ['nombre', 'apell', 'CI', 'fecNac'].forEach(propiedad => {
      const celda = document.createElement('td');
      celda.textContent = user[propiedad];
      fila.appendChild(celda);
    });

    const accionesCelda = document.createElement('td');
    const eliminarBoton = document.createElement('button');
    eliminarBoton.textContent = 'Eliminar';
    eliminarBoton.addEventListener('click', () => eliminarUsuario(index));
    accionesCelda.appendChild(eliminarBoton);
    fila.appendChild(accionesCelda);

    tbody.appendChild(fila);
  });

  listaUsers.appendChild(tbody);
}

function eliminarUsuario(index) {
  users.splice(index, 1);
  mostrarUsers();
}

// Mostrar la tabla inicialmente
mostrarUsers();

>>>>>>> Stashed changes:proyectoPillBits/pages/javascript/tablas.js
