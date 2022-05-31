<!-- Begin Page Content -->
<div class="container-fluid mt-4">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <a href="<?= base_url('admin/user') ?>"><i class="fas fa-users fa-3x text-warning"></i></a>
                        </div>
                        <div class="col ml-3">
                            <div class="text-md font-weight-bold mb-1">Registered User(s)</div>
                            <div class="h1 mb-0 font-weight-bold"><?= $num_user ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <a href="<?= base_url('admin/item'); ?>"><i class="fas fa-tshirt fa-3x text-success"></i></a>
                        </div>
                        <div class="col ml-3">
                            <div class="text-md font-weight-bold mb-1">Registered Item(s)</div>
                            <div class="h1 mb-0 font-weight-bold"><?= $num_item ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Users</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Items</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach ($member as $m) : ?>
                        <tr>
                            <th scope="row"><?= $i++ ?></th>
                            <td><?= $m['name'] ?></td>
                            <td><?= $m['email']; ?></td>
                            <td><img class="img-thumbnail rounded-circle" style="max-height: 50px; max-width: 50px;" src="<?= base_url('assets/img/profile/') . $m['image']; ?>"></td>
                            <td><?= $m['role']; ?></td>
                            <td><?php if ($m['is_active'] == 1) : echo 'Active' ?>
                                <?php else : echo 'Inactive' ?>
                                <?php endif; ?>
                            </td>
                            <td><?= date('d F Y', $m['date_created']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Type</th>
                        <th scope="col">Stock</th>
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