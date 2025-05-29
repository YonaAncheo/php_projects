(async () => {
  try {
    var data = {'title':'list of numbers', 'list': [5,6,7,6,5]}
    var init = {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(data)
    };
    var response = await fetch('../../my-server/media.php')
  } catch (error) {
    
  }
})();
