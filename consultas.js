function marcarConcluido() {
  let id = document.getElementById('idusuario')
  alert(id)
  //window.location.href = `http://localhost/app_consultas/registrarConsulta.php?id=${id}&crud=concluido`;
}

function removerConsulta(){
  let id = document.getElementById('idusuario')
  alert(id)
 // window.location.href = `http://localhost/app_consultas/registrarConsulta.php?id=${id}&crud=remover`;
}

function alterarConsulta(){
  let id = document.getElementById('idusuario')
  alert(id)
  let id = document.getElementById('idusuario').innerHTML
  window.location.href = `http://localhost/app_consultas/registrarConsulta.php?id=${id}&crud=concluido`;
}

function removerConsulta(){
  let id = document.getElementById('idusuario').innerHTML
  window.location.href = `http://localhost/app_consultas/registrarConsulta.php?id=${id}&crud=remover`;
}

function alterarConsulta(){
  console.log('alterar')
}