<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
</head>
<body>
    <h1>Create Post</h1>
    <form action="/post/create" method="post">
        <label for="title">Title:</label>
        <input type="text" name="title" required value="<?= set_value('title') ?>">
        <br>
        <label for="content">Content:</label>
        <textarea name="content" rows="5" required value="<?= set_value('content') ?>"></textarea>
        <br>
        <button type="submit">Create</button>
    </form>
</body>
</html>
