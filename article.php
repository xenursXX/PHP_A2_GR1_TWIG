<?php
/**
 * @author Thibaud BARDIN (https://github.com/Irvyne).
 * This code is under MIT licence (see https://github.com/Irvyne/license/blob/master/MIT.md)
 */

require __DIR__.'/_header.php';

if (!empty($_GET['id'])) {
    $id = (int) $_GET['id'];
    $article = getArticle($link, $id);
    if (!$article) {
        header('Location: index.php');
    }
} else {
    header('Location: index.php');
}
try{
    $pdo = new PDO('mysql:host=localhost;dbname=modulephp','root','');
} catch(PDOException $e) {
    @mail('gui.nouhaud@gmail.com', 'BDD Error', $e->getMessage());
    throw new PDOException('BDD Error');


}
$sql = 'SELECT * FROM article';
$pdoStmt = $pdo->query($sql);
$articles = $pdoStmt->fetchAll(PDO::FETCH_OBJ);







echo $twig->render('articles.html.twig', [
    'article' => $article,



]);

require __DIR__.'/_footer.php';


