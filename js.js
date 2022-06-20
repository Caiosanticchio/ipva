var barra = document.querySelectorAll('.barra');

barra[0].addEventListener('click', () => {


    let option = document.getElementById('option');
    if (option.classList.contains('hide')) {
        option.classList.add('show');
        option.classList.remove('hide');
    } else {
        option.classList.add('hide');
        option.classList.remove('show');
    }
});