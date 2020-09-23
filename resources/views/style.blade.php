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

            .ball {
                background: #0f9d18;   
                height: 1rem;
                width: 1rem;
            }

             body {
                background: rgb(2,0,36);
                background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(4,76,57,1) 35%, rgba(0,8,10,1) 100%);
                color: #0f9d18;
                font-family: 'Orbitron', sans-serif;
                text-align:center;
                line-height: 1rem;

            }

            button {
                background: #0f9d18;
                border-color: rgb(247, 196, 12);
                color: white;
                font-family: 'Press Start 2P', cursive;
                height:4rem;
                width:4rem;
            }
         
            .card-body{
                border: none;
                margin:1rem;
                text-align:center;
            }

            .form-control{
                text-align: left;
            }
            
            header { 
                display: flex;
                justify-content:space-between;
            }

            input { 
                background: transparent; 
                border: 2px solid #0f9d18;
                margin:0.5rem;
            }

            input[type=text] {
                background: transparent; 
                color:#FFFFFF;
                font-family: 'Orbitron', sans-serif;	
            }

            label {
                font-size:0.9rem;
            }

            .list-group, p.list-group {
                border: 2px solid #0f9d18;
                padding:2rem;
                margin:2rem;
            }

            .paddle {
                background: #0f9d18;
                border-color: rgb(247, 196, 12);
                height: 6rem;
                width: 0.8rem;
            }

            .players-field {
                margin:0.5rem;
                padding:0.5rem;
            }

            .sub-btn {
                background: transparent; 
                border: 2px solid #0f9d18;
                color: #FFFF;
                font-family: 'Press Start 2P', cursive;
                padding:2rem;
                margin:2rem;

            }

            .sub-btn:hover {
                background:black;
                border: 4px solid #0f9d18;
                padding:2rem;
            }

            .title { 
                font-family: 'Press Start 2P', cursive;
                font-size: 3rem;
                padding:1.8rem;
                letter-spacing: 0.2rem;
                padding:1.8rem;
                text-align: center;

            }

            @media only screen and (min-width: 360px) {

                .ball {
                    background: #0f9d18;
                    display:relative;
                    height: 1rem;
                    width: 1rem;
                }

                body {
                    background: rgb(2,0,36);
                    display: flex;
                    justify-content: center;

                    {{-- background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(44,76,57,1) 35%, rgba(0,8,10,1) 100%); --}}
                }

                button {
                    background: #0f9d18;
                    border-color: rgb(247, 196, 12);
                    color: white;
                    font-family: 'Press Start 2P', cursive;
                    height:4rem;
                    width:4rem;
                }

                .form-control{
                    border: 2px solid #0f9d18;
                    padding:2rem;
                    margin:2rem;
                    text-align: center;
                }

                header { 
                    display: flex;
                    justify-content: space-around;
                }
                
                .list-group, p.list-group: {
                    width:40%;
                    text-align:center;
                }

                .paddle {
                    background: #0f9d18;
                    border-color: rgb(247, 196, 12);
                    display: flex;
                    justify-content: space-between;
                    height: 9rem;
                    width: 1rem;

                }

                .title { 
                    font-family: 'Press Start 2P', cursive;
                    font-size: 4rem;
                    letter-spacing: 0.5rem;
                    margin: 3rem; 
                    text-align: center;
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