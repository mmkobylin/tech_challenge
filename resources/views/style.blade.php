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
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />


        <script>
            var frm = document.querySelector('form.form-control');
            var inputs = frm.querySelectorAll('input[type=text]');

            frm.addEventListener('submit', function(e) {
                e.preventDefault();
                var classArr = [];
                
                for(var i = 0; i < inputs.length; i++) {
                    if(classArr.indexOf(inputs[i].value) != -1) {
                        inputs[i].style.backgroundColor = "green";
                        return false;
                    }
                    else
                        classArr.push(inputs[i].value);
                }
                frm.submit();
            });

            for(var j = 0; j < inputs.length; j++) {
                inputs[j].addEventListener('focus', function() {
                    this.style.backgroundColor = "white";
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