// get elements
let btn = document.getElementsByClassName('btn');
let frame = document.getElementById('frame');
let button = document.getElementById('button');
let message = document.getElementById('message');


for(let i = 0 ; i < btn.length ; i++){
    btn[i].addEventListener("click", function (e) {
        e.preventDefault();
        frame.style.display = 'flex';
        button.style.display = 'none';
        switch (i){
            case 0 :    // connexion

                break;
            case 1 :    // inscription

                break;
        }
    })
}

// btn message listener
message.addEventListener('click', function (){
    const txt = document.getElementById('userMessage').value;
    // send message to api
    if(txt){
       let xhr = new XMLHttpRequest();

       const userTxt = {
           'message': txt
       }
       xhr.open('POST', '/api/message');
       xhr.setRequestHeader('Content-Type', 'application/json');
       xhr.send(JSON.stringify(userTxt));
    }
})

// display each users names & new messages
//
// todo function userExist
// todo function checkPass
//
