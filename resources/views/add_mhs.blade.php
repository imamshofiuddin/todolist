<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1 class="text-center mt-5">Tambah Mahasiswa</h1>
        <form action="{{ url('/store_mhs') }}" method="post">
            @csrf
            <div class="row justify-content-center mb-5">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama *</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="nrp" class="form-label">NRP *</label>
                        <input type="text" class="form-control" id="nrp" name="nrp" required>
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas">
                    </div>
                    <div class="mb-3">
                        <label for="angkatan" class="form-label">Angkatan</label>
                        <select name="angkatan" id="angkatan" class="form-control">
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="no_telp" class="form-label">No. HP</label>
                        <input type="text" class="form-control" id="no_telp" name="no_telp">
                    </div>
                    <button type="submit" class="btn btn-primary w-100 text-center">Submit</button>
                    <a href="{{ route('index') }}" class="btn btn-light w-100 text-center mt-3">Cancel</a>
                </div>
            </div>
        </form>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>