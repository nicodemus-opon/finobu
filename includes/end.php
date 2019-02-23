<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="./assets/js/core/jquery.min.js" integrity="" crossorigin="anonymous"></script>
    <script src="./assets/js/core/popper.min.js" integrity="" crossorigin="anonymous"></script>
    <script src="./assets/js/core/bootstrap.min.js" integrity="" crossorigin="anonymous"></script>

    <!-- NOW UI Kit JavaScript -->
    <script src="./assets/js/now-ui-kit.min.js"></script>

    <!-- Plugins -->
    <script src="./assets/js/plugins/moment.min.js"></script>
    <script src="./assets/js/plugins/bootstrap-switch.js"></script>
    <script src="./assets/js/plugins/bootstrap-tagsinput.js"></script>
    <script src="./assets/js/plugins/bootstrap-selectpicker.js"></script>
    <script src="./assets/js/jasny-bootstrap.min.js"></script>
    <script src="./assets/js/plugins/nouislider.min.js"></script>
    <script src="./assets/js/plugins/bootstrap-datetimepicker.js"></script>
<script src="./assets/aos.js"></script>
<!--script>
    $(document).ready(function(){

        var slider2 = document.getElementById('sliderRefine');

        noUiSlider.create(slider2, {
            start: [42, 880],
            connect: true,
            range: {
                'min': [30],
                'max': [900]
            }
        });

        var limitFieldMin = document.getElementById('price-left');
        var limitFieldMax = document.getElementById('price-right');

        slider2.noUiSlider.on('update', function( values, handle ){
            if (handle){
                limitFieldMax.innerHTML= $('#price-right').data('currency') + Math.round(values[handle]);
            } else {
                limitFieldMin.innerHTML= $('#price-left').data('currency') + Math.round(values[handle]);
            }
        });
    });
</script-->
<!-- JSON-LD markup generated by Google Structured Data Markup Helper -->
<script>
    AOS.init();
    document.addEventListener('touchstart', onTouchStart, {passive: true});
</script>
</body>

</html>