<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clients</title>
</head>
<body>

    <div style="padding: 10px; margin: 10px; border: 2px solid black; border-radius: 10px">
        <h2>Add Client to Rolodex</h2>
    <form action="/create-client" method="POST">
    @csrf
        <input type="text" name="first_name" required placeholder="First Name...">
        <input type="text" name="last_name" required placeholder="Last Name...">
        <input type="number" name="phone_number" minlength="3" maxlength="15" required placeholder="Phone number...">
        <input type="date" required name="date_of_contact">
    <button>Add Client</button>
    
    </form>

<div style="padding: 10px; margin: 10px; border: 2px solid black; border-radius: 10px">
    <h2>All Clients</h2>
    @foreach($clients as $client)
        <div style="padding: 10px; margin: 10px; border: 1px solid gray; border-radius: 10px">
            <h3>{{$client['first_name']}}, {{$client['last_name']}}</h3>
            <h4>Phone number: {{$client['phone_number']}}</h4>
            <h4>Date of contact: {{$client['date_of_contact']}}</h4>
            <p><a href="/edit-client/{{$client->id}}">Edit Client</p>
            <form action="/delete-client/{{$client->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button>Delete Client</button>
            </form>
        </div>

    @endforeach
</div>


</div>
</body>
</html>