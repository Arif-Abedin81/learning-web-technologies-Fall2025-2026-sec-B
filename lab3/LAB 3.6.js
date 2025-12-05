function checkBloodGroup() {
    let blood = document.getElementById("blood").value;
    let error = document.getElementById("error");
    error.innerHTML = "";

    // Must be selected (default should be empty or placeholder)
    if (blood == "" || blood == "none") {
        error.innerHTML = "Blood group must be selected";
        return false;
    }

    return true;
}