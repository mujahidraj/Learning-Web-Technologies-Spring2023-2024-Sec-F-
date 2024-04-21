function validateEmail() {
    let emailInput = document.getElementById('email').value.trim();
    let obj = document.getElementsByTagName('h4')[0];

    if (emailInput === "") {
        obj.innerHTML = "Email cannot be empty";
        obj.style.color = 'red';
        return false;
    }

    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(emailInput)) {
        obj.innerHTML = "Invalid email address";
        obj.style.color = 'red';
        return false;
    }

    obj.style.color = 'black';
    obj.innerHTML = emailInput;
    return true;
}