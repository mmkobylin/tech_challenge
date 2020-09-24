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
                background: rgb(3,4,10);
                background: linear-gradient(90deg, rgba(3,4,10,1) 23%, rgba(44,48,92,1) 86%);
                color: #0f9d18;
                font-family: 'Orbitron', sans-serif;
                line-height: 2;
                padding:1rem;
                text-align: center;
            }

            .card-body {
                border:none;
            }

            {{-- button {
                background: #0f9d18;
                border-color: rgb(247, 196, 12);
                color: #FFFF;
                font-family: 'Press Start 2P', cursive;
                height:4rem;
                width:4rem;
            } --}}

                        
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
            }

{{-- Clicked effect (moves down slightly) --}}
            .button:active {
                background: #0000;

                box-shadow: 0 3px rgb(13, 5, 83);
                transform: translateY(8px);
            }

            .form-control{
                border: 2px solid #0f9d18;
            }
            
            header { 
                display: flex;
                justify-content:space-around;
            }

            input { 
                background: transparent; 
                border: 2px solid #0f9d18;
                padding:0.2rem;
            }

            input[type=text] {
                background: #0000; 
                color:#FFFFFF;
                font-family: 'Orbitron', sans-serif;	
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

            .paddle {
                background: #0f9d18;
                border-color: rgb(247, 196, 12);
                height: 6rem;
                width: 0.8rem;
            }
            .players-field {
                margin:1.5rem;
            }

            .title { 
                font-family: 'Press Start 2P', cursive;
                font-size: 3rem;
                padding:1.8rem;
                letter-spacing: 0.2rem;
                padding:1.8rem;
                text-align: center;
            }

            .match{ 

            }

            .player {
                border: 3px solid #0f9d18;
                box-shadow: 0 3px rgb(13, 5, 83);
                padding-left: 2rem;
                padding-right: 2rem;
                margin:0;
                text-align:center;
            } 

            .versus {
                
            }

            @media only screen and (min-width: 450px) {
                * {
  box-sizing: border-box;
}
                .ball {
                    background: #0f9d18;
                    display:relative;
                    height: 1rem;
                    width: 1rem;
                }

                body {
                    color:#0f9d18;
                    display: flex;
                    justify-content: center;
                    background: rgb(44,48,92);
                    background: linear-gradient(90deg, rgba(44,48,92,1) 0%, rgba(3,4,10,1) 10%, rgba(5,2,2,1) 82%, rgba(29,60,42,1) 100%);
                }

                button {
                    background: #0f9d18;
                    border-color: rgb(247, 196, 12);
                    color: white;
                    font-family: 'Press Start 2P', cursive;
                    flex:100%;
                    height:4rem;
                    width:4rem;

                }

                .column {
                    float: left;
                    width: 50%;
                    padding: 1rem;
                }

                .card-body, fieldset {
                    border:none;
                }

                header { 
                    display: flex;
                    justify-content: space-around;
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