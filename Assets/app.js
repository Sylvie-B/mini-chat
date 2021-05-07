// get elements
let btnMessage = document.getElementById('btnMessage');
let usersTxt = document.getElementById('usersTxt');

// display all messages every seconds
setInterval(displayDialog, 5000);

// btn message listener
btnMessage.addEventListener('click', function (){
   newMessage();
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

function newMessage () {
    // get user new message
    const userSay = document.getElementById('userMessage').value;
    // to do get user pseudo or id ?

    if(!userSay){
        alert('veuillez entrer un message');
    }
    else {
        const xhr = new XMLHttpRequest();
        xhr.onload = function (){
            let text = JSON.parse(xhr.responseText);
            console.log(text.info);
        }
        let userText = {
            'message': userSay,
            'user_fk': 1
        }
        xhr.open('POST', '/api/sendMessage.php');
        xhr.send(JSON.stringify(userText));
    }
}