<section class="content-header">
      <h1>
        Pengguna Sistem
        <small>Data Pengguna</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Beranda</a></li>
        <li class="active">Data Pengguna</li>
      </ol>
</section>


<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Pengguna</h3>
            <div class="pull-right">
                <a href=" <?=site_url('user/add')?>" class="btn btn-primary btn-flat">
                <i class="fa fa-user-plus"></i> Add
                </a>
            </div>
        </div>

        <div class="box-body table-responsive">            
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                       <th style="width:4%;">No</th>
                       <th>Username</th>
                       <th>Name</th> 
                       <th>Address</th>
                       <th>Level</th>
                       <th class="text-center">Action</th>    
                    </tr>
                </thead>

                <tbody>

                    <?php $no = 1;
                       foreach($row->result() as $key => $data) { ?>
                    <tr>
                        <td><?=$no++?>.</td>
                        <td><?=$data->username?></td>
                        <td><?=$data->name?></td>
                        <td><?=$data->address?></td>
                        <td><?=$data->level == 1 ? "Admin" : "Kasir" ?></td>
                        
                        <td class="text-center" width="">
                            <form action="<?=site_url('user/del')?>" method="post">
                                <input type="hidden" name="user_id" value="<?=$data->user_id?>">    
                                <a href=" <?=site_url('user/edit/'.$data->user_id)?>" class="btn btn-primary btn-flat"><i class="fa fa-pencil"></i> Update</a>                       
                                <button onclick="return confirm('Apakah Anda Yankin ?')" type="submit" class="btn btn-danger btn-flat"> <i class="fa fa-trash"></i> Delete</button>
                        </form>                           
                        </td>
                    </tr>
                        <?php
                    }?>
                </tbody>
            </table>
            </div>
    </div>
</section>