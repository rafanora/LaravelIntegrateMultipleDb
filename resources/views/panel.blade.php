<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/navbar-bottom/">
        <!-- Bootstrap core CSS -->
        <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Ajax -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<style>
    /* Split the screen in half */
    .split {
        height: 100%;
        width: 50%;
        //position: fixed;
        //z-index: 1;
        top: 0;
        overflow-x: hidden;
        padding-top: 20px;
    }

    /* Control the left side */
    .left {
        left: 0;
        background-color: gold;
    }

    /* Control the right side */
    .right {
        right: 0;
        background-color: green;
    }

    /* If you want the content centered horizontally and vertically */
    {{--  .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }  --}}

    /* Style the image inside the centered container, if needed */
    {{--  .centered img {
        width: 150px;
        //border-radius: 50%;
    }  --}}
</style>
        <title>PANEL</title>
        
    </head>
    <body>
        <div class="card" style="padding: 10px;">
                <div>
                    <h2>Integrate data to database ONE from database TWO</h2>
                    <button type="button" class="btn btn-primary" onclick="integrateDB();">Transfer data</button>
                    <button type="button" class="btn btn-primary" onclick="ClearTWO();">Clear Db TWO</button>
                </div>
                
                <div class="split left">
                    <div class="centered">
                        <ul class="list-group">
                            <li class="list-group-item active">Sum One Database={{ count($users_one) }}</li>
                            @foreach ($users_one as $item)
                                <li class="list-group-item" style="font-size: 8px;">ID: {{ $item->id }} - NAME: {{ $item->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
    
                <div class="split right">
                    <div class="centered">
                        <h2>Sum two Database={{ count($users_two) }}</h2>
                        <ul class="list-group">
                            @foreach ($users_two as $item)
                                <li class="list-group-item">{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <script type="text/javascript">
                function integrateDB(){
                    $.ajax({
                        type: 'GET',
                        url: 'integrate',
                        success: function (data) {
                            document.location.reload(true);
                        },
                        error: function() { 
                            alert(data);
                        }
                    });
                }

                function ClearTWO(){
                    $.ajax({
                        type: 'GET',
                        url: 'deletetwo',
                        success: function (data) {
                            document.location.reload(true);
                        },
                        error: function() { 
                            alert(data);
                        }
                    });
                }
                
            </script>
    </body>
    
</html>
