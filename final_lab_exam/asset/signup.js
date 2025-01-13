function check_username() {
    const username = document.getElementById("user_name_id").value;
    const errorElement = document.getElementById("user_name_val");
    if (username.trim() === "") {
        errorElement.style.display = "block";
    } else {
        errorElement.style.display = "none";
    }
}

function check_author_name() {
    const authorName = document.getElementById("author_name_id").value;
    const errorElement = document.getElementById("author_name_val");
    if (authorName.trim() === "") {
        errorElement.style.display = "block";
    } else {
        errorElement.style.display = "none";
    }
}

function check_contact_no() {
    const contactNo = document.getElementById("contact_no_id").value;
    const errorElement = document.getElementById("contact_no_val");
    if (contactNo.trim() === "") {
        errorElement.style.display = "block";
    } else {
        errorElement.style.display = "none";
    }
}

function check_password() {
    const password = document.getElementById("pass_id").value;
    const errorElement = document.getElementById("password_val");
    if (password.trim() === "") {
        errorElement.style.display = "block";
    } else {
        errorElement.style.display = "none";
    }
}

function check_confirm_password() {
    const confirmPassword = document.getElementById("con_pass_id").value;
    const errorElement = document.getElementById("con_password_val");
    if (confirmPassword.trim() === "") {
        errorElement.style.display = "block";
    } else {
        errorElement.style.display = "none";
    }
}

document.querySelector("form").addEventListener("submit", function (e) {
    let isValid = true;

    if (document.getElementById("user_name_id").value.trim() === "") {
        document.getElementById("user_name_val").style.display = "block";
        isValid = false;
    }

    if (document.getElementById("author_name_id").value.trim() === "") {
        document.getElementById("author_name_val").style.display = "block";
        isValid = false;
    }

    if (document.getElementById("contact_no_id").value.trim() === "") {
        document.getElementById("contact_no_val").style.display = "block";
        isValid = false;
    }

    if (document.getElementById("pass_id").value.trim() === "") {
        document.getElementById("password_val").style.display = "block";
        isValid = false;
    }

    if (document.getElementById("con_pass_id").value.trim() === "") {
        document.getElementById("con_password_val").style.display = "block";
        isValid = false;
    }


    if (!isValid) {
        e.preventDefault();
    }
});
