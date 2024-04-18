const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener('click', () => {
    container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener('click', () => {
    container.classList.remove("sign-up-mode");
});


document.addEventListener('DOMContentLoaded', function () {
    setTimeout(function() {
        var alertBox = document.querySelector('.alert-box');
        if (alertBox) {
            alertBox.classList.add('hidden'); 
        }
    }, 4000); 
});


document.addEventListener('DOMContentLoaded', function() {
    setTimeout(function() {
        var successMessage = document.getElementById('success-message');
        if (successMessage) {
            successMessage.style.opacity = '0';
            setTimeout(function() {
                successMessage.style.display = 'none'; 
            }, 500); 
        }
    }, 5000); 
});




