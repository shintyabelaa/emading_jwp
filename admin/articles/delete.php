<?php
    $ROOT = "../../";
    include '../template/header.php';
?>

<?php
    require('../../app/database/db.php');

    echo "ARTIKEL TERHAPUS";
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['article_id'])) {
    $articleId = $_GET['article_id'];

    // Perform the deletion
    deleteArticle($articleId);

    // Redirect to the article list page
    // header('Location: ../index.php');
    exit();
    } else {
        echo "Invalid request!";
    }

    include $ROOT . 'template/footer.php';
?>
