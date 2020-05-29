<section class="content-header">
      <h1>
        Pusat kesehatan
        <small>Detail Kategori Obat</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Nama Instansi</li>
      </ol>
</section>

<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"> Hospital</h3>
            <div class="pull-right">
                <a href=" " class="btn btn-warning btn-flat">
                <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>

        
        <div class="box-body ">            
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                <form action="<?=site_url('hospital/process')?>" method="post">

                    <div class="form-group">
                        <label >Nama Pusat Kesehatan *</label>
                        <input type="hidden" name="id"  > 
                        <input type="text" name="hospital_name" value="<?=$row->name?>"   class="form-control" required> 
                    </div>

                    <div class="form-group">
                        <label >Alamat</label>
                        <input type="text" name="address" value="<?=$row->address?>"   class="form-control" required> 
                    </div>

                    <div class="form-group">
                        <label >Phone</label>
                        <input type="text" name="phone" value="<?=$row->phone?>"   class="form-control" required> 
                    </div>

                    <div class="form-group">
                        <label >Email</label>
                        <input type="text" name="email" value="<?=$row->email?>"   class="form-control" required> 
                    </div>

                    <div class="form-group">
                        <label >Detail</label>
                        <input type="text" name="detail" value="<?=$row->detail?>"   class="form-control" required> 
                    </div>

                    <div class="form-group">
                        <label >Logo *</label>
                        <input type="text" name="logo" value="<?=$row->logo?>"   class="form-control" required> 
                    </div>

                    <div class="form-group">
                        <button type="submit" name="" class="btn btn-success btn-flat"><i class="fa fa-paper-line"></i>Save</button>
                        <button type="reset" class="btn btn-default btn-flat"><i class=""></i> Reset</button>
                    <div>

                </form>
            </div>
            </div>
        </div>
    </div>
</section>