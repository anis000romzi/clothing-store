<!-- Begin Page Content -->
<div class="container-fluid mt-4">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg">

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Image</th>
                        <th scope="col">Role</th>
                        <th scope="col">Status</th>
                        <th scope="col">Date Joined</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach ($member as $m) : ?>
                        <tr>
                            <th scope="row"><?= $i++ ?></th>
                            <td><?= $m['name'] ?></td>
                            <td><?= $m['email'] ?></td>
                            <td><img class="img-thumbnail rounded-circle" style="max-height: 50px; max-width: 50px;" src="<?= base_url('assets/img/profile/') . $m['image']; ?>"></td>
                            <td><?= $m['role'] ?></td>
                            <td><?php if ($m['is_active'] == 1) : echo 'Active' ?>
                                <?php else : echo 'Inactive' ?>
                                <?php endif; ?>
                            </td>
                            <td><?= date('d F Y', $m['date_created']) ?></td>
                            <td>
                                <a href="<?= base_url('admin/editusers/') . $m['id'] ?>" class="badge badge-success">edit</a>
                                <a href="<?= base_url('admin/deleteuser/') . $m['id'] ?>" class="badge badge-danger" onclick="return confirm('Are you sure you want to delete this user?');">delete</a>
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