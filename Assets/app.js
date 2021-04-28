// get elements
let btnPseudo = document.getElementById('pseudo');
let btnMessage = document.getElementById('message');

btnPseudo.addEventListener('click', function (){


    })


btnMessage.addEventListener('click', function (e){
    e.preventDefault();
    let userTxt = document.getElementById('userMessage').value;
    let xhr = new XMLHttpRequest();

    let message = {
        'message': userTxt
    }
    console.log(message);
    xhr.open("GET", '/api/message');
    xhr.send(JSON.stringify(message));
})

