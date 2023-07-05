<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
</head>
<body>
    <h1>Posts</h1>
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>
    <ul>
        <?php foreach ($posts as $post): ?>
            <li>
                <a href="/post/edit/<?= $post['id']?> ">
                     <?= $post['title']?> 
                </a>
                <a href="/post/delete/<?= $post['id']?> ">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="/post/create">Create New Post</a>
</body>
</html>


