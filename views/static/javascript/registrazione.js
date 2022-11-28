/**
 * validazione dati registrazione lato client
 */
const nome=document.getElementById("nome");
const cognome=document.getElementById("cognome");
const email=document.getElementById("email");
const password= document.getElementById("password");
const confPassword= document.getElementById("Cpassword");


function checkInputs(){
    const nomeValue=nome.value.trim();
    const emailValue=email.value.trim();
    const cognomeValue=cognome.value.trim();
    const passwordValue=password.value.trim();
    const confPasswordValue=confPassword.value.trim();

    $risCognome=controllaCognome(cognomeValue);
    $risNome=controllaNome(nomeValue);
    $risEmail=controllaEmail(emailValue);
    $risPassword=controllaPassword(passwordValue);
    $risConfPassword=controllaConfPassword(passwordValue,confPasswordValue);

    if(($risCognome && $risNome && $risEmail && $risPassword && $risConfPassword )){
        return true;
    } else{
        return false;
    }
}
function controllaNome(nomeV){
    const regExp=/^[a-zA-Z0-9]*$/;
    if(nomeV.length<=2){
        setError(nome,'Deve avere almeno 6 caratteri');
        return false;
    }else if(!regExp.test(nomeV)){
        setError(nome, 'Non deve avere i caratteri speciali');
        return false;
    }else{
        setSuccess(nome);
    }
    return true;
}
function controllaCognome(cog){
    const regExp=/^[a-zA-Z0-9]*$/;
    if(cog.length<=2){
        setError(cognome,'Deve avere almeno 6 caratteri');
        return false;
    }else if(!regExp.test(cog)){
        setError(cognome, 'Non deve avere i caratteri speciali');
        return false;
    }else{
        setSuccess(cognome);
    }
    return true;
}
function controllaEmail(em) {
    const reg=/^[a-zA-Z0-9]+@[^]+\.[a-zA-Z0-9]{2,6}$/;
    if (em.length === 0) {
        setError(email, 'Email Richiesta');
        return false;
    }else if(!reg.test(em)){
        setError(email, 'Non valida');
        return false;
    }else{
        setSuccess(email);
    }
    return true;
}

function controllaPassword(pwd){
    const regExp=/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@#?^!"$%&])[a-zA-Z0-9@#?^!"$%&]*$/;
    if(pwd.length<=7){
        setError(password,'Deve avere almeno 8 caratteri');
        return false;
    }else if(!regExp.test(pwd)){
        setError(password, 'Deve contenere un carattere speciale una lettera maiuscola, minuscola e un numero');
        return false;
    }else{
        setSuccess(password);
    }
    return true;
}
function controllaConfPassword(pwd,cpwd){
    if(pwd.length<=7){
        setError(confPassword,'Deve avere almeno 8 caratteri');
        return false;
    }else if(pwd!==cpwd){
        setError(confPassword, 'Non coincidono');
        return false;
    }else{
        setSuccess(confPassword);
    }
    return true;
}
function setError(input,message){
    const formControll= input.parentElement;
    const small=formControll.querySelector("small");
    small.innerHTML=message;
    formControll.className='formControll error';
}
function setSuccess(input){
    const formControll= input.parentElement;
    formControll.className='formControll success';
}