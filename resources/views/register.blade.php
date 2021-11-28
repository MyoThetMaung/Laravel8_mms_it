<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    <form action="{{route('save_information')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="">
            <label for="">Name</label> <br>
            <input type="text" name="name">
        </div>

        <div class="">
            <label for="">Email</label> <br>
            <input type="email" name="email">
        </div>

        <div class="">
            <label for="">Date of Birth</label> <br>
            <input type="text" name="dob"> 
        </div> <br>

        <div class="">
            <label for="">Choose photo</label> <br>
            <input type="file" name="photo[]" multiple>                                  <!-- [] can select multiple photos -->
        </div> <br>

        <button type="submit">Register</button>

        
    </form>
</body>
</html>