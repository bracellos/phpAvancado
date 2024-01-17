//setar elemento do html
const formulario = document.querySelector('form')

//iniciar um gerenciador de eventos
formulario.addEventListener('submit', function(event){
    event.preventDefault()

    let valor = formulario.professor.value

    fetch("http://localhost/entra21/phpAvancado/duvidas.php?professor="+valor)


    console.log(valor);
})