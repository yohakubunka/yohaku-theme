// ctrl + q キー入力でログインバーとデバッグツールの表示切替
document.body.addEventListener('keydown',
event => {
  if (event.key === 'q' && event.ctrlKey) {
    $('#wpadminbar, #configData').fadeToggle();
  }
});

// ログインバー分の余白をとる
$(function(){
  var adminbar_h = $('#wpadminbar').height();
  $('#configData').css('margin-top', adminbar_h);
  window.addEventListener("resize", function(event) {
    var adminbar_h = $('#wpadminbar').height();
    $('#configData').css('margin-top', adminbar_h);
  });
});

// エスケープ処理
function java_escape(str){
  return String(str).replace(/&/g,"&amp;")
    .replace(/"/g,"&quot;")
    .replace(/</g,"&lt;")
    .replace(/>/g,"&gt;")
}

// リンクチェッカー
$(function(){
  $('a').each(function(index, element){

    var element_href = $(element).attr('href');
    var element_class = $(element).attr('class');
    var element_text_html = $(element).prop('outerHTML');

    if (element_class != 'ab-item' && element_class != 'screen-reader-shortcut') {
      $('.dataLinkCheck ul').append('<li>'+ index + ' : ' + element_href + '</li>');
      $('.dataLinkCheck ul').append('<li>'+ java_escape(element_text_html) + '</li>');
    }
  });
});
