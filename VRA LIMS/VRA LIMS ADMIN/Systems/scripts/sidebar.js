const hideSideBar = document.getElementById('toggle-btn');
const mainSection = document.querySelector('.main-section');
const sidebar = document.querySelector('.sidebar');
const header = document.querySelector('.header');


hideSideBar.addEventListener('click', () => {
  sidebar.classList.toggle('hidden');
  header.classList.toggle('longer');
  mainSection.classList.toggle('longer');
  hideSideBar.classList.toggle('rotate');

  // Show back-in button
});

// hideSideBar.addEventListener('click', () => {
// });