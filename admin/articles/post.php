<?php
    $ROOT = "../../";
    include '../template/header.php';
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
                      <form action="insert.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Nama</label>
                          <input type="text" class="form-control" id="basic-default-fullname" name="nama" placeholder="John Doe" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Judul Artikel</label>
                          <input type="text" class="form-control" id="basic-default-company" name="judul_artikel" placeholder="ACME Inc." />
                        </div>
                        <div class="mb-3">
                        <label for="html5-date-input" class="col-md-2 col-form-label">Date</label>
                          <input class="form-control" type="date" name="tanggal" value="2021-06-18" id="html5-date-input" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-message">Konten</label>
                          <textarea
                            id="basic-default-message"
                            class="form-control"
                            name="konten"
                            placeholder="Hi, Do you have a moment to talk Joe?"
                          ></textarea>
                        </div>
                            <div class="mb-3">
                              <label for="formFile" class="form-label">Unggah Gambar</label>
                              <input class="form-control" type="file" id="formFile" name="file"  />
                            </div>
                        <div class= "d-flex align-items-center gap-3">
                        <button type="submit" class="btn btn-secondary" name="draft" >Draft</button>
                        <button type="submit" class="btn btn-primary" name="publish" >Publish</button>
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

