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
                        <?php echo form_open('laporan_masuk/print') ?>
                            <div class="form-group">
                                <label>Tanggal Mulai</label>
                                <input type="date" name="tgl_mulai" class="form-control" required>                            
                            </div>
                            <div class="form-group">
                                <label>Tanggal Akhir</label>
                                <input type="date" name="tgl_akhir" class="form-control" required>                            
                            </div>
                            <div class="form-group">
                                <label>Komoditi</label>
                                <select class="form-control select2" name="id_komoditi" required>
                                    <option value="">Pilih</option>
                                    <?php foreach($komoditi as $komoditi_item): ?>
                                    <option value="<?php echo $komoditi_item['id_komoditi'] ?>"><?php echo $komoditi_item['nama_komoditi'] ?></option>
                                    <?php endforeach;  ?>
                                </select>                            
                            </div>
                            <button type="submit" class="btn btn-block btn-primary float-right">Print</button>                         
                            
                    </div>
                </div>
            </div>
    </div>
</main>