<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send Email</title>
</head>
<body>
    {{-- <p><span style="font-weight:bolder">From:</span> {{ $data['email'] }}</p> --}}
    {{-- <p><span style="font-weight:bolder">Subject:</span> {{ ucwords($data['subject']) }}</p> --}}
    <p><span style="font-weight:bolder"></span> {{ ucfirst($data['body']) }}.</p><br>
</body>
</html>
