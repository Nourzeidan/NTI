const password_input = document.getElementById("password");
const password_strength = document.getElementById("passwordStrength");
const password_error = document.getElementById("passwordError");
const form = document.getElementById("registrationForm");

const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&#_\.\-])[A-Za-z\d@$!%*?&#_\.\-]{10,}$/;
password_input.addEventListener("input", () => {
  const password = password_input.value;
  const isValid = regex.test(password);
  if (password === ""){
    password_error.style.display = "none";
    password_strength.textContent = "";
    return;
  }
  if (password.length < 8) {
    password_error.textContent = "Password must be at least 8 characters long.";
    password_error.style.display = "block";
  } else if (!isValid) {
    password_error.textContent = "Password must contain at least one lowercase letter, one uppercase letter, one digit, and one special character.";
    password_error.style.display = "block";
  } else {
    password_error.style.display = "none";
  }

  if (isValid && password.length >= 8) {
    password_strength.textContent = "Strong";
    password_strength.style.color = "green";
  } else {
    password_strength.textContent = "Weak";
    password_strength.style.color = "red";
  }
});

form.addEventListener("submit", (e) => {
  e.preventDefault();
  const password = password_input.value;
  const isValid = regex.test(password);

  if (!isValid) {
    password_error.textContent = "enter a valid password.";
    password_error.style.display = "block";
    alert('Please fix the errors before submitting the form.');
  } else {
    // form.submit();
    alert('Form submitted successfully.');
  }
});

setTimeout(function() {
    document.body.style.backgroundColor = 'black';
     
    console.log("timeout (going black)");
}, 10000);