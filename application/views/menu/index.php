<main class="menuManagement">
    <menuCreate class="menuCreate">
        <form action="store" method="POST">
            <h2>Add Menu</h2>
            <hr><br>
            <containerInput class="container-input">
                <div class="form-group">
                    <label for="menu_title">Title</label> 
                    <input id="menu_title" name="menu_title" type="text" class="form-control ourInput">
                    <?= form_error('menu_title', '<small class="text-danger">', '</small>') ?>
                </div>
                <!------------------>
                <div class="form-group">
                    <label for="menu_url">URL</label> 
                    <input id="menu_url" name="menu_url" type="text" class="form-control ourInput">
                    <?= form_error('menu_url', '<small class="text-danger">', '</small>') ?>
                </div>
                <!------------------>
                <div class="form-group">
                    <label for="menu_icon">Icon</label> 
                    <input id="menu_icon" name="menu_icon" type="text" class="form-control ourInput">
                    <?= form_error('menu_icon', '<small class="text-danger">', '</small>') ?>
                </div>
                <!------------------>
                <div class="form-group">
                    <label class="selectLabel" for="menu_access_rights">Access Rights</label> 
                    <select name="menu_access_rights" id="menu_access_rights" class="custom-select">
                        <?php foreach($whoCanAccessMenu as $row): ?>
                        <option value="<?= $row['id'] ?>"><?= $row['menu'] ?></option>
                        <?php endforeach;?>
                    </select>
                    <?= form_error('menu_access_rights', '<small class="text-danger">', '</small>') ?>
                </div>
                <!------------------>
                <div class="buttonForm">
                    <a href="<?=base_url('user')?>" class="btn buttonCancelForm">Cancel</a>
                    <input type="submit" class="form-control buttonYesForm" value="Yes, Edit">
                </div>
            </containerInput>
        </form>
    </menuCreate>
    <!------------------>
    <tableWrapper class="table-wrapper">
        <topSection class="topSection">
            <h2>Menu</h2>
            <!-- <a href="<?= base_url()?>menu/create" class="btn myButton ml-auto">Create</a> -->
        </topSection>
        <hr><br>
        <div class="table-responsive-lg">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Url</th>
                        <th>Icon</th>
                        <th>Access Rights</th>
                        <th>Action</th>
                    </tr>
                </thead> 
                <tbody>
                    <?php $no=1; foreach($menu as $row): ?>
                    <tr id="<?=$row->id?>">
                        <td><?=$no?></td>
                        <td><?=$row->title?></td>
                        <td><?=$row->url?></td>
                        <td><?=$row->icon?></td>
                        <td><?=$row->menu?></td>
                        <td>
                            <a href="<?=base_url()?>menu/edit/<?=$row->id?>" class="btn btn-warning">Edit</a>
                            <a data-url="menu/delete/" class="btn btn-danger delete">Delete</a>
                        </td>
                    </tr>
                    <?php $no++; endforeach;?>
                </tbody>
            </table>
        </div>
    </tableWrapper>

</main>



