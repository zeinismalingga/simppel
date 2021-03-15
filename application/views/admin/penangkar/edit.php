<main>
    <div class="container-fluid">
        <h1 class="mt-4"><?php echo $judul ?></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard / <?php echo $judul ?></li>
        </ol>
        <?php echo validation_errors(); ?>    
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-5">
                    <div class="card-header">
                        <?php echo $judul ?>
                    </div>
                    <div class="card-body">
                        <?php echo form_open_multipart('penangkar/edit/'. $id) ?>
                            <div class="form-group">
                                <label>Nama Penangkar</label>
                                <input type="text" name="nama_penangkar" class="form-control" value="<?php echo $penangkar['nama_penangkar'] ?>" required>                            
                            </div>
                            <div class="form-group">
                                <label>No. Telepon/Hp</label>
                                <input type="text" name="no_hp" class="form-control" value="<?php echo $penangkar['no_hp'] ?>" required>                            
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class=" form-control" name="alamat"><?php echo $penangkar['alamat'] ?></textarea>                           
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Edit</button>
                            <?php echo form_close() ?>                            
                            
                    </div>
                </div>
            </div>
        </div> 
    </div>
</main>