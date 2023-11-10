function toggleLogin(loginType) {
    // Hide all login-form elements
    const logins = document.querySelectorAll('.login-form');
    logins.forEach((login) => {
      login.style.display = 'none';
    });
  
    // Remove active class from all buttons
    const buttons = document.querySelectorAll('.login-toggle button');
    buttons.forEach((button) => {
      button.classList.remove('active');
    });
  
    // Show the selected login-form element and add active class to the button
    const selectedLogin = document.getElementById(`${loginType}-login`);
    const selectedButton = document.querySelector(`.login-toggle button[data-login="${loginType}"]`);
    selectedLogin.style.display = 'block';
    selectedButton.classList.add('active');
  }
  
  // Show the default login form on page load
  toggleLogin('seller');
  