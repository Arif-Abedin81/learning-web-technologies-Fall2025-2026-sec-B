function checkDOB() {
    let day = document.getElementById("day").value;
    let month = document.getElementById("month").value;
    let year = document.getElementById("year").value;
    let error = document.getElementById("error");
    error.innerHTML = "";

    // Convert to numbers
    let d = 0, m = 0, y = 0;
    if (day != "") d = parseInt(day);
    if (month != "") m = parseInt(month);
    if (year != "") y = parseInt(year);

    // 1. Cannot be empty
    if (day == "" || month == "" || year == "") {
        error.innerHTML = "All fields must be filled";
        return false;
    }

    // 2. Valid day (0-31)
    if (d < 0 || d > 31) {
        error.innerHTML = "Day must be between 0 and 31";
        return false;
    }

    // 3. Valid month (1-12)
    if (m < 1 || m > 12) {
        error.innerHTML = "Month must be between 1 and 12";
        return false;
    }

    // 4. Valid year (1900-2016)
    if (y < 1900 || y > 2016) {
        error.innerHTML = "Year must be between 1900 and 2016";
        return false;
    }

    // All good
    return true;
}