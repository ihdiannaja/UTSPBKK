
<div class="content-wrapper">
    <div class="container-fluid">
        <!--Start Dashboard Content-->
        <div class="row mt-4">
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="card gradient-purpink">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body text-left">
                                <h4 class="text-white">$4530</h4>
                                <span class="text-white">Pendapatan</span>
                            </div>
                            <div class="align-self-center"><span id="dash-chart-1"></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="card gradient-scooter">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body text-left">
                                <h4 class="text-white">2500</h4>
                                <span class="text-white">Jumlah Pemesanan</span>
                            </div>
                            <div class="align-self-center"><span id="dash-chart-2"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Row-->
        <div class="row">
            <div class="col-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        Product Sales 
                    </div>
                    <div class="card-body">
                        <canvas id="dash-chart-5" height="100"></canvas>
                        <div class="row">
                            <div class="col-12">
                                <div class="card bg-transparent shadow-none mb-0">
                                    <div class="card-content">
                                        <div class="row row-group m-0">
                                            <div class="col-12 col-lg-6 col-xl-3">
                                                <div class="card-body text-center">
                                                    <h3 class="text-danger">$157</h3>
                                                    <span>Today's Sales</span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 col-xl-3">
                                                <div class="card-body text-center">
                                                    <h3 class="text-warning">$1423</h3>
                                                    <span>This Week Sales</span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 col-xl-3">
                                                <div class="card-body text-center">
                                                    <h3 class="text-success">$6500</h3>
                                                    <span>This Month Sales</span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 col-xl-3">
                                                <div class="card-body text-center">
                                                    <h3 class="text-info">$45,624</h3>
                                                    <span>This Year Sales</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Row-->
                    </div>
                </div>
            </div>
        </div>
        <!--End Row-->
        <div class="row">
            <div class="col-12 col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        Penjualan Berdasar Kategori
                    </div>
                    <div class="card-body">
                        <canvas id="dash-chart-6"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!--End Row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-0">
                        Detail Pemesanan
                        <div class="card-action">
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead>
                                <tr>
                                    <th>Id Transaksi</th>
                                    <th>Produk</th>
                                    <th>Total harga</th>
                                    <th>Status</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-group">
            <div class="card">
                <div class="card-header">
                    Trending Products
                    <div class="card-action>
                    </div>
                </div>
                <ul class="list-group list-group-flush list shadow-none">
                    <li class="list-group-item d-flex justify-content-between align-items-center">Kemeja <span class="badge gradient-knight text-white badge-pill shadow">25</span></li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">Gaun <span class="badge gradient-dusk
                        text-white badge-pill shadow">25</span></li>
                </ul>
            </div>
        </div>
        <!--End Dashboard Content-->
    </div>
    <!-- End container-fluid-->
</div>
<!--End content-wrapper-->
