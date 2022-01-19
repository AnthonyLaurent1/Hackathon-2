const actives = document.getElementsByClassName('active');
for (const active of actives) {
    active.addEventListener('click', function () {
        active.innerHTML = 'Validé !';
        active.classList.toggle('color');
        active.addEventListener('click', function () {
            active.innerHTML = 'Sélectionner';
            active.classList.remove('color');
        })
    })
}