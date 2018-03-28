$(function () {
    $('.client-phone').mask('+38(000)-000-00-00', {selectOnFocus: true});
    $('#userPhone').mask('+38(000)-000-00-00', {selectOnFocus: true});
    $('.home-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        asNavFor: '.home-slider--thumbnails'
    });
    $('.home-slider--thumbnails').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.home-slider',
        centerMode: true,
        centerPadding: '60px',
        swipe: false,
        focusOnSelect: true
    });
    $('.clients-slider').slick({
        slidesToShow: 4,
        arrows: false,
        swipeToSlide: true,
        autoplay: true,
        autoplaySpeed: 3000
    });
    // $('.counter-value').counterUp({
    //     delay: 10,
    //     time: 2000
    // });
});

$(function () {
    $('ul.categories-list li.has-children a').click(function () {
        $(this).parent().toggleClass('active');
    });
});

$(function () {
    $('#callback').submit(function (event) {
        event.preventDefault();
        $.post($(this).attr('action'), $(this).serialize(), function (data) {
            if (data.error) {
                if(data.error === 1){
                    alert("Поле номера телефона не должно быть пустым!");
                }
                if(data.error === 2){
                    alert("Ошибка длины номера телефона");
                }
                if(data.error === 3){
                    alert("Поле имени не должно быть пустым!");
                }
                if(data.error === 4){
                    alert("Ошибка длины имени");
                }
            } else if(data.success){
                alert("Спасибо, мы скоро свяжемся с вами!");
                $('#callback')[0].reset();
                $('.modal').modal('hide');
            }
        });
    });
});