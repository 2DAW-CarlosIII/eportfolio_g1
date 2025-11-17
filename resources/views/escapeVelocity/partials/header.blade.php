<section id="header" class="wrapper">

					<!-- Logo -->
						<div id="logo">
							@yield('logo')
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li class="current"><a href="{{ url(config('app.url')) }}">Home</a></li>
								<li>
									<a href="#">Dropdown</a>
									<ul>
										<li><a href="#">Lorem ipsum</a></li>
										<li><a href="#">Magna veroeros</a></li>
										<li><a href="#">Etiam nisl</a></li>
										<li>
											<a href="#">Sed consequat</a>
											<ul>
												<li><a href="#">Lorem dolor</a></li>
												<li><a href="#">Amet consequat</a></li>
												<li><a href="#">Magna phasellus</a></li>
												<li><a href="#">Etiam nisl</a></li>
												<li><a href="#">Sed feugiat</a></li>
											</ul>
										</li>
										<li><a href="#">Nisl tempus</a></li>
									</ul>
								</li>
								<li><a href="left-sidebar.blade.php">Left Sidebar</a></li>
								<li><a href="right-sidebar.blade.php">Right Sidebar</a></li>
								<li><a href="no-sidebar.blade.php">No Sidebar</a></li>
							</ul>
						</nav>

				</section>
