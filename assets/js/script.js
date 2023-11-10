function toggleProfile(profile) {
    // Hide all profile-info elements
    const profiles = document.querySelectorAll('.profile-info');
    profiles.forEach((profile) => {
      profile.style.display = 'none';
    });
  
    // Remove active class from all buttons
    const buttons = document.querySelectorAll('.profile-toggle button');
    buttons.forEach((button) => {
      button.classList.remove('active');
    });
  
    // Show the selected profile-info element and add active class to the button
    const selectedProfile = document.getElementById(`${profile}-profile`);
    const selectedButton = document.querySelector(`.profile-toggle button[data-profile="${profile}"]`);
    selectedProfile.style.display = 'block';
    selectedButton.classList.add('active');
  }
  
  // Show the default profile on page load
  toggleProfile('seller');
  