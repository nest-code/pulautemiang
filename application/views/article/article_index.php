<div class="content-wrapper" style="min-height: 246px;">
	<div class="container">
		<section class="content-header">
			<h1>
				Artikel
				<small>Artikel terbaru</small>
			</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i>Beranda</a></li>
				<li class="active">Artikel</li>
			</ol>
		</section>

		<section class="content">
			<?php
                foreach($row->result() as $key => $data) { ?>
			<div class="callout callout-info">
                <h4><?=$data->title?></h4>
                <span>oleh:</span>

				<p><?=$data->text?></p>
			</div>
			<?php
                    }?>

		</section>
	</div>
</div>
