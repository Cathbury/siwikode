<main class="testimoni">
    <div class="table-responsive table-wrapper">
        <div class="topSection width-100vw">
            <h2 class="text-left">Testimoni</h2>
            <a href="<?= base_url()?>testimoni/create" class="btn myButton positionCreateButton">Create</a>
            <hr>
        </div>
        <br>
        <table class="table table-bordered width-100vw">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Wisata</th>
                    <th>Profesi</th>
                    <th>Rating</th>
                    <th>Komentar</th>
                    <th>Action</th>
                </tr>
            </thead> 
            <tbody>
            <?php $no=1; foreach($testimoni as $row): ?>
                <tr id="<?=$row->id?>">
                    <td><?=$no?></td>
                    <td><?=$row->nama_testimoni?></td>
                    <td><?=$row->email?></td>
                    <td><?=$row->nama_wisata?></td>
                    <td><?=$row->nama_profesi?></td>
                    <td><?=$row->rating?></td>
                    <td><?=$row->komentar?></td>
                    <td>
                        <a href="<?=base_url()?>testimoni/edit/<?=$row->id?>" class="btn btn-warning">Edit</a>
                        <a data-url="testimoni/delete/" class="btn btn-danger delete">Delete</a>
                    </td>
                </tr>
            <?php $no++; endforeach;?>
            </tbody>
        </table>
    </div>

   
</main>