<section class="content-header">
      <h1>
        Pasien
        <small>Form Pasien</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Tambah Pasien Baru</li>
      </ol>
</section>


<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"> <?=ucfirst($page)?> Pasien</h3>
            <div class="pull-right">
                <a href=" <?=site_url('user/add')?>" class="btn btn-warning btn-flat">
                <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>



        
        <div class="box-body ">            
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                <form action="<?=site_url('patient/process')?>" method="post">

                    <div class="form-group">
                        <label >Nomor Kartu Tanda Penduduk (KTP) *</label>
                        <input type="text" name="num_ktp" value="<?=$row->num_ktp?>"  class="form-control" required> 
                    </div>

                    <div class="form-group">
                        <label >Nama Pasien *</label>
                        <input type="hidden" name="id" value="<?=$row->patient_id?>" > 
                        <input type="text" name="patient_name" value="<?=$row->name?>"  class="form-control" required> 
                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select name="gender" id="" class="form-control">
                            <option value="">-Pilih-</option>
                            <option value="F">Perempuan</option>
                            <option value="M">Laki-laki</option>

                        </select>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="birthday" value="<?=$row->birthday?>" class="form-control" required> 
                    </div>

                    <div class="form-group">
                        <label>Golongan Darah</label>
                        <select name="blood" id="" class="form-control">
                            <option value="">-Pilih-</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="address" id="" cols="30" rows="10" class="form-control"><?=$row->address?></textarea>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" value="<?=$row->email?>"  class="form-control" > 
                    </div>

                    <div class="form-group">
                        <label>Nomor HP</label>
                        <input type="text" name="phone" value="<?=$row->phone?>"  class="form-control" required> 
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