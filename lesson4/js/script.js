window.onload = function () {
    var modal_window = document.getElementById('modal');
    modal_window.addEventListener('click', (e) => {
        e.currentTarget.setAttribute('class', 'modal');
    });
    var cards = document.getElementsByClassName('card_image')
    for (var i = 0; i < cards.length; i++) {
        cards[i].addEventListener('click', (e) => {
            var urls = e.currentTarget.getAttribute('src');
            // window.open(urls, "_blank"); 
            modal_window.setAttribute('class', 'modal_show');
            var vSize = document.documentElement.clientHeight * 0.95;
            modal_window.innerHTML = "<center><img class='big_Img'  src='" + urls + "' height='" + Math.trunc(vSize) + "px'></center>";
        });
    }
}