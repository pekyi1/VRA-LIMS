const downArrow = document.querySelector('.bx-chevron-down');
const closeButton = document.querySelector('.bx-x');
const dropdown = document.querySelector('.header-drop-down');
const hideSideBar = document.getElementById('toggle-btn');
const mainContent = document.querySelector('.main-content');
const sidebar = document.querySelector('.sidebar');
const header = document.querySelector('.header');
const toggleBox = document.querySelector('.header-left');

downArrow.addEventListener('click', () => {
  dropdown.classList.toggle('active');  // Show/hide dropdown
});

closeButton.addEventListener('click', () => {
  dropdown.classList.remove('active');  // Hide dropdown
});



hideSideBar.addEventListener('click', () => {
  sidebar.classList.toggle('hidden');
  header.classList.toggle('longer');
  mainContent.classList.toggle('longer');
  hideSideBar.classList.toggle('rotate');

  // Show back-in button
});

// hideSideBar.addEventListener('click', () => {
// });