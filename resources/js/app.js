require('./bootstrap');

window.addEventListener("DOMContentLoaded", function () {
    const formsDelete = document.querySelectorAll(".form-delete");

    formsDelete.forEach(form => {
        form.addEventListener("submit", (e) => {
            e.preventDefault();

            //const comicTitle = document.getElementById("comicTitle").innerText;
            const conferma = confirm("Sei sicuro di voler eliminare questo elemento? L'operazione è irreversibile", "Si", "No");

            if (conferma) {
                form.submit();
            }
        });
    });
});
