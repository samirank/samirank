
<!-- FOOTER -->
<footer class="page-footer center-align white grey-text">
	<small>Made with <span class="red-text"><i class="fas fa-heart"></i></span> by <a class="grey-text" href="https://www.samirankakoty.com">Samiran Kakoty</a></small>
</footer>



<!--JavaScript at end of body for optimized loading-->
<script src="../vendor/jquery/jQuery-3.3.1.min.js"></script>
<script type="text/javascript" src="../vendor/materialize/js/materialize.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script> 
<script>
	$(document).ready(function(){
		$('.sidenav').sidenav();
		$('.tooltipped').tooltip();
	});
	
	$.validate({
		modules : 'location, date, security, file',
		onModulesLoaded : function() {
			$('#country').suggestCountry();
		}
	});
</script>
</body>
</html>