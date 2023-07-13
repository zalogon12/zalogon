const formulario = document.getElementById('formularioCorreo');

formulario.addEventListener('submit', function(event) {
    event.preventDefault(); // Evitar el envío del formulario

    const destinatario = document.getElementById('destinatario').value;
    const asunto = document.getElementById('asunto').value;
    const mensaje = document.getElementById('mensaje').value;

 
    document.getElementById('destinatario').value = '';
    document.getElementById('asunto').value = '';
    document.getElementById('mensaje').value = '';

});