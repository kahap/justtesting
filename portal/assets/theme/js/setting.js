var $body=window.opera?"CSS1Compat"==document.compatMode?$("html"):$("body"):$("html,body");function countdown(o){$(".btn-resend");(o-=1)>=0?($(".btn-resend").prop("disabled",!0).removeClass("bg-yellow").html("重新發送驗證碼("+o+")"),setTimeout(countdown,1e3,o)):$(".btn-resend").addClass("bg-yellow").prop("disabled",!1).html("重新發送驗證碼")}!function(o){o.nowait={init:function(){o(".list-download").on("mouseover",function(){o(".app").removeClass("d-none")}).on("mouseout",function(){o(".app").addClass("d-none")}),o(".btn-resend").length&&countdown(31),o(".btn-resend").on("click",function(){countdown(31)}),o(document).on("click",".product-pick",function(){o(window).width()<=991&&o(this).next(".list-group").toggleClass("d-none")}),o(".list-spy a").on("click",function(){return o(this).addClass("active").siblings("a").removeClass("active"),$body.stop().animate({scrollTop:o(o(this).attr("href")).offset().top-70},800),!1}),this.listview(),this.mask(),this.slick(),this.imgview()},listview:function(){var i=o("button.list-view"),s=o("button.grid-view"),t=o(".product-list");i.length&&i.on("click",function(){i.addClass("on"),s.removeClass("on"),t.removeClass("view-grid").addClass("view-list")}),s.length&&s.on("click",function(){s.addClass("on"),i.removeClass("on"),t.addClass("view-grid").removeClass("view-list")})},mask:function(){o("body").append('<div class="cover"></div>'),o(document).on("click",".navbar-toggler",function(i){i.preventDefault(),o("body").toggleClass("show")}),o(document).on("click",".cover",function(){o(".navbar-toggler").click()})},slick:function(){o(".product-pick").length&&o(".product-pick span:not(.io)").slick({slidesToShow:1,variableWidth:!0,responsive:[{breakpoint:992,settings:{infinite:!1,dots:!1,arrows:!1}},{breakpoint:4096,settings:"unslick"}]}),o(".slick-content").length&&o(".slick-content").slick({infinite:!1,slidesToShow:1,slidesToScroll:1,responsive:[{breakpoint:992,settings:"unslick"}]}),o("#nowait-cate").length&&o("#nowait-cate .row").slick({infinite:!1,slidesToShow:3,slidesToScroll:3,responsive:[{breakpoint:992,settings:{slidesToShow:3,slidesToScroll:3,infinite:!0,dots:!1}},{breakpoint:4096,settings:"unslick"}]}),o(".slick-carorsel").length&&o(".slick-carorsel").slick({dots:!0,infinite:!0,speed:300,slidesToShow:1,adaptiveHeight:!0,autoplay:!0,autoplaySpeed:2e3})},imgview:function(){o(".img-thumbs-target").slick({slidesToShow:1,slidesToScroll:1,arrows:!1,responsive:[{breakpoint:992,settings:{infinite:!1,centerMode:!0,dots:!0}}]}),o(".img-thumbs").slick({slidesToShow:6,slidesPerRow:6,slidesToScroll:1,asNavFor:".img-thumbs-target",arrows:!1,dots:!1,focusOnSelect:!0})}},o(function(){o.nowait.init()})}(jQuery);
