<h1>
    <?= $message; ?>
</h1>

<section class="divide-y divide-slate-500">
<?php foreach($postsList as  $post){ ?>
    
        <article class=" p-6">
            <div class="flex justify-between">
                <a href="/public/post?p=<?= $post->id ?>"> 
                    <h3 class="underline capitalize"><?= $post->title ?></h3>
                </a>
                <h4>
                    <?= $authors->findById($post->author,"user_id")->first_name ?>
                </h4>
            </div>
            <p class="py-8">
                <?= $post->content ?>
            </p>
            
                
                <h4 class="text-right text-xs">
                    <?= $post->created_at ?>
                </h4>
           
        </article>

    <?php } ?>
    </section>
