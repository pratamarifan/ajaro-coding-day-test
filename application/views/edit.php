
  <div class="konten-form">
  	<h5>Update Data Barang</h5>
  	<form method="post" action="<?php echo base_url()?>welcome/perbarui">
		<div class="form-group row">
			<label for="inputKode" class="col-sm-2 col-form-label">Kode</label>
			    <div class="col-sm-10">
			    	<input style="max-width: 300px;" type="text" class="form-control" id="id" name="id" value="<?php echo $barang[0]['id'] ?>"hidden>
			      	<input style="max-width: 300px;" type="text" class="form-control" id="kode" name="kode" value="<?php echo $barang[0]['kode'] ?>">
			      <?php echo form_error('kode','<div class="alert alert-danger" role="alert">','</div>') ?>
			    </div>
		</div>
		<div class="form-group row">
			<label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="nama" value="<?php echo $barang[0]['kode'] ?>">
			      <?php echo form_error('nama','<div class="alert alert-danger" role="alert">','</div>')?>
			    </div>
		</div>
		<div class="form-group row">
			<label for="inputDeskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
			    <div class="col-sm-10">
			      <textarea class="form-control" name="deskripsi"><?php echo $barang[0]['deskripsi'] ?></textarea>
			      <?php echo form_error('deskripsi','<div class="alert alert-danger" role="alert">', '</div>'); ?>
			    </div>
		</div>
			  <div class="form-group row">
			    <label for="inputStok" class="col-sm-2 col-form-label">Stok</label>
			    <div class="col-sm-10">
			      <input style="max-width: 200px;" type="text" class="form-control" name="stok" value="<?php echo $barang[0]['stok'] ?>"><?php echo form_error('stok','<div class="alert alert-danger" role="alert">', '</div>'); ?>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputBerat" class="col-sm-2 col-form-label">Harga</label>
			    <div class="col-sm-10">
			      <input style="max-width: 300px;" type="text" class="form-control" name="harga" value="<?php echo $barang[0]['harga'] ?>">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputBerat" class="col-sm-2 col-form-label">Berat</label>
			    <div class="col-sm-10">
			      <input style="max-width: 100px;float: left;" type="text" class="form-control" name="berat" value="<?php echo $barang[0]['berat'] ?>"><label class="col-form-label" style="float: left; margin-left: 10px;">gram</label><?php echo form_error('berat','<div class="alert alert-danger" role="alert">', '</div>'); 
			      ?>
			    </div>
			  </div>
			  <fieldset class="form-group">
			    <div class="form-group row">
			    <div class="col-sm-101">
			      <button type="submit" class="btn btn-success" style="background-color: rgb(0 188 31);">Simpan</button>
    			</div>
  </div>
</form>
  </div>
</body>
</html>