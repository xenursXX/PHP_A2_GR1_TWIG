<?php
/**
 * @author Thibaud BARDIN (https://github.com/Irvyne).
 * This code is under MIT licence (see https://github.com/Irvyne/license/blob/master/MIT.md)
 */

require __DIR__.'/_header-admin.php';


echo $twig->render('admin-article-list.html.twig', [


    $articles = getArticles($link),
$excer = getExcerpt($article['title'], 30),
$ercercont = getExcerpt($article['content'], 100),

]);

require __DIR__.'/_footer.php';
