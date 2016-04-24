      <!-- Full Width Column -->
      <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              iService表白墙
              <small>Version 1.0</small>
            </h1>
          </section>

          <!-- Main content -->
          <section class="content">

          <div class="row">
          <div class="col-md-12">

                <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">发布表白</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="<?php echo base_url('release/action');?>">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">谁发布的表白</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name = "from" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">给谁的表白</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name = "to_who" placeholder="">
                    </div>
                    <div class="form-group">
                      <label>表白内容</label>
                      <textarea class="form-control" rows="3" name = "content" placeholder="嘿嘿嘿，表白吧 ..."></textarea>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">发布</button>
                  </div>
                </form>
              </div>


            </div>
            </div>
          </section><!-- /.content -->
      </div><!-- /.content-wrapper -->