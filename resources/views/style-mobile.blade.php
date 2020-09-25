<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PONG</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&family=Press+Start+2P&display=swap" rel="stylesheet">

        <!-- Styles -->

        <style>
            body {
                background: rgb(3,4,10);
                background: linear-gradient(90deg, rgba(3,4,10,1) 23%, rgba(44,48,92,1) 86%);
                color: #0f9d18;
                font-family: 'Orbitron', sans-serif;
                line-height: 1.5;
                text-align: center;
            }
            .card-body {
                border:none;
            }
            .button {
                background: transparent; 
                border: 2px solid #0f9d18;
                color: #FFFF;
                font-family: 'Press Start 2P', cursive;
                padding:2rem;
                margin:2rem;
                width: fit-content;
            }

            .button:hover {
                background: #0000;
                border: 3px solid #0f9d18;
                color:#FFFF;
                padding:2rem;
                -webkit-box-shadow: 1px 1px 65px 12px rgba(43,102,3,0.66);
-moz-box-shadow: 1px 1px 65px 12px rgba(43,102,3,0.66);
box-shadow: 1px 1px 65px 12px rgba(43,102,3,0.66);
            }
{{-- Clicked effect (moves down slightly) --}}
            .button:active, .button:hover{
                background: black;
                transform: translateY(8px);
                -webkit-box-shadow: 1px 1px 65px 12px rgba(43,102,3,0.66);
-moz-box-shadow: 1px 1px 65px 12px rgba(43,102,3,0.66);
box-shadow: 1px 1px 65px 12px rgba(43,102,3,0.66);
            }
            
            .form-control{
                border: 5px double #0f9d18;
            }
            
            header { 
                display: flex;
                justify-content:space-around;
            }

            input { 
                background: transparent; 
                border: 2px solid #0f9d18;
                padding:0.2rem;
                font-family: 'Orbitron', sans-serif;
                color: #0f9d18;	
            }

            input[type=text], {
                background: transparent;
                font-family: 'Orbitron', sans-serif;
                color: #0f9d18;	
            }
            
            input[type=number]{
                border: none;
                background: transparent; 
                color: #0f9d18;
                font-family: 'Press Start 2P', cursive;
                font-size:1.5rem;
                text-align:center; 
            }
            
            input:active {
                background:black;
            }

            label {
                font-size:0.9rem;
                
            }

            .list-group, p.list-group {
                border: 2px solid #0f9d18;
                color:#FFFF;
                padding:2rem;
            }

            .match {
                border: 5px double #0f9d18;
                padding:3rem;
                margin:0.5rem;
            }
            
            
            .paddle {
                background: #0f9d18;
                border-color: rgb(247, 196, 12);
                height: 6rem;
                width: 0.8rem;
            }
            .players-field {
                margin:1.5rem;
            }

            .player { 
                text-align:center;     
                display: flex;
                justify-content: space-around;  
            } 

            .title { 
                font-family: 'Press Start 2P', cursive;
                font-size: 3rem;
                padding:1.8rem;
                letter-spacing: 0.2rem;
                text-align: center;
            }

            .player {
                text-align:center;
            } 

            .rules {
                border: 5px double #0f9d18;
                font-size:1.2rem;
                list-style-type:none;
                line-height:2;
                padding:3rem;
                margin:0.5rem;

            }

            .numbers, a {
                color:#FFFF;
                display: flex;
                justify-content:space-around;
                font-family: 'Press Start 2P', cursive;
                font-size:2.5rem;
                padding-bottom:1.5rem;
                text-decoration: none;
            }

            a:hover, a:active {
                transform: translateY(5px);
            }
            p {
                font-size: 1.5rem;
                vertical-align: text-bottom;
            }

             .navbar-brand{ 
                color:#FFFF;
                font-family: 'Press Start 2P', cursive;
                font-size:1rem; 
                display: flex;
                justify-content:center;
                padding-top:1.5rem;
            }

            p {
                font-size: 1.5rem;
                vertical-align: text-bottom;
            }
         
        @media only screen and (min-width: 450px) {
            
            .column {
                box-sizing:border-box;
                float: left;
                width: 50%;
            }
        
        }
        </style>
    </head>
     <body>
        <header>
            <div class="container">

            </div>
        </header>
        
        <main class="content">
            @yield("title")
            @yield("content")
        </main>

       <div class="container">
            {{-- @include("partials/button") --}}
        </div>
    </body>
</html>