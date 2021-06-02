$(document).ready(function () {
    // banner owl carousel
    $("#banner-area .owl-carousel").owlCarousel({
        loop: true,
        dots: true,
        items: 1,
        autoplay: true,
        autoplayTimeout: 3000,
    });

    // top sale owl carousel
    $("#top-sale .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 3,
            },
            1000: {
                items: 5,
            },
        },
    });

    // isotope filter
    const grid = $(".grid").isotope({
        itemSelector: ".grid-item",
        layoutMode: "fitRows",
    });

    // filter items on button click
    $(".button-group").on("click", "button", function () {
        const filterValue = $(this).attr("data-filter");
        grid.isotope({ filter: filterValue });
    });

    // new products owl carousel
    $("#new-products .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 3,
            },
            1000: {
                items: 5,
            },
        },
    });

    // blogs owl carousel
    $("#blogs .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
            },
        },
    });

    // Product QTY
    let qtyUp = $(".qty-up");
    let qtyDown = $(".qty-down");
    // let input = $(".qty-input");

    qtyUp.click(function (e) {
        let input = $(`.qty-input[data-id='${$(this).data("id")}']`);
        if (input.val() >= 1 && input.val() <= 9) {
            input.val(function (i, oldVal) {
                return ++oldVal;
            });
        }
    });

    qtyDown.click(function (e) {
        let input = $(`.qty-input[data-id='${$(this).data("id")}']`);
        if (input.val() > 1 && input.val() <= 10) {
            input.val(function (i, oldVal) {
                return --oldVal;
            });
        }
    });
});
