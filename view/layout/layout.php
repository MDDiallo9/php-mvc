<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Framework OOP</title>
    <!-- <link rel="stylesheet" type="text/css" href="<?= $view->asset('css/style.css'); ?>"> -->
    <link rel="stylesheet" href="<?= $view->asset('css/output.css'); ?>">
  </head>
  <body class="bg-slate-800 text-white box-border">


    <main class="flex h-screen gap-8">
      <header class="h-screen w-1/6 max-w-[300px] bg-slate-900">
        <nav class="w-full h-screen ">
            <ul class="flex flex-col h-full p-4  gap-4 text-xl pt-10">
                <li><a href="<?= $view->path('home'); ?>">Home</a></li>
                <li><a href="<?= $view->path('contact'); ?>">Contact</a></li>
                <li><a href="<?= $view->path('about'); ?>">A Propos</a></li>
                <li><a href="<?= $view->path('docphp'); ?>">Documentation PHP</a></li>
            </ul>
        </nav>
      </header>
      <div class="overflow-y-scroll">
          <?= $content; ?>
      </div>
    </main>

    <footer>

    </footer>

    <script src="<?= $view->asset('js/main.js'); ?>"></script>
  </body>
</html>
