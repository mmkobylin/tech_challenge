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
    
            .column-results{
                border: 5px double #0f9d18;
                padding:4.5rem;
                padding-top:0.5rem;
                margin:1rem;
            }
            
            header { 
                display: flex;
                justify-content: space-around;
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
                font-size:1rem;	
            }

            input:active, input:hover {
                background:black;
                -webkit-box-shadow: 1px 1px 65px 12px rgba(43,102,3,0.66);
-moz-box-shadow: 1px 1px 65px 12px rgba(43,102,3,0.66);
box-shadow: 1px 1px 65px 12px rgba(43,102,3,0.66);
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
                font-size: 2.7rem;
                letter-spacing: 0.2rem;
                text-align: center;
            }


            .player {
                border: 3px solid #0f9d18;
                padding-left: 2rem;
                padding-right: 2rem;
                margin:0;
                text-align:center;
            } 

            .versus {
                font-weight:bolder;
            }

            .versus:hover {
                transform: translateY(8px);

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
                    background: rgb(18,13,5);
background: linear-gradient(90deg, rgba(18,13,5,1) 22%, rgba(36,80,30,1) 29%, rgba(12,1,1,1) 39%, rgba(19,15,43,1) 79%, rgba(24,25,73,1) 97%);                }


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
                    width: 45%;
                    padding: 1rem;
                }

                .column-results{
                    border: 5px double #0f9d18;
                    float: left;
                    width: 45%;
                    padding: 4rem;
                    padding-top:1rem;
                }

                .card-body, fieldset {
                    border:none;
                }
                
                input {
                    margin:1rem;
                    padding:1.2rem;
                }
                
                input:active, input:hover {
                    background:black;
                    transform: translateY(5px);
                }

                label {
                    font-size: 1.3rem;
                }

                .matches{
                    border:none
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