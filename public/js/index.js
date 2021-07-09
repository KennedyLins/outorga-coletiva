
function validacaoEmail(field) {
  usuario = field.value.substring(0, field.value.indexOf("@"));
  dominio = field.value.substring(field.value.indexOf("@") + 1, field.value.length);

  if ((usuario.length >= 1) &&
    (dominio.length >= 3) &&
    (usuario.search("@") == -1) &&
    (dominio.search("@") == -1) &&
    (usuario.search(" ") == -1) &&
    (dominio.search(" ") == -1) &&
    (dominio.search(".") != -1) &&
    (dominio.indexOf(".") >= 1) &&
    (dominio.lastIndexOf(".") < dominio.length - 1)) {
  }
  else {
    alert("E-mail invalido");
    document.getElementById("email").innerHTML = "";
  }
}

/*
function validacaoEmailIgual(field1, field2) {

  if (field1 === field2) {
  } else {
    alert("Os e-mails não são iguais");
    document.getElementById("repita").innerHTML = "";

  }
}*/