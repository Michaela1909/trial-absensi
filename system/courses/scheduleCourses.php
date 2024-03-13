<?php
require_once("scheduleCourseFunction.php");
?>

<?php require_once("../components/header.php"); ?>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php require_once("../components/sidebar.php"); ?>

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php require_once("../components/topbar.php"); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Jadwal Mata Kuliah</h1>
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card" style="height: 250px;">
                                    <div class="card-body">
                                        <form>
                                            <div class="form-group row">
                                                <label for="inputKodeMK" class="col-xl-4 col-form-label">Kode Mata Kuliah</label>
                                                <div class="col-xl-8">
                                                    <input type="text" class="form-control" id="inputKodeMK">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success tambah_btn">Cari</button>
                                        </form>
                                    </div>
                                    &nbsp;                            
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card" style="height: 250px;">
                                    <div class="card-body">
                                        <form>
                                            <div class="form-group row">
                                                <label for="inputKuliahKe" class="col-xl-4 col-form-label">Kuliah Minggu Ke</label>
                                                <div class="col-xl-8">
                                                    <select class="form-control" id="inputKuliahKe">
                                                        <option value="1">Minggu 1</option>
                                                        <option value="2">Minggu 2</option>
                                                        <option value="3">Minggu 3</option>
                                                        <option value="4">Minggu 4</option>
                                                        <option value="5">Minggu 5</option>
                                                        <option value="6">Minggu 6</option>
                                                        <option value="7">Minggu 7</option>
                                                        <option value="8">Minggu 8</option>
                                                        <option value="9">Minggu 9</option>
                                                        <option value="10">Minggu 10</option>
                                                        <option value="11">Minggu 11</option>
                                                        <option value="12">Minggu 12</option>
                                                        <option value="13">Minggu 13</option>
                                                        <option value="14">Minggu 14</option>
                                                        <option value="15">Minggu 15</option>
                                                        <option value="16">Minggu 16</option>
                                                    </select>
                                                </div>
                                                <label for="inputTanggalKuliah" class="col-xl-4 col-form-label">Tanggal Kuliah</label>
                                                <div class="col-xl-8">
                                                    <input type="date" class="form-control" id="inputTanggalKuliah">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary tambah_btn">Tambah</button>
                                        </form>
                                    </div>
                                    &nbsp;                            
                                </div>
                            </div>
                        </div>
                    </div>
                    &nbsp;
                    <!-- Tabel Simpan Jadwal Mata Kuliah -->
                    <div class="card">
                        <div class="card-body">
                            <table id="example" class="display cell-border" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Kode Mata Kuliah</th>
                                        <th>Mata Kuliah</th>
                                        <th>Minggu Ke</th>
                                        <th>Tanggal Kuliah</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data[''])
                                </tbody>
                            </table>
                            <br>
                            <button type="submit" class="btn btn-primary tambah_btn">Simpan</button>
                        </div>
                    </div>
                    &nbsp;
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <?php require_once("../components/js.php"); ?>


    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        new DataTable('#example', {
            columns: [{
                data: 'kodeMK'
            }, 
            {
                data: 'mata_kuliah'
            },
            {
                data: 'minggu'
            },
            {
                data: 'tanggal_kuliah'
            },
            {
                data: 'aksi'
            },
            ]
        });
    </script>




</body>

</html>