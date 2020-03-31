<div class="content-wrapper">    
	<div class="container-fluid">
 		<div class="row pt-2 pb-2">
    		<div class="col-sm-9">
	    		<h4 class="page-title">Transaksi Elpay</h4>
		   	</div>
	    </div>
	</div>
    <div class="card">
        <div class="accordion" id="accordionElpay">
            <div class="card">
                <div class="card-header" id="headingTambah">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTambah" aria-expanded="false" aria-controls="collapseTambah">
                        Tambah Saldo Elpay
                        </button>
                    </h2>
                </div>
            </div>

            <div id="collapseTambah" class="collapse" aria-labelledby="headingTambah" data-parent="#accordionElpay">
                
                <form action="addElpay" method="post">
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">ID Pelanggan</span>
                            </div>
                            <input name="id" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                    <!-- </div> -->
                    <!-- <div class="card-body"> -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Nominal yang ditambah</span>
                            </div>
                            <input name="nominalTambah" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                    <!-- </div> -->
                    <!-- <div class="card-body"> -->
                        <input type="submit" class="btn btn-primary" value="submit"></input>
                    </div>  
                </form>  
            </div>

            <div class="card">
                <div class="card-header" id="headingKurang">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseKurang" aria-expanded="false" aria-controls="collapseKurang">
                        Kurangi Saldo Elpay
                        </button>
                    </h2>
                </div>
            </div>
            <div id="collapseKurang" class="collapse" aria-labelledby="headingKurang" data-parent="#accordionElpay">
                
                <form action="substractElpay" method="post">
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">ID Pelanggan</span>
                            </div>
                            <input naem="id" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                    <!-- </div> -->
                    <!-- <div class="card-body"> -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Nominal yang dikurangi</span>
                            </div>
                            <input name="nominalKurang" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                    <!-- </div> -->
                    <!-- <div class="card-body"> -->
                        <input type="submit" class="btn btn-primary" value="submit"></input>
                    </div>  
                </form>  
            </div>

            <div class="card">
                <div class="card-header" id="headingKurang">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTransaksi" aria-expanded="false" aria-controls="collapseTransaksi">
                        Daftar Transaksi 
                        </button>
                    </h2>
                </div>
            </div>
            <div id="collapseTransaksi" class="collapse" aria-labelledby="headingTransaksi" data-parent="#accordionElpay">
                <div class="card-body">
                    <table class="table align-items-center table-flush">
                    <thead>
                        <tr>
                            <th>ID Transaksi</th>
                            <th>ID Customer</th>
                            <th>Jenis Transaksi</th>
                            <th>Metode</th>
                            <th>Nominal</th>
                            <th>Status</th>
                        </tr>    
                    </thead>    
                   <tbody>
                       <?php foreach($transaksi as $t) { ?>
                            <tr>
                                <td><?php echo $t->id_transaksi; ?></td>
                                <td><?php echo $t->cid; ?></td>
                                <td><?php echo $t->jenis_transaksi; ?></td>
                                <td><?php echo $t->metode; ?></td>
                                <td><?php echo $t->nilai; ?></td>
                                <td><?php echo $t->status; ?></td>
                            </tr>
                       <?php } ?>
                   </tbody>
                    
                    </table>
                </div>    
            </div>
            </div>
        </div>    
    </div>
</div>