//arreglo de profesores almacena info e imagenes

const profesores = [ {
    nombre: "Laura Muñóz",
    especialidad:"Desarrollo Web",
    descripcion:"Especialista en HTML, CSS y JavaScript con más de 10 años de experiencia en desarrollo frontend.",
    foto:"images/profesor1.jpg",
    correo:"ana@academia.com",
    cursosQueImparte:"HTML, CSS, JavaScript",
},
{
    nombre: "Rolando Castro",
    especialidad:"Bases de Datos",
    descripcion:"Ingeniero en Sistemas especializado en SQL Server, MySQL y Oracle.",
    foto:"images/profesor3.jpg",
    correo:"carlos@academia.com",
    cursosQueImparte:"SQL, MySQL, Oracle",
},
{
    nombre: "Susana Rojas",
    especialidad:"Programación",
    descripcion:"Profesora con amplia experiencia en Java, Python y programación orientada a objetos.",
    foto:"images/profesor2.jpg",
    correo:"maria@academia.com",
    cursosQueImparte:"Java, Python",
},
{
    nombre: "Daniel López",
    especialidad:"Ciberseguridad",
    descripcion:"Consultor en seguridad informática y ethical hacking.",
    foto:"images/profesor4.jpg",
    correo:"luis@academia.com",
    cursosQueImparte:"Redes, Seguridad, Linux",
}];

// contenedor donde se almacenan cards de profesoes
const lista = document.getElementById("listaProfesores");

//instancia modal bootstrap

const modal = new bootstrap.Modal(document.getElementById("profesorModal"));

profesores.forEach((profesor, indice) => {

    const columna = document.createElement("div");
    columna.className = "col-md-6 col-lg-3";

    //card tarjeta
     const tarjeta = document.createElement("div");
    tarjeta.className = "profesor-card";
    tarjeta.dataset.id = indice;


// imagen
    const imagen = document.createElement("img");
    imagen.src = profesor.foto;
    imagen.alt = profesor.nombre;
    imagen.className = "img-fluid";


// nombre
    const nombre = document.createElement("h3");
    nombre.textContent = profesor.nombre;


///especialdiad
    const especialidad = document.createElement("h5");
    especialidad.textContent = profesor.especialidad;

// descripciom
    const descripcion = document.createElement("p");
    descripcion.textContent = profesor.descripcion;


// agrega todos los elementos a la tarjeta
    tarjeta.appendChild(imagen);
    tarjeta.appendChild(nombre);
    tarjeta.appendChild(especialidad);
    tarjeta.appendChild(descripcion);


//evento clic tarjeta
    tarjeta.addEventListener("click", function () {

        document.getElementById("modalNombre").textContent = profesor.nombre;

        document.getElementById("modalFoto").src = profesor.foto;
        document.getElementById("modalFoto").alt = profesor.nombre;

        document.getElementById("modalEspecialidad").textContent =
            profesor.especialidad;

        document.getElementById("modalDescripcion").textContent =
            profesor.descripcion;

        document.getElementById("modalCorreo").textContent =
            profesor.correo;

        document.getElementById("modalCursos").textContent =
            profesor.cursosQueImparte;

  
            //muestra modal bootsrap
        modal.show();

    });


  
// agrega tarjeta a columnda
    columna.appendChild(tarjeta);

   
// agrega columna a contenedor principal
    lista.appendChild(columna);

});