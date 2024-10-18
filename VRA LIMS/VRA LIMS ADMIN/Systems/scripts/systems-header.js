const downArrow = document.querySelector('.bx-chevron-down');
const closeButton = document.querySelector('.bx-x');
const dropdown = document.querySelector('.header-drop-down');

downArrow.addEventListener('click', () => {
  dropdown.classList.toggle('active');  // Show/hide dropdown
});

closeButton.addEventListener('click', () => {
  dropdown.classList.remove('active');  // Hide dropdown
});
