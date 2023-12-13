
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('myform');
    form.addEventListener('submit', function(event) {
        const password = document.getElementById('myPassword').value;
        const errorField = document.getElementById('signupalert').getElementsByTagName('span')[0];
        
        let error = "";
        if (password.length < 6) {
            error = "Lo siento, La contraseña debe tener al menos 6 caracteres";
        } else if (password.length > 16) {
            error = "Lo siento, La contraseñadebe tener más de 16 caracteres";
        } else if (!/[a-z]/.test(password)) {
            error = "Lo siento, La contraseña debe contener al menos una letra minúscula";
        } else if (!/[A-Z]/.test(password)) {
            error = "Lo siento, La contraseña debe contener al menos una letra mayúscula";
        } else if (!/\d/.test(password)) {
            error = "Lo siento, La contraseña debe contener al menos un carácter numérico";
        }

        if (error !== "") {
            event.preventDefault(); 
            errorField.textContent = error;
            document.getElementById('signupalert').style.display = "block";
        } else {
            document.getElementById('signupalert').style.display = "none";
        }
    });
});
