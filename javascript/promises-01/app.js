// What is a Promise?

// A Promise is a built-in JavaScript object that represents the result of an asynchronous operation — 
// like fetching data from a server — that may complete in the future.
// 
// 📌 A Promise has 3 statuses:
// 	1.	Pending – The operation is still in progress.
// 	2.	Fulfilled – The operation completed successfully.
// 	3.	Rejected – The operation failed.

// Concept    Description
// Promise    A JS object that handles async operations (3 statuses: pending, fulfilled, rejected).
// async      A keyword to define a function that works asynchronously and returns a Promise.
// await      Used inside async functions to pause until a Promise is resolved or rejected.
// Status     Current state of the Promise: pending, fulfilled, rejected.
// Callback   A function passed to .then(), .catch(), or .finally() to handle results.
// Method     Functions like .then(), .catch() or .finally() that act on Promises.

const promise = new Promise((resolve, reject)=>{
    setTimeout(() => {
      let operationSuccesful = true;

      if(operationSuccesful) {
        resolve("Operation succes!");
      } else {
        reject("Operation fail!");
      }
    }, 2000);
  });

  promise
    .then((succesMessage) => {
      console.log(succesMessage);
    })
    .catch((errorMessage) => {
      console.log(errorMessage);
    })
