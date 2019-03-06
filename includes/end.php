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
<script src="<?php echo '//' . $_SERVER['SERVER_NAME'] . '' ?>/assets/js/other.js"></script>
<script>
    AOS.init();

</script>
<script>
    $(document).ready(function () {
        $("nav").removeClass("navbar-transparent ");
        $("nav").removeAttr("color-on-scroll")
        $(".ccc").removeClass("btn-neutral ");
        $(".ccc").addClass("btn-primary");
    });
</script>
<script>
    $("meta[property='og:title']").attr("content", document.title);
    $("meta[property='og:url']").attr("content", location.toString());
    var desc = $("meta[name='Description']").attr("content");
    $("meta[property='og:description']").attr("content", desc);
    $("meta[name='twitter:card']").attr("content", desc);
</script>
</body>

</html>