<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>User profile</title>
</head>

<body>
    <div class="container">
        <h2>Sign up</h2>
        <form action="{{ Route('add_user') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
            </div>
            <div class="form-group">
                <label for="age">Name:</label>
                <input type="text" class="form-control" id="age" placeholder="Enter age" name="age">
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <select class="form-control" id="gender" name="gender">
                    <option>Male</option>
                    <option>Female</option>
                    <option>Rather not to say</option>
                </select>
            </div>
            <div class="checkbox">
                <label><input type="checkbox" name="married" value="married">Married</label>
            </div>
            <div class="form-group">
                <label for="profession">Profession:</label>
                <input type="text" class="form-control" id="profession" placeholder="Profession" name="profession">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>

        {{ session()->get('status') }}
    </div>




    <div class="container">
        <h2>All users</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Married</th>
                    <th>Profession</th>
                </tr>
            </thead>
            <tbody>
                @if (isset($all_users))
                    @foreach ($all_users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->age }}</td>
                            <td>{{ $user->gender }}</td>
                            <td>
                                @if ($user->married === 0)
                                    No
                                @else
                                    Yes
                                @endif
                            </td>
                            <td>{{ $user->profession }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>

</body>

</html>
