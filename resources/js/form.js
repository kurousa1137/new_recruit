$(function(){

  //初期化
  $('.text-area input').each(function(){
    if($(this).val().length > 0){
      $(this).next('span').addClass('active');
    }
  })

  //フォーカス時に発火
  $('.text-area input').focus(function(){
    $(this).next('span').addClass('active');
  })

  //フォーカスが外れた時に発火
  $('.text-area input').blur(function(){
    let count = $(this).val().length;
    if(count == 0){
      $(this).next('span').removeClass('active');
    }
  })

  //履歴書ファイル添付
  $(".rirekisho-area input").on("change", function() {
    let e = $(this).prop("files")[0];
    $(this).next().next("p").text(e.name)
  })

  //職務経歴書ファイル添付
  $(".shokumukeirekisho-area input").on("change", function() {
    let e = $(this).prop("files")[0];
    $(this).next().next("p").text(e.name)
  })
});