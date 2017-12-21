$(document).ready(function(){$("a.slow").bind("click",function(t){var o=$(this);$("html, body").stop().animate({scrollTop:$(o.attr("href")).offset().top},1e3),t.preventDefault()})});
//# sourceMappingURL=maps/slow_scroll.js.map
