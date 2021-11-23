(function() {
    // INITIALIZATION OF GO TO
    // =======================================================
    new HSGoTo('.js-go-to')
});
$('body').on('click', '.collapse-rewrite', function() {
    let className = $(this).attr('collapce-first-3');
    $('.'+className).slideToggle(100);
})
$('.collapse-rewrite-audio').click(function (){

    let className = $(this).attr('collapce-first-3');
    $('.'+className).slideToggle(100);
})
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})
$('.collap').each(function (index,value){
    $(this).children().children('.col-features-10').each(function (index,value){
        if (index>2)
            $(this).hide();

    })
})

function socialWindow(t) {
    var e = (screen.width - 570) / 2,
        s = "menubar=no,toolbar=no,status=no,width=570,height=570,top=" + (screen.height - 570) / 2 + ",left=" + e;
    window.open(t, "NewWindow", s)
}

function setShareLinks() {
    var t = encodeURIComponent(document.URL),
        e = encodeURIComponent(jQuery("meta[property='og:title']").attr("content")),
        s = encodeURIComponent(jQuery("meta[property='og:image']").attr("content"));
    jQuery(".social-share-action .sb-facebook").on("click", function () {
        socialWindow("https://www.facebook.com/sharer.php?u=" + t)
    }), jQuery(".social-share-action .sb-twitter").on("click", function () {
        socialWindow("https://twitter.com/intent/tweet?url=" + t + "&text=" + e)
    }), jQuery(".social-share-action .sb-pinterest").on("click", function () {
        socialWindow("https://www.pinterest.com/pin/create/button/?url=" + t + "&description=" + e + "&media=" + s)
    }), jQuery(".social-share-action .sb-linkedin").on("click", function () {
        socialWindow("https://www.linkedin.com/shareArticle?mini=true&url=" + t)
    })
}

setShareLinks();

var block_show = false;

function scrollMore(){
    var $target = $('#showmore-triger');

    if (block_show) {
        return false;
    }

    var wt = $(window).scrollTop();
    var wh = $(window).height();
    var et = $target.offset().top;
    var eh = $target.outerHeight();
    var dh = $(document).height();

    if (wt + wh >= et || wh + wt == dh || eh + et < wh){
        var page = $target.attr('data-page');
        var name = $target.attr('data-name');
        page++;
        block_show = true;

        $.ajax({
            url: '/ajax-brands/' + name + "/" + page,
            dataType: 'html',
            success: function(data){
                $('.product_wrap .cards').append(data);
                block_show = false;
            }
        });

        $target.attr('data-page', page);
        if (page ==  $target.attr('data-max')) {
            $target.remove();
        }
    }
}

$(window).scroll(function(){
    scrollMore();
});

$(document).ready(function(){
    scrollMore();
});

