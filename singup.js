const form = document.querySelector(".signup form");
const continueBtn = document.querySelector(".button input");
const errorText = document.querySelector(".error-txt");

form.onsubmit = (e) => {
    e.preventDefault();  // preventing form from submitting normally

    // Frontend Validation
    let emailInput = form.querySelector("input[name='email']");
    if (emailInput.value === "") {
        errorText.textContent = "Please enter an email address.";
        errorText.style.display = "block";
        return; // Exit the function
    }

    // Start Ajax if validation passes
    let xhr = new XMLHttpRequest(); // creating XML object
    xhr.open("POST", "./php/signup.php", true);

    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data;
                try {
                    data = JSON.parse(xhr.responseText);
                } catch (e) {
                    data = xhr.responseText; // fallback if not JSON
                }
                if (data === "success") {
                    console.log('success');
                    location.href = "users.php";
                } else {
                    errorText.textContent = data;
                    errorText.style.display = "block";
                }
            } else {
                errorText.textContent = "Server error: " + xhr.status;
                errorText.style.display = "block";
            }
        }
    };

    xhr.onerror = () => {
        errorText.textContent = "Request failed. Please try again.";
        errorText.style.display = "block";
    };

    //  we have to send the form data through ajax to php
    let formData = new FormData(form);  //creating new formData object 
    xhr.send(formData);  //sending the form data to php
}
