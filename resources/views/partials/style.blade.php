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
                padding-right:2.5rem;
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
                list-style-type:none;
                line-height:2;
            }

            .numbers, a {
                color:#FFFF;
                display: flex;
                justify-content:space-evenly;
                font-family: 'Press Start 2P', cursive;
                font-size:3rem;
                padding:3rem;
                text-decoration: none;
            }

            a:hover, a:active {
                transform: translateY(5px);
            }

            .navbar-brand{ 
                color:#FFFF;
                font-size:1rem; 
                display: flex;
                justify-content:center;
            }

            p {
                font-size: 1.5rem;
                vertical-align: text-bottom;
            }

          @media only screen and (min-width: 450px) {
    
                body {
                    color:#0f9d18;
                    display: flex;
                    justify-content: center;
                    background: rgb(18,13,5);
                    background: linear-gradient(90deg, rgba(18,13,5,1) 22%, rgba(36,80,30,1) 29%, rgba(12,1,1,1) 39%, rgba(19,15,43,1) 79%, rgba(24,25,73,1) 97%);                }
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
                    width: 45%;
                    padding: 1rem;
                }
                .column-results{
                    float: left;
                    width: 45%;
                    padding: 2rem;
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
                    transform: translateY(-5px);
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
                    font-family: 'Press Start 2P';
                    font-size: 4rem;
                    letter-spacing: 0.5rem;
                    text-align: center;
                }
            }
  
        </style>
    </head>
     <body>
        <header>
            @yield("title")
        </header>
        
        <main>
            @yield("title")
            @yield("content")
        </main>

        </div>
    </body>
</html>