document.addEventListener("DOMContentLoaded",() =>
{
    document.querySelector("#submit").addEventListener("click",(e) =>
    {
    
        let shirtQuantity = document.getElementById('shirt');
        let hoodieQuantity = document.getElementById('hoodie');
        let sweatpantsQuantity = document.getElementById('sweatpants');
        let email = document.getElementById('username');
        let password = document.getElementById('password');
        let free = document.getElementById('free');
        let overnight = document.getElementById('overnight');
        let three = document.getElementById('three');
        
        // email validation
        if (!checkEmail(email.value)) {
            alert("Please enter email in name@domain.com format.");
            e.preventDefault();
        }
        // passowrd validation
        if(password.value.length == 0) {
            alert("Password field cannot be left blank.");
            e.preventDefault();
        }
        //quantity validation
        if (shirtQuantity.value == 0 && sweatpantsQuantity.value == 0  && hoodieQuantity.value == 0) {
            alert("Quantities cannot be left blank.");
            e.preventDefault();
        }
        // shipping validation
        if (free.checked == false && overnight.checked == false && three.checked == false) {
            alert("Please select a shipping option.");
            e.preventDefault();
        }
    });

    // function to check email is in the right format
    function checkEmail(email)
    {   
        let passed = false;
        for (let i = 0; i < email.length; ++i) {
            if (email[i] == "@" && i != 0 && i != email.length-1) {
                passed = true;
            }
        }
        return passed;
    }
});
