<?php
    $ROOT = "../../";
    include '../template/header.php';
?>

<?php
    require('../../app/database/db.php');
    $articles = getAllArticles(); 
    $articleId = $_GET['article_id'];

    // [a,a,a,a,a,a]
    // a : {article_id, name,...}
    function getArticleIndex($articles, $articleId) : mixed {
        foreach ($articles as $article) {
            if ($article['article_id'] == $articleId) {
                return $article;
            } else {
                return null;
            }
        }    
    }

    $article = getArticleIndex($articles, $articleId);

    
?>
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Vertical Layouts</h4>

              <!-- Basic Layout -->
              <div class="row">
                <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Basic Layout</h5>
                      <small class="text-muted float-end">Default label</small>
                    </div>
                    <div class="card-body">
                      <form action="save.php?article_id=<?= $articleId ?>" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Nama</label>
                          <input type="text" value=<?= $article['name'] ?> class="form-control" id="basic-default-fullname" name="nama" placeholder="John Doe" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Judul Artikel</label>
                          <input type="text" value=<?= $article['title'] ?> class="form-control" id="basic-default-company" name="judul_artikel" placeholder="ACME Inc." />
                        </div>
                        <div class="mb-3">
                        <label for="html5-date-input" class="col-md-2 col-form-label">Date</label>
                          <input class="form-control" value=<?= $article['created_at'] ?> type="date" name="tanggal" value="2021-06-18" id="html5-date-input" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-message">Konten</label>
                          <textarea
                          value=<?= $article['content'] ?>
                            id="basic-default-message"
                            class="form-control"
                            name="konten"
                          ></textarea>
                        </div>
                            <div class="mb-3">
                              <label for="formFile" class="form-label">Unggah Gambar</label>
                              <input class="form-control" type="file" id="formFile" name="file"  />
                            </div>
                        <div class= "d-flex align-items-center gap-3">
                        <button type="submit" class="btn btn-primary" name="save" >Save</button>
                      </div>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->
<?php
  $ROOT = "../../";
  include '../template/footer.php';
?>