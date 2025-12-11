<section id="header" class="wrapper">

					<!-- Logo -->
						<div id="logo">
							@yield('logo')
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li>
									<a href="#">Familias Profesionales</a>
									<ul>
										<li><a href="{{ action([App\Http\Controllers\FamiliasProfesionalesController::class, 'getIndex']) }}">Listado</a></li>
										<li><a href="{{ action([App\Http\Controllers\FamiliasProfesionalesController::class, 'getCreate']) }}">Create</a></li>
									</ul>
								</li>
								<li>
									<a href="#">Ciclos Formativos</a>
									<ul>
										<li><a href="{{ action([App\Http\Controllers\CiclosFormativosController::class, 'getIndex']) }}">Listado</a></li>
										<li><a href="{{ action([App\Http\Controllers\CiclosFormativosController::class, 'getCreate']) }}">Create</a></li>
									</ul>
								</li>
								<li>
									<a href="#">Resultados Aprendizaje</a>
									<ul>
										<li><a href="{{ action([App\Http\Controllers\ResultadosAprendizajeController::class, 'getIndex']) }}">Listado</a></li>
										<li><a href="{{ action([App\Http\Controllers\ResultadosAprendizajeController::class, 'getCreate']) }}">Create</a></li>
									</ul>
								</li>
								<li>
									<a href="#">Criterios evaluacion</a>
									<ul>
										<li><a href="{{ action([App\Http\Controllers\CriteriosEvaluacionController::class, 'getIndex']) }}">Listado</a></li>
										<li><a href="{{ action([App\Http\Controllers\CriteriosEvaluacionController::class, 'getCreate']) }}">Create</a></li>
									</ul>
								</li>
								@if (Route::has('login'))
								@auth
								<li>
									<a href="{{ url('/dashboard') }}">Dashboard</a>
								</li>
								<li>
                        			@include('escapeVelocity.partials.dropdown-user')
                    			</li>
								@else
								<li>
									<a href="{{ route('login') }}">Login</a>
								</li>
								@if (Route::has('register'))
								<li>
									<a href="{{ route('register') }}">Register</a>
								</li>
								@endif
								@endauth
								@endif
							</ul>
						</nav>

				</section>
