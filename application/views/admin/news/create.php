<?php $this->load->view('admin/includes/headerStyle'); ?>
<?php $this->load->view('admin/includes/leftMenu'); ?>
<?php $this->load->view('admin/includes/navbar'); ?>

<style>
    .spaceB {
        display: flex;
        justify-content: space-between;
    }
</style>
<div class="content_r">
    <div class="card">

        <h5 class="card-header spaceB">News Create
            <a href="<?php echo base_url('admin_news') ?>">
                <button type="button" class="btn  btn-sm btn-danger">Back</button>
            </a>
        </h5>


        <div class="card-body">

            <?php if ($this->session->userdata('err')) { ?>
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                    <use xlink:href="#exclamation-triangle-fill" />
                  </svg>
                  <div>
                    <?php echo $this->session->flashdata('err'); ?>
                  </div>
                </div>
            <?php } ?>

            <form action="<?php echo base_url('admin_news_create_act'); ?>" method="post" enctype="multipart/form-data">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control">
                <br>

                <label for="descr">Description</label>
                <textarea name="description" class="form-control" id="descr" cols="30" rows="10"></textarea>
                <br>

                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" style="float: left;">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="date" name="date">
                </div>

               

                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" style="float: left; margin:0px 10px">
                    <label for="cate">Category</label>
                    <select name="category" id="cate" class="form-control">
                        <option value="">-SELECT-</option>
                        <?php foreach($get_all_categories as $item){ ?>
                            <option value="<?php echo $item['c_name']; ?>"><?php echo $item['c_name']; ?></option>
                        <?php } ?>
                    </select>
                </div>


                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="float: left; margin:0px 10px">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="">-SELECT-</option>
                        <option value="Active">Active</option>
                        <option value="Deactive">Deactive</option>
                    </select>
                </div>


                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" style="float: left; margin:0px">
                    <label for="img">IMG</label>
                    <input type="file" id="img" class="form-control" name="user_img">
                </div>

                
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="float: left; margin:0px">
                    <br>    
                    <button type="submit" class="btn btn-success" style="float: right;">SEND</button>
                </div>


            </form>



        </div>
    </div>
    <!--/ Bordered Table -->
</div>


<?php $this->load->view('admin/includes/footer'); ?>
<?php $this->load->view('admin/includes/footerStyle'); ?>