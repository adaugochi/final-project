<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<!--font-awesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<style>
		@media screen and (min-width: 320px) and (max-width: 768px){
			#service, #contacts {
				margin-top: 30px;
				border-top: solid 1px;
				border-top-color: #3399CC; 
			}

			#points {
				margin-bottom: 30px;
			}
		}
		.fa-user, .fa-key, .fa-eye, .fa-file-alt, .fa-edit {
			font-size: 30px;
		}
		#footer {
			background-color: #333333;
			border-top: solid 3px;
			border-top-color: #3399CC;
			margin-top: 50px;
		}
		.fa-thumbtack {
			color: #3399CC;
		}
	</style>
</head>
<body>

	<section id="footer">
		<footer>
			<div class="container mt-5 pb-2">
				<div class="row">
					<div class="col-sm-4">
						<h3 class="lead text-light mb-3">Subscribe to News Letter</h3>
						<form>
							<div class="form-group">
								<input type="email" class="form-control" name="news" placeholder="Email address">
							</div>
							<button class="btn btn-primary">Subscribe</button>
						</form>
					</div>
					<div class="col-sm-4" id="service">
						<p class="mt-3">
							<i class="fas fa-thumbtack"></i><span class="text-light ml-3">Lorem ipsum</span>
						</p>
						<p>
							<i class="fas fa-thumbtack"></i><span class="text-light ml-3">Lorem ipsum</span>
						</p>
						<p>
							<i class="fas fa-thumbtack"></i><span class="text-light ml-3">Lorem ipsum</span>
						</p>
						<p>
							<i class="fas fa-thumbtack"></i><span class="text-light ml-3">Lorem ipsum</span>
						</p>
					</div>
					<div class="col-sm-3" id="contacts">
						<h3 class="text-light lead my-3 ">Get To Know Us</h3>
						<p id="contacticon">
							<button class=" btn btn-outline-primary ml-2">
								<i class="fab fa-twitter"></i>
							</button>
							<button class=" btn btn-outline-primary ml-2">
								<i class="fab fa-facebook-f"></i>
							</button>
							<button class=" btn btn-outline-primary ml-2">
								<i class="fab fa-instagram"></i>
							</button>
							<button class=" btn btn-outline-primary ml-2">
								<i class="fab fa-linkedin-in"></i>
							</button>
						</p>
					</div>
				</div>
				<br>
				<p class="text-center text-primary py-3"> All Right Reserved. &copy 2018 journal system</p>
			</div>
		</footer>
	</section>
</body>
</html>