<!DOCTYPE HTML>
<html>
	<head>
		<title>Test Pago Facil</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?=base_url();?>assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<script src="<?=base_url();?>assets/js/jquery.min.js"></script>
			<script src="<?=base_url();?>assets/js/jquery.scrolly.min.js"></script>
			<script src="<?=base_url();?>assets/js/jquery.poptrox.min.js"></script>
			<script src="<?=base_url();?>assets/js/skel.min.js"></script>
			<script src="<?=base_url();?>assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="<?=base_url();?>assets/js/main.js"></script>
	</head>
	<body>

		<!-- Header -->
			<section id="header">
				<header>
					<h1> Pago Facil</h1>
					<p>Recruit BackEnd Challenge</p>
				</header>
				<footer>
					<a href="#banner" class="button style2 scrolly-middle">crear su URL corta aqui</a>
				</footer>
			</section>

		<!-- Banner -->
			<section id="banner">
				
			<article class="container box style3">
				<header>
					<h2>Crear URL</h2>
					<p>Para crear url corta ingrese los siguiente datos.</p>
				</header>
				<form >
					<div class="row 50%">
						<div class="12u$">
							<input type="text" class="text" name="email" id="email" placeholder="Correo electronico" />
					        <div id="menmail" style="color: #1b76c0; font-size: 12px;"></div>	
						</div>

						<div class="12u$"><input type="text" class="text" name="url" id="url" placeholder="URL" />
						<div id="menurl" style="color: #1b76c0; font-size: 12px;"></div>
						</div>
						
						<div class="12u$">
						<div id="resultado" style="color: #1b76c0; font-size: 15px;"></div>
					    </div>
						
						<div class="12u$">
							<ul class="actions">
								<li><input type="button" id="send" value="Crear" /></li>
								
							</ul>
						</div>
					</div>
				</form>
			</article>

			</section>
	<section id="footer">
			<ul class="icons">
				<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
				<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
				<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
				<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
			</ul>
			<div class="copyright">
				<ul class="menu">
					<li>&copy; Derechos Reservados 2017.</li></li>
				</ul>
			</div>
		</section>

		<script type="text/javascript">

$(document).ready(function() {

    $('#send').click(function(){

		if($("#email").val()==""){
			document.getElementById("menmail").innerHTML="Ingresar Mail";
			return false;

		}else if($("#email").val().indexOf('@', 0) == -1 || $("#email").val().indexOf('.', 0) == -1) {
			document.getElementById("menmail").innerHTML="El correo electrónico introducido no es correcto.";
		
            return false;
        }else{
			document.getElementById("menmail").innerHTML="";
			//return false;
			if($("#url").val()==""){
				document.getElementById("menurl").innerHTML="Ingresar URL";
				return false;

			}else if(/^(http|https|ftp):\/\/[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/i.test($("#url").val())){
				
				document.getElementById("menurl").innerHTML="url correcto";
				

					var parametros = {
						"token" : '<?=token?>',
						"mail" : $("#email").val(),
						"url" : $("#url").val()

					};
					alert(parametros);
				$.ajax({
					data:  parametros,
					url:   'http://localhost/1mentha/pf/urls/index.php/api/url',
					type:  'post',
					beforeSend: function () {
							$("#resultado").html("Procesando, espere por favor...");
					},
					success:  function (response) {
							$("#resultado").html(response);
					}
     		  	 });
			}else{
				document.getElementById("menurl").innerHTML=" la URL no es correcto.";
				
				// acceder al ajax de la url
				
				return false;
				
			}

			

		}
		
		

    });
});
</script>

		<!-- Scripts -->
			

	</body>
</html>