<h1 class="pl-3 pr-3">Wisata Kuliner</h1>
<a href="<?= base_url()?>wisata_kuliner/create" class="btn btn-primary">Create</a>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Action</th>
        </tr>
    </thead> 
    <tbody>
    <?php $no=1; foreach($wisata_kuliner as $row):?>
        <tr id="<?=$row->id?>">
            <td><?=$no?></td>
            <td><?=$row->nama_kuliner?></td>
            <td>
                <a href="<?=base_url()?>wisata_kuliner/detail/<?=$row->id?>" class="btn btn-success">Detail</a>
                <a href="<?=base_url()?>wisata_kuliner/edit/<?=$row->id?>" class="btn btn-warning">Edit</a>
                <a data-url="wisata_kuliner/delete/" class="btn btn-danger delete">Delete</a>
            </td>
        </tr>
    <?php $no++; endforeach;?>
    </tbody>
</table>