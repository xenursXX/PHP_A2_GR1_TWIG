<?php
/**
 * @author Thibaud BARDIN (https://github.com/Irvyne).
 * This code is under MIT licence (see https://github.com/Irvyne/license/blob/master/MIT.md)
 */

require __DIR__.'/_header-admin.php';
$excer='';
$ercercont='';
echo $twig->render('admin-article-list.html.twig', [


    $articles = getArticles($link),

'articles' => $articles,
]);

require __DIR__.'/_footer.php';
