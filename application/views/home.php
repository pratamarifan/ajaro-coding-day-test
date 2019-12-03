
  <div class="konten-table">
  	<h5 class="float-left">Data Barang</h5>
	<a href="<?php echo base_url()?>welcome/tambah"><button type="button" class="btn btn-success float-right" style="background-color: rgb(0 188 31);padding-right: 6%;padding-left: 6%;">Tambah</button></a>
  <br><br><br>
  	<table class="table table-bordered">
  <thead class="tengah">
    <tr>
      <th scope="col">Kode</th>
      <th scope="col">Nama</th>
      <th scope="col">Harga</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
      <tbody>
        <?php
          foreach ($barang as $key => $value) {
            echo "<tr>";
            echo "<td>".$value['kode']."</td>";
            echo "<td>".$value['nama']."</td>";
            echo "<td> Rp." . number_format($value['harga'],2,",",".")."</td>";
            echo "<td>".
            anchor('welcome/edit/'.$value['id'],'Edit ').
            anchor('welcome/hapus/'.$value['id'],'Hapus',array('style'=>'color:red;margin-left:30px;')) .
            "</td>";
            echo "<tr>";
          }
        ?>
    </tbody>
</table>
</div>
</div>
</body>
</html>