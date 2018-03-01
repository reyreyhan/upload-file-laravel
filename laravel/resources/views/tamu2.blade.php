<!doctype html>
<html lang="en">

<head>
@include('include.head')
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="{!! asset('assets/img/sidebar-1.jpg')!!}">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="" class="simple-text">
                    ENT
                </a>
            </div>
@include('include.side')
        </div>
        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Report Table</h4>
                                    <p class="category">Visitor Report ENT ROOM</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table id="tabel-data" class="table">
                                        <thead class="text-primary">
                                            <th>Nama</th>
                                            <th>NRP</th>
                                            <th>Laporan</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $u)
                                            <tr>
                                              <td>{{ $u->nama }}</td>
                                              <td>{{ $u->nrp }}</td>
                                              <td>{{ $u->laporan }}</td>
                                              <td>{{ $u->status }}</td>
                                              <td>
                                                <form method="POST" action="{{ route('tamu.destroy', $u->id) }}">
                                                  {{ csrf_field() }}
                                                  {{ method_field('DELETE') }}
                                                  <a href="{{ route('tamu.edit', $u->id) }}"> Edit </a>
                                                  <button type="submit">Delete</button>
                                                </form>
                                              </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@include('include.footer')

</html>
