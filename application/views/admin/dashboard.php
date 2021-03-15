<main>
    <div class="container-fluid">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        
        <div class="row">
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-area mr-1"></i>
                        Benih Masuk
                    </div>
                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-bar mr-1"></i>
                        Benih Keluar
                    </div>
                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Stok Benih
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Komoditi</th>
                            <th>Varietas</th>
                            <th>Kelas Benih</th>
                            <th>Stok Benih</th>
                            <th>Satuan</th>
                            <th>Harga Satuan</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Komoditi</th>
                            <th>Varietas</th>
                            <th>Kelas Benih</th>
                            <th>Stok Benih</th>
                            <th>Satuan</th>
                            <th>Harga Satuan</th>
                            <th>Deskripsi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach($benih as $benih_item): ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $benih_item['nama_komoditi'] ?></td>
                                <td><?php echo $benih_item['nama_varietas'] ?></td>
                                <td><?php echo $benih_item['nama_kelas'] ?></td>
                                <td><?php echo $benih_item['stok_benih'] ?></td>
                                <td><?php echo $benih_item['satuan'] ?></td>
                                <td>Rp. <?php echo $benih_item['harga'] ?></td>
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