// display all users messages
let usersTxt = document.getElementById('usersTxt');
// input & valid message
let userMessage = document.getElementById('userMessage');
let btnMessage = document.getElementById('btnMessage');

// give focus
userMessage.focus();
// display all messages every seconds
setInterval(displayDialog, 1000);

// btn message listener
btnMessage.addEventListener('click', function (){
   newMessage();
    userMessage.value = '';
    userMessage.focus();
})

// api message send id_message, message, user_fk
// get message function to display
function displayDialog (){
    const xhrTxt = new XMLHttpRequest();
    xhrTxt.onload = function (){
        usersTxt.innerHTML = '';
        let data = JSON.parse(xhrTxt.responseText);
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
    const userSay = userMessage.value;
    // to do get user pseudo or id ?

    if(!userSay){
        alert('veuillez entrer un message');
    }
    else {
        const xhr = new XMLHttpRequest();
        xhr.onload = function (){
            let text = JSON.parse(xhr.responseText);
        }
        let userText = {
            'message': userSay,
            'user_fk': 1
        }
        xhr.open('POST', '/api/sendMessage.php');
        xhr.send(JSON.stringify(userText));
    }

}