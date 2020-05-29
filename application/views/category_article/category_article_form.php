<section class="content-header">
      <h1>
        Kategori Artikel
        <small>Data Kategori Artikel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Data Kategori Artikel</li>
      </ol>
</section>


<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"> <?=ucfirst($page)?> Artikel</h3>
            <div class="pull-right">
                <a href=" <?=site_url('user/add')?>" class="btn btn-warning btn-flat">
                <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>

        
        <div class="box-body ">            
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                <form action="<?=site_url('categoryarticle/process')?>" method="post">

                    <div class="form-group">
                        <label >Nama Kategori Artikel *</label>
                        <input type="hidden" name="id" value="<?=$row->c_article_id ?>" > 
                        <input type="text" name="c_article_name" value="<?=$row->name?>"  class="form-control" required> 
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