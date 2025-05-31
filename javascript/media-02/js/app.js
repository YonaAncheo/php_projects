const my_doc = document.getElementById('result');
const btn_result = document.querySelector('#btn-result');

async function enviarNumeros() {
  const numeros = [4, 6, 8, 10];
  const datos = {
    title: "Lista de Números",
    numbers: numeros
  };

  try {
    const response = await fetch('http://localhost/php_projects/javascript/media-02/server/media.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(datos)
    });

    if (!response.ok) throw new Error("Error en la solicitud");

    const result = await response.json();

    // Mostrar en el DOM
    my_doc.innerHTML = `<p><strong>Media:</strong> ${result.media}</p>
      ${result.html}`;
    
  } catch (error) {
    console.error("Error:", error.message);
  }
}

// Ejecutar
btn_result.addEventListener('click',()=>{
  enviarNumeros()
})

