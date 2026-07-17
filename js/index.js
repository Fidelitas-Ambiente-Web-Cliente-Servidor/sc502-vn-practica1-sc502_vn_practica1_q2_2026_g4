//Arreglo para los cursos
const cursosDestacados = [
    {
        nombre: "Curso HTML",
        descripcion: "Este es un curso avanzado de HTML donde aprenderás lo mejor del mundo de la programación web.",
        imagen: "Recursos/img/htmlimage.png",
        categoria: "Desarrollo Web"
    },
    {
        nombre: "Curso CSS",
        descripcion: "Este es un curso avanzado de CSS donde aprenderás a crear sitios modernos, responsivos y atractivos.",
        imagen: "Recursos/img/cssimage.png",
        categoria: "Diseño Web"
    },
    {
        nombre: "Curso PYTHON",
        descripcion: "Este es un curso avanzado de Python donde aprenderás lógica, automatización y bases para crear proyectos reales.",
        imagen: "Recursos/img/pythonimage.png",
        categoria: "Programación"
    }
];

//Arreglo para los comentarios
const testimoniosEstudiantes = [
    {
        nombre: "Sergio Cabezas",
        ubicacion: "San Pedro",
        imagen: "Recursos/img/ProfilePics/avatar_1.png",
        comentario: "Antes de ingresar a UProgra tenía conocimientos muy básicos de programación. Gracias a los cursos y al acompañamiento de los profesores, pude desarrollar mis primeros proyectos web y ganar mucha más confianza en mis habilidades. Lo recomiendo totalmente para quienes desean empezar en el mundo de la tecnología."
    },
    {
        nombre: "Josling Aragon",
        ubicacion: "Heredia",
        imagen: "Recursos/img/ProfilePics/avatar_2.png",
        comentario: "Lo que más me gustó de UProgra fue la forma práctica de enseñar. Cada lección incluye ejercicios y proyectos reales que ayudan a comprender mejor los conceptos. Sin duda ha sido una de las mejores experiencias de aprendizaje que he tenido."
    },
    {
        nombre: "Samantha Mendoza",
        ubicacion: "San Pedro",
        imagen: "Recursos/img/ProfilePics/avatar_3.png",
        comentario: "Los cursos están muy bien estructurados y el contenido se mantiene actualizado con las tecnologías que se utilizan actualmente en la industria. Gracias a lo aprendido pude mejorar mi perfil profesional y enfrentar nuevos retos con mayor seguridad."
    }
];


function renderizarTestimonios() {
    const contenedorTestimonios = document.getElementById("testimoniosEstudiantes");

    if (!contenedorTestimonios) {
        return;
    }

    testimoniosEstudiantes.forEach((testimonio) => {
        const tarjeta = document.createElement("div");
        tarjeta.classList.add("comment_card");

        const encabezado = document.createElement("div");
        encabezado.classList.add("header");

        const enlaceImagen = document.createElement("a");
        enlaceImagen.href = "#";

        const imagen = document.createElement("img");
        imagen.src = testimonio.imagen;
        imagen.alt = testimonio.nombre;

        const listaDatos = document.createElement("ul");

        const itemNombre = document.createElement("li");
        const tituloNombre = document.createElement("h6");
        const nombreDestacado = document.createElement("strong");
        nombreDestacado.textContent = testimonio.nombre;

        const itemUbicacion = document.createElement("li");
        const ubicacion = document.createElement("p");
        ubicacion.textContent = testimonio.ubicacion;

        const descripcion = document.createElement("div");
        descripcion.classList.add("description");

        const comentario = document.createElement("p");
        comentario.textContent = testimonio.comentario;

        tituloNombre.appendChild(nombreDestacado);
        itemNombre.appendChild(tituloNombre);

        itemUbicacion.appendChild(ubicacion);

        listaDatos.appendChild(itemNombre);
        listaDatos.appendChild(itemUbicacion);

        enlaceImagen.appendChild(imagen);

        encabezado.appendChild(enlaceImagen);
        encabezado.appendChild(listaDatos);

        descripcion.appendChild(comentario);

        tarjeta.appendChild(encabezado);
        tarjeta.appendChild(descripcion);

        contenedorTestimonios.appendChild(tarjeta);
    });
}


document.addEventListener("DOMContentLoaded", () => {
    const contenedorCursos = document.getElementById("cursosDestacados");

    if (!contenedorCursos) {
        return;
    }

    cursosDestacados.forEach((curso) => {
        const tarjeta = document.createElement("div");
        tarjeta.classList.add("card");
        tarjeta.setAttribute("data-categoria", curso.categoria);

        const imagen = document.createElement("img");
        imagen.src = curso.imagen;
        imagen.alt = curso.nombre;

        const contenido = document.createElement("div");
        contenido.classList.add("content");

        const nombre = document.createElement("h3");
        nombre.textContent = curso.nombre;

        const descripcion = document.createElement("p");
        descripcion.textContent = curso.descripcion;

        contenido.appendChild(nombre);
        contenido.appendChild(descripcion);

        tarjeta.appendChild(imagen);
        tarjeta.appendChild(contenido);

        contenedorCursos.appendChild(tarjeta);

    });

    renderizarTestimonios(); //Llamado de los comentarios
});

