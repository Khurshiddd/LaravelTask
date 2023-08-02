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
const editModal = document.getElementById("editModal");
const openEdit = document.getElementById("openEdit");

// When the button is clicked, show the modal
openEdit.addEventListener("click", function () {
  editModal.style.display = "block";
});

// When the user clicks on the close button or outside the modal, close it
editModal.addEventListener("click", function (event) {
  if (event.target === editModal || event.target.classList.contains("close")) {
    editModal.style.display = "none";
  }
});
$(document).ready(function() {
    // Attach a blur event handler to the input field
    $("#icon-input").blur(function() {
        // Get the input value (icon name) entered by the user
        const iconName = $(this).val();

        $("#selected-icon").html(`<i class="fas ${iconName}"></i>`);
    });
});
// const d = document.querySelector('#icon-input');
// $(d).imojioneArea({
//     pickerPosition: 'right'
// })
