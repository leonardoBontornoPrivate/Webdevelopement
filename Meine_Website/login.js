// login

function startLogin() {

alert("Hallo, bitte melde dich an");

var name = prompt("Bitte gib deinen Name ein");
var nachname = prompt("Bitte gib deinen Nachname ein");

alert(`Dein Name lautet ${name}
Dein Nachname lautet ${nachname}

Gib bitte auch noch deinen Alter ein`);

var alter = parseInt(prompt("Dein Alter"));

while(isNaN(alter) || alter < 12 || alter > 80) {
  alert("Dein Alter ist ungültig bitte versuche es erneut");
  alter = parseInt(prompt("Dein Alter"));
} if(!isNaN(alter)) {
  alert(`Du bist ${alter} Jahre alt`);
}

var confLogin = confirm(`Du heisst ${name} ${nachname} und du bist ${alter} Jahre alt

Wenn das stimmt drücke auf OK sonst drücke auf abbrechen`);

if(confLogin) {
  console.log("Deine Daten wurden erfolgreich gespeichert");
} while(!confLogin) {
  console.log("Die Anmeldung wurde abgebrochen");

  alert("Gib deine Daten erneut ein");

  name = prompt("Bitte gib deinen Name ein");
  nachname = prompt("Bitte gib deinen Nachname ein");

  alert(`Dein Name lautet ${name}
Dein Nachname lautet ${nachname}

Gib bitte auch noch deinen Alter ein`);

  alter = parseInt(prompt("Dein Alter"));

  while(isNaN(alter) || alter < 12 || alter > 80) {
    alert("Dein Alter ist ungültig bitte versuche es erneut");
    alter = parseInt(prompt("Dein Alter"));
  } if(!isNaN(alter)) {
    alert(`Du bist ${alter} Jahre alt`);
  }

  var confLogin = confirm(`Du heisst ${name} ${nachname} und du bist ${alter} Jahre alt

Wenn das stimmt drücke auf OK, sonst drücke auf Abbrechen`);

}
}
