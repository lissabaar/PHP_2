$(document).ready(function () {

    let startingPoint = 9;

    $('#loadMoreBtn').on('click', function () {
        $.ajax({
            method: "POST",
            url: "/../ajax/catalogLoader.php"
        })
            .done(function(data) {
            data = jQuery.parseJSON(data);
            if (data.length > 0) {
                $.each(data, function (ind, data) {

                    let element = `
                        <div class=\"catalog-item\">
                            <a href=\"item/?id=` + data.id + `\"><h2>` + data.name + `</h2></a>
                            <img src=\"` + data.image + `\" width=\"250\" class=\"catalog-img\">
                            <span class=\"catalog-item-price">Цена: ` + data.price + ` руб.</span>
                            <p class=\"catalog-item-description\">` + data.description + `</p>
                            <a class=\"catalog-buy-button\" href=\"/buy/?id=` + data.id + `\">Добавить в корзину</a>
                        </div>`

                    $('#catalogItems').append(element);
                })
            }
                startingPoint += startingPoint;
            });
    })});

