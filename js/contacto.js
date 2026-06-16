document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("form-contacto");
    if (!form) return;

    const nombreInput = document.getElementById("nombre");
    const emailInput = document.getElementById("email");
    const telefonoInput = document.getElementById("telefono");
    const asuntoInput = document.getElementById("asunto");
    const mensajeInput = document.getElementById("mensaje");
    const btnSubmit = document.querySelector(".btn-submit");

    const errorNombre = document.getElementById("error-nombre");
    const errorEmail = document.getElementById("error-email");
    const errorTelefono = document.getElementById("error-telefono");
    const errorAsunto = document.getElementById("error-asunto");
    const errorMensaje = document.getElementById("error-mensaje");
    const exitoDiv = document.getElementById("mensaje-exito");

    btnSubmit.disabled = true;

    const estado = {
        nombre: false,
        email: false,
        telefono: false,
        asunto: false,
        mensaje: false
    };

    function validarNombre() {
        const valor = nombreInput.value;
        let esLetra = true;
        let letrasPermitidas = "abcdefghijklmnopqrstuvwxyzáéíóúñ ";

        for (let i = 0; i < valor.length; i++) {
            let caracter = valor[i].toLowerCase();
            if (letrasPermitidas.indexOf(caracter) == -1) {
                esLetra = false;
            }
        }

        if (valor == "") {
            errorNombre.innerText = "El nombre es obligatorio";
            nombreInput.style.borderColor = "red";
            estado.nombre = false;
        } else if (valor.length < 5) {
            errorNombre.innerText = "Debe tener al menos 5 caracteres";
            nombreInput.style.borderColor = "red";
            estado.nombre = false;
        } else if (esLetra == false) {
            errorNombre.innerText = "Solo debe contener letras y espacios";
            nombreInput.style.borderColor = "red";
            estado.nombre = false;
        } else {
            errorNombre.innerText = "";
            nombreInput.style.borderColor = "green";
            estado.nombre = true;
        }
        actualizarBoton();
    }

    function validarEmail() {
        const valor = emailInput.value;
        const patronEmail = /^[a-z0-9._-]+@[a-z0-9.-]+\.[a-z]{2,4}$/i;

        if (valor == "") {
            errorEmail.innerText = "El correo es obligatorio";
            emailInput.style.borderColor = "red";
            estado.email = false;
        } else if (patronEmail.test(valor) == false) {
            errorEmail.innerText = "Formato de correo inválido";
            emailInput.style.borderColor = "red";
            estado.email = false;
        } else {
            errorEmail.innerText = "";
            emailInput.style.borderColor = "green";
            estado.email = true;
        }
        actualizarBoton();
    }

    function validarTelefono() {
        const valor = telefonoInput.value;
        let esNumero = true;

        for (let i = 0; i < valor.length; i++) {
            if (valor[i] < "0" || valor[i] > "9") {
                esNumero = false;
            }
        }

        if (valor == "") {
            errorTelefono.innerText = "El teléfono es obligatorio";
            telefonoInput.style.borderColor = "red";
            estado.telefono = false;
        } else if (esNumero == false) {
            errorTelefono.innerText = "Solo se permiten números";
            telefonoInput.style.borderColor = "red";
            estado.telefono = false;
        } else if (valor.length < 8) {
            errorTelefono.innerText = "Debe tener al menos 8 dígitos";
            telefonoInput.style.borderColor = "red";
            estado.telefono = false;
        } else {
            errorTelefono.innerText = "";
            telefonoInput.style.borderColor = "green";
            estado.telefono = true;
        }
        actualizarBoton();
    }

    function validarAsunto() {
        const valor = asuntoInput.value;
        if (valor == "") {
            errorAsunto.innerText = "El asunto es obligatorio";
            asuntoInput.style.borderColor = "red";
            estado.asunto = false;
        } else if (valor.length < 3) {
            errorAsunto.innerText = "Debe tener al menos 3 caracteres";
            asuntoInput.style.borderColor = "red";
            estado.asunto = false;
        } else {
            errorAsunto.innerText = "";
            asuntoInput.style.borderColor = "green";
            estado.asunto = true;
        }
        actualizarBoton();
    }

    function validarMensaje() {
        const valor = mensajeInput.value;
        if (valor == "") {
            errorMensaje.innerText = "El mensaje es obligatorio";
            mensajeInput.style.borderColor = "red";
            estado.mensaje = false;
        } else if (valor.length < 20) {
            errorMensaje.innerText = "Debe tener al menos 20 caracteres";
            mensajeInput.style.borderColor = "red";
            estado.mensaje = false;
        } else {
            errorMensaje.innerText = "";
            mensajeInput.style.borderColor = "green";
            estado.mensaje = true;
        }
        actualizarBoton();
    }

    function actualizarBoton() {
        if (estado.nombre && estado.email && estado.telefono && estado.asunto && estado.mensaje) {
            btnSubmit.disabled = false;
        } else {
            btnSubmit.disabled = true;
        }
    }

    nombreInput.addEventListener("input", validarNombre);
    nombreInput.addEventListener("blur", validarNombre);

    emailInput.addEventListener("input", validarEmail);
    emailInput.addEventListener("blur", validarEmail);

    telefonoInput.addEventListener("input", validarTelefono);
    telefonoInput.addEventListener("blur", validarTelefono);

    asuntoInput.addEventListener("input", validarAsunto);
    asuntoInput.addEventListener("blur", validarAsunto);

    mensajeInput.addEventListener("input", validarMensaje);
    mensajeInput.addEventListener("blur", validarMensaje);

    form.addEventListener("submit", function (event) {
        event.preventDefault();

        exitoDiv.style.display = "block";
        exitoDiv.innerText = "Formulario enviado con éxito";

        form.reset();

        nombreInput.style.borderColor = "";
        emailInput.style.borderColor = "";
        telefonoInput.style.borderColor = "";
        asuntoInput.style.borderColor = "";
        mensajeInput.style.borderColor = "";

        estado.nombre = false;
        estado.email = false;
        estado.telefono = false;
        estado.asunto = false;
        estado.mensaje = false;

        btnSubmit.disabled = true;

        setTimeout(function () {
            if (exitoDiv) {
                exitoDiv.style.display = "none";
            }
        }, 5000);
    });
});
