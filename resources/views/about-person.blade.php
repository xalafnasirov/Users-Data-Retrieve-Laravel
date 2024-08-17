<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About
        @if (isset($person_data))
            {{ $person_data['name'] }}
        @endif
    </title>
</head>

<body>
    <h1>This page is about
        @if (isset($person_data))

            @foreach ($person_data as $key => $val)
                <br> {{ $key }} : {{ $val }}
            @endforeach

        @endif
    </h1>
</body>

</html>
