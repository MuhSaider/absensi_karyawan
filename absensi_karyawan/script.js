// Function to show the popup
function showPopup() {
    const popup = document.getElementById('loginPopup');
    popup.style.display = 'flex';
  }
  
  // Function to close the popup
  function closePopup() {
    const popup = document.getElementById('loginPopup');
    popup.style.display = 'none';
  }
  
  // Event listener for the close button
  document.querySelector('.close').addEventListener('click', closePopup);
  
  // Simulate successful login (you can trigger this after actual login)
  document.addEventListener('DOMContentLoaded', () => {
    // Assuming login is successful, show the popup
    showPopup();
  });