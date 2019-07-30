<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300&display=swap" rel="stylesheet">
    <link rel="icon" href="https://laravel.com/favicon.png">
    <style>
    	html,
    	body {
    		margin: 0;
    		padding: 0;
    		height: 100vh;
    		font-family: "Quicksand", sans-serif;
    		font-weight: 300;
    	}
    	body {
    		display: flex;
    		justify-content: center;
    		align-items: center;
    	}
    </style>
</head>
<body>
    <div class="text-indigo-500 flex items-center text-3xl">
    	Grettings from 
		<svg class="px-2" xmlns="http://www.w3.org/2000/svg" width="82" height="64">
			<path d="M39.755 53.777a.985.985 0 0 1-.847-.479l-7.455-12.435-13.943 3.79a.985.985 0 0 1-1.1-.495L.117 13.534a.985.985 0 0 1 .737-1.442l13.833-1.86a.985.985 0 0 1 .979.468l16.7 27.87 19.406-5.277-6.47-9.14a.985.985 0 0 1 .55-1.53l9.08-2.146a.985.985 0 0 1 .996.341l7.857 9.8a.985.985 0 0 1-.512 1.568l-8.253 2.25 7.224 10.18a.985.985 0 0 1-.479 1.502L40.07 53.706a.985.985 0 0 1-.314.061zm-6.328-13.453l6.757 11.268 19.692-6.894-6.878-9.695zM2.52 13.842l15.247 28.7 12.655-3.433-16.116-26.834zm45.25 10.366l6.052 8.534 7.527-2.047-6.548-8.154z" fill="#ef533f"/>
		</svg>
    	and 
		<svg class="px-2 h-12 w-auto" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" clip-rule="evenodd" d="M32 16c-7.2 0-11.7 3.6-13.5 10.8 2.7-3.6 5.85-4.95 9.45-4.05 2.054.514 3.522 2.004 5.147 3.653C35.744 29.09 38.808 32.2 45.5 32.2c7.2 0 11.7-3.6 13.5-10.8-2.7 3.6-5.85 4.95-9.45 4.05-2.054-.514-3.522-2.004-5.147-3.653C41.756 19.11 38.692 16 32 16zM18.5 32.2C11.3 32.2 6.8 35.8 5 43c2.7-3.6 5.85-4.95 9.45-4.05 2.054.514 3.522 2.004 5.147 3.653C22.244 45.29 25.308 48.4 32 48.4c7.2 0 11.7-3.6 13.5-10.8-2.7 3.6-5.85 4.95-9.45 4.05-2.054-.514-3.522-2.004-5.147-3.653C28.256 35.31 25.192 32.2 18.5 32.2z" fill="url(#paint0_linear)"/>
			<defs>
				<linearGradient id="paint0_linear" x1="3.5" y1="16" x2="59" y2="48" gradientUnits="userSpaceOnUse">
					<stop stop-color="#2298BD"/>
					<stop offset="1" stop-color="#0ED7B5"/>
				</linearGradient>
			</defs>
		</svg>
	</div>

	<script src="{{ mix("js/app.js") }}"></script>
</body>
</html>