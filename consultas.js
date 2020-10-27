function marcarConcluido(id) {
  window.location.href = "http://localhost/consultas/registrarConsulta.php?crud=concluido&id=" + id
}

function removerConsulta(id){
  window.location.href = "http://localhost/consultas/registrarConsulta.php?crud=remover&id=" + id
}

function alterarConsulta(id, data){
    let form = document.createElement('form')
    form.action = 'registrarConsulta.php?crud=alterar&id=' + id
    form.method = 'post'  
    form.class= 'row' 

    let inputconsulta = document.createElement('input')
    inputconsulta.type = 'text'
    inputconsulta.name = 'data'
    inputconsulta.className = 'form-control col'
    inputconsulta.value = data

    let button = document.createElement('button')
    button.type = 'submit'
    button.className = 'btn btn-info col mt-2'
    button.innerHTML = 'Atualizar'

    form.appendChild(inputconsulta)
    form.appendChild(button)

    let consulta = document.getElementById('consulta_'+ id)

    consulta.innerHTML = ''
    consulta.appendChild(form)
   
}

