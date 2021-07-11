<main class="container-fluid main wisata">
    <?= form_open_multipart('wisata/update');?>
        <h2>Edit Wisata</h2>
        <hr><br>
        <input id="id" name="id" type="text" class="imageInput ourInput custom-file-input" value="<?=$wisataId->id?>" hidden>
        <div class="form-group inputUploadPhotoProfile">
            <div id="containerImageInForm">
                <img id="imageToUpload" src="<?=base_url('assets/img/photo_wisata/'.$wisataId->image)?>" alt="" width="80">
                <div id="iconCamera" class="iconCamera">
                    <i id="camera" class="fas fa-camera"></i>
                </div>
            </div>
            <div id="inputImageInForm">
                <label for="image"></label>
                <input id="image" name="image" type="file" class="imageInput ourInput custom-file-input">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama_wisata" class="col-4 col-form-label">Nama</label> 
            <div class="col-8">
                <input id="nama_wisata" name="nama_wisata" type="text" class="form-control" value="<?=$wisataId->nama_wisata?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label> 
            <div class="col-8">
                <textarea id="deskripsi" name="deskripsi" type="text" class="form-control ourInput" value="<?=$wisataId->deskripsi?>" cols="10" rows="5"><?=$wisataId->deskripsi?></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="jenis_wisata" class="col-4 col-form-label">Jenis Wisata</label> 
            <div class="col-8">
                <select id="jenis_wisata" name="jenis_wisata" class="custom-select" required="required">
                    <option value="<?=$wisataId->jenis_wisata_id?>"><?=$jenis_wisata[$wisataId->jenis_wisata_id - 1]->jenis?></option>
                    <?php foreach($jenis_wisata as $row): ?>
                    <?php if($row->id != $wisataId->jenis_wisata_id):?>
                    <option value="<?= $row->id ?>"><?= $row->jenis ?></option>;
                    <?php endif;?>
                    <?php endforeach; ?>  
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="kategori" class="col-4 col-form-label">Kategori</label> 
            <div class="col-8">
                <select id="kategori" name="kategori" class="custom-select" required="required">
                    <option value="<?=$wisataId->kategori_id?>"><?=$kategori[$wisataId->kategori_id - 1]->nama_kategori?></option>
                    <?php foreach($kategori as $row): ?>
                    <?php if($row->id != $wisataId->kategori_id):?>
                    <option value="<?= $row->id ?>"><?= $row->nama_kategori ?></option>;
                    <?php endif;?>
                    <?php endforeach; ?>  
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="fasilitas" class="col-4 col-form-label">Fasilitas</label> 
            <div class="col-8">
                <textarea id="fasilitas" name="fasilitas" type="text" class="form-control ourInput" value="<?=$wisataId->fasilitas?>" cols="10" rows="5"><?=$wisataId->fasilitas?></textarea>
            </div>
        </div>
        <!-- <div class="form-group row">
            <label for="rating" class="col-4 col-form-label">Bintang</label> 
            <div class="col-8">
                <input id="rating" name="rating" type="hidden" class="form-control" required="required" value="<?=$testimoni->rating?>">
            </div>
        </div> -->
        <div class="form-group row">
            <label for="kontak" class="col-4 col-form-label">Kontak</label> 
            <div class="col-8">
                <input id="kontak" name="kontak" type="text" class="form-control" required="required" value="<?=$wisataId->kontak?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-4 col-form-label">Alamat</label> 
            <div class="col-8">
                <input id="alamat" name="alamat" type="text" class="form-control" required="required" value="<?=$wisataId->alamat?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="latlong" class="col-4 col-form-label">Latlong</label> 
            <div class="col-8">
                <input id="latlong" name="latlong" type="text" class="form-control" required="required" value="<?=$wisataId->latlong?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-4 col-form-label">Email</label> 
            <div class="col-8">
                <input id="email" name="email" type="email" class="form-control" required="required" value="<?=$wisataId->email?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="url" class="col-4 col-form-label">URL</label> 
            <div class="col-8">
                <input id="url" name="url" type="text" class="form-control" required="required" value="<?=$wisataId->url?>">
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
        <div class="form-group row">
            <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn myButton">Submit</button>
            </div>
        </div>
    </form>
</main>
