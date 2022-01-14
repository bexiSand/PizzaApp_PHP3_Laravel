<html>
<head>
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
</head>
    <body>
        <img class="logo" src="./img/logo.png" alt="pizza logo" />
            <h1>Vad vill du äta idag?</h1>
        
        @foreach($pizzas as $pizza) 
        <form method="post" action="/pizza">
            @csrf
            <input type="hidden" value="{{$pizza->id}}" name="pizzaid" />
            <button type='submit' class='menu-row'>
                <div class='menu-content'>
                    {{ $pizza->type }}
                    <img class="pizza-slice" src="./img/slice.png" alt="pizza slice" />
                </div>
            </button>
        </form>
        @endforeach
        
    </body>
</html>