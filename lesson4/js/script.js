window.onload = function () {
    var cards = document.getElementsByClassName('card')
    for (var i = 0; i < cards.length; i++) {
        cards[i].addEventListener('click', onDivClick);
    }
}
function onDivClick(el) {

}