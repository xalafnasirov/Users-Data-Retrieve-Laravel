<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Message</title>
</head>

<body>
    @if ($errors)

        @foreach ($errors->all() as $error)
            {{ $error }} <br>
        @endforeach

    @endif
    <form action="{{ Route('send_message') }}" method="POST">
        @csrf
        Name
        <input type ="text" name="name" id="" value="{{old('name')}}"><br>
        Email
        <input type="text" name="email" id="" value="{{old('email')}}"><br>
        Message
        <input type="text" name="message" id="" value="{{old('message')}}"><br>
        <input type="submit" name="send" value='Send' id="">
    </form>

    @if (isset($feedback))

    <br> {{$feedback}}
        
    @endif

    <br>
    
    <a href="{{Route('messages')}}">Show messages</a>
</body>

</html>
