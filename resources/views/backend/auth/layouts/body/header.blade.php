<header class="login-header shadow">
			<nav class="navbar navbar-expand-lg navbar-light bg-white rounded fixed-top rounded-0 shadow-sm">
				<div class="container-fluid">
					<a class="navbar-brand" href="#">
						<img src="{{asset('backend/assets/images/logo.png')}}" width="50"  alt="" /> <span>eCommerce</span>
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent1">
						<ul class="navbar-nav ms-auto mb-2 mb-lg-0">


							<li class="nav-item"> <a class="nav-link active" aria-current="page" href="#"><i class='bx bx-home-alt me-1'></i>Home</a>
							</li>
							
							
							<li class="nav-item"> <a class="nav-link" href="{{ route('login.admin') }}">login</a>
							</li>


							<li class="nav-item"> <a class="nav-link" href="{{ route('admin.register') }}">register</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>