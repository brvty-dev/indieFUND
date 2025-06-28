const toTopButtons = document.querySelectorAll('.toTop');

toTopButtons.forEach(btn => btn.addEventListener('click', goUp));

function goUp() {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
}