<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{URL::asset('assets/images/user-plus-solid.svg')}}">
    <title>انشاء حساب</title>
    <!-- Fontawesome CDN Link For Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Open Sans', sans-serif;
}

body {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  padding: 0 10px;
  background: #1BB295;
}

form {
  padding: 25px;
  background: #fff;
  max-width: 500px;
  width: 100%;
  border-radius: 7px;
  box-shadow: 0 10px 15px rgba(0, 0, 0, 0.05);
}

form h2 {
  font-size: 27px;
  text-align: center;
  margin: 0px 0 30px;
}

form .form-group {
  margin-bottom: 15px;
  position: relative;
}

form label {
  display: block;
  font-size: 15px;
  margin-bottom: 7px;
}

form input,
form select {
  height: 45px;
  padding: 10px;
  width: 100%;
  font-size: 15px;
  outline: none;
  background: #fff;
  border-radius: 3px;
  border: 1px solid #bfbfbf;
}

form input:focus,
form select:focus {
  border-color: #9a9a9a;
}

form input.error,
form select.error {
  border-color: #f91919;
  background: #f9f0f1;
}

form small {
  font-size: 14px;
  margin-top: 5px;
  display: block;
  color: #f91919;
}

form .password i {
  position: absolute;
  right: 408px;
  height: 45px;
  top: 28px;
  font-size: 13px;
  line-height: 45px;
  width: 45px;
  cursor: pointer;
  color: #939393;
  text-align: center;
}

.submit-btn {
  margin-top: 30px;
}

.submit-btn input {
  color: white;
  border: none;
  height: auto;
  font-size: 16px;
  padding: 13px 0;
  border-radius: 5px;
  cursor: pointer;
  font-weight: 500;
  text-align: center;
  background: #1BB295;
  transition: 0.2s ease;
}

.submit-btn input:hover {
  background: #179b81;

}
a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
  position: relative;
  right: 280px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #f1f1f1;
  color: black;
}


    </style>
</head>
<body>

    <form action="{{ route('add') }}" method="POST" dir="rtl">
        {{ csrf_field() }}

      <h2>انشاء حساب</h2>

      <div class="form-group fullname">
        @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
@endif
        <label for="fullname">الاسم العائلي</label>
        <input type="text" id="fullname" name="NomUser" placeholder="ادخل الاسم العائلي" required>
      </div>
      <div class="form-group email">
        <label for="pre">الاسم الشخصي</label>
        <input type="text" id="pre" name="PrenomUser" placeholder="ادخل الاسم الشخصي" required>
      </div>
      <div class="form-group email">
        <label for="email"> رقم الهاتف</label>
        <input type="text" id="email" name="NumTelUser" placeholder="ادخل رقم الهاتف" required>
      </div>
      <div class="form-group email">
        <label for="email">الايميل </label>
        <input type="email" id="email" name="email" placeholder=" ادخل الايميل " required>
      </div>
      <div class="form-group password" dir="rtl">
        <label for="password">كلمة السر</label>
        <input type="password" id="password" name="Password" placeholder="ادخل كلمة المرور" required >
        <i id="pass-toggle-btn" class="fa-solid fa-eye" ></i>
      </div>
      <div class="form-group submit-btn">
        <input type="submit" name="submit" value="Submit">
      </div>
      <a href="{{route('home')}}" class="previous" dir="ltr">&laquo; الرجوع للصفحة الرئيسية </a>
    </form>
<script>
    // Selecting form and input elements
const form = document.querySelector("form");
const passwordInput = document.getElementById("password");
const passToggleBtn = document.getElementById("pass-toggle-btn");

// Function to display error messages
const showError = (field, errorText) => {
    field.classList.add("error");
    const errorElement = document.createElement("small");
    errorElement.classList.add("error-text");
    errorElement.innerText = errorText;
    field.closest(".form-group").appendChild(errorElement);
}

// Function to handle form submission
const handleFormData = (e) => {
    e.preventDefault();

    // Retrieving input elements
    const fullnameInput = document.getElementById("fullname");
    const emailInput = document.getElementById("email");


    // Getting trimmed values from input fields
    const fullname = fullnameInput.value.trim();
    const email = emailInput.value.trim();
    const password = passwordInput.value.trim();


    // Regular expression pattern for email validation
    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

    // Clearing previous error messages
    document.querySelectorAll(".form-group .error").forEach(field => field.classList.remove("error"));
    document.querySelectorAll(".error-text").forEach(errorText => errorText.remove());

    // Performing validation checks
    if (fullname === "") {
        showError(fullnameInput, "Enter your full name");
    }
    if (!emailPattern.test(email)) {
        showError(emailInput, "Enter a valid email address");
    }
    if (password === "") {
        showError(passwordInput, "Enter your password");
    }
    if (date === "") {
        showError(dateInput, "Select your date of birth");
    }
    if (gender === "") {
        showError(genderInput, "Select your gender");
    }

    // Checking for any remaining errors before form submission
    const errorInputs = document.querySelectorAll(".form-group .error");
    if (errorInputs.length > 0) return;


}

// Toggling password visibility
passToggleBtn.addEventListener('click', () => {
    passToggleBtn.className = passwordInput.type === "password" ? "fa-solid fa-eye-slash" : "fa-solid fa-eye";
    passwordInput.type = passwordInput.type === "password" ? "text" : "password";
});


</script>

  </body>
</html>
