<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Contact</title>

</head>
<body>
    <h1>This is contact page from controller.</h1>
    <a href="{{ route('about.page') }}"> About</a>

    {{-- It is same as below. But the best pratice if use name instead of url
    <a href="{{ url('/about') }}"> About</a> --}}

</body>
</html>

