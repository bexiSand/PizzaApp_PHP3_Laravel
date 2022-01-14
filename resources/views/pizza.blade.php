<html>
    <head>
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    </head>
    <body>
        <img class="logo" src="./img/logo.png" alt="pizza logo" />
            <h1>Din beställning</h1>

        <div class='order-box'>
            
            <div class='left-column'>
                <p class='pizza-type'>{{$selected_pizza->type}}</p>
                <p class='total'>Total</p>
                <button class='pink-button'><a href='/pizzas'>Avbryt</a></button>
            </div>

            <div class='right-column'>
                <p class='pizza-price'>{{$selected_pizza->price}}</p> 
                <p class='sum'>{{$selected_pizza->price}}</p> 
                <form method="post" action="/order" value="{{$selected_pizza->price}}">
                    @csrf
                    <input type="hidden" name="pizza_id" value="{{$selected_pizza->id}}" />
                    <button type='submit'  class='green-button'>Skicka beställning</button>
                </form>
                 
            </div>

        </div>
            
    </body>
</html>

