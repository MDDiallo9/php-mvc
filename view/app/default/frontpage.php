<h1>
    <?= $message; ?>
</h1>
<div>
    <a href="/public/create">Ajouter </a>
</div>
<section class="divide-y divide-slate-500">
    <p>Il y a <?= $count ?> articles sur notre blog</p>
    <?php foreach ($postsList as  $post) { ?>

        <article class=" p-6">
            <div class="flex justify-between">
                <a href="/public/post?p=<?= $post->id ?>">
                    <h3 class="underline capitalize"><?= $post->title ?></h3>
                </a>
                <h4>
                    Rédigé par : <?= $authors->findById($post->author, "user_id")->first_name ?>
                </h4>
            </div>
            <?php
            if ($post->author) {
            ?>
                <div class="w-96 mx-auto">
                    <img src="<?= $post->cover ?>" alt="">
                </div>

            <?php
            }
            ?>
            <p class="py-8">
                <?= $post->content ?>
            </p>


            <div class="flex flex-row-reverse justify-between">
                <h4 class="text-right text-xs">
                    <?= $post->created_at ?>
                </h4>
                <a class="bg-red-500 rounded-full px-2 flex items-center" href="/public/delete?d=<?= $post->id ?>">Delete</a>
            </div>

        </article>

    <?php } ?>
</section>