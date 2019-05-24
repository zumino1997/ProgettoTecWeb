function prova(){
  window.alert(3);
}

function menuHamburger() {
  var element = document.getElementById("menuu");
  if (element.className==="menuItems")
    element.className += " show";
  else
    element.className = "menuItems";
}

function checkNome(nomeInput){
  var pattern= new RegExp('/^[a-zA-Z]{3,}$/');
  if (pattern.test(nomeInput.value)){
  togliErrore(nomeInput);
    return true;
  }
  else{
    //mostrare errore
    mostraErrore(nomeInput, "JJJJJJJ Valore non corretto, inserire almeno 3 caratteri")
    return false;
  }
}

function checkIndirizzo(indirizzoInput){
  var pattern= new RegExp('/^[A-Za-z0-9\-\/ ,.]+$/');
  if (pattern.test(indirizzoInput.value)){
  togliErrore(indirizzoInput);
    return true;
  }
  else{
    //mostrare errore
    mostraErrore(indirizzoInput, "Valore non corretto, inserire almeno 3 caratteri")
    return false;
  }
}


function checkNascita(nascitaInput) {
  var pattern= new RegExp('/^(((0[1-9]|[12]\d|3[01])\/(0[13578]|1[02])\/((19|[2-9]\d)\d{2}))|((0[1-9]|[12]\d|30)\/(0[13456789]|1[012])\/((19|[2-9]\d)\d{2}))|((0[1-9]|1\d|2[0-8])\/02\/((19|[2-9]\d)\d{2}))|(29\/02\/((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$/');
  if (pattern.test(nascitaInput.value)){
  togliErrore(nascitaInput);
    return true;
  }
  else{
    //mostrare errore
    mostraErrore(nascitaInput, "Data non valida. dd/mm/yyyy ")
    return false;
  }
  }

function checkMail(mailInput) {
    var pattern= new RegExp('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/');
    if (pattern.test(mailInput.value)){
      togliErrore(mailInput);
      return true;
    }
    else{
      //mostrare errore
      mostraErrore(mailInput, "Indirizzo mail inserito non valido")
      return false;
    }
    }

function checkPassword(passwordInput) {
    var pattern= new RegExp('/^.{8,}$/');
    if (pattern.test(passwordInput.value)){
      togliErrore(passwordInput);
      return true;
    }
    else{
      //mostrare errore
      mostraErrore(passwordInput, "Password inserito non valido")
      return false;
    }
  }

function checkRepeatPassword(passwordInput,passwordInput2){
  if (passwordInput.value!=passwordInput2.value){
    togliErrore(passwordInput2);
    return true;
  }
  else{
    mostraErrore(passwordInput2, "Le password non corrispondono")
    return false;
  }
}

function togliErrore (input){
  var li= input.parentNode;
  if (li.childElementCount > 2)
  li.removeChild(li.children[3]);
}

function mostraErrore (input,testo){
  togliErrore(input);
  var li= input.parentNode;
  var span = document.createElement("span");
  // span.className = "errori";
  span.appendChild (document.createTextNode(testo));
  li.appendChild (span);
}


function checkAll(){
  var nome = document.getElementById("nome");
  var cognome = document.getElementById("cognome");
  var citta = document.getElementById("citta");
  var indirizzo = document.getElementById("indirizzo");
  var mail = document.getElementById("emailR");
  var nascita = document.getElementById("nascita");
  var password = document.getElementById("passwordR");
  var password1 = document.getElementById("passwordR1");


  var risultatoTestNome = checkNome(nome);
  var risultatoTestCognome = checkNome(cognome);
  var risultatoTestCitta = checkNome(citta);
  var risultatoTestIndirizzo = checkIndirizzo(indirizzo);
  var risultatoTestMail = checkMail(mail);
  var risultatoTestNascita = checkNascita(nascita);
  var risultatoTestPassword = checkPassword(password);
  var risultatoTestPassword1 = checkRepeatPassword(password1);

  return risultatoTestNome && risultatoTestCognome && risultatoTestCitta && risultatoTestIndirizzo && risultatoTestMail && risultatoTestNascita && risultatoTestPassword && risultatoTestPassword1;

}
