document.getElementById("contactForm").addEventListener("submit", function(event) {
  event.preventDefault();

  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var message = document.getElementById("message").value;

  // Objeto con los datos del formulario
  var formData = {
    name: name,
    email: email,
    message: message
  };

  // Enviar los datos del formulario al servidor utilizando Fetch
  fetch("https://giselacs.github.io/Portafolio/", {
    method: "POST",
    headers: {
      "Content-Type": "application/json"
    },
    body: JSON.stringify(formData)
  })
  .then(function(response) {
    if (response.ok) {
      // Envío exitoso, puedes mostrar un mensaje de éxito o redirigir a una página de confirmación
      alert("Formulario enviado correctamente");
      document.getElementById("contactForm").reset();
    } else {
      // Ocurrió un error al enviar el formulario
      alert("Error al enviar el formulario");
    }
  })
  .catch(function(error) {
    // Ocurrió un error de red u otro error relacionado con la solicitud
    alert("Error en la solicitud: " + error.message);
  });
});

  
  
  
  
  