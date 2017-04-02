 <script>
    $(document).ready(
            function() {
                setInterval(function() {
                    $('#camwhite').load(
                            'pict.jpg');
                }, 15000);
            });
</script>  
  
                       
<img src="pict.jpg" id ="camwhite"onload="fadeIn(this)" style="display:none;">
