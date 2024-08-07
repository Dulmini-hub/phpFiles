document.getElementById('loginForm').addEventListener('submit',function(event) {
  event.preventDefault();

  const username =document.getElementById('username').value;
  const password =document.getElementById('password').value;
  const errorMassage =document.getElementById('error-massage');

  if(username === 'admin' && password === '1234') {
    errorMassage.textContent = '';
    alert('login successful!');
  } else{
    errorMassage.textContent= 'Invalid username or password';
  }
  });

  let showPassword = document.getElementById("checkbox");
  let password = document.getElementById("password");
  checkbox.onclick = function(){
    if (checkbox.checked) {
      password.type = 'text';

    }else{
      password.type = 'password';
    }
  }

  const loginButton = document.getElementById('loginbutton');
  loginButton.addEventListener('mouseover', () => {
    loginButton.style.backgroundColor = '#005bb5';
  });

  loginButton.addEventListener('mouseout', () => {
    loginButton.style.backgroundColor = '#0072ff';
  });



