<section class="content-header">
      <h1>
        Obat
        <small>Data Obat</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Data Obat</li>
      </ol>
</section>

<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"> <?=ucfirst($page)?> Obat</h3>
            <div class="pull-right">
                <a href=" <?=site_url('user/add')?>" class="btn btn-warning btn-flat">
                <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>

        
        <div class="box-body ">            
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                <form action="<?=site_url('drug/process')?>" method="post">

                    <div class="form-group">
                        <label >Name Obat *</label>
                        <input type="hidden" name="id" value="<?=$row->drug_id?>" > 
                        <input type="text" name="drug_name" value="<?=$row->name?>"  class="form-control" required> 
                    </div>


                    
                    <div class="form-group">
                    <label> Kategori Artikel *</label>
                        <?php echo form_dropdown('cad', $cad, $selectedcad, ['class' => 'form-control', 'required']) ?>
                    </div>

                    
                    <div class="form-group">
                        <label >Harga Obat</label>
                        <input type="text" name="price_unit" value="<?=$row->price_unit?>"  class="form-control" required> 
                    </div>

                    <div class="form-group">
                        <label >Stok</label>
                        <input type="text" name="stock" value="<?=$row->stock?>"  class="form-control" required> 
                    </div>

                    <div class="form-group">
                        <label >Keterangan</label>
                        <input type="text" name="information" value="<?=$row->information?>"  class="form-control" required> 
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