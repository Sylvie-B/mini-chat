// recup elements
let modal = document.getElementById('modal');
let btnPseudo = document.getElementById('pseudo');
let userPseudo = document.getElementById('userPseudo');
// give focus to pseudo
userPseudo.focus();

let userMessage = document.getElementById('userMessage');
let btnMessage = document.getElementById('message');
let dialog = document.getElementById('dialog');

// button pseudo listener
//   hidden modal
//   recup pseudo value
//      check & send to data base
//      display pseudo in online

btnPseudo.addEventListener('click', function (){
    modal.style.display = 'none';

})

/**
 * button message listener
 *   recup input dialogue
 *      display user and dialog
 *      send dialog to data base
 */
