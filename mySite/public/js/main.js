
new Swiper('.image-slider',{

    
    navigation: {
        nextEl: '.swiper-button-prev',
        nextEl: '.swiper-button-next'
    },

    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },



});

function init(){
    //Вычитуем файл goods.json
    $.getJSON("goods.json", goodsOut);
}
function goodsOut(data){
    //Вывод на страницу
    // var goods = JSON.parse(data);
    console.log(data);
}

init();
