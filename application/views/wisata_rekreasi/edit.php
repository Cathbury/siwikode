<h1 class="pl-3 pr-3">Edit Wisata Rekreasi</h1>
<div id="page-content-wrapper">
    <div class="container mt-3">
        <form action="<?=base_url().'wisata_rekreasi/update'?>" method="POST">

            <div class="form-group row">
                <input type="hidden" name="id" value="<?=$wisata_rekreasi->id?>">
                <label for="nama_rekreasi" class="col-4 col-form-label">Nama Rekreasi</label> 
                <div class="col-8">
                    <input name="nama_rekreasi" type="text" class="form-control" value="<?=$wisata_rekreasi->nama_rekreasi?>" required="required">
                </div>
                
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary update">Submit</button>
                </div>
            </div>

        </form>
    </div>
</div>

