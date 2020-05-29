<section class="content-header">
      <h1>
        Doctor Data
        <small>Data Dokter</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Beranda</a></li>
        <li class="active">Data Dokter</li>
      </ol>
</section>

<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"> <?=ucfirst($page)?> doctor</h3>
            <div class="pull-right">
                <a href=" <?=site_url('doctor')?>" class="btn btn-warning btn-flat">
                <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>
        
        <div class="box-body ">            
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                <form action="<?=site_url('doctor/process')?>" method="post">
                    <div class="form-group">
                        <label >Nomor Ikatan Dokter Indonesia</label>
                        <input type="hidden" name="id" value="<?=$row->doctor_id?>"> 
                        <input type="text" name="num_idi" value="<?=$row->num_idi?>" class="form-control" required> 
                    </div>

                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="doctor_name" value="<?=$row->name?>" class="form-control" required> 
                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select name="gender"  class="form-control" required > 
                            <option value="">-Pilih-</option>
                            <option value="L" <?=$row->gender == 'M' ? 'selected' : ''?>>Laki-laki</option>
                            <option value="P" <?=$row->gender == 'F' ? 'selected' : ''?>>Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="birthday" value="<?=$row->birthday?>" class="form-control" required> 
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="address" cols="30" rows="10" class="form-control"><?=$row->address?></textarea>
                    </div>

                    <div class="form-group">
                        <label>Nomor HP</label>
                        <input type="text" name="phone" value="<?=$row->phone?>" class="form-control" required> 
                    </div>
                                        

                    <div class="form-group">
                    <label> Poli *</label>
                        <?php echo form_dropdown('poli', $poli, $selectedpoli, ['class' => 'form-control', 'required']) ?>
                    </div>


                    <div class="form-group">
                        <button type="submit" name="<?=$page?>" class="btn btn-success btn-flat"><i class="fa fa-paper-line"></i>Save</button>
                        <button type="reset" class="btn btn-default btn-flat"><i class=""></i> Reset</button>
                    <div>
                </form>
            </div>
            </div>
        </div>
    </div>
</section>