<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>

    <h3>Update Contact Us</h3>
    <form action="{{route('update',$contact->id)}}" method="post">
        @csrf
        @method('put')

        <input type="text" name="name" placeholder="Contact name" value="{{ $contact->name }}"> <br> <br>
        <input type="text" name="phone" placeholder="Phone number" value="{{ $contact-> phone }}"> <br> <br>
        <button>Update</button>
    </form>

    @if(session('status'))
        <small>{{session('status')}}</small>
    @endif


    @include('contact.list');
  

   
</body>
</html>