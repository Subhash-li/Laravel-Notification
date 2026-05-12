<!DOCTYPE html>
<html>
<head>
    <title>{{ $post->title }}</title>
</head>
<style>

    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        background-color: #ffffff;
        align-self: center;
        align-items: center;
    }

    h1 {
        color: #333;
    }

    a {
        text-decoration: none;
        color: #007BFF;
    }

    a:hover {
        text-decoration: underline;
    }

    hr {
        margin: 20px 0;
    }
</style>
<body>

    <a href="/posts">← Back</a>

    <hr>

    <h1>{{ $post->title }}</h1>

    <p>
        {{ $post->content }}
    </p>

</body>
</html>