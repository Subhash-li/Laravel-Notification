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

    @if($post->image)
        @foreach($post->image as $image)
            <img src="{{ asset('storage/' . $image) }}" alt="Post Image" style="max-width: 400px; max-height: 400px;">
            <p>{{ asset('storage/' . $image) }}</p>
        @endforeach
    @endif

    <hr>

    <h2>Comments</h2>

    <hr>

    @foreach($post->comments as $comment)

    <div style="margin-bottom:20px;">

        <strong>
            {{ $comment->user->name }}
        </strong>

        <p>
            {{ $comment->content }}
        </p>

    </div>

    @endforeach

    @auth

    <form action="/comments" method="POST">

    @csrf

    <input
        type="hidden"
        name="post_id"
        value="{{ $post->id }}"
    >

    <textarea
        name="content"
        rows="4"
        cols="50"
        placeholder="Write comment..."
    ></textarea>

    <br><br>

    <button type="submit">
        Add Comment
    </button>

    </form>

    @endauth

</body>
</html>