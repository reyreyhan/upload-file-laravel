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
                                  <h4 class="title">Insert Report Data</h4>
                                  <p class="category">Write Report Data</p>
                              </div>
                              <div class="card-content">
                                  @foreach($data as $u)
                                  <form action="{{ route('tamu.update', $u->id) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                      <div class="row">
                                          <div class="col-md-6">
                                              <div class="form-group label-floating">
                                                  <label class="control-label">Nama</label>
                                                  <input name="nama" type="text" class="form-control" value="{{ $u->nama }}" required>
                                              </div>
                                          </div>
                                          <div class="col-md-6">
                                              <div class="form-group label-floating">
                                                  <label class="control-label">NRP</label>
                                                  <input name="nrp" type="text" value="{{ $u->nrp }}" class="form-control">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-12">
                                              <div class="form-group">
                                                  <label>Laporan</label>
                                                  <div class="form-group label-floating">
                                                      <textarea name="laporan" class="form-control" rows="5">{{ $u->laporan }}</textarea>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-12">
                                              <div class="form-group">
                                                  <label>Foto KTM / Smartcard</label>
                                                  <div class="form-group label-floating">
                                                    <img src="{{ asset('laravel/public/image/' . $u->image)}}">
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <button type="submit" class="btn btn-primary pull-right">Insert</button>
                                      <div class="clearfix"></div>
                                  </form>
                                  @endforeach
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
