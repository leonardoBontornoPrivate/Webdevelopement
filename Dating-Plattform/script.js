const nutzungsbedingungenöffnen = document.querySelector("#Nutzungsbedingungen-öffnen");
const nutzungsbedingungenfenster = document.querySelector("#Nutzungsbedingungen-Fenster");
const nutzungsbedingungenschliessenbutton = document.querySelector("#Nutzungsbedingungen-schliessen-button");
const nutzungsbedingungenakzeptierenbutton = document.querySelector("#Nutzungsbedingungen-akzeptieren-button");
const nutzungsbedingungencheckbox = document.querySelector("#Nutzungsbedingungen-Checkbox-CSS");
const submitBtn = document.querySelector("#registrieren");

let submitAble = false;
let hatAkzeptiert = false;
console.log("nutzungsbedingungen akzeptieren");

function nutzungsbedingungenclicköffnen() {
  nutzungsbedingungenfenster.style.display = "table";
  nutzungsbedingungenfenster.style.pointerEvents = "auto";
}

function nutzungsbedingungenclickschliessen() {
  nutzungsbedingungenfenster.style.display = "none";
  nutzungsbedingungenfenster.style.display = "auto";
}

function nutzungsbedingungenclickakzeptieren() {
  nutzungsbedingungenfenster.style.display = "none";
  nutzungsbedingungenfenster.style.display = "auto";

  // Booleans

  hatAkzeptiert = true;
  submitAble = true;

  // Programme

  if(hatAkzeptiert) {
    console.log("du hat die Nutzungsbedingungen akzeptiert!");
    nutzungsbedingungencheckbox.checked = true;
  }

  if(submitAble)
    submitBtn.disabled = false;
   else
    submitBtn.disabled = true;
}
