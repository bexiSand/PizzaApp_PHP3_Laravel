<html>
    <head>
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    </head>
    <body class="kitchen-background">
        <img class="kitchen-logo" src="./img/logo.png" alt="pizza logo" />
        <div class='kitchen-container'>
        @foreach ($join_pizzas as $state) 
            <div class='note cook{{$state->state}}'>
                <div class='note-container'>
                    <p class='note-nr'>#{{$state->order_id}}</p> 
                    <p class='note-text'>{{$state->type}}</p>
                    <form method="post" action="">
                    @csrf
                        <input type="hidden" name="state_id" value="{{$state->order_id}}" />
                        <button type='submit' class='button{{$state->state}}'>
                            @switch ($state->state)
                                @case(0)
                                    Tillaga
                                    @break
                                @case(1)
                                    Klar
                                    @break
                                @case(2)
                                   
                                    @break
                            @endswitch
                        </button>
                    </form>
                </div>
            </div>
        @endforeach

        </div>
            
    </body>
</html>