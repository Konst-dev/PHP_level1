window.onload = function () {

    var cards = document.getElementsByClassName('card')
    for (var i = 0; i < cards.length; i++) {
        cards[i].addEventListener('click', (e) => {
            var id = e.currentTarget.getAttribute('id');
            var urls = "./goods.php?id=" + id;
            window.open(urls, "_self");
        });
    }
}