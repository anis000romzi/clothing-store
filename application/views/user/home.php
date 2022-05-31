<!-- Begin Page Content -->
<div class="container-fluid mt-4">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <?php $i = 1;
        foreach ($clothing as $c) : ?>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <img src="<?= base_url('assets/img/clothing/') . $c['image'] ?>" class="img-fluid rounded-start" style="max-height: 200px; max-width: 200px;">
                            </div>
                            <div class="col ml-3">
                                <div class="text-md font-weight-bold mb-1"><?= $c['name'] ?></div>
                                <div class="h1 mb-0 font-weight-bold"><?= $c['price'] ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->