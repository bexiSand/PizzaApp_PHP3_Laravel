<html>
    <head>
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    </head>
    <body>
        <img class="logo" src="./img/logo.png" alt="pizza logo" />
            <h1>Bon apetit!</h1>

        <div class='order-number'>
            
            <div class='order-container'>
                <p class='look-for'>Håll utkik efter ditt betällningsnummer:</p>
                
                <h1 class='order-nr'>#{{$order_id}}</h1>
                
            </div>

        </div>
            
    </body>
</html>