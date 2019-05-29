function menuHamburger() {
  var element = document.getElementById("menuu");
  if (element.className==="menuItems")
    element.className += " show";
  else
    element.className = "menuItems";
}

function mostraPassword() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}


//FUNZIONI PER "GALLERIA.PHP"

function show(img) {
  var imgExp = document.getElementById("imgExp");
  imgExp.src = img.src;
  document.getElementById('showImage').style.display = "block";
}


function closeImage() {
  document.getElementById('showImage').style.display = "none";
}


//VALIDAZIONE FORM

function checkNome(nomeInput){
  var pattern= /^[a-zA-Z]{3,}$/;
  var name = nomeInput.getAttribute("name");
  if (pattern.test(nomeInput.value)){
  togliErrore(nomeInput);
    return true;
  }
  else{
    if (nomeInput.value==""){
      if (name=="nome")
        mostraErrore(nomeInput, "Il campo \"nome\" non può essere vuoto");
      if (name=="cognome")
        mostraErrore(nomeInput, "Il campo \"cognome\" non può essere vuoto");
      if (name=="citta")
        mostraErrore(nomeInput, "Il campo \"città\" non può essere vuoto");
    }
    else
      mostraErrore(nomeInput, "Inserire almeno 3 lettere. I numeri non sono consentiti.");
    return false;
  }
}

function checkIndirizzo(indirizzoInput){
  var pattern= /^[A-Za-z0-9\-\/ ,.]+$/;
  if (pattern.test(indirizzoInput.value)){
  togliErrore(indirizzoInput);
    return true;
  }
  else{
    if (indirizzoInput.value=="")
      mostraErrore(indirizzoInput, "Il campo indirizzo non può essere vuoto")
    else
      mostraErrore(indirizzoInput, "Inserire almeno 3 caratteri")
    return false;
  }
}


function checkNascita(nascitaInput) {
  var pattern= /^(((0[1-9]|[12]\d|3[01])\/(0[13578]|1[02])\/((19|[2-9]\d)\d{2}))|((0[1-9]|[12]\d|30)\/(0[13456789]|1[012])\/((19|[2-9]\d)\d{2}))|((0[1-9]|1\d|2[0-8])\/02\/((19|[2-9]\d)\d{2}))|(29\/02\/((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$/;
  if (pattern.test(nascitaInput.value)){
  togliErrore(nascitaInput);
    return true;
  }
  else{
    if (nascitaInput.value=="")
      mostraErrore(nascitaInput, "Il campo nascita non può essere vuoto")
    else
    mostraErrore(nascitaInput, "Data inserita non valida. (dd/mm/yyyy) ")
    return false;
  }
}

function checkMail(mailInput) {
    var pattern= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,5})+$/;
    if (pattern.test(mailInput.value)){
      togliErrore(mailInput);
      return true;
    }
    else{
      if (mailInput.value=="")
        mostraErrore(mailInput, "Il campo email non può essere vuoto")
      else
        mostraErrore(mailInput, "Indirizzo mail inserito non valido.  ")
      return false;
    }
    }

function checkPassword(passwordInput) {
    var pattern=/^.{8,}$/;
    if (pattern.test(passwordInput.value)){
      togliErrore(passwordInput);
      return true;
    }
    else{
      if (passwordInput.value=="")
        mostraErrore(passwordInput, "Il campo password non può essere vuoto")
      else
        mostraErrore(passwordInput, "Password inserita non valida. Inserire almeno 8 caratteri")
      return false;
    }
  }

  function checkTitolo(titoloInput) {
      var pattern=/^.{5,30}$/;
      if (pattern.test(titoloInput.value)){
        togliErrore(titoloInput);
        return true;
      }
      else{
        if (titoloInput.value=="")
          mostraErrore(titoloInput, "Il campo titolo non può essere vuoto")
        else
          mostraErrore(titoloInput, "Il testo inserito deve avere almeno 5 caratteri e una massimo di 30")
        return false;
      }
    }

  function checkTesto(testoInput) {
      var pattern=/^.{40,300}$/;
      if (pattern.test(testoInput.value)){
        togliErrore(testoInput);
        return true;
      }
      else{
        if (testoInput.value=="")
          mostraErrore(testoInput, "Il campo testo non può essere vuoto")
        else
          mostraErrore(testoInput, "Il testo inserito deve avere almeno 40 caratteri e una massimo di 300")
        return false;
      }
    }

function checkRepeatPassword(passwordInput,passwordInput2){
  if (passwordInput.value==passwordInput2.value){
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
  if (li.childElementCount>=3)
    li.removeChild(li.lastChild);
}

function mostraErrore (input,testo){
  togliErrore(input);
  var li= input.parentNode;
  var span = document.createElement("span");
  span.className = "error";
  span.appendChild (document.createTextNode(testo));
  li.appendChild (span);
}


function checkReg(){
  var nome = document.getElementById("nome");
  var cognome = document.getElementById("cognome");
  var citta = document.getElementById("citta");
  var indirizzo = document.getElementById("indirizzo");
  var mail = document.getElementById("emailR");
  var nascita = document.getElementById("nascita");
  var password = document.getElementById("passwordR");
  var password1 = document.getElementById("passwordR1");

  var risultatoTestNome = checkNome(nome);            //utilizzo la funzione checkNome per nome,cognome e città percchè hanno la stessa RegExp
  var risultatoTestCognome = checkNome(cognome);
  var risultatoTestCitta = checkNome(citta);
  var risultatoTestIndirizzo = checkIndirizzo(indirizzo);
  var risultatoTestMail = checkMail(mail);
  var risultatoTestNascita = checkNascita(nascita);
  var risultatoTestPassword = checkPassword(password);
  var risultatoTestPassword1 = checkRepeatPassword(password,password1);

  if (risultatoTestNome && risultatoTestCognome && risultatoTestCitta && risultatoTestIndirizzo && risultatoTestMail && risultatoTestNascita && risultatoTestPassword && risultatoTestPassword1)
    return true;
  else {
    return false;
  }
}

function checkInsCorsi(){
  var titolo = document.getElementById("titolo");
  var testo = document.getElementById("testo");

  var risultatoTestTitolo = checkTitolo(titolo);            //utilizzo la funzione checkNome per nome,cognome e città percchè hanno la stessa RegExp
  var risultatoTestTesto = checkTesto(testo);

  if (risultatoTestTitolo && risultatoTestTesto)
    return true;
  else {
    return false;
  }
}
