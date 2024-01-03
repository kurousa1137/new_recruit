$(function(){
  $('.text-area input').focus(function(){
    $(this).next('span').addClass('active');
  })

  $('.text-area input').blur(function(){
    let count = $(this).val().length;
    if(count == 0){
      $(this).next('span').removeClass('active');
    }
  })
});