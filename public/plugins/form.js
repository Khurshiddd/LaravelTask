// Get the modal element and the button that opens it
const modal = document.getElementById("myModal");
const openModalButton = document.getElementById("openModalButton");

// When the button is clicked, show the modal
openModalButton.addEventListener("click", function () {
  modal.style.display = "block";
});

// When the user clicks on the close button or outside the modal, close it
modal.addEventListener("click", function (event) {
  if (event.target === modal || event.target.classList.contains("close")) {
    modal.style.display = "none";
  }
});
