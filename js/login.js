const form = document.getElementById('myForm');
form.addEventListener('submit', function(e) {
    if(!loginSuccessful()){
        e.preventDefault();
        /*Codigo para comprobar login*/
    }
})
 
function loginSuccessful() {
    const email = document.getElementById('email').value;
        
}
