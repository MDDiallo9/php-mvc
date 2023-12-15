<article class=" p-6">
            <div class="flex justify-between">
                <a href="/public/delete?d=<?= $single->id ?>" class="bg-red-500 rounded-full px-2 flex items-center">Supprimer</a>
                <a href="">
                    <h3 class="underline capitalize"><?= $single->title ?></h3>
                </a>
                <h4>
                    <?= $authors->findById($single->author,"user_id")->first_name ?>
                </h4>
            </div>
            <div class="w-96 mx-auto">
                <img src="<?= $single->cover ?>" alt="">
        </div>
            <p class="py-8">
                <?= $single->content ?>
            </p>
            
                
                <h4 class="text-right text-xs">
                    <?= $single->created_at ?>
                </h4>
           
        </article>