<main>
    <div class="container-fluid">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Stok Benih Tanaman Pangan
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
</main>