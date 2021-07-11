<main class="wisata">
    <div class="table-responsive table-wrapper">
        <div class="topSection width-100vw">
            <h2 class="text-left">Wisata</h2>
            <a href="<?= base_url()?>wisata/create" class="btn myButton wisataCreateButton">Create</a>
            <hr>
        </div>
        <br>
        <table class="table table-bordered width-100vw">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Image</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Jenis Wisata</th>
                    <th>Kategori Wisata</th>
                    <th>Fasilitas</th>
                    <th>Kontak</th>
                    <th>Alamat</th>
                    <th>Latlong</th>
                    <th>Email</th>
                    <th>URL</th>
                    <th>Action</th>
                </tr>
            </thead> 
            <tbody>
            <?php $no=1; foreach($wisata as $row): ?>
                <tr id="<?=$row->id?>">
                    <td><?=$no?></td>
                    <td><img src="<?=base_url('assets/img/photo_wisata/'.$row->image)?>" alt="" width="100px"></td>
                    <td><?=$row->nama_wisata?></td>
                    <td><details><?=$row->deskripsi?></details></td>
                    <td><?=$row->jenis?></td>
                    <td><?=$row->nama_kategori?></td>
                    <td><details><?=$row->fasilitas?></details></td>
                    <td><?=$row->kontak?></td>
                    <td><details><?=$row->alamat?></details></td>
                    <td><?=$row->latlong?></td>
                    <td><?=$row->email?></td>
                    <td><?=$row->url?></td>
                    <td>
                        <a href="<?=base_url()?>wisata/edit/<?=$row->id?>" class="btn btn-warning">Edit</a>
                        <a data-url="wisata/delete/" class="btn btn-danger delete">Delete</a>
                    </td>
                </tr>
            <?php $no++; endforeach;?>
            </tbody>
        </table>
    </div>
    <?php
    


    ?>
    
</main>