$(function() {

  $('.leadingg').each(function() {

    var categdate = $(this).find('.categ-date');
    var pageheader = $(this).find('.page-header');

    categdate.after(pageheader);

  });

  $('.component').after($('.pagination'));

  $('.blog-featured .categ-date').after($('.blog-featured .item-title'));

  $('.item-page .categ-date').after($('.item-page .page-header'));

  /*Форма всплывающая*/  

  $('.order-call').click(function(e) {
    e.preventDefault();
    $('.popup, .overlay').fadeIn();
  });

  $('.close-popup, .overlay').click(function(e) {
    e.preventDefault();
    $('.popup, .overlay').fadeOut();
  });

}); //ready