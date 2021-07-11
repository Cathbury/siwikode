<main class="container-fluid main userPage">
    <div class="container mt-3">
        <h2>Tambahkan Kuliner</h2>

        <form action="store" method="POST">
            <div class="form-group row">
                <label for="nama_kuliner" class="col-4 col-form-label">Kuliner</label> 
                <div class="col-8">
                    <input id="nama_kuliner" name="nama_kuliner" type="text" class="form-control" required="required">
                </div>
            </div>

            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary save">Submit</button>
                </div>
            </div>
        </form>
    </div>
</main>
