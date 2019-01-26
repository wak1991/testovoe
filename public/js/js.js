/*модальное окно*/
$('#btn').click(function (e) {
    e.preventDefault();
    $('#myModal').modal('show');
});
/*модальное окно*/

/*удаление*/
$('.del').click(function () {
    var res = confirm('Удалить товар?');
    if (!res) return false;
});
/*удаление*/

/*переключение картинок*/
$('.thumbs').delegate('img','click', function(){
    var id = $(this).data('id');
    $('.largeImage-'+id).attr('src',$(this).attr('src').replace('thumb','large'));
});

$('.product-galery-img img').click(function(){
    var id = $(this).data('id');
    $('.product-galery-img img[data-id='+id+']').removeClass('select');
    $(this).addClass('select');
});
/*переключение картинок*/