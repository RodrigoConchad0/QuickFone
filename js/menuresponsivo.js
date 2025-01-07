 //Menu responsivo
 document.addEventListener('DOMContentLoaded', function () {
    var collapseToggle = document.querySelector('[data-bs-toggle="collapse"]');
    if (collapseToggle) {
        collapseToggle.addEventListener('click', function () {
            var target = document.querySelector(this.getAttribute('data-bs-target'));
            if (target) {
                target.classList.toggle('show');
            }
        });
    }
});