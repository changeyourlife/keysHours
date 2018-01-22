<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="{{ URL::to('css/app.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
@if (isset($applications))
    @if (!$applications->isEmpty())
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Application ID</th>
                <th scope="col">Name</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($applications as $item)
                <tr>
                    <td>{{ $item->appid }}</td>
                    <td>{{ $item->name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p>Приложения отсутствуют. Произведите синхронизацию на дашборде</p>
    @endif
@endif
{{ $applications->links() }}

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ URL::to('js/app.js') }}"></script>
</body>
</html>