function validateDegree() {
    let degreeInputs = document.querySelectorAll('input[name="degree"]:checked');
    let obj = document.getElementsByTagName('h1')[0];

    if (degreeInputs.length === 0) {
        obj.innerHTML = "Please select a degree";
        obj.style.color = 'red';
        return false;
    }


    obj.style.color = 'black';
    obj.innerHTML = "Degree selected successfully!";
    return true;
}