      <!-- Full Width Column -->
      <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              iService表白墙
              <small>Version 1.0</small>
            </h1>
            <!-- <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="#">Layout</a></li>
              <li class="active">Top Navigation</li>
            </ol> -->
          </section>

          <!-- Main content -->
          <section class="content">

          <div class="row">
          <div class="col-md-12">

          	<button class="btn btn-block btn-success" onclick="javascript:window.location.href='<?php echo base_url('release');?>'">点我发布表白 Ψ(￣∀￣)Ψ</button><br>

          	<?php foreach($detail as $key => $list_detail){   ?>
            <div class="callout callout-info">
              <h4>From &nbsp;&nbsp;<?php echo $list_detail['from'];?> &nbsp;&nbsp; to &nbsp;&nbsp; <?php echo $list_detail['to_who'];?></h4>
              <p><?php echo $list_detail['content'];?></p>
              <span class="pull-right">发表于：<?php echo $list_detail['release_time'];?></span>
              <br>
            </div>
            <?php }?>

            </div>
            </div>

            <center>
         	<?php echo $pagination;?>
         	</center>

          </section><!-- /.content -->
      </div><!-- /.content-wrapper -->