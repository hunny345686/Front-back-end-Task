window.onload = function () {
  const submitbtn = document.getElementById("submitbtn");
  const cityName = document.getElementById("cityName");
  const city_name = document.getElementById("city_name");
  const tmp_val = document.getElementById("tmp_val");
  const temp_status = document.getElementById("temp_status");
  const datahide = document.querySelector(".meddle_layer");

  const getInfo = async (event) => {
    event.preventDefault();

    if (cityName.value === "") {
      city_name.innerText = "Please Enter City Name ";
      datahide.classList.add("data_hide");
    } else {
      try {
        let url = `http://api.openweathermap.org/data/2.5/weather?q=${cityName.value}&units=metric&appid=93e63dcc1fb38ed986a59514d85dbbd1`;
        const responce = await fetch(url);
        const data = await responce.json();
        const arrdata = [data];
        console.log(arrdata);
        city_name.innerText = `${arrdata[0].name}, ${arrdata[0].sys.country}`;
        tmp_val.innerText = arrdata[0].main.temp;
        temp_status.innerText = arrdata[0].weather[0].main;

        datahide.classList.remove("data_hide");
      } catch {
        city_name.innerText = "Invalid City Name";
        datahide.classList.add("data_hide");
      }
    }
  };

  submitbtn.addEventListener("click", getInfo);
};
