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
							</ul>
						</nav>

				</section>
