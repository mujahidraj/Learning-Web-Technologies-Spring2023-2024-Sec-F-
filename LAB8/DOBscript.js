function validateDate() {
    let dateInput = document.getElementById('date').value.trim();
    let obj = document.getElementsByTagName('h1')[0];

    if (dateInput === "") {
        obj.innerHTML = "Date cannot be empty";
        obj.style.color = 'red';
        return false;
    }

    let dateRegex = /^(0?[1-9]|[1-2][0-9]|3[0-1])\/(0?[1-9]|1[0-2])\/(19\d\d|20(?:0[0-9]|1[0-6]))$/;
    if (!dateRegex.test(dateInput)) {
        obj.innerHTML = "Invalid date format or out of range";
        obj.style.color = 'red';
        return false;
    }

    obj.style.color = 'black';
    obj.innerHTML = "Date submitted successfully!";
    return true;
}