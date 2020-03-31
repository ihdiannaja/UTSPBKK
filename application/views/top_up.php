<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Top Up</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <br><br>
    <br><br>
    <?php 
      $nominal = [50000, 100000, 500000];
    $metode = ['ATM', 'Transfer Tunai', 'Kredit']?>
        <form action="topup" method="post">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="pilihnominal">Nominal</label>
                </div>
                <select name="nominal" class="custom-select" id="pilihNominal">
                    <option selected>Pilih Nominal</option>
                    <?php foreach ($nominal as $n) {
                        echo "<option value=".$n.">".$n."</option>";
                        
                    }
                        
                    ?>
                    <!-- <option value="50000">50.000</option>
                    <option value="100000">100.000</option>
                    <option value="500000">500.000</option> -->
                </select>
            </div>
        
        
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="pilihMetode">Metode Pembayaran</label>
                </div>
                <select name="metode" class="custom-select" id="pilihMetode">
                    <option selected>Pilih Metode Pembayaran</option>
                    <?php foreach ($metode as $m ){
                        echo "<option value=".$m.">".$m."</option>";
                    }
                    ?>
                    <!-- <option value="ATM">ATM</option>
                    <option value="Transfer">Transfer Tunai</option>
                    <option value="Kredit">Kredit</option> -->
                </select>
            </div>
        
        <h6><i>Biaya akan ditambahkan dengan biaya admin sebesar Rp. 2000</i></h6>
        <br><br>
        <input class="btn btn-warning" value="submit" type="submit">Tambah Saldo</input>

    </form>
</div>

