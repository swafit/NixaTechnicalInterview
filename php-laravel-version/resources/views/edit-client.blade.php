<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Client</h1>
<form action="/edit-client/{{$client->id}}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="first_name" required placeholder="First Name..." value="{{$client->first_name}}">
    <input type="text" name="last_name" value="{{$client->last_name}}" required placeholder="Last Name...">
    <input type="number" name="phone_number" minlength="3" maxlength="15" value="{{$client->phone_number}}" required placeholder="Phone number...">
    <input type="date" required name="date_of_contact" value="{{$client->date_of_contact}}">
    <button> Save Changes</button>
</form>
</body>
</html>