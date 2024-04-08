<!DOCTYPE html>
<!-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> -->
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Live Wire</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
        <!-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> -->
        <link href=""/>
        @livewireStyles
        <style>
            nav {
                background-color: burlywood;
                display: flex;
                /* align-items: center; */
                justify-content: space-evenly;
                flex-direction:row;
                align-content: center;
                padding: 10px;


            }

            .header {
                text-align: center;
                font-style: bold;
                color: "#000";
                font-family: 'Tangerine', serif;
                font-size: 40px;
                background-color: 

            }

            .item {
                font-size: 30px;
                text-align: center;
                padding: 5px;
                border: 3px solid;
                border-radius: 10px;
                cursor: pointer;
            }

            .item:hover {
  background-color: yellow;
}
        </style>
    </head>
    <body class="">
        <nav>
        <div class="header">Laravel Live Wire Project</div>
        <div class="item">Login</div>
        <div class="item">Register</div>
        </nav>
        <!-- <livewire:login /> -->
        @livewireScripts            
    </body>
</html>
