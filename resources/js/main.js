
let eye= document.querySelector('#eye');
let password= document.querySelector('#password');

let eye_conf= document.querySelector('#eye_conf');
let confirm_password= document.querySelector('#confirm_password')

let eye_log= document.querySelector('#eye_log');
let pass_log= document.querySelector('#pass_log')


function showpassword(){
    if(password.type==='password'){
        password.type='text';
        eye.classList.remove('fa-eye');
        eye.classList.add('fa-eye-slash');
        }
        else{
            password.type='password';
            eye.classList.remove('fa-eye-slash');
            eye.classList.add('fa-eye');
        }
    }

eye?.addEventListener('click', ()=>{
        showpassword();
})


function showpassword_log(){
    if(pass_log.type==='password'){
        pass_log.type='text';
        eye_log.classList.remove('fa-eye');
        eye_log.classList.add('fa-eye-slash');
        }
        else{
            pass_log.type='password';
            eye_log.classList.remove('fa-eye-slash');
            eye_log.classList.add('fa-eye');
        }
    }

eye_log?.addEventListener('click', ()=>{
        showpassword_log();
})
