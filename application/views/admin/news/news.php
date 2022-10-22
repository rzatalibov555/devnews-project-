<?php

// print_r("<pre>");
// print_r($get_all_news);
// die;
$this->load->view('admin/includes/headerStyle'); ?>
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
        <h5 class="card-header spaceB">News List
            <a href="<?php echo base_url('admin_news_create') ?>">
                <button type="button" class="btn  btn-sm btn-success">Create</button>
            </a>
        </h5>

        <div class="card-body">

            <?php if ($this->session->userdata('success')) { ?>
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                        <use xlink:href="#exclamation-triangle-fill" />
                    </svg>
                    <div>
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                </div>
            <?php } ?>


            <div class="table-responsive text-nowrap">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Category</th>
                            <th>Creator name</th>
                            <th>Img</th>
                            <th>Status</th>
                            <th>Updated</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        
                        <?php $say = 0; foreach ($get_all_news as $item) { $say++ ?>
                            <tr>
                                <td><?php echo $say; ?></td>
                                <td><?php echo $item['n_title']; ?></td>
                                <td><?php echo date("d-m-Y", strtotime($item['n_date'])); ?></td>
                                <td><?php echo $item['n_category']; ?></td>
                                <td><?php echo $item['a_name']; ?></td>
                                <td>
                                    <?php if($item['n_img']){ ?>

                                        <?php if($item['n_file_ext'] == ".pdf") { ?>
                                            <img width="50" height="50" style="object-fit: cover;" src="https://media.istockphoto.com/vectors/icon-major-file-format-vector-icon-illustration-vector-id1298834280?k=20&m=1298834280&s=612x612&w=0&h=SxEbyHKi18H1XpPpKKzoppWgMM3x0tc3veN5e6wl7Y8=" alt="">
                                            
                                        <?php }else{ ?>
                                            <img width="50" height="50" style="object-fit: cover;" src="<?php echo base_url('uploads/news/'.$item['n_img']); ?>" alt="">
                                        <?php } ?>


                                        
                                    <?php }else{ ?>
                                        <img width="50" height="50" style="object-fit: cover;" src="https://media.istockphoto.com/vectors/default-image-icon-vector-missing-picture-page-for-website-design-or-vector-id1357365823?k=20&m=1357365823&s=612x612&w=0&h=ZH0MQpeUoSHM3G2AWzc8KkGYRg4uP_kuu0Za8GFxdFc=" alt="">
                                    <?php } ?>
                                    
                                </td>
                                <td>
                                    <?php if($item['n_status'] == "Active"){ ?>
                                        <span class="badge bg-label-success me-1"><?php echo $item['n_status']; ?></span>
                                    <?php }else if($item['n_status'] == "Deactive"){ ?>
                                        <span class="badge bg-label-danger me-1"><?php echo $item['n_status']; ?></span>
                                    <?php }else{ ?>
                                        <span class="badge bg-label-primary me-1">-was problem-</span>
                                    <?php } ?>
                                    
                                </td>

                                <td>
                                    <?php if($item['n_updater_id']){ ?>
                                        Edited 
                                    <?php } ?>
                                </td>

                                <td>
                                    <a href="<?php echo base_url('admin_news_detail/'.$item['n_id']); ?>">
                                        <button type="button" class="btn btn-sm btn-outline-info">Detail</button>
                                    </a>
                                    
                                    <a href="<?php echo base_url('admin_news_edit/'.$item['n_id']); ?>">
                                        <button type="button" class="btn btn-sm btn-outline-warning">Edit</button>
                                    </a>
                                    
                                    
                                    <a onclick="return confirm('Məlumatı silmək istədiyinizə əminsiniz?')" href="<?php echo base_url('admin_news_delete/'.$item['n_id']); ?>">
                                        <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>
                                    </a>
                                    
                                </td>
                            </tr>
                        <?php } ?>




                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/ Bordered Table -->
</div>


<?php $this->load->view('admin/includes/footer'); ?>
<?php $this->load->view('admin/includes/footerStyle'); ?>