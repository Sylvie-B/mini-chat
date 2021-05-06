// get elements
let btn = document.getElementsByClassName('btn');
let frame = document.getElementById('frame');
let button = document.getElementById('button');
let btnMessage = document.getElementById('btnMessage');
let usersTxt = document.getElementById('usersTxt');
let name = document.getElementById('name');

// btn message listener
btnMessage.addEventListener('click', function (){

})

// api message send id_message, message, user_fk
// get message function to display
function displayDialog (){
    const xhrTxt = new XMLHttpRequest();
    xhrTxt.onload = function (){
        usersTxt.innerHTML = '';
        let data = JSON.parse(xhrTxt.responseText);
        console.log(data);
        for(let i = 0 ; i < data.length; i++){
            let line = document.createElement('p');
            line.innerHTML = data[i].user_fk + " : " + data[i].message;
            usersTxt.append(line);
        }
    }
    xhrTxt.open('GET', '/api/message.php');
    xhrTxt.send();
}

displayDialog();

// setInterval(displayDialog, 1000);
