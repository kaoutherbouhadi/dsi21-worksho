<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel test</title>
</head>
<body>
    <h1>Laravel Test</h1>
    <h2>My name is {{ $name }}</h2>

    <div>
        <h3>Details: </h3>
        <ul>
            @foreach ($details as $detail)
                <li>{{ $detail }}</li>
            @endforeach
        </ul>
    </div>

    <div>
        @php
            $i = 1;
        @endphp
        <table class="table table-bordered">
            <tr>
                @foreach($months as $color => $month)
                    <td>{{ $i }}</td>
                    <td style="background:{{ $color }}">{{ $month }}</td>
                    @if ($i%3 == 0)
                        <tr></tr>
                    @endif
                    @php
                        $i++;
                    @endphp
                @endforeach
            </tr>
		</table>
    </div>
</body>
</html>