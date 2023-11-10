function toggleRegister(registerType) {
    // Hide all register-form elements
    const registers = document.querySelectorAll('.register-form');
    registers.forEach((register) => {
      register.style.display = 'none';
    });
  
    // Remove active class from all buttons
    const buttons = document.querySelectorAll('.register-toggle button');
    buttons.forEach((button) => {
      button.classList.remove('active');
    });
  
    // Show the selected register-form element and add active class to the button
    const selectedRegister = document.getElementById(`${registerType}-register`);
    const selectedButton = document.querySelector(`.register-toggle button[data-register="${registerType}"]`);
    selectedRegister.style.display = 'block';
    selectedButton.classList.add('active');
  }
  
  // Show the default register form on page load
  toggleRegister('seller');
  