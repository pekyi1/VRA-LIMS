const discard = document.getElementById('discard-btn');
const closeDiscard = document.getElementById('discard-close');
const discardModal = document.querySelector('.disclaimer-modal');
const cancelDisclaimer = document.getElementById('cancel-disclaimer');
discard.addEventListener('click', () => {
  discardModal.style.display = 'flex';  
});

closeDiscard.addEventListener('click', () => {
  discardModal.style.display = 'none';  
});
cancelDisclaimer.addEventListener('click', () => {
  discardModal.style.display = 'none';
});