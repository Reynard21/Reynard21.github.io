<!DOCTYPE html>
<html>
<head>
    <title>Show Image</title>
</head>
<body>
    <h1>{{ $image->title }}</h1>
    <img src="{{ asset($image->path) }}" alt="{{ $image->title }}">
</body>
</html>
