<?php declare(strict_types = 1);
return
    [
        ['GET','/',[\MyFrame\controllers\HomeController::class,'index']],
        ['GET', '/{slug}', [\MyFrame\controllers\HomeController::class, 'slug','admin']],
    ];
