<section class="content-header">
    <h1>
    Kategori Obat
    <small>Kategori Data</small>
    </h1>

    <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Beranda</a></li>
    <li class="active">Data Kategori Obat</li>
    </ol>
</section>


<section class="content">
    <?php $this->view('message');?>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Tabel Kategori Obat</h3>
            <div class="pull-right">
                <a href=" <?=site_url('category/add')?>" class="btn btn-primary btn-flat">
                <i class="fa fa-user-plus"></i> Add
                </a>
            </div>
        </div>

        <div class="box-body table-responsive">            
            <table class="table table-bordered table-striped" id="tabel1">
                <thead>
                    <tr>
                       <th>No</th>
                       <th>Name</th>
                       <th class="text-center">Action</th>    
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach($row->result() as $key => $data) { ?>
                    <tr>
                        <td style="width:4%;"> <?=$no++?>.</td>
                        <td><?=$data->name?></td>
                        <td class="text-center" width="">
                            <a href=" <?=site_url('category/edit/'.$data->category_id)?>"  class="btn btn-default btn-flat"><i class="fa fa-pencil"></i> Update</a>                       
                            <a href=" <?=site_url('category/del/'.$data->category_id)?>" onclick="return confirm(' Yankin hapus data ?')" class="btn btn-danger btn-flat"><i class="fa fa-pencil"></i> Delete</a>                       
                        </td>
                    </tr>
                        <?php
                    }?>
                </tbody>
            </table>
            </div>
    </div>
</section>