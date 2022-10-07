<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah To Do List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1 class="text-center mt-5">Tambah To Do List</h1>
        <form action="{{ url('/store_todo') }}" method="post">
            @csrf
            <div class="row justify-content-center mb-5">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="mhs">Mahasiswa</label>
                        <select class="form-control" name="mhs" id="mhs">
                            <option value="-">Pilih Mahasiswa</option>
                            @foreach ($mahasiswa as $mhs)
                                <option value="{{ $mhs->id }}">{{ $mhs->nama }}</option> 
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="todo" class="form-label">To Do</label>
                        <input type="text" class="form-control" id="todo" name="todo">
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <textarea name="keterangan" id="keterangan" cols="30" rows="5" class="form-control"></textarea>
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