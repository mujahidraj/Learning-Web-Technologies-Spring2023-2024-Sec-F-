function validateUsername() {
            
    let usernameInput = document.getElementById('username').value.trim();
    let obj = document.getElementsByTagName('h4')[0];
    let words;
    let chracter;
    let ffchracter;

    if (usernameInput === "") {
        obj.innerHTML = "Null data found";
        obj.style.color = 'red';
        return false;
    }

     words= usernameInput.split(" ");
    if (words.length < 2) {
        obj.innerHTML = "Username must contain at least two words";
        obj.style.color = 'red';
        return false;
    }

    chracter= /^[a-zA-Z." "]+$/;
    if (!chracter.test(usernameInput)) {
        obj.innerHTML = "Username can only contain letters, dots, or dashes";
        obj.style.color = 'red';
        return false;
    }

    fchracter= usernameInput.charAt(0);
    if (!fcharacter.match(/[a-zA-Z]/)) {
        obj.innerHTML = "Username must start with a letter";
        obj.style.color = 'red';
        return false;
    }


    obj.style.color = 'black';
    obj.innerHTML ="success";
    return true;
}