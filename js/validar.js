
function enviar() {
    
    var cep = form.cep.value;
 
      if (cep == "") {
        alert('Favor informar o CEP para a consulta.');
          form.nome.focus();
          return false;
       }
    }