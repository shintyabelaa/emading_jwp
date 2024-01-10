<?php
    $ROOT = "../../";
    include '../template/header.php';
?>

<?php
    require('../../app/database/db.php');

    $articleId = $_GET['article_id'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      if (isset($_POST['save'])) {
        $nama = $_POST['nama'];
        $judul = $_POST['judul_artikel'];
        $tanggal = $_POST['tanggal'];
        $konten = $_POST['konten'];
    
        // Prepare data to pass to createArticle function
        $articleData = [
            'article_id'=> $articleId,
          'name' => $nama,
          'title' => $judul,
          'content' => $konten,
          'status' => 'published',
          'admin_id' => 1,
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s'),
          'image' => $_FILES['file'] ?? null, // Pass the file information as well
        ];
    
        // Call createArticle function
        editArticle($articleData);
    
        // Redirect or perform other actions after saving
        // header('Location: ../index.php');
        exit();
      }
    }

?>

<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Vertical Layouts</h4>
</div>

<?php
  $ROOT = "../../";
  include '../template/footer.php';
?>

