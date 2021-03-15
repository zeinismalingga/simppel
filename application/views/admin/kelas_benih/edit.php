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
                        <?php echo form_open_multipart('kelas_benih/edit/'. $id) ?>
                            <div class="form-group">
                                <label>Nama Kelas Benih</label>
                                <input type="text" name="nama_kelas" class="form-control" value="<?php echo $kelas_benih['nama_kelas'] ?>" required>                            
                            </div>
                            <div class="form-group">
                                <label>Ket</label>
                                <input type="text" name="ket" class="form-control" value="<?php echo $kelas_benih['ket'] ?>" required>                            
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Edit</button>
                            <?php echo form_close() ?>                            
                            
                    </div>
                </div>
            </div>
        </div> 
    </div>
</main>