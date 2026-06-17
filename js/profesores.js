//arreglo de profesores almacena info e imagenes

const profesores = [ {
    nombre: "Ana Rodríguez",
    especialidad:"Desarrollo Web",
    descripcion:"Especialista en HTML, CSS y JavaScript con más de 10 años de experiencia en desarrollo frontend.",
    foto:"img/profesora1.jpg",
    correo:"ana@academia.com",
    cursosQueImparte:"HTML, CSS, JavaScript",
},
{
    nombre: "Carlos Gómez",
    especialidad:"Bases de Datos",
    descripcion:"Ingeniero en Sistemas especializado en SQL Server, MySQL y Oracle.",
    foto:"img/profesor2.jpg",
    correo:"carlos@academia.com",
    cursosQueImparte:"SQL, MySQL, Oracle",
},
{
    nombre: "María Fernández",
    especialidad:"Programación",
    descripcion:"Profesora con amplia experiencia en Java, Python y programación orientada a objetos.",
    foto:"img/profesor3.jpg",
    correo:"maria@academia.com",
    cursosQueImparte:"Java, Python",
},
{
    nombre: "Luis Hernández",
    especialidad:"Ciberseguridad",
    descripcion:"Consultor en seguridad informática y ethical hacking.",
    foto:"img/profesor4.jpg",
    correo:"luis@academia.com",
    cursosQueImparte:"Redes, Seguridad, Linux",
}];

// contenedor donde se almacenan cards de profesoes
const lista = document.getElementById("listaProfesores");

//renderiza profesores, recorre arreglo para crear las cards y asigna id
profesores.forEach((profesor,indice)=>{
    const columna = document.createElement("div");
    columna.className="col-md-6 col-lg-3";
    columna.innerHTML=`
    
    <div
    class ="profesor-card"
    data-id="${indice}
    style="cursor:pointer;">

        <img src="${profesor.foto}" alt="${profesor.nombre}">

        <h3>${profesor.nombre}</h3>

        <h4>${profesor.especialidad}</h4>

        <p>${profesor.descripcion}</p>

    </div>

    `;

    lista.appendChild(columna);
});

//instancia modal bootstrap