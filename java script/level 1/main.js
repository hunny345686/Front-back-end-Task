const form_submit = (evt) => {
  console.log(evt);
  evt.preventDefault();
  let name = document.getElementById("name");
  let email = document.getElementById("email");
  let phone = document.getElementById("phone");
  let password = document.getElementById("password");
  let c_password = document.getElementById("c_password");
  let option = document.getElementById("option");
  var skill = document.querySelector(".skill:checked").value;
  console.log(skill);
};
