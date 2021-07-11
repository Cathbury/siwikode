<main class="menuManagement">
    <menuCreate class="menuCreate">
        <form action="<?= base_url('menu/update')?>" method="POST">
            <h2>Edit Menu</h2>
            <hr><br>
            <containerInput class="container-input">
                <input type="hidden" name="id" value="<?= $menuId->id ?>">

                <div class="form-group">
                    <label for="menu_title">Title</label> 
                    <input id="menu_title" name="menu_title" type="text" class="form-control ourInput" value="<?=$menuId->title?>">
                    <?= form_error('menu_title', '<small class="text-danger">', '</small>') ?>
                </div>
                <!------------------>
                <div class="form-group">
                    <label for="menu_url">URL</label> 
                    <input id="menu_url" name="menu_url" type="text" class="form-control ourInput" value="<?=$menuId->url?>">
                    <?= form_error('menu_url', '<small class="text-danger">', '</small>') ?>
                </div>
                <!------------------>
                <div class="form-group">
                    <label for="menu_icon">Icon</label> 
                    <input id="menu_icon" name="menu_icon" type="text" class="form-control ourInput" value="<?=$menuId->icon?>">
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
</main>