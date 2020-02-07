<!doctype html>
<html>

<head>
	<base href="/admin/">
	<script src="/dmxAppConnect/dmxAppConnect.js"></script>
	<meta charset="UTF-8">
	<title>VFX Change</title>
	<!-- New Wappler Page -->
	<script src="/js/jquery-3.4.1.slim.min.js"></script>
	<link rel="stylesheet" href="/fontawesome4/css/font-awesome.min.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="/bootstrap/4/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/css/style.css" />
	<script src="/dmxAppConnect/dmxDatastore/dmxDatastore.js" defer=""></script>
	<script src="/dmxAppConnect/dmxBrowser/dmxBrowser.js" defer=""></script>
</head>

<body is="dmx-app" id="index" class="body_bg">
	<div is="dmx-browser" id="browser1"></div>
	<div class="container wappler-block pt-3 pb-3">
		<div class="row">
			<div class="col-12 col-xl-4 offset-xl-4 text-center bg-light p-5 col-md-8 offset-md-2">
				<img class="wappler-type-user rounded-circle mb-4" width="240" height="240" src="/assets/img/fineart-3.jpg">
				<form id="formLogin" method="post" is="dmx-serverconnect-form" action="dmxConnect/api/login.php" dmx-on:success="browser1.goto('index.php')">

					<div class="form-group">
						<label for="username">Username</label>
						<input type="email" class="form-control" id="username" name="username" placeholder="Username">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Password">
					</div>
					<div class="form-group">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="1" id="remember" name="remember">
							<label class="form-check-label" for="remember">Remember me</label>
						</div>
					</div>
					<button class="btn btn-primary" type="submit">Log in</button>
				</form>
			</div>
		</div>
	</div>

	<script src="/bootstrap/4/js/popper.min.js"></script>
	<script src="/bootstrap/4/js/bootstrap.min.js"></script>
</body>

</html>