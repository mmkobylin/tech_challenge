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
                background: rgb(18,13,5);
                background: linear-gradient(90deg, rgba(18,13,5,1) 22%, rgba(36,80,30,1) 29%, rgba(12,1,1,1) 39%, rgba(19,15,43,1) 79%, rgba(24,25,73,1) 97%);                
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
            
            h3 {
                font-size:2rem;
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
                font-size:1rem;
                font-weight:bolder;
                color: #0f9d18;	
                text-align:center;
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

            input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
   opacity: 1;
}

{{-- //experiment with the button design --}}
/**   **************  */
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
   opacity: 1;
}

/**   **************  */
input[type="number"] {
  -webkit-appearance: textfield;
  -moz-appearance: textfield;
  appearance: textfield;
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
  -webkit-appearance: none;
}



.number-input,
.number-input * {
  box-sizing: border-box;
}


.number-input button {
  outline:none;
  -webkit-appearance: none;
  background-color: transparent;
  border: none;
  align-items: top;
  justify-content: center;
  width: 2rem;
  height: 2rem;
  cursor: pointer;
  margin: 0;
  position: relative;
}

.number-input button:before,
.number-input button:after {
  display: inline-block;
  position: absolute;
  content: '';
  width: 1.5rem;
  height: 3px;
  background-color: #212121;
  
  transform: translate(-50%, -50%);
}
.number-input button.plus:after {
  transform: translate(-50%, -50%) rotate(90deg);
}

.number-input input[type=number] {
  font-family: sans-serif;
  max-width: 5.3rem;
  font-size: 1.5rem;
  height: 1.5rem;
  font-weight: bold;
  text-align: center;
font-family: 'Press Start 2P', cursive;
}

.number-input{
    height:4.5rem;
}

button.plus, button.minus {
  background:#0f9d18;
  border:none;
}

.quantity {
    border: none;
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
            
            
            a {
                box-sizing:border-box;
                float: center;
                width: 100%;
            }
            
            .column {
                box-sizing:border-box;
                float: left;
                width: 50%;
            }

            .column-match3 {
                box-sizing:border-box;
                float: left;
                width: 33.3%;
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