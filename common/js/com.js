// JavaScript Document
$(function(){
  // gnaviロールオーバー
 $("#gnavi li img").hover(function(){
       $(this).attr('src', $(this).attr('src').replace('_off', '_on'));
          }, function(){
             if (!$(this).hasClass('currentPage')) {
             $(this).attr('src', $(this).attr('src').replace('_on', '_off'));
        }
    });
});


$(function(){
 
    //初期段階にてダミー画像は透明にしておく
    $("#japan").css({
        "opacity": "0"
    });
    //areaのマウスオーバーにて画像を置換
    $("area").hover(function(){
        $("#japan").stop();
        var areaId = $(this).attr("id");
        $("#japan").attr("src", "http://s-zaiko.com/reform/wp-content/themes/test_theme/common/images/" + areaId + ".png").css({
            "opacity": "1"
        });
    },
    function(){
        $("#japan").stop();
        $("#japan").attr("src", "http://s-zaiko.com/reform/wp-content/themes/test_theme/common/images/map_white.png").css({
            "opacity": "0"
        });
    });
 
    
 
});




$(function(){	
	$(document).ready(function(){
$(".printer").click(function(){             // 印刷ボタンが押されたら
$("body").addClass("print");            // body classに"print"を追加
window.print();                         // 印刷を実行
var timeout = setTimeout(function(){
$("body").removeClass("print");     // body classから"print"を削除
}, 1000);
return false;                           // 終了
});
});
});