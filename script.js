function validateForm() {
    if (document.getElementById("name").value == "") {
        alert("Name required");
        return false;
    }

    if (document.getElementById("email").value == "") {
        alert("Email required");
        return false;
    }

    if (document.getElementById("course").value == "") {
        alert("Select a course");
        return false;
    }

    return true;
}
