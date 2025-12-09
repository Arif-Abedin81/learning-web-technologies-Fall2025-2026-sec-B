function checkDegree() {
    let ssc = document.getElementById("ssc").checked;
    let hsc = document.getElementById("hsc").checked;
    let bsc = document.getElementById("bsc").checked;
    let msc = document.getElementById("msc").checked;

    let error = document.getElementById("error");
    error.innerHTML = "";

    if (ssc == false && hsc == false && bsc == false && msc == false) {
        error.innerHTML = "At least one degree must be selected";
        return false;
    }

    return true;
}