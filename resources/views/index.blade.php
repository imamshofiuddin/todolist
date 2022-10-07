<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>To Do List</title>
</head>
<body>
    <div class="container">
    <div class="text-center mt-4">
        <a href="{{ route('add') }}" class="btn btn-primary">Tambah todolist</a>
        <a href="{{ route('add_mhs') }}" class="btn btn-secondary">Tambah Mahasiswa</a>
    </div>
        <table cellspacing="0" cellpadding="5" class="table my-5 table-striped">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Nama</th>
                    <th>To do</th>
                    <th>Keterangan</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1?>
                @foreach ($data as $item)
                    <tr>
                        <td class="text-center">{{ $i }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->todo }}</td>
                        <td>{{ $item->keterangan }}</td>
                        <td class="text-center">
                            @if ($item->is_done == 0)
                                <span class="badge text-bg-secondary">On Progress</span>
                            @else
                                <span class="badge text-bg-success">Done</span>
                            @endif
                        </td>
                        <td class="text-center"><a class="btn btn-warning" href="{{ url('/show/'.$item->id) }}">Edit</a> | 
                            <a class="btn btn-danger" href="{{ url('/delete/'.$item->id) }}">Delete</a></td>
                    </tr>
                <?php $i++; ?>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>