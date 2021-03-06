<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">
  

    <link rel="shortcut icon" href="{{ asset('ubold/asetImg/ico.png') }}">

		<title>Ubold - Responsive Admin Dashboard Template</title>

    <link href="{{ asset('ubold/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('ubold/assets/css/core.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('ubold/assets/css/components.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('ubold/assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('ubold/assets/css/pages.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('ubold/assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="{{ asset('ubold/assets/js/modernizr.min.js') }}"></script>

	</head>
	<body>

		<div class="account-pages"></div>
		<div class="clearfix"></div>
		
		<div class="wrapper-page">
			<div class="card-box">
				<div class="panel-heading">
					<h3 class="text-center"> Masuk di <strong class="text-custom">SID</strong></h3>
				</div>

				<div class="panel-body">

					<form class="form-horizontal m-t-20" method="POST" action="{{ route('login') }}">
                             @csrf
						<div class="form-group ">
							<div class="col-xs-12">
                                <input class="form-control @error('email') is-invalid @enderror" name="email" type="text" required autocomplete="email" autofocus placeholder="E-mail">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
							</div>
						</div>

						<div class="form-group">
							<div class="col-xs-12">
                                <input class="form-control @error('password') is-invalid @enderror" name="password" type="password" required autocomplete="current-password" placeholder="Password">
                                
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
							</div>
						</div>

					

						<div class="form-group text-center m-t-40">
							<div class="col-xs-12">
								<button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" type="submit">
									Log In
								</button>
							</div>
						</div>
					</form>

				</div>
			</div>


		</div>

		<script>
			var resizefunc = [];
		</script>

		<!-- jQuery  -->
    <script src="{{ asset('ubold/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('ubold/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('ubold/assets/js/detect.js') }}"></script>
    <script src="{{ asset('ubold/assets/js/fastclick.js') }}"></script>
    <script src="{{ asset('ubold/assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('ubold/assets/js/jquery.blockUI.js') }}"></script>
    <script src="{{ asset('ubold/assets/js/waves.js') }}"></script>
    <script src="{{ asset('ubold/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('ubold/assets/js/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('ubold/assets/js/jquery.scrollTo.min.js') }}"></script>


    <script src="{{ asset('ubold/assets/js/jquery.core.js') }}"></script>
    <script src="{{ asset('ubold/assets/js/jquery.app.js') }}"></script>

	</body>
</html>