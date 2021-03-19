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
                                <label>Nama Produsen</label>
                                <input type="text" name="nama_produsen" class="form-control" value="<?php echo $penangkar['nama_produsen'] ?>" required>                            
                            </div>
                            <div class="form-group">
                                <label>Nama Penangkar</label>
                                <input type="text" name="nama_penangkar" class="form-control" value="<?php echo $penangkar['nama_penangkar'] ?>" required>                            
                            </div>
                            <div class="form-group">
                                <label>No. Telepon/Hp</label>
                                <input type="text" name="no_hp" class="form-control" value="<?php echo $penangkar['no_hp'] ?>">                            
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class=" form-control" name="alamat"><?php echo $penangkar['alamat'] ?></textarea>                           
                            </div>
                            <div class="form-group">
                                <label>Kab/Kota</label>
                                <select class="form-control select2" name="id_kota">
                                    <option value="<?= $penangkar['id_kota'] ?>" selected><?= ucwords($penangkar['nama_kota']) ?></option>
                                    <?php foreach($kota as $kota_item): ?>
                                        <option value="<?php echo $kota_item['id_kota'] ?>"><?php echo ucwords($kota_item['nama_kota']) ?></option>
                                    <?php endforeach ?>
                                </select>      
                            </div>
                            <div class="form-group">
                                <label>Jenis Tanaman</label>
                                <select class="form-control select2" name="id_komoditi">
                                    <option value="<?= $penangkar['id_komoditi'] ?>"><?= $penangkar['nama_komoditi'] ?></option>
                                    <?php foreach($komoditi as $komoditi_item): ?>
                                        <option value="<?php echo $komoditi_item['id_komoditi'] ?>"><?php echo ucwords($komoditi_item['nama_komoditi']) ?></option>
                                    <?php endforeach ?>
                                </select>      
                            </div>
                            <div class="form-group">
                                <label>Luas Lahan (Ha)</label>
                                <input type="text" name="luas_lahan" class="form-control" value="<?php echo $penangkar['luas_lahan'] ?>" required>                            
                            </div>
                            <div class="form-group">
                                <label>Kapasitas Produksi (Ha/Thn)</label>
                                <input type="text" name="kapasitas_ha" class="form-control" value="<?php echo $penangkar['kapasitas_ha'] ?>" required>                            
                            </div>
                            <div class="form-group">
                                <label>Kapasitas Produksi (Ton/Thn)</label>
                                <input type="text" name="kapasitas_ton" class="form-control" value="<?php echo $penangkar['kapasitas_ton'] ?>" required>                            
                            </div>
                            <div class="form-group">
                                <label>No. Izin Produksi</label>
                                <input type="text" name="no_izin" class="form-control" value="<?php echo $penangkar['no_izin'] ?>" required>                            
                            </div>
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="text" name="tgl" class="form-control datepicker" value="<?php echo $penangkar['tgl'] ?>">                            
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Edit</button>
                            <?php echo form_close() ?>                            
                            
                    </div>
                </div>
            </div>
        </div> 
    </div>
</main>