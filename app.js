// recup user div, chat div
// recup input userPseudo
// recup button pseudo
// recup input userMessage
// recup button message
// recup dialog
let user = document.getElementById('user');
let chat = document.getElementById('chat');
let userPseudo = document.getElementById('userPseudo');
let btnPseudo = document.getElementById('pseudo');
let userMessage = document.getElementById('userMessage');
let btnMessage = document.getElementById('message');
let dialog = document.getElementById('dialog');

// button pseudo listener
//   hidden user
//   show chat
//   show footer
//   recup pseudo value
//      display pseudo in online
//      send to data base
btnPseudo.addEventListener('click', function (){
    user.style.display = 'none';
    chat.style.display = 'flex';
})

/**
 * button message listener
 *   recup input dialogue
 *      display user and dialog
 *      send dialog to data base
 *
 */
