const openModal = document.querySelectorAll('.modalBtn');

openModal.forEach(btn => btn.addEventListener('click', showModal));

var modal = document.getElementById("myModal");
var span = document.getElementsByClassName("close")[0];

function showModal () {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}