<main class="container-fluid main testimoni">
  <form action="store" method="POST">
    <legend>Tambahkan Testimoni</legend>
    <hr><br>

    <containerInput class="container-input">
      <div class="form-group">
          <label for="nama_testimoni" class="ourLabel">Nama</label> 
          <input id="nama_testimoni" name="nama_testimoni" type="text" class="form-control ourInput" value="" required="required">
      </div>
      <!------------------>
      <div class="form-group">
          <label for="email" class="ourLabel">Email</label> 
          <input id="email" name="email" type="email" class="form-control ourInput" value="" required="required">
      </div>
      <!------------------>
      <div class="form-group">
          <label for="wisata" class="ourLabel selectLabel">Wisata</label> 
          <select id="wisata" name="wisata" class="custom-select ourInput" required="required">
            <option value="">--- Wisata ---</option>
            <?php foreach($wisata as $row): ?>
            <option value="<?= $row->id ?>"><?= $row->nama_wisata ?></option>;
            <?php endforeach; ?> 
          </select>
      </div>
      <!------------------>
      <div class="form-group">
          <label for="profesi" class="ourLabel selectLabel" >Profesi</label> 
          <select id="profesi" name="profesi" class="custom-select ourInput" required="required">
            <option value="">--- Profesi ---</option>
            <?php foreach($profesi as $row): ?>
            <option value="<?= $row->id ?>"><?= $row->nama_profesi ?></option>;
            <?php endforeach; ?> 
          </select>
      </div>
      <!------------------>
      <div class="form-group row">
        <label for="rating" class="col-2 col-form-label ">Rating</label>
        <div class="col-10" id="rating">
          <input type="radio" name="rating" value="5" id="5" checked><label for="5">☆</label>
          <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
          <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
          <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
          <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
        </div>
      </div>
      <!------------------>
      <div class="form-group">
          <label for="komentar" class="ourLabel">Komentar</label> 
          <textarea id="komentar" name="komentar" type="text" class="form-control ourInput" value="" cols="10" rows="5" required="required"></textarea>
      </div>
      <!------------------>
      <div class="buttonForm">
          <a href="<?=base_url('user')?>" class="btn buttonCancelForm">Cancel</a>
          <input type="submit" class="form-control buttonYesForm" value="Yes, Edit">
      </div>
    </containerInput>
  </form>
</main>
