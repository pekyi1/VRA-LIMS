const editModalBack = document.querySelector('.edit-modal .a');
const editModalButtons = document.querySelectorAll(
    '.table-contents>div>div:last-of-type i:first-of-type');
const editModal = document.querySelector('.edit-modal');
const discardEditModal = document.getElementById('discard-edit-btn');
const confirmDis = document.querySelector('.confirm');
const discardModal = document.querySelector('.disclaimer-modal');
const closeDiscard = document.getElementById('discard-close');
const cancelDisclaimer = document.getElementById('cancel-disclaimer');

function hideBothModals() {
  editModal.style.display = 'none';
  discardModal.style.display = 'none';
}
// Attach click event listener to each edit button in the table
editModalButtons.forEach((button) => {
  button.addEventListener('click', () => {
    editModal.style.display = 'block';
  });
});

// Close modal on clicking the 'back' button
editModalBack.addEventListener('click', () => {
  editModal.style.display = 'none';
});

// Close modal on clicking the 'discard' button
discardEditModal.addEventListener('click', () => {
  discardModal.style.display = 'flex';
});
closeDiscard.addEventListener('click', () => {
  discardModal.style.display = 'none';
});
cancelDisclaimer.addEventListener('click', () => {
  discardModal.style.display = 'none';
});
confirmDis.addEventListener('click', () => {
  hideBothModals();
});
