//! 1. Using  Promises

const getData = () => {
  fetch("https://www.reddit.com/.json")
    .then((res) => {
      console.log(res.json());
    })
    .then((data) => {
      const jsondata = data;
    });
};

getData();

//!  2. Using Async/Await

const getData = async () => {
  const getdata = await fetch("https://www.reddit.com/.json");
  console.log(getdata.json());
};

getData();
