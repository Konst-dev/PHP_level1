window.onload = function () {
    var cards = document.getElementsByClassName('card_image')
    for (var i = 0; i < cards.length; i++) {
        cards[i].addEventListener('click', (e) => {
            var urls = e.currentTarget.getAttribute('src');
            window.open(urls, "_blank");
        });
    }
}