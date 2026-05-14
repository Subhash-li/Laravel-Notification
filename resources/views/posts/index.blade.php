<!DOCTYPE html>
<html>
<head>
    <title>Forum Posts</title>
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
    <p>{{ auth()->user()->name }}</p>
    <h2>Notifications</h2>

    @foreach(\App\Models\User::find(auth()->id())->unreadNotifications as $notification)

    <div style="border:1px solid black; padding:10px; margin-bottom:10px;">

        {{ $notification->data['message'] ?? 'No message available' }}

    </div>

    @endforeach

<hr>

    <h1>All Posts</h1>

    <a href="/posts/create">Create Post</a>

    <hr>

    @foreach($posts as $post)

        <div style="margin-bottom: 20px;">

            <h2>
                <a href="/posts/{{ $post->id }}">
                    {{ $post->title }}
                </a>
            </h2>

            <p>
                {{ Str::limit($post->content, 100) }}
            </p>
            
        </div>

    @endforeach

</body>
</html>