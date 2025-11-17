<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license) escapeVelocity
-->
<html>
	<head>
		<title>Escape Velocity by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ asset('/escapeVelocity/assets/css/main.css') }}" />
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
            @include('escapeVelocity.partials.header')

			<!-- Intro -->
            @include('escapeVelocity.partials.intro')

			<!-- Main -->
            @include('escapeVelocity.partials.main')

			<!-- Highlights -->
            @include('escapeVelocity.partials.highlights')

			<!-- Footer -->
            @include('escapeVelocity.partials.footer')


		</div>

		<!-- Scripts -->
			<script src="{{ asset('/escapeVelocity/assets/js/jquery.min.js') }}"></script>
            <script src="{{ asset('/escapeVelocity/assets/js/jquery.dropotron.min.js') }}"></script>
            <script src="{{ asset('/escapeVelocity/assets/js/browser.min.js') }}"></script>
            <script src="{{ asset('/escapeVelocity/assets/js/breakpoints.min.js') }}"></script>
            <script src="{{ asset('/escapeVelocity/assets/js/util.js') }}"></script>
            <script src="{{ asset('/escapeVelocity/assets/js/main.js') }}"></script>

	</body>
</html>
