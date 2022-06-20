<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Customer Services</h1>
        </div>
        <a class="nav-link" href={{ url('/admin') }}>
            <span>Back</span>
        </a>
        <div>
            <table class="table table-bordered" style="margin-top: 20px">
                <thead>
                    <tr>
                        <th class="col-sm-1">ID CS</th>
                        <th class="col-sm-1">No HP</th>
                        <th class="col-sm-1">Status</th>
                    </tr>
                    @foreach ($css as $cs)
                    <tr>
                        <td>{{ $cs->id_cs }}</td>
                        <td>{{ $cs->no_hp }}</td>
                        <td>
                            @if ($cs->status == 0)
                                Not Available
                            @else
                                Available
                            @endif
                        </td>
                    <tr>
                    @endforeach
                </thead>
            </table>
        </div>
    </body>
</html>