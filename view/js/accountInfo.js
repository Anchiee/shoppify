const usernameForm = document.getElementById("change-username-form");
const passwordForm = document.getElementById("change-password-form");
const emailForm = document.getElementById("change-email-form");
const phoneForm = document.getElementById("change-phone-form");


//username
function showUsername()
{
  usernameForm.style.display = "block";
}

function hideUsername()
{
  usernameForm.style.display = "none";
}

//password
function showPassword()
{
  passwordForm.style.display = "block";
}

function hidePassword()
{
  passwordForm.style.display = "none";
}

//email
function showEmail()
{
  emailForm.style.display = "block";
}

function hideEmail()
{
  emailForm.style.display = "none";
}


//phone
function showPhone()
{
  phoneForm.style.display = "block";
}

function hidePhone()
{
  phoneForm.style.display = "none";
}

function redirectToCart()
{
  window.location.href = "../php/userCart.php";
}