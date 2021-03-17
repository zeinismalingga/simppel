<main>
    <div class="container-fluid">
        <h1 class="mt-4"><?php echo $judul ?></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard / <?php echo $judul ?></li>
        </ol>
        <div class="row">
            <div class="col-md-12">
                <p class="float-right"><a href="<?php echo site_url('penangkar/add') ?>" class="btn btn-sm btn-success">Tambah +</a></p>
            </div>            
        </div>        
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                <?php echo $judul ?>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th >No</th>
                            <th >Nama Produsen</th>
                            <th >Nama Pimpinan</th>
                            <th >No. HP</th>
                            <th >Alamat</th>
                            <th >Luas Lahan (Ha)</th>
                            <th >Aksi</th>
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
                                <td><?php echo $penangkar_item['alamat'] ?></td>
                                <td><?php echo $penangkar_item['luas_lahan'] ?></td>
                                <td>
                                    <a href="<?php echo site_url('penangkar/edit/'. $penangkar_item['id_penangkar']) ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                    <a href="<?php echo site_url('penangkar/delete/'. $penangkar_item['id_penangkar']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        <?php $no++ ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</main>