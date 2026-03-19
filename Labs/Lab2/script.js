/*
    Author: Vincent
    Date: 18 March 2026
    JS to validate form inputs
*/ 
function validateForm() {
  let inputs = document.querySelectorAll("input[type=text]");
  for (let i of inputs) {
    if (i.value.trim() === "") {
      alert("All fields must be filled!");
      return false;
    }
  }
  return true;
}
