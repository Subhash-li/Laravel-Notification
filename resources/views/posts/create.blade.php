<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
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

    input, textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        padding: 10px 20px;
        background-color: #007BFF;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #0056b3;
    }
</style>
<body>

    <h1>Create Post</h1>

    <form action="/posts" method="POST" enctype="multipart/form-data">

        @csrf

        <div>
            <input
                type="text"
                name="title"
                placeholder="Post title"
            >
        </div>

        <br>

        <div>
            <textarea
                name="content"
                rows="10"
                cols="50"
                placeholder="Write your post..."
            ></textarea>
        </div>

        <br>

        <div>
            <input
                type="file"
                name="image"
            >
        </div>

        <br>

        <button type="submit">
            Publish
        </button>

    </form>

</body>
</html>