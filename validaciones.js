document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    
    form.addEventListener('submit', function(event) {
        let isValid = true;

        // Obtener los valores de los campos
        const nombre = form.querySelector('input[name="nombre"]').value;
        const apellido = form.querySelector('input[name="apellido"]').value;
        const correo = form.querySelector('input[name="correo"]').value;
        const contraseña = form.querySelector('input[name="contraseña"]').value;
        const direccion = form.querySelector('input[name="direccion"]').value;
        const telefono = form.querySelector('input[name="telefono"]').value;

        // Validar nombre y apellido (sin numeros)
        if (!/^[a-zA-Z\s]+$/.test(nombre)) {
            alert('El nombre no puede contener números.');
            isValid = false;
        }
        if (!/^[a-zA-Z\s]+$/.test(apellido)) {
            alert('El apellido no puede contener números.');
            isValid = false;
        }

        // Validar correo electrónico
        if (!/\S+@\S+\.\S+/.test(correo)) {
            alert('El correo electrónico no es válido.');
            isValid = false;
        }

        // Validar contraseña (8 caracteres, al menos una mayúscula, un número y un carácter especial)
        if (!/(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}/.test(contraseña)) {
            alert('La contraseña debe tener al menos 8 caracteres, una mayúscula, un número y un carácter especial.');
            isValid = false;
        }

        // Validar teléfono (solo 10 dígitos)
        if (!/^\d{10}$/.test(telefono)) {
            alert('El teléfono debe tener exactamente 10 dígitos numéricos.');
            isValid = false;
        }

        // Evitar el envío del formulario si alguna validación falla
        if (!isValid) {
            event.preventDefault();
        }
    });
});
