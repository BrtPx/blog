document.addEventListener('DOMContentLoaded', () => {
    const title = sessionStorage.getItem('TITLE');
    const image = sessionStorage.getItem('IMAGE');
    const content = sessionStorage.getItem('CONTENT');
    // const img_path = 'assets/css/';

    // document.getElementById('row').insertAdjacentHTML = title;

    document.getElementById('heroi-img').setAttribute("src", image);
    document.getElementById('sub').insertAdjacentHTML('afterbegin', title);
    document.getElementById('row').insertAdjacentHTML('beforeend', content);
    // document.getElementById('hero-img').insertAdjacentHTML('beforeend', image);

    // sessionStorage.clear();

    // document.getElementById('image').innerHTML = image;
})