<main>
    <div class="container-fluid">
        <div class="text-center">
            <img src="<?php echo base_url('assets/assets/img/logo.png') ?>" class="img-fluid mt-4" width="70">
            <h3 class="mt-3 mb-3">Sistem Informasi Pelayanan Perbenihan Unggul</h3>    
            <h4 class="mt-3 mb-3">(SIMPPEL)</h4>    
        </div>
        
        <div class="row mb-4">
            <div class="col-md-3">
                <table class="table table-bordered">
                    <tr> 
                        <td><i class="fas fa-users"></i> Total Pengunjung</td>
                        <td><?php echo number_format($pengunjung, 0, ",", ".") ?></td>
                    </tr>
                </table>
            </div>
        </div>
        

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Stok Benih Tanaman Pangan UPTD BBI TPH (Kebun Benih Rempanga)
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
                            <th>Keterangan</th>
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
            <div class="card-footer">
                <strong><i class="fas fa-phone-square-alt"></i> Contact Person : <a href="tel:+6285246958700">0852-4695-8700</a> (Arif)</strong> 
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Stok Benih Hortikultura UPTD BBI TPH (Kebun Benih Loa Janan)
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
                            <th>Keterangan</th>
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
            <div class="card-footer">
                <strong><i class="fas fa-phone-square-alt"></i> Contact Person : <a href="tel:+6285346879592">0853-4687-9592</a> (Nila)</strong> 
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Stok Benih Tanaman Pangan Penangkar/Produsen Benih Kabupaten/Kota
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr style="background-color: #f4d160">
                            <th>No</th>
                            <th>Nama Produsen Benih</th>
                            <th>Lokasi</th>
                            <th>Alamat</th>
                            <th>Jenis Tanaman</th>
                            <th>Varietas</th>
                            <th>Kelas Benih</th>
                            <th>Stok Benih</th>
                            <th>Satuan</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach($benih_tp_kabkot as $benih_item): ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $benih_item['nama_produsen'] ?></td>
                                <td><?php echo ucwords($benih_item['nama_kota']) ?></td>
                                <td><?php echo $benih_item['alamat'] ?></td>
                                <td><?php echo $benih_item['nama_komoditi'] ?></td>
                                <td><?php echo $benih_item['nama_varietas'] ?></td>
                                <td><?php echo $benih_item['nama_kelas'] ?></td>
                                <td><?php echo number_format($benih_item['stok_benih'], 0, ",", ".") ?></td>
                                <td><?php echo $benih_item['satuan'] ?></td>
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
                Stok Benih Hortikultura Penangkar/Produsen Benih Kabupaten/Kota
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr style="background-color: #f4d160">
                            <th>No</th>
                            <th>Nama Produsen Benih</th>
                            <th>Lokasi</th>
                            <th>Alamat</th>
                            <th>Jenis Tanaman</th>
                            <th>Varietas</th>
                            <th>Kelas Benih</th>
                            <th>Stok Benih</th>
                            <th>Satuan</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach($benih_hortik_kabkot as $benih_item): ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $benih_item['nama_produsen'] ?></td>
                                <td><?php echo ucwords($benih_item['nama_kota']) ?></td>
                                <td><?php echo $benih_item['alamat'] ?></td>
                                <td><?php echo $benih_item['nama_komoditi'] ?></td>
                                <td><?php echo $benih_item['nama_varietas'] ?></td>
                                <td><?php echo $benih_item['nama_kelas'] ?></td>
                                <td><?php echo number_format($benih_item['stok_benih'], 0, ",", ".") ?></td>
                                <td><?php echo $benih_item['satuan'] ?></td>
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
                Produsen Benih Kabupaten Kutai Kartanegara
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr style="background-color: #f4d160">
                            <th>No</th>
                            <th>Nama Produsen Benih</th>
                            <th>Nama Pimpinan</th>
                            <th>No. HP</th>
                            <th>Lokasi</th>
                            <th>Alamat</th>
                            <th>Jenis Tanaman</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach($penangkar_kukar as $penangkar_item): ?>
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

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Produsen Benih Kabupaten Penajam Paser Utama
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr style="background-color: #f4d160">
                            <th>No</th>
                            <th>Nama Produsen Benih</th>
                            <th>Nama Pimpinan</th>
                            <th>No. HP</th>
                            <th>Lokasi</th>
                            <th>Alamat</th>
                            <th>Jenis Tanaman</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach($penangkar_ppu as $penangkar_item): ?>
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

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Produsen Benih Kabupaten Kutai Timur
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr style="background-color: #f4d160">
                            <th>No</th>
                            <th>Nama Produsen Benih</th>
                            <th>Nama Pimpinan</th>
                            <th>No. HP</th>
                            <th>Lokasi</th>
                            <th>Alamat</th>
                            <th>Jenis Tanaman</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach($penangkar_kutim as $penangkar_item): ?>
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

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Produsen Benih Kota Samarinda
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr style="background-color: #f4d160">
                            <th>No</th>
                            <th>Nama Produsen Benih</th>
                            <th>Nama Pimpinan</th>
                            <th>No. HP</th>
                            <th>Lokasi</th>
                            <th>Alamat</th>
                            <th>Jenis Tanaman</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach($penangkar_samarinda as $penangkar_item): ?>
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

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Produsen Benih Kabupaten Paser
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr style="background-color: #f4d160">
                            <th>No</th>
                            <th>Nama Produsen Benih</th>
                            <th>Nama Pimpinan</th>
                            <th>No. HP</th>
                            <th>Lokasi</th>
                            <th>Alamat</th>
                            <th>Jenis Tanaman</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach($penangkar_paser as $penangkar_item): ?>
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

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Produsen Benih Kabupaten Kutai Barat
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr style="background-color: #f4d160">
                            <th>No</th>
                            <th>Nama Produsen Benih</th>
                            <th>Nama Pimpinan</th>
                            <th>No. HP</th>
                            <th>Lokasi</th>
                            <th>Alamat</th>
                            <th>Jenis Tanaman</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach($penangkar_kubar as $penangkar_item): ?>
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

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Produsen Benih Kabupaten Berau
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr style="background-color: #f4d160">
                            <th>No</th>
                            <th>Nama Produsen Benih</th>
                            <th>Nama Pimpinan</th>
                            <th>No. HP</th>
                            <th>Lokasi</th>
                            <th>Alamat</th>
                            <th>Jenis Tanaman</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach($penangkar_berau as $penangkar_item): ?>
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

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Produsen Benih Kota Balikpapan
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr style="background-color: #f4d160">
                            <th>No</th>
                            <th>Nama Produsen Benih</th>
                            <th>Nama Pimpinan</th>
                            <th>No. HP</th>
                            <th>Lokasi</th>
                            <th>Alamat</th>
                            <th>Jenis Tanaman</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach($penangkar_balikpapan as $penangkar_item): ?>
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