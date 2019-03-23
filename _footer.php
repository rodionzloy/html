<footer>
    <div class="container">
    </div>
</footer>

<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="/js/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.1/jquery.fancybox.min.js"></script>

<script>
$(function() {

    $(".hamburger").click(function(e) {
        if ($(this).hasClass("is-active")) {
            $(".panel-adaptive").removeClass("panel-right");
            $(this).removeClass("is-active");
            $('body').css({'overflow-y' : 'scroll'});
        } else {
            $(".panel-adaptive").addClass("panel-right");
            $(this).addClass("is-active");
            $('body').css({'overflow-y' : 'hidden'});
        }
    });
    
});
</script>