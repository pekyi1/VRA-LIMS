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
editModalButtons.forEach((button) => {
  button.addEventListener('click', () => {
    editModal.style.display = 'block';
  });
});

editModalBack.addEventListener('click', () => {
  editModal.style.display = 'none';
});

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

// Get the modal, button, and close elements
const addAuthorModal = document.getElementById('add-author-modal');
const addPublisherModal = document.getElementById('add-publisher-modal');
const addAuthor = document.getElementById('add-author');
const addPublisher = document.getElementById('add-publisher');
const closeAddAuthorModal1 = document.getElementById('closeAuthorModal1');
const closeAddAuthorModal2 = document.getElementById('closeAuthorModal2');

// When the "Join as a Volunteer" button is clicked, open the modal
addAuthor.addEventListener('click', () => {
  addAuthorModal.style.display = 'flex';
});
addPublisher.addEventListener('click', () => {
  addPublisherModal.style.display = 'flex';
});
// When the close button is clicked, close the modal
closeAddAuthorModal1.addEventListener('click', () => {
  addAuthorModal.style.display = 'none';
});
closeAddAuthorModal2.addEventListener('click', () => {
  addPublisherModal.style.display = 'none';
});