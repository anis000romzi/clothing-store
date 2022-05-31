<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg-6">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach ($menu as $m) : ?>
                        <tr>
                            <th scope="row"><?= $i++ ?></th>
                            <td><?= $m['menu'] ?></td>
                            <td>
                                <a href="<?= base_url('admin/submenu/') . $m['id'] ?>" class="badge badge-success">edit</a>
                                <a href="<?= base_url('admin/deletemenu/') . $m['id'] ?>" class="badge badge-danger" onclick="return confirm('Are you sure you want to delete this menu?');">delete</a>
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