
</div>
<div id="myTemplate" style="display: none;">
    <i class="fas fa-search-plus"></i>
</div>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://unpkg.com/tippy.js@2.4.1/dist/tippy.all.min.js"></script>
<script src="{{asset('assets/js/script.js')}}"></script>

<script>
    (function () {
            $('.video-items').magnificPopup({
                delegate: 'a',
                type: 'iframe',
                mainClass: 'mfp-fade',
                gallery: {
                    enabled: true
                }
            });
            
            new WOW().init();

            tippy('.gal img', {
            theme: 'honeybee',
            delay: 100, 
            size: 'medium',
            duration: 100,
            animation: 'scale',
            html: '#myTemplate',
            });
        })();
</script>
</body>

</html>