<h1 style="text-align: center;font-size:33px;margin-top: 100px;">
    <?= $message; ?>
</h1>
<?=$this->debug($postsList) ?>

<?php foreach($postsList as  $post){ ?>
    <article>
        <h3>
            <?= $post->title ?>
        </h3>
        <p>
            <?= $post->content ?>
        </p>
        <div>
            <h4>
                <?= $authors->findById($post->author,"user_id")->first_name ?>
            </h4>
            <h4>
                <?= $post->created_at ?>
            </h4>
        </div>
    </article>
    <?php } ?>
