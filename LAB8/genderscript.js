function validateGender() {
    let genderInputs = document.querySelectorAll('input[name="gender"]:checked');
    let obj = document.getElementsByTagName('h4')[0];

    if (genderInputs.length === 0) {
        obj.innerHTML = "Please select a gender";
        obj.style.color = 'red';
        return false;
    }

    obj.style.color = 'black';
    obj.innerHTML = "Gender selected successfully!";
    return true;
}