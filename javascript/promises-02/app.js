//  async / await – A cleaner way to use Promises
//  Instead of chaining .then() and .catch(), we can write asynchronous code in a more readable, 
//  synchronous style using async and await.

//  async function
//  An async function always returns a Promise, even if you don’t explicitly return one.
//  await
//  Inside an async function, await pauses the execution until the Promise is resolved or rejected.

async function fetchData() {
  try {
    let response = await fetch("http://localhost/php_projects/my-server/server.php");
    let data = await response.json();
    console.log(data);
  } catch (error) {
    console.log(error);
  }
}
