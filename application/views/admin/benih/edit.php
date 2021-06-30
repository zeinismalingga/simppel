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
                        <?php echo form_open_multipart('benih/edit/'. $id) ?>
                            <div class="form-group">
                                <label>Komoditi</label>
                                <select class="form-control select2" name="id_komoditi" required>
                                    <option value="<?php echo $benih['id_komoditi'] ?>" selected><?php echo $benih['nama_komoditi'] ?></option>
                                    <?php foreach($komoditi as $komoditi_item): ?>
                                    <option value="<?php echo $komoditi_item['id_komoditi'] ?>"><?php echo $komoditi_item['nama_komoditi'] ?></option>
                                    <?php endforeach;  ?>
                                </select>                            
                            </div>
                            <div class="form-group">
                                <label>Varietas</label>
                                <select class="form-control select2" name="id_varietas" required>
                                    <option value="<?php echo $benih['id_varietas'] ?>" selected><?php echo $benih['nama_varietas'] ?></option>
                                    <?php foreach($varietas as $varietas_item): ?>
                                    <option value="<?php echo $varietas_item['id_varietas'] ?>"><?php echo $varietas_item['nama_varietas'] ?></option>
                                    <?php endforeach;  ?>
                                </select>                            
                            </div>
                            <div class="form-group">
                                <label>Kelas Benih</label>
                                <select class="form-control select2" name="id_kelas_benih" required>
                                    <option value="<?php echo $benih['id_kelas_benih'] ?>" selected><?php echo $benih['nama_kelas'] ?></option>
                                    <?php foreach($kelas_benih as $kelas_benih_item): ?>
                                    <option value="<?php echo $kelas_benih_item['id_kelas_benih'] ?>"><?php echo $kelas_benih_item['nama_kelas'] ?></option>
                                    <?php endforeach;  ?>
                                </select>                            
                            </div>
                            <div class="form-group">
                                <label>Jumlah Stok Benih</label>
                                <input type="text" name="stok_benih" class="form-control" value="<?php echo $benih['stok_benih'] ?>" required>                            
                            </div>
                            <div class="form-group">
                                <label>Satuan</label>
                                <input type="text" name="satuan" class="form-control" value="<?php echo $benih['satuan'] ?>" required>                            
                            </div>
                            <div class="form-group">
                                <label>Harga Satuan</label>
                                <input type="text" name="harga" class="form-control" value="<?php echo $benih['harga'] ?>" required>                            
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea class="form-control" name="deskripsi"><?php echo $benih['deskripsi'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Anggaran</label>
                                <select class="form-control select2" name="id_anggaran" required>
                                    <?php 
                                        switch ($benih['id_anggaran']) {
                                            case '1':
                                                $anggaran = 'APBN';
                                            break;
                                            case '2':
                                                $anggaran = 'APBD';
                                            break;
                                            case '3':
                                                $anggaran = 'PRODUSEN';
                                            break;
                                            case '':
                                                $anggaran = 'Pilih Anggaran';
                                            break;
                                        }
                                    ?>
                                    <option value="<?php echo $benih['id_anggaran'] ?>" selected><?= $anggaran ?></option>
                                    <option value="1">APBN</option>
                                    <option value="2">APBD</option>
                                    <option value="2">PRODUSEN</option>
                                </select>                            
                            </div>
                            <div class="form-group">
                                <label>Produsen/Penangkar</label>
                                <select class="form-control select2" name="id_penangkar" required>
                                    <option value="<?php echo $benih['id_penangkar'] ?>"><?php echo $benih['nama_produsen'] ?></option>
                                    <?php foreach($penangkar as $penangkar_item): ?>
                                    <option value="<?php echo $penangkar_item['id_penangkar'] ?>"><?php echo $penangkar_item['nama_produsen'] ?></option>
                                    <?php endforeach;  ?>
                                </select>                            
                            </div>
                            
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card mb-5">
                    <div class="card-header">
                        Foto
                    </div>
                    <div class="card-body">
                        <div class="alert alert-warning" role="alert">
                          Format : .jpg .jpeg .png
                        </div>
                        <div class="d-flex justify-content-center">
                            <img src="<?php echo base_url('assets/img/'. $benih['file_name']) ?>" width="200" id="gambar">
                        </div>
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" id="file_name" name="file_name" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Edit</button>
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</main>