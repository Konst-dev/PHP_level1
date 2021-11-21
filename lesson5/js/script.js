window.onload = function () {

    var cards = document.getElementsByClassName('card_image')
    for (var i = 0; i < cards.length; i++) {
        cards[i].addEventListener('click', (e) => {
            var id_array = e.currentTarget.getAttribute('id').split('_');
            var image_id = id_array[1];
            window.open("./image.php?image_id=" + image_id, "_blank"); //Открытие картинки в новой вкладке
        });
    }
}