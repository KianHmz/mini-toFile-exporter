document.querySelector("form").addEventListener("submit", function (event) {

  event.preventDefault();
  let form = event.target;

  if (!form.checkValidity()) {
    event.stopPropagation();
  }

  form.classList.add("was-validated");
  
});
