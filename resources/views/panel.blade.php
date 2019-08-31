<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
                <div style="width: 100%; padding: 20px; background-color: powderblue">
                    <div style="padding: 10px;">
                        <h2>Integrate data to database ONE from database TWO</h2>
                        <button type="button" class="btn btn-success" onclick="integrateDB();">Transfer data</button>
                        <button type="button" class="btn btn-danger" onclick="ClearTWO();">Clear Db TWO</button>
                    </div>
                    <div class="card" style="padding: 10px; width: 50%; float: left">
                        <div>
                            <ul class="list-group">
                                <li class="list-group-item active">Sum Database One={{ count($users_one) }}</li>
                                @foreach ($users_one as $item)
                                    <li class="list-group-item" style="font-size: 8px;">ID: {{ $item->id }} - NAME: {{ $item->name }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="card" style="padding: 10px; width: 50%;">
                        <div>
                            <li class="list-group-item active">Sum Database Two={{ count($users_two) }}</li>
                            <ul class="list-group">
                                @foreach ($users_two as $item)
                                    <li class="list-group-item"  style="font-size: 8px;">{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

            <script type="text/javascript">
                function integrateDB(){
                    $.ajax({
                        type: 'POST',
                        url: 'integrate',
                        data: { _token: '{{csrf_token()}}' },
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
                        type: 'POST',
                        url: 'deletetwo',
                        data: { _token: '{{csrf_token()}}' },
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
