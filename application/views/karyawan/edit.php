<div class="container-fluid">
    <div class="content-wrapper">
        <div class="content">


            <div class="modal-body">
                <form action="" method="post">

                <!-- penting -->
                <input type="hidden" name="id_karyawan" value="<?= $karyawan['id_karyawan']; ?>">

                    <div class="form-group">
                        <label for="nama_lengkap">Nama lengkap</label>
                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= $karyawan['nama_lengkap']; ?>">
                        <small id="emailHelp" class="form-text text-danger"><?= form_error('nama_lengkap'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="<?= $karyawan['email']; ?>">
                        <small id="emailHelp" class="form-text text-danger"><?= form_error('email'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="no_hp">No hp</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $karyawan['no_hp']; ?>" ></input>
                        <small id="emailHelp" class="form-text text-danger"><?= form_error('no_hp'); ?></small>
                    </div>
                
                    <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                    <button type="submit" class="btn btn-primary">Edit data</button>
                </form>
            </div>
        </div>
    </div>
</div>