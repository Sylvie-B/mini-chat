// get elements
let btn = document.getElementsByClassName('btn');
let frame = document.getElementById('frame');
let button = document.getElementById('button');
let btnMessage = document.getElementById('btnMessage');
let usersTxt = document.getElementById('usersTxt');
let name = document.getElementById('name');

// display all messages every seconds
setInterval(displayDialog, 5000);

// btn message listener
btnMessage.addEventListener('click', function (){
    // get user new message
    const userSay = document.getElementById('userMessage').value;
    // get user pseudo or id ?

    if(!userSay){
        alert('veuillez entrer votre message');
    }
    else {
        const xhr = new XMLHttpRequest();
        xhr.onload = function (){
            let data = JSON.parse(xhr.responseText);
            console.log(data);
        }
        let userText = {
            'message': userSay
        }
        xhr.open('POST', '/api/sendMessage.php');
        xhr.send(JSON.stringify(userText));
    }
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
    xhrTxt.open('GET', '/api/getMessage.php');
    xhrTxt.send();
}

