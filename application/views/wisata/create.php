<main class="container-fluid main wisata">
    <?= form_open_multipart('wisata/store');?>
        <h2>Tambahkan Wisata</h2>
        <hr><br>
        <div class="form-group inputUploadPhotoProfile">
            <div id="containerImageInForm">
                <img id="imageToUpload" src="<?=base_url('assets/img/photo_wisata/default.png')?>" alt="" width="80">
                <div id="iconCamera" class="iconCamera">
                    <i id="camera" class="fas fa-camera"></i>
                </div>
            </div>
            <div id="inputImageInForm">
                <label for="image"></label>
                <input id="image" name="image" type="file" class="imageInput ourInput custom-file-input" value="">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama_wisata" class="col-4 col-form-label">Wisata</label> 
            <div class="col-8">
                <input id="nama_wisata" name="nama_wisata" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label> 
            <div class="col-8">
                <input id="deskripsi" name="deskripsi" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="jenis_wisata" class="col-4 col-form-label">Jenis Wisata</label> 
            <div class="col-8">
                <select id="jenis_wisata" name="jenis_wisata" class="custom-select">
                    <option value="">--- jenis wisata ---</option>
                    <?php foreach($jenis_wisata as $row): ?>
                    <option value="<?= $row->id ?>"><?= $row->jenis ?></option>;
                    <?php endforeach; ?>  
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="kategori" class="col-4 col-form-label">Kategori</label> 
            <div class="col-8">
                <select id="kategori" name="kategori" class="custom-select">
                    <option value="">--- Kategori ---</option>
                    <?php foreach($kategori as $row): ?>
                    <option value="<?= $row->id ?>"><?= $row->nama_kategori ?></option>;
                    <?php endforeach; ?>  
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="fasilitas" class="col-4 col-form-label">Fasilitas</label> 
            <div class="col-8">
                <input id="fasilitas" name="fasilitas" type="text" class="form-control" required="required">
            </div>
        </div>
        
        <div class="form-group row">
            <label for="kontak" class="col-4 col-form-label">Kontak</label> 
            <div class="col-8">
                <input id="kontak" name="kontak" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-4 col-form-label">Alamat</label> 
            <div class="col-8">
                <input id="alamat" name="alamat" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="latlong" class="col-4 col-form-label">Latlong</label> 
            <div class="col-8">
                <input id="latlong" name="latlong" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-4 col-form-label">Email</label> 
            <div class="col-8">
                <input id="email" name="email" type="email" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="url" class="col-4 col-form-label">URL</label> 
            <div class="col-8">
                <input id="url" name="url" type="text" class="form-control" required="required">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        
        <!-- <div class="form-group row">
            <label for="jenis_kuliner" class="col-4 col-form-label">Jenis Kuliner</label> 
            <div class="col-8">
                <select id="jenis_kuliner" name="jenis_kuliner" class="custom-select">
                    <option value="">--- jenis kuliner ---</option>
                    <?php foreach($wisata_kuliner as $row): ?>
                    <option value="<?= $row->id ?>"><?= $row->nama_kuliner ?></option>;
                    <?php endforeach; ?>  
                </select>
            </div>
        </div> -->

        <!-- <div class="form-group row">
            <label for="rating" class="col-4 col-form-label">Bintang</label> 
            <div class="col-8">
                <input id="rating" name="rating" type="hidden" class="form-control" required="required" value="<?=$testimoni->rating?>">
            </div>
        </div> -->
    </form>
</main>
