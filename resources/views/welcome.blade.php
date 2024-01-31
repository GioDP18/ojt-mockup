<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mock-up</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        

        @vite('resources/css/app.css')  
    </head>
    <body class="antialiased" style="position:relative;">
        <!-- Spinner -->
        <div id="loading-spinner" class="justify-content-center" style="position:absolute; height:100vh;">
            <div class="spinner-border" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
            <!-- Background -->
            <div class="area" >
                <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div >
            

            <!-- Main Content -->
            <div id="app" style="display: none;">

            </div>

        

        @vite('resources/js/app.js')
        <script>
            // Hide the spinner and show the content container when the window has fully loaded
            window.onload = function() {
                const spinner = document.getElementById('loading-spinner');
                const contentContainer = document.getElementById('app');
                
                spinner.style.display = 'none';
                contentContainer.style.display = 'block';
            };
        </script>
    </body>
</html>
