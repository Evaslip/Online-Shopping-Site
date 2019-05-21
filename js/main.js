// валидация формы
var userEmail = $('[name="email"]');

$('form').submit(function (event) {
    
    
    if (userEmail.val() === '') {
        userEmail.css('border', '2px solid red');
    } else {
        userEmail.css('border', '');
    }



    if (userEmail.val() === '' ) {
        $(".main-form_fail").css({
            "display":"block"
        });
        return false
    } else {
        $(".main-form_success").css({
            "display":"block"
        });
    }
});


$('.logo').click(function(){
    location.href = "index.php"
});

// переход из главныз блоков
$('.main-blocks_items-jeans').click(function(){
    location.href = "/pages/catalog.php?id=jeans-jacket"
});

$('.main-blocks_items-acc').click(function(){
    location.href = "/pages/catalog.php?id=accessories"
});

$('.main-blocks_items-jeans_choose').click(function(){
    location.href = "/pages/catalog.php?id=jeans"
});

$('.main-blocks_items-sport').click(function(){
    location.href = "/pages/catalog.php?id=sport"
});

$('.main-blocks_items-child').click(function(){
    location.href = "/pages/catalog.php?id=3"
});

$('.main-blocks_items-boots').click(function(){
    location.href = "/pages/catalog.php?id=boots"
});