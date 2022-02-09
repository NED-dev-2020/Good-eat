	<!DOCTYPE html>
	<html>
	<head>
		<title>GOOD EAT</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="static/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="static/css/style.css">
		<link rel="stylesheet" type="text/css" href="static/fontawesome/css/all.min.css">
		
		<style type="text/css">
			#para{
				max-width: 40%;
			}

			 @media(max-width: 972px){

			 	#para{
			 		max-width: 90%; 
			 	}

			 	.sous-header{
			 		padding-top: 100px;
			 	}

			}
		</style>
		
	</head>
	<body>
	
	

	<div class="header-home" style="background-image: url('static/image/goueth.jpg'); object-fit: cover; width: 100%;height: 417px;">

		<div class="sous-header">
			<h1> GOOD eat.</h1>
			<p id="para">Tacos à consommer avec modération. Les tacos sont vraiment très bon avec une sauce fromagère délicieuse.
			</p>
			<a href="#commander" style="background-color:gold; padding: 10px;">Commander</a>
		</div>

	</div>

	<div class="container mb-5">

	<div class="row pt-5 mt-5">
		<h1 class="text-center mb-5" style="border-bottom:2px;">Nos Tacos</h1>

		<div class="col-md-4">
			<div class="row">
				<div class="col-md-12 mb-3 " style="">
					<img src="static/image/pexels-los-muertos-crew-8448319.jpg" class="img-gallery">
				</div>
			</div>

			<div class="row">
			<div class="col-md-12 mb-3" style="">
					<img src="static/image/pexels-jovie-pujadas-ladura-8394940.jpg" class="img-gallery">
				</div>
			</div>
		</div>

		<div class="col-md-4 mb-3">
			<img src="static/image/shekina.jpg" class="img-gallery-2">
		</div>

		<div class="col-md-4">
			<div class="row">
				<div class="col-md-12 mb-3">
					<img src="static/image/pexels-los-muertos-crew-8448324.jpg" class="img-gallery">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 mb-3">
					<img src="static/image/pexels-los-muertos-crew-8448331.jpg" class="img-gallery">
				</div>
			</div>
		</div>
	</div>

	</div>
		
	<div class="container">
		<div class="row">
			<div class="col-md-12 py-4">
				<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8150629877562817"
				     crossorigin="anonymous"></script>
				<ins class="adsbygoogle"
				     style="display:block"
				     data-ad-format="fluid"
				     data-ad-layout-key="-fb+5w+4e-db+86"
				     data-ad-client="ca-pub-8150629877562817"
				     data-ad-slot="4185575874"></ins>
				<script>
				     (adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<h1 class="text-center" id="commander">Commande</h1>
			<div class="col-md-6 py-4">
				<form method="POST">
						<div class="form-group">
							<label>Nom complet <span class="text-red-1"></span>*</label>
							<input type="text" name="Nom" class="form-control">
						</div>
						<div class="form-group">
							<label>Telephone <span>*</span></label>
							<input type="text" name="tel" class="form-control">
						</div>
						<div class="form-group">
							<label>Adresse</label>
							<input type="text" name="adresse" class="form-control">
						</div>
						<div class="form-group">
							<label>Choix du menu <span>*</span></label>
							<select name="objet" class="form-select">
								<option value="Tacos Crousti"> Tacos crousti</option>
								<option value="Tacos Boursin">Tacos Boursin</option>
								<option value="Chèvre Miel">Chèvre Miel</option>
								<option value="Tacos Mexicana">Tacos Mexicana</option>
							</select>
						</div>


						<div class="form-group py-2">
							<label>Nombre de Tacos</label>
							<input type="number" name="Nombre de Tacos" class="form-control">
						</div>

						
						<div class="form-group mt-4">
							<input type="submit" class="btn btn-danger bg-red" value="Reserver" style="width:100%;">
							
						</div>
					</form>
				
			</div>
			<div class="col-md-6 py-5">
				<img src="https://images.pexels.com/photos/4393436/pexels-photo-4393436.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" style="object-fit: cover; height:351px;">
				
			</div>
			
		</div>
		

	</div>







	<div class="container-fluid pt-4 pb-1" style="background-color: #000;">
			<div class="row" align="center">

				<div class="col-md-3 mb-3">
					<small class="text-muted">copyright&copy;2022 - GOOD eat.</small>
				</div>

				<div class="col-md-3 offset-md-6 mb-3">

					<a href="#" class="icone-footer bg-primary">
						<i class="fab fa-facebook-f"></i>
					</a>

					<a href="#" class="icone-footer bg-success">
						<i class="fab fa-whatsapp"></i>
					</a>

					<a href="#" class="icone-footer bg-info">
						<i class="fab fa-telegram-plane"></i>
					</a>

					<a href="#" class="icone-footer bg-danger">
						<i class="fab fa-instagram"></i>
					</a>

				</div>

			</div>
		</div>


		<script type="text/javascript" src="static/bootstrap/js/bootstrap.js"></script>


	



	</body>
	</html>
