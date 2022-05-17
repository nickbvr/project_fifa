// BURGER TOGGLE

$('.burger').click(function (){
    $(this).toggleClass('active');
});

// BURGER TOGGLE

// WINDOW LOCATION

$(function () {
    var location = window.location.href;
    var cur_url = location.split('/').pop();
    $('.header__item').each(function () {
        var link = $(this).find('a').attr('href');
        if (cur_url.includes(link)) {
            $(this).addClass('active');
        }
        else if (!cur_url.includes('.php')){
            $('.header__item:first-child').addClass('active');
        }
    });
    $('.footer__item').each(function () {
        var link = $(this).find('a').attr('href');
        if (cur_url.includes(link)) {
            $(this).addClass('active');
        }
        else if (!cur_url.includes('.php')) {
            $('.footer__item:first-child').addClass('active');
        }        
    });
});

// WINDOW LOCATION

// BLOCK OF COINS

var array_value_coins = [100000,200000,500000,1000000,1500000,2000000,3000000,5000000,8000000];
var price = 200/1000000;
var array_value_discount = [5,10,15,20,25,30,35,40,45];
var html = '';
var array_value_price = [
    array_value_coins[0]*price-array_value_coins[0]*price*array_value_discount[0]/100,
    array_value_coins[1]*price-array_value_coins[1]*price*array_value_discount[1]/100,
    array_value_coins[2]*price-array_value_coins[2]*price*array_value_discount[2]/100,
    array_value_coins[3]*price-array_value_coins[3]*price*array_value_discount[3]/100,
    array_value_coins[4]*price-array_value_coins[4]*price*array_value_discount[4]/100,
    array_value_coins[5]*price-array_value_coins[5]*price*array_value_discount[5]/100,
    array_value_coins[6]*price-array_value_coins[6]*price*array_value_discount[6]/100,
    array_value_coins[7]*price-array_value_coins[7]*price*array_value_discount[7]/100,
    array_value_coins[8]*price-array_value_coins[8]*price*array_value_discount[8]/100];
for (var i = 0; i<9; i++){
    var help = array_value_coins[i]*price-array_value_coins[i]*price*array_value_discount[i]/100;
    html += `<div class="calculate__coin" value-coins="${array_value_coins[i]}" value_price ="${help.toFixed(2)}" value_discount="${array_value_discount[i]}">
                        <img src="/img/vector-down.svg" class="calculate__vector-down" alt="">
                        <img src="/img/vector-up.svg" alt="" class="calculate__vector-up">
                        <img src="/img/gold-coins.png" class="calculate__coin-img" alt="">
                        <span class="calculate__coin-value">${array_value_coins[i]}</span>
                        <span class="calculate__coin-price">for $`+help.toFixed(2)+`</span>
                    </div>`;
}
$('#calculate__wrapper').html(html);
$('.calculate__coin').on('click',function(){
    $('.calculate__coin').removeClass('active');
    $(".calculate__vector-up").css("transform", "scaleY(-1)");
    setTimeout(()=>{$(".calculate__vector-down").css("transform", "scaleY(1)")},1);
    $(this).addClass('active');
    var coins = $(this).attr('value-coins');
    var price_coins = $(this).attr('value_price');
    var discount = $(this).attr('value_discount');
    var discount_value = coins*price*(discount/100);
    $('#coins-value').val(coins);
    $('#price-value').val(price_coins);
    $('#discount-off').html(discount + "% OFF");
    $('#discount-value').html("save $" + discount_value.toFixed(2));

    setTimeout(()=>{$(this).children(".calculate__vector-up").css("transform", "scaleY(1)")},1);
    setTimeout(()=>{$(this).children(".calculate__vector-down").css("transform", "scaleY(-1)")},2);
})
$('.calculate__coin:first-child').addClass('active');
$('.calculate__coin:first-child > .calculate__vector-up').css('transform', 'scaleY(1)');

// BLOCK OF COINS

// COINS INPUT

$('#coins-value').on('input', function(){
    var value = $(this).val();
    var current_discount = 0;
    for (var i = 0; i<9; i++){
        if (value>=array_value_coins[i]){
            current_discount = array_value_discount[i];
        }
    }
    var price_coins = value*price-value*price*current_discount/100;
    var discount_value = value*price*current_discount/100;
    $('#price-value').val(price_coins.toFixed(2));
    $('#discount-off').html(current_discount + "% OFF");
    $('#discount-value').html("save $" + discount_value.toFixed(2));
    check_value();
});

// COINS INPUT

// PRICE INPUT

$('#price-value').on('input', function(){
    var value = $(this).val();
    var current_discount = 0;
    for (var i = 0; i<9; i++){
        if (value>=array_value_price[i]){
            current_discount = array_value_discount[i];
        }
    }
    var quantity_coins = value/(100-current_discount)*100/price;
    var discount_value = quantity_coins*price*current_discount/100;
    $('#coins-value').val(Math.round(quantity_coins));
    $('#discount-off').html(current_discount + "% OFF");
    $('#discount-value').html("save $" + discount_value.toFixed(2));
    check_value();
});

// PRICE INPUT

// CHECK VALUE

function check_value(){
    var value = $('#coins-value').val();
    $(".calculate__vector-up").css("transform", "scaleY(-1)");
    setTimeout(()=>{$(".calculate__vector-down").css("transform", "scaleY(1)")},1);
    $('.calculate__coin').removeClass('active');
    $('.calculate__coin[value-coins="'+value+'"]').addClass('active');
    setTimeout(()=>{$('.calculate__coin[value-coins="'+value+'"]').children(".calculate__vector-up").css("transform", "scaleY(1)")},1);
    setTimeout(()=>{$('.calculate__coin[value-coins="'+value+'"]').children(".calculate__vector-down").css("transform", "scaleY(-1)")},2);
}

// CHECK VALUE

// PRICE PLUS BUTTON

$('#price__plus').on('click',function(){
    var value =  Number($('#price-value').val());
    value = value+1;
    value = value.toFixed(2);
    $('#price-value').val(value);
    var current_discount = 0;
    for (var i = 0; i<9; i++){
        if (value>=array_value_price[i]){
            current_discount = array_value_discount[i];
        }
    }
    var quantity_coins = value/(100-current_discount)*100/price;
    var discount_value = quantity_coins*price*current_discount/100;
    $('#coins-value').val(Math.round(quantity_coins));
    $('#discount-off').html(current_discount + "% OFF");
    $('#discount-value').html("save $" + discount_value.toFixed(2));
    check_value();
});

// PRICE PLUS BUTTON

// PRICE MINUS BUTTON

$('#price__minus').on('click',function(){
    var value =  Number($('#price-value').val());
    if ((value-1) < 0){
        value = 0;
        value = value.toFixed(2);
    } else {
        value = value - 1;
        value = value.toFixed(2);
    }
    $('#price-value').val(value);
    var current_discount = 0;
    for (var i = 0; i<9; i++){
        if (value>=array_value_price[i]){
            current_discount = array_value_discount[i];
        }
    }
    var quantity_coins = value/(100-current_discount)*100/price;
    var discount_value = quantity_coins*price*current_discount/100;
    $('#coins-value').val(Math.round(quantity_coins));
    $('#discount-off').html(current_discount + "% OFF");
    $('#discount-value').html("save $" + discount_value.toFixed(2));
    check_value();
});

// PRICE MINUS BUTTON

// QUANTITY PLUS BUTTON

$('#coins__plus').on('click', function(){
    var value =  Number($('#coins-value').val());
    value = value + 100000;
    $('#coins-value').val(value);
    var current_discount = 0;
    for (var i = 0; i<9; i++){
        if (value>=array_value_coins[i]){
            current_discount = array_value_discount[i];
        }
    }
    var price_coins = value*price-value*price*current_discount/100;
    var discount_value = value*price*current_discount/100;
    $('#price-value').val(price_coins.toFixed(2));
    $('#discount-off').html(current_discount + "% OFF");
    $('#discount-value').html("save $" + discount_value.toFixed(2));
    check_value();
});

// QUANTITY PLUS BUTTON

// QUANTITY MINUS BUTTON

$('#coins__minus').on('click',function(){
    var value =  Number($('#coins-value').val());
    if ((value-100000) < 0){
        value = 0;
    } else {
        value = value - 100000;
    }
    $('#coins-value').val(value);
    var current_discount = 0;
    for (var i = 0; i<9; i++){
        if (value>=array_value_coins[i]){
            current_discount = array_value_discount[i];
        }
    }
    var price_coins = value*price-value*price*current_discount/100;
    var discount_value = value*price*current_discount/100;
    $('#price-value').val(price_coins.toFixed(2));
    $('#discount-off').html(current_discount + "% OFF");
    $('#discount-value').html("save $" + discount_value.toFixed(2));
    check_value();
});

// QUANTITY MINUS BUTTON

// ACCORDION

$('.accordion__item').find('.accordion__title').click(function(){
    $(this).closest('.accordion__item').find('.accordion__content').stop().slideToggle(300);
    $(this).closest('.accordion__title').parent().toggleClass('active');
});

// ACCORDION
