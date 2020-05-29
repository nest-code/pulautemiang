<section class="content-header">
      <h1>
        Data Pasien
        <small>Cari Data Pasien</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Beranda</a></li>
        <li class="active">Data Pasien</li>
      </ol>
</section>

<section class="content" style="padding-top: 50px;"  >
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
            </div>
            <form role="form">
              <div class="box-body">
              <div class="input-group input-group-lg">
                <input type="text" class="form-control input-lg" name="" placeholder="Nomor Rekam Medis / Nomor KTP">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-info-lg btn-flat" data-toggle="modal" data-target="#modal-default">Cari</button>
                    </span>
              </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>


 <section class="content">
        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Default Modal</h4>
              </div>
              <div class="modal-body">
              <section class="content">


    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Tabel registrationklinik</h3>
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
                            <a href=" <?=site_url('registration/edit/'.$data->patient_id)?>"  class="btn btn-default btn-flat"><i class="fa fa-pencil"></i> Update</a>                       
                            <a href=" <?=site_url('registration/del/'.$data->patient_id)?>" onclick="return confirm(' Yankin hapus data ?')" class="btn btn-danger btn-flat"><i class="fa fa-pencil"></i> Delete</a>                       
                        </td>
                    </tr>
                        <?php
                    }?>
                </tbody>
            </table>
            </div>
    </div>
</section>


              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
    </section>
