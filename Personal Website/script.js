const passwordField = document.getElementById("password");
const checkBoxInput = document.getElementById("checkBox");

let x = Math.floor((Math.random() * 10) + 1);

console.log(x);

function isChecked() {
  if(checkBoxInput.checked) {
    passwordField.type = "text";
  } else {
    passwordField.type = "password";
  }

  if(checkBoxInput.checked || !checkBoxInput.checked) {
    x = Math.floor((Math.random() * 10) + 1);
    console.log(x);
  }
}
