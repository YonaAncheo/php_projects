const my_doc = document.querySelector('#result');
const btn_result = document.querySelector('#btn-result');

async function fetchData() {

  try {
    const data = {title:'list of numbers', numbers: [5,6,7,6,5]};
    const init = {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(data)
    };

    const response = await fetch('http://localhost/php_projects/my-server/media.php', init);
    if (!response.ok) {
      throw new Error("Error en la solicitud")
    }

    const result = await response.json();

    my_doc.innerHTML = `<p><strong>MEDIA:</strong> ${result.media}<p>
    ${result.html}`;
  } catch (error) {
      console.log("error al realizar la petición AJAX: "+ error.message);
  }
};

btn_result.addEventListener('click', () =>{
  fetchData();
})
