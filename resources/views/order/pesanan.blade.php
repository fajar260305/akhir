<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      @include('komponen.sidebar')
      <div class="container-fluid page-body-wrapper">
        @include('komponen.navbar')

        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-6">
                <h5>Tambah Transaksi</h5>
                <a href="/pesanan/tambah" class="btn btn-outline-light w-25 mb-3" >Tambah</a>
              </div>
            </div>
            <div class="card">
                <div class="card-body">
                  <div class="row d-flex justify-content-between">
                    <div class="col-md-6">
                      <h4 class="card-title">Order Status</h4>
                    </div>
                    <div class="col-md-2">
                      <form action="" method="post" class="me-3">
                        <button class="btn btn-success" style="margin-left: 55px;">Import</button>
                      </form>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>
                            <div class="form-check form-check-muted m-0">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                              </label>
                            </div>
                          </th>
                          <th> Client Name </th>
                          <th> Kode order </th>
                          <th> Paket </th>
                          <th> Tanggal Masuk </th>
                          <th> Tanggal Keluar </th>
                          <th> Qty </th>
                          <th> Status </th>
                          <th> Total </th>
                          <th> Settings </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($pesanans as $pesanan)
                          <tr>
                            <td>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>
                            </td>
                            <td>
                              <img src="../assets/images/faces/face1.jpg" alt="image" />
                              <span class="pl-2">{{ $pesanan->nama_pelanggan }}</span>
                            </td>
                            <td> {{ $pesanan->kode_invoice }} </td>
                            <td> {{ $pesanan->paket->nama_paket }} </td>
                            <td> {{ $pesanan->tgl_masuk }} </td>
                            <td> {{ $pesanan->tgl_keluar }} </td>
                            <td> {{ $pesanan->qty }} </td>
                            <td> {{ $pesanan->status }} </td>
                            <td> {{ $pesanan->total_harga }} </td>
                            <td>
                              <div class="dropdown">
                                  <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-settings text-primary"></i></button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <form action="/pesanan/delete/{{ $pesanan->id }}" method="post">
                                      @method('delete')
                                      @csrf
                                      {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                                      <button type="submit" class="dropdown-item">Hapus</button>
                                    </form>
                                    <a class="dropdown-item" href="/transaksi/{{ $pesanan->id }}">Edit</a>
                                  </div>
                                </div>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../assets/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets/js/off-canvas.js"></script>
    <script src="../assets/js/hoverable-collapse.js"></script>
    <script src="../assets/js/misc.js"></script>
    <script src="../assets/js/settings.js"></script>
    <script src="../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../assets/js/chart.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>