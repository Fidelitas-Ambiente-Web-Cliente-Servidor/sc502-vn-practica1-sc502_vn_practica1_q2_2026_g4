// Array principal de cursos.
// Cada objeto con info que se mostrará en las tarjetas.
const cursos = [
    {
        nombre: "HTML y CSS desde Cero",
        descripcion: "Aprende a crear páginas web modernas utilizando estructura HTML5 y estilos CSS3.",
        categoria: "Desarrollo Web",
        duracion: "6 semanas",
        precio: "₡45.000",
        imagen: "images/html-css.jpg"
    },
    {
        nombre: "JavaScript Básico",
        descripcion: "Desarrolla lógica de programación y agrega interactividad a tus sitios web.",
        categoria: "Programación",
        duracion: "8 semanas",
        precio: "₡55.000",
        imagen: "images/javascript.jpg"
    },
    {
        nombre: "Introducción a React",
        descripcion: "Crea interfaces dinámicas usando componentes, props y estados en React.",
        categoria: "Frontend",
        duracion: "10 semanas",
        precio: "₡75.000",
        imagen: "images/react.jpg"
    },
    {
        nombre: "Bases de Datos SQL",
        descripcion: "Aprende consultas, tablas, relaciones y fundamentos para administrar bases de datos.",
        categoria: "Bases de Datos",
        duracion: "7 semanas",
        precio: "₡50.000",
        imagen: "images/sql.jpg"
    },
    {
        nombre: "Análisis de Datos",
        descripcion: "Interpreta información, crea reportes y toma decisiones basadas en datos.",
        categoria: "Datos",
        duracion: "9 semanas",
        precio: "₡65.000",
        imagen: "images/datos.jpg"
    },
    {
        nombre: "Fundamentos de Ciberseguridad",
        descripcion: "Conoce los principios básicos para proteger sistemas, redes e información.",
        categoria: "Seguridad Informática",
        duracion: "8 semanas",
        precio: "₡60.000",
        imagen: "images/ciberseguridad.jpg"
    }
];

const contenedorCursos = document.getElementById("contenedorCursos");
const inputBuscar = document.getElementById("buscarCurso");
const botonesFiltro = document.querySelectorAll(".filtro-btn");
const mensajeSinResultados = document.getElementById("mensajeSinResultados");

let categoriaSeleccionada = "Todos";

// Esta función recibe una lista de cursos y crea las tarjetas dinámicamente.
function renderizarCursos(listaCursos) {
    contenedorCursos.innerHTML = "";

    if (listaCursos.length === 0) {
        mensajeSinResultados.style.display = "block";
        return;
    }

    mensajeSinResultados.style.display = "none";

    listaCursos.forEach(curso => {
        const columna = document.createElement("div");
        columna.classList.add("col-md-6", "col-lg-4");

        const tarjeta = document.createElement("div");
        tarjeta.classList.add("curso-card");

        tarjeta.innerHTML = `
            <img src="${curso.imagen}" alt="${curso.nombre}">
            <h3>${curso.nombre}</h3>
            <h4>${curso.categoria}</h4>
            <p>${curso.descripcion}</p>

            <div class="curso-info">
                <span>Duración: ${curso.duracion}</span>
                <span class="curso-precio">${curso.precio}</span>
            </div>

            <a href="#" class="curso-button">Ver más</a>
        `;

        columna.appendChild(tarjeta);
        contenedorCursos.appendChild(columna);
    });
}

// Esta función combina la búsqueda por texto y el filtro por categoría.
function filtrarCursos() {
    const textoBusqueda = inputBuscar.value.toLowerCase();

    const cursosFiltrados = cursos.filter(curso => {
        const coincideTexto =
            curso.nombre.toLowerCase().includes(textoBusqueda) ||
            curso.descripcion.toLowerCase().includes(textoBusqueda);

        const coincideCategoria =
            categoriaSeleccionada === "Todos" ||
            curso.categoria === categoriaSeleccionada;

        return coincideTexto && coincideCategoria;
    });

    renderizarCursos(cursosFiltrados);
}

// Evento para buscar en tiempo real mientras el usuario escribe.
inputBuscar.addEventListener("input", filtrarCursos);

// Evento para filtrar por categoría al presionar un botón.
botonesFiltro.forEach(boton => {
    boton.addEventListener("click", () => {
        botonesFiltro.forEach(btn => btn.classList.remove("active"));

        boton.classList.add("active");
        categoriaSeleccionada = boton.dataset.categoria;

        filtrarCursos();
    });
});

// Carga inicial de todos los cursos.
renderizarCursos(cursos);