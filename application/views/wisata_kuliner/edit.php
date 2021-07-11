<h1 class="pl-3 pr-3">Edit Wisata Kuliner</h1>
<div id="page-content-wrapper">
    <div class="container mt-3">
        <form action="<?=base_url().'wisata_kuliner/update'?>" method="POST">
            <div class="form-group row">
                <input type="hidden" name="id" value="<?=$wisata_kuliner->id?>">
                <label for="nama_kuliner" class="col-4 col-form-label">Nama Kuliner</label> 
                <div class="col-8">
                    <input name="nama_kuliner" type="text" class="form-control" value="<?=$wisata_kuliner->nama_kuliner?>" required="required">
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