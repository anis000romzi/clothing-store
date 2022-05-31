<!-- Begin Page Content -->
<div class="container-fluid mt-4">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg-8">

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Type</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach ($clothing as $c) : ?>
                        <tr>
                            <th scope="row"><?= $i++ ?></th>
                            <td><?= $c['name'] ?></td>
                            <td>RP. <?= $c['price'] ?></td>
                            <td><?= $c['type']; ?></td>
                            <td><?= $c['stock']; ?></td>
                            <td>
                                <a href="<?= base_url('admin/editusers/') . $c['id'] ?>" class="badge badge-success">beli</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->