
let openEye= document.querySelector('#openEye');

function showpassword(){
    if(openEye.type==='password'){
        openEye.type='text';
        if(openEye.classList.contains('fa-eye')){
            openEye.classList.remove('fa-eye');
            openEye.classList.add('fa-eye-slash');
        }else{
        openEye.type='password';
            if(openEye.classList.contains('fa-eye-slash')){
                openEye.classList.remove('fa-eye-slash');
                openEye.classList.add('fa-eye');
            }
        }
    }
}

if(openEye != null){
    openEye?.addEventListener('click', ()=>{
        showpassword();
    })
}