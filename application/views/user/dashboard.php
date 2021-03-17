<main>
    <div class="container-fluid">
        <div class="text-center">
            <img src="<?php echo base_url('assets/assets/img/logo.png') ?>" class="img-fluid mt-4" width="70">
            <h3 class="mt-3 mb-3">Sistem Informasi Pelayanan Perbenihan Unggul</h3>    
        </div>
        
        
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Stok Benih Tanaman Pangan
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr style="background-color: #f4d160">
                            <th>No</th>
                            <th>Jenis Tanaman</th>
                            <th>Varietas</th>
                            <th>Kelas Benih</th>
                            <th>Stok Benih</th>
                            <th>Satuan</th>
                            <th>Harga Satuan</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach($benih_tp as $benih_item): ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $benih_item['nama_komoditi'] ?></td>
                                <td><?php echo $benih_item['nama_varietas'] ?></td>
                                <td><?php echo $benih_item['nama_kelas'] ?></td>
                                <td><?php echo number_format($benih_item['stok_benih'], 0, ",", ".") ?></td>
                                <td><?php echo $benih_item['satuan'] ?></td>
                                <td>Rp. <?php echo number_format($benih_item['harga'], 0, ",", ".") ?>,-</td>
                                <td><?php echo $benih_item['deskripsi'] ?></td>
                            </tr>
                        <?php $no++ ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Stok Benih Hortikultura
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr style="background-color: #f4d160">
                            <th>No</th>
                            <th>Jenis Tanaman</th>
                            <th>Varietas</th>
                            <th>Kelas Benih</th>
                            <th>Stok Benih</th>
                            <th>Satuan</th>
                            <th>Harga Satuan</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach($benih_hortik as $benih_item): ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $benih_item['nama_komoditi'] ?></td>
                                <td><?php echo $benih_item['nama_varietas'] ?></td>
                                <td><?php echo $benih_item['nama_kelas'] ?></td>
                                <td><?php echo number_format($benih_item['stok_benih'], 0, ",", ".") ?></td>
                                <td><?php echo $benih_item['satuan'] ?></td>
                                <td>Rp. <?php echo number_format($benih_item['harga'], 0, ",", ".") ?>,-</td>
                                <td><?php echo $benih_item['deskripsi'] ?></td>
                            </tr>
                        <?php $no++ ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Produsen Benih
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr style="background-color: #f4d160">
                            <th>No</th>
                            <th>Nama Produsen</th>
                            <th>Nama Pimpinan</th>
                            <th>No. HP</th>
                            <th>Kab/Kota</th>
                            <th>Alamat</th>
                            <th>Jenis Tanaman</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach($penangkar as $penangkar_item): ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $penangkar_item['nama_produsen'] ?></td>
                                <td><?php echo $penangkar_item['nama_penangkar'] ?></td>
                                <td><?php echo $penangkar_item['no_hp'] ?></td>
                                <td><?php echo ucwords($penangkar_item['nama_kota']) ?></td>
                                <td><?php echo $penangkar_item['alamat'] ?></td>
                                <td><?php echo $penangkar_item['nama_komoditi'] ?></td>
                            </tr>
                        <?php $no++ ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
</main>