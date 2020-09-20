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
                display:relative;
                margin-top:2rem;
                margin-left:26rem;
                height: 1rem;
                width: 1rem;
                background: #0f9d18;   
            }

             body {
                font-family: 'Orbitron', sans-serif;
                color: #0f9d18;
                text-align: center;
                background: rgb(2,0,36);
                margin: 1rem;
                padding: 1rem;
                {{-- background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(44,76,57,1) 35%, rgba(0,8,10,1) 100%); --}}
            }

            button {
                height:4rem;
                width:4rem;
                background: #0f9d18;
                color: white;
                font-family: 'Press Start 2P', cursive;
                border-color: rgb(247, 196, 12);
            }


            button:hover{  
                transform: translateY(-1.5rem);
            }
            
            .form-control{
                text-align: left;
                padding:0.5rem;
                margin:0rem;
                border: 2px solid #0f9d18;

            }
            
            header { 
                display: flex;
                justify-content:space-between;
            }

            input { 
                background: transparent; 
                border: 2px solid #0f9d18;
                padding:0.2rem;
            }

            input[type=text] {
                color:#FFFFFF;
                font-family: 'Orbitron', sans-serif;	
            }

            .label {
                font-size:0.9rem;
                padding-top:1rem;
                padding-bottom:1rem;
                margin:0.5rem;
            }

            .list-group, p.list-group {
                padding:2rem;
                border: 2px solid #0f9d18;
            }

            .paddle {
                height: 6rem;
                width: 0.8rem;
                background: #0f9d18;
                border-color: rgb(247, 196, 12);

            }

            .sub-btn {
                height:4rem;
                width:4rem;
                background: #0f9d18;
                color: white;
                font-family: 'Press Start 2P', cursive;
                border-color: rgb(247, 196, 12);
                text-align: center;
            }

            .title { 
                font-family: 'Press Start 2P', cursive;
                text-align: center;
                padding:1.8rem;
                letter-spacing: 0.2rem;
                font-size: 3rem;
            }

            @media only screen and (min-width: 360px) {

                .ball {
                    display:relative;
                    margin-top:2rem;
                    margin-left:26rem;
                    height: 1rem;
                    width: 1rem;
                    background: #0f9d18;
                    
                }

                body {
                    font-family: 'Orbitron', sans-serif;
                    color: #0f9d18;
                    display: flex;
                    justify-content: center;
                    background: rgb(2,0,36);
                    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(44,76,57,1) 35%, rgba(0,8,10,1) 100%);
                }

                button {
                    height:4rem;
                    width:4rem;
                    background: #0f9d18;
                    color: white;
                    font-family: 'Press Start 2P', cursive;
                    border-color: rgb(247, 196, 12);
        
                }

                button:hover{  
                    transform: translateY(-1.5rem);
                }
                

                header { 
                    display: flex;
                    justify-content: space-around;
                }
                
                .paddle {
                    height: 9rem;
                    width: 1rem;
                    background: #0f9d18;
                    display: flex;
                    justify-content: space-between;
                    border-color: rgb(247, 196, 12);

                }

                .title { 
                    font-family: 'Press Start 2P', cursive;
                    font-size: 4rem;
                    text-align: center;
                    margin: 3rem; 
                    letter-spacing: 0.5rem;
                    font-size: 4.5rem;
                }
            }
  
        </style>
    </head>
     <body>
        <header>
            <div class="container">
            {{-- @include("partials/form") --}}
            {{-- @include("partials/title") --}}
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