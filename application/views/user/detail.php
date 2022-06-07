<!-- Begin Page Content -->
<div class="container-fluid mt-4">

    <!-- Page Heading -->
    <h3 class="mb-4 text-gray-800"><?= $title; ?></h3>
    <div class="row">
        <div>
            <img class="img-thumbnail mr-3 border border-<?= check_category($clothing['type_id']); ?>" id="img-detail" style="max-width: 300px; border-width:3px !important;" src="<?= base_url('assets/img/clothing/') . $clothing['image']; ?>">
        </div>
        <div class="col-lg-8">
            <h1 class="text-dark"><strong><?= $clothing['name'] ?></strong><small> - <?= $clothing['type'] ?></small></h1>
            <h3>RP. <?= number_format($clothing['price']) ?></h3>
            <div class="mt-4">Stock: <?= $clothing['stock'] ?></div>
            <?= form_open_multipart(); ?>
            <div class="mt-3">Size: </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label" for="exampleRadios1">
                    M
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                    L
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                <label class="form-check-label" for="exampleRadios3">
                    XL
                </label>
            </div>
            <div class="form-group row">
                <label for="qty" class="col-sm-1 col-form-label mr-3">Quantity</label>
                <div class="col-sm-2">
                    <input type="number" class="form-control" id="qty" name="qty">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3">
                    <button type="submit" class="btn btn-<?= check_category($clothing['type_id']); ?>">Buy</button>
                </div>
            </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->