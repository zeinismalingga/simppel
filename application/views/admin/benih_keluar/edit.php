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
                        <?php echo form_open_multipart('benih_keluar/edit/'. $id) ?>
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="text" name="tgl" class="form-control datepicker" value="<?= $benih_keluar['tgl'] ?>" required>                            
                            </div>
                            <div class="form-group">
                                <label>Nama Pembeli</label>
                                <input type="text" name="nama_pembeli" class="form-control" value="<?= $benih_keluar['nama_pembeli'] ?>" required>                            
                            </div>
                            <div class="form-group">
                                <label>No. Kwitansi</label>
                                <input type="text" name="no_kwitansi" class="form-control" value="<?= $benih_keluar['no_kwitansi'] ?>" required>                            
                            </div>
                            <div class="form-group">
                                <label>Alamat Pembeli</label>
                                <input type="text" name="alamat_pembeli" class="form-control" value="<?= $benih_keluar['alamat_pembeli'] ?>" required>                            
                            </div>
                            <div class="form-group">
                                <label>Benih</label>
                                <select class="form-control select2" id="benih" name="id_benih" required>
                                    <option value="<?= $benih_keluar['id_benih'] ?>" selected><?php echo $benih_keluar['nama_komoditi']. ' - '.$benih_keluar['nama_varietas'] ?></option>
                                    <?php foreach($benih as $benih_item): ?>
                                    <option value="<?php echo $benih_item['id_benih'] ?>"><?php echo $benih_item['nama_komoditi']. ' - '.$benih_item['nama_varietas'] ?></option>
                                    <?php endforeach;  ?>
                                </select>                            
                            </div>
                            <div class="form-group">
                                <label>Jumlah Keluar</label>
                                <input type="text" name="jumlah_keluar" class="form-control" value="<?= $benih_keluar['jumlah_keluar'] ?>" required>                            
                            </div>
                            <div class="form-group">
                                <label>Jenis Keluar</label>
                                <select class="form-control select2" name="jenis_keluar" required>
                                    <?php
                                        switch ($benih_keluar['jenis_keluar']) {
                                            case '1':
                                                $jenis_keluar = 'Terjual';
                                                break;
                                            case '2':
                                                $jenis_keluar = 'Mati';
                                                break;
                                            case '3':
                                                $jenis_keluar = 'Bantuan';
                                                break;
                                            case '4':
                                                $jenis_keluar = 'Kawasan';
                                                break;
                                            case '5':
                                                $jenis_keluar = 'Konsumsi';
                                                break;
                                        } 
                                    ?>
                                    <option value="<?= $benih_keluar['jenis_keluar'] ?>" selected><?= $jenis_keluar ?></option>
                                    <option value="1">Terjual</option>
                                    <option value="2">Mati</option>
                                    <option value="3">Bantuan</option>
                                    <option value="4">Kawasan</option>
                                    <option value="5">Konsumsi</option>
                                </select>                            
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
                            <img src="<?php echo base_url('assets/img/box.png') ?>" width="110" id="gambar">
                        </div>
                        <div class="form-group">
                            <label>Benih</label>
                            <input type="text" id="benih_detail" class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <label>Varietas</label>
                            <input type="text" id="varietas" class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <label>Kelas Benih</label>
                            <input type="text" id="kelas_benih" class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <label>Stok</label>
                            <input type="text" id="stok" class="form-control" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</main>