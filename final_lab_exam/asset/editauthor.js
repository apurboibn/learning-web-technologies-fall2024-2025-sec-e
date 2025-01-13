function check_author_name() {
    const authorName = document.getElementById('new_author_name_id').value.trim();
    const error = document.getElementById('author_name_val');
    if (authorName === "") {
        error.style.display = 'block';
    } else {
        error.style.display = 'none';
    }
}

function check_contact_no() {
    const contactNo = document.getElementById('new_contact_no_id').value.trim();
    const error = document.getElementById('contact_no_val');
    if (contactNo === "") {
        error.style.display = 'block';
    } else {
        error.style.display = 'none';
    }
}

function check_password() {
    const password = document.getElementById('new_password_id').value.trim();
    const error = document.getElementById('password_val');
    if (password === "") {
        error.style.display = 'block';
    } else {
        error.style.display = 'none';
    }
}

function validateForm() {
    const authorName = document.getElementById('new_author_name_id').value.trim();
    const contactNo = document.getElementById('new_contact_no_id').value.trim();
    const password = document.getElementById('new_password_id').value.trim();

    if (!authorName || !contactNo || !password) {
        alert("Fill all fields.");
        return false;
    }
    return true;
}
