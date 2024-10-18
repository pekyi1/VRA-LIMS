const hideSideBar = document.getElementById('toggle-btn');
const allSection = document.querySelector('.All-section');
const sidebar = document.querySelector('.sidebar');
const header = document.querySelector('.header');


hideSideBar.addEventListener('click', () => {
  sidebar.classList.toggle('hidden');
  header.classList.toggle('longer');
  allSection.classList.toggle('longer');
  hideSideBar.classList.toggle('rotate');

  // Show back-in button
});

// hideSideBar.addEventListener('click', () => {
// });