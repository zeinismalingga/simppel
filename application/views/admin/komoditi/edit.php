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
                        <?php echo form_open_multipart('komoditi/edit/'. $id) ?>
                            <div class="form-group">
                                <label>Nama Komoditi</label>
                                <input type="text" name="nama_komoditi" class="form-control" value="<?php echo $komoditi['nama_komoditi'] ?>" required>                            
                            </div>
                            <div class="form-group">
                                <label>Jenis</label>
                                <select class="form-control" name="jenis" required>
                                    <option value="<?php echo $komoditi['jenis'] ?>"><?php echo ($komoditi['jenis'] == '1') ? 'Tanaman Pangan' : 'Hortikultura' ?></option>
                                    <option value="1">Tanaman Pangan</option>
                                    <option value="2">Hortikultura</option>
                                </select>                            
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Edit</button>
                            <?php echo form_close() ?>                            
                            
                    </div>
                </div>
            </div>
        </div> 
    </div>
</main>