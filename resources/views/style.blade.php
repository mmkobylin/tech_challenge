<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <!--how to control page scaling, ie. initial scale =1-->
        <meta name="viewport" content="width=device-width, initial-scale=1"> 

        <title>PONG</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&family=Press+Start+2P&display=swap" rel="stylesheet">
        
        <!-- Styles -->
        <style>
                        
            a:active, a:hover {
                transform: translateY(5px);
            }

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

            {{-- Clicked effect (moves down slightly) --}}
            .button:active, .button:hover{
                background: #0000;
                border: 3px solid #0f9d18;
                box-shadow: 1px 1px 65px 12px rgba(43,102,3,0.66);
                color:#FFFF;
                -moz-box-shadow: 1px 1px 65px 12px rgba(43,102,3,0.66);
                transform: translateY(8px);
                -webkit-box-shadow: 1px 1px 65px 12px rgba(43,102,3,0.66);
            }

            .form-control{
                border: 5px double #0f9d18;
                font-size:1.2rem;
                margin:0.5rem;
            }            

            h3 {
                font-size:1.5rem;
            }

            header { 
                display: flex;
                justify-content:space-around;
            }

            input { 
                background: transparent; 
                border: 2px solid #0f9d18;
                color: #0f9d18;
                font-family: 'Orbitron', sans-serif;
                font-size:1rem;
                font-weight:bolder;
                max-width: 10rem;
                padding:0.2rem;
                text-align:center;
            }

            input[type=text], {
                background: transparent;
                color: #0f9d18;
                font-family: 'Orbitron', sans-serif;
            }

            {{-- //score design --}}

            input[type=number]::-webkit-inner-spin-button,
            input[type=number]::-webkit-outer-spin-button {
                opacity: 1;
            }

            input[type="number"] {
                appearance: textfield;
                border: none;
                background: transparent; 
                color: #0f9d18;
                font-family: 'Press Start 2P', cursive;
                font-size:1.5rem;
                    -moz-appearance: textfield;
                text-align:center;
                -webkit-appearance: textfield;
            }

            {{-- making little arrows besides score dissappear --}}
            input[type=number]::-webkit-inner-spin-button,
            input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
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

            .navbar-brand{ 
                color:#FFFF;
                display: flex;
                font-family: 'Press Start 2P', cursive;
                font-size:1rem; 
                justify-content:center;
                padding-top:1.5rem;
            }

            .numbers, a {
                color:#FFFF;
                display: flex;
                font-family: 'Press Start 2P', cursive;
                font-size:2.5rem;
                justify-content:space-around;
                padding-bottom:1.5rem;
                text-decoration: none;
            }


            .number-input * {
                box-sizing: border-box;
            }


            .number-input button {
                align-items: top;
                background-color: transparent;
                border: none;
                cursor: pointer;
                height: 2rem;
                justify-content: center;
                margin: 0;
                outline:none;
                position: relative;
                -webkit-appearance: none;
                width: 2rem;

            }

            .number-input button:before,
            .number-input button:after {
                background-color: #212121;
                content: '';
                display: inline-block;
                height: 3px;
                position: absolute;
                transform: translate(-50%, -50%);
                width: 1.5rem;
            }

            .number-input button.plus:after {
                transform: translate(-50%, -50%) rotate(90deg);
            }

            {{-- style of numbers in score --}}
            .number-input input[type=number] {
                font-family: 'Press Start 2P', cursive;
                font-size: 1.5rem;
                font-weight: bold;
                height: 1.5rem;
                max-width: 5.3rem;
                text-align: center;
            }

            .number-input{
                height:4.5rem;
            }

            button.plus, button.minus {
                background:#0f9d18;
                border:none;
            }

                p {
                font-size: 1.5rem;
                vertical-align: text-bottom;
            }

            .paddle {
                background: #0f9d18;
                border-color: rgb(247, 196, 12);
                height: 6rem;
                width: 0.8rem;
            }

            .player {
                text-align:center;
            } 

            .players-field {
                margin:1.5rem;
            }

            .quantity {
                border: none;
            }

            .rules {
                border: 5px double #0f9d18;
                font-size:1.2rem;
                line-height:1.7;
                list-style-type:none;
                padding:2.5rem;
                margin:0.5rem;
            }

            .title { 
                font-family: 'Press Start 2P', cursive;
                font-size: 3rem;
                letter-spacing: 0.2rem;
                padding:1.8rem;
                text-align: center;
            }

                @media only screen and (min-width: 500px) {
                    
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

                    .navbar-brand {
                        font-size:2rem;
                        margin:4rem;
                    }

                    input {
                        margin:1rem;
                        padding:1.2rem;
                        max-width: 9rem;

                    }
                    
                    input:active, input:hover {
                        background:black;
                        transform: translateY(-5px);
                    }

                    h3 {
                        font-size:2rem;
                    }
                    label {
                        font-size: 1.3rem;
                    }

                    .padding {
                        display:hidden;
                    }
                    .rules {
                        border: 5px double #0f9d18;
                        font-size:1.5rem;
                        list-style-type:none;
                        line-height:2;
                        padding:3rem;
                        margin:0.5rem;
                    }
                }
            }

        </style>
        
    
        <script defer>
            //this is where we make sure the names are unique
            //declaring the variables by taking querySelector from input[type=text]
            var frm = document.querySelector('form.form-control');
            var inputs = frm.querySelectorAll('input[type=text]');

        //stopping the form from automatically submitting
            frm.addEventListener('submit', function(e) {
                e.preventDefault();
                var classArr = [];
            // if the name repeats, change background to green
                for(var i = 0; i < inputs.length; i++) {
                    if(classArr.indexOf(inputs[i].value) != -1) {
                        inputs[i].style.backgroundColor = "green";
                        return false;
                    }
            //otherwisde submit form
                    else
                        classArr.push(inputs[i].value);
                }
                frm.submit();
            });

        //if the input field is in the focus change the background to black
            for(var j = 0; j < inputs.length; j++) {
                inputs[j].addEventListener('focus', function() {
                    this.style.backgroundColor = "black";
                });
            }
        </script>

    </head>

    <body>
        <header>
            
            @yield("title")

        </header>
        
        <main class="content">

            @yield("content")

        </main>

    </body>
</html>

