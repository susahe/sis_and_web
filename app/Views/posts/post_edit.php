<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
</head>
<body>
    <h1>Edit Post</h1>
    <form action="/post/edit/<?= ['id'] ?>"  method="post" >
        <label for="title">Title:</label>
        <input type="text" name="title" value="<?= ['title']?>" required>
        <br>
        <label for="content">Content:</label>
        <textarea name="content" rows="5" required><?= ['content'] ?></textarea>
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
