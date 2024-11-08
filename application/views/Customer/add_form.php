<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('Customer') ?>">Barang</a></li>
            <li class="breadcrumb-item active"><?php echo $title ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form action="<?php echo base_url('Customer/save') ?>" method="post">
                    <div class="mb-3">
                        <label>NIK<code>*</code></label>
                        <input class="form-control" name="NIK_cust" type="text" placeholder="NIK">
                    </div>
                    <div class="mb-3">
                        <label>Nama Customer<code>*</code></label>
                        <input class="form-control" name="name" type="text" placeholder="Nama Customer">
                    </div>
                    <div class="mb-3">
                        <label>Jenis Kelamin<code>*</code></label>
                        <select name="jk_cust" class="form-select" aria-label="Default select example" required>
                            <option selected>Pilih Jenis Kelamin</option>
                            <option value="P">Perempuan</option>
                            <option value="L">Laki-Laki</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Alamat Customer<code>*</code></label>
                        <input class="form-control" name="alamat_cust" type="text" placeholder="Alamat Customer">
                    </div>
                    <div class="mb-3">
                        <label>Telepon Customer<code>*</code></label>
                        <input class="form-control" name="telp_cust" type="text" placeholder="Nomor Telepon Customer">
                    </div>
                    <div class="mb-3">
                        <label>E-mail Customer<code>*</code></label>
                        <input class="form-control" name="email_cust" type="text" placeholder="E-mail Customer">
                    </div>
            </div>

            <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i> Save</button>
            
            </form>
        </div>
    </div>
    <div style="height: 100 vh"></div>
</main>