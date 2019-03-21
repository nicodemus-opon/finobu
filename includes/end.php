<script src="<?php echo '//' . $_SERVER['SERVER_NAME'] . '' ?>/assets/js/core/jquery.min.js" integrity=""
        crossorigin="anonymous"></script>
<script src="<?php echo '//' . $_SERVER['SERVER_NAME'] . '' ?>/assets/js/core/popper.min.js" integrity=""
        crossorigin="anonymous"></script>
<script src="<?php echo '//' . $_SERVER['SERVER_NAME'] . '' ?>/assets/js/core/bootstrap.min.js" integrity=""
        crossorigin="anonymous"></script>

<script src="<?php echo '//' . $_SERVER['SERVER_NAME'] . '' ?>/assets/js/now-ui-kit.min.js"></script>

<script src="<?php echo '//' . $_SERVER['SERVER_NAME'] . '' ?>/assets/js/plugins/moment.min.js"></script>
<script src="<?php echo '//' . $_SERVER['SERVER_NAME'] . '' ?>/assets/js/plugins/bootstrap-switch.js"></script>
<script src="<?php echo '//' . $_SERVER['SERVER_NAME'] . '' ?>/assets/js/plugins/bootstrap-tagsinput.js"></script>
<script src="<?php echo '//' . $_SERVER['SERVER_NAME'] . '' ?>/assets/js/plugins/bootstrap-selectpicker.js"></script>
<script src="<?php echo '//' . $_SERVER['SERVER_NAME'] . '' ?>/assets/js/jasny-bootstrap.min.js"></script>
<script src="<?php echo '//' . $_SERVER['SERVER_NAME'] . '' ?>/assets/js/plugins/nouislider.min.js"></script>
<script src="<?php echo '//' . $_SERVER['SERVER_NAME'] . '' ?>/assets/js/plugins/bootstrap-datetimepicker.js"></script>
<script src="<?php echo '//' . $_SERVER['SERVER_NAME'] . '' ?>/assets/aos.js"></script>
<script src="<?php echo '//' . $_SERVER['SERVER_NAME'] . '' ?>/assets/js/otherr.js"></script>
<script>
    AOS.init();

</script>
<!--script>
    $(document).ready(function () {
        $("nav").removeClass("navbar-transparent ");
        $("nav").removeAttr("color-on-scroll")
        $(".ccc").removeClass("btn-neutral ");
        $(".ccc").addClass("btn-primary");
    });
</script-->
<script>
    $("meta[property='og:title']").attr("content", document.title);
    $("meta[property='og:url']").attr("content", location.toString());
    var desc = $("meta[name='Description']").attr("content");
    $("meta[property='og:description']").attr("content", desc);
    $("meta[name='twitter:card']").attr("content", desc);
</script>

<!-- Start of Magnify Widget Snippet -->
<script>
    (function() {
        var w = window;
        var d = document;
        function l() {
            var s = d.createElement("script");
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://app.usemagnify.com/widget/431a4eed-de43-4308-9b29-f837799a22c7";
            var x = d.getElementsByTagName("script")[0];
            x.parentNode.insertBefore(s, x);
        }
        if (w.attachEvent) {
            w.attachEvent("onload", l);
        } else {
            w.addEventListener("load", l, false);
        }
    })();
</script>
<!-- End of Magnify Widget Snippet -->
</body>

</html>