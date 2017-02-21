
 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.7.2.min.js"></script>
    <script src="dist/js/bootstrap.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/knockout-2.3.0.js"></script>
	<script>
  		$('#myTab a').click(function (e) {
  			e.preventDefault()
  			$(this).tab('show')
		})
	</script>
  <script>
      //javascript code for clearing inputbox
      $('form').on('reset', function (evt) {
        evt.preventDefault();
        $(this).find('input, select, textarea').each(function () {
          if ($(this).is('input[type="radio"], input[type="checkbox"]')) {
            if ($(this).is(':checked') !== $(this)[0].defaultChecked) {
              $(this).val($(this)[0].defaultChecked);
              $(this).trigger('click');
              $(this).trigger('change');
            }
          } else {
            if ($(this).val() !== $(this)[0].defaultValue) {
              $(this).val($(this)[0].defaultValue);
              $(this).change();
            }
          }
        });
      });//End for clearing inputbox code
  </script>

  



