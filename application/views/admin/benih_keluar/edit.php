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
                        <?php echo form_open_multipart('benih_masuk/edit/'. $id) ?>
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="text" name="tgl" class="form-control datepicker" value="<?php echo $benih_masuk['tgl'] ?>" required>                            
                            </div>
                            <div class="form-group">
                                <label>Benih</label>
                                <select class="form-control" id="benih" name="id_benih" required>
                                    <option value="<?php echo $benih_masuk['id_benih'] ?>"><?php echo $benih_masuk['nama_komoditi'] ?></option>
                                    <?php foreach($benih as $benih_item): ?>
                                    <option value="<?php echo $benih_item['id_benih'] ?>"><?php echo $benih_item['nama_komoditi'] ?></option>
                                    <?php endforeach;  ?>
                                </select>                            
                            </div>
                            <div class="form-group">
                                <label>Penangkar</label>
                                <select class="form-control" name="id_penangkar" required>
                                    <option value="<?php echo $benih_masuk['id_penangkar'] ?>"><?php echo $benih_masuk['nama_penangkar'] ?></option>
                                    <?php foreach($penangkar as $penangkar_item): ?>
                                    <option value="<?php echo $penangkar_item['id_penangkar'] ?>"><?php echo $penangkar_item['nama_penangkar'] ?></option>
                                    <?php endforeach;  ?>
                                </select>                            
                            </div>
                            <div class="form-group">
                                <label>Jumlah Masuk</label>
                                <input type="text" name="jumlah_masuk" class="form-control" value="<?php echo $benih_masuk['jumlah_masuk'] ?>" required>                            
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Edit</button>
                            <?php echo form_close() ?>                            
                            
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card mb-5">
                    <div class="card-header">
                        Preview
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <img src="<?php echo base_url('assets/img/'. $benih_masuk['file_name']) ?>" width="110" id="gambar">
                        </div>
                        <div class="form-group">
                            <label>Benih</label>
                            <input type="text" id="benih_detail" class="form-control" value="<?php echo $benih_masuk['nama_komoditi'] ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Varietas</label>
                            <input type="text" id="varietas" value="<?php echo $benih_masuk['nama_varietas'] ?>" class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <label>Kelas Benih</label>
                            <input type="text" id="kelas_benih" value="<?php echo $benih_masuk['nama_kelas'] ?>" class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <label>Stok</label>
                            <input type="text" id="stok" value="<?php echo $benih_masuk['stok_benih'] ?>" class="form-control" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</main>