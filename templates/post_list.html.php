<!DOCTYPE html>
<html>
<?php require "head.html.php" ?>
    <body>
        <div class="container mt-3 pb-5 overflow-auto">
            <?php foreach($posts as $post): ?>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h4 class="card-subtitle mb-2 text-muted"><?= $post->title; ?></h4>
                        <p class="card-text"><?= $post->content; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
<?php require "footer.html.php" ?>
<?php require "script.html.php" ?>
    </body>
</html>