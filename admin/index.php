<?php
    $ROOT = "../";
    include 'template/header.php';
    require('../app/database/db.php');

    $articles = getAllArticles();
?>
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>
              <a href="./articles/post.php" class="btn btn-primary d-grid mb-4" style="width: 100px;">
                <i class='bx bx-plus'></i> New
              </a>

              <!-- Responsive Table -->
              <div class="card">
                <h5 class="card-header">Responsive Table</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr class="text-nowrap">
                        <th>#</th>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Judul Artikel</th>
                        <th>Deskripsi</th>
                        <th>Status</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($articles as $index => $article) : ?>
                      <tr>
                        <th scope="row"><?= $index + 1 ?></th>
                          <td><?= $article['article_id'] ?></td>
                          <td><?= $article['name'] ?></td>
                          <td><?= $article['title'] ?></td>
                          <td><?= substr($article['content'],0, 30), "..." ?></td>
                          <td><?= $article['status'] ?></td>
                        <td>
                          <a href="./articles/update.php?article_id=<?= $article['article_id'] ?>" class="btn btn-warning">Edit</a>
                          <a href="./articles/delete.php?article_id=<?= $article['article_id'] ?>" class="btn btn-danger">Hapus</a>
                        </td>
                      </tr>
                      <?php endforeach;?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Responsive Table -->
            </div>
            <!-- / Content -->
<?php
  $ROOT = "../";
  include 'template/footer.php';
?>