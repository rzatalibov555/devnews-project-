<?php $this->load->view('user/includes/headerStyle'); ?>
<?php $this->load->view('user/includes/navbar'); ?>
<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="heading-page header-text">
  <section class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-content">
            <h4>Recent Posts</h4>
            <h2>Our Recent Blog Entries</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- Banner Ends Here -->

<section class="call-to-action">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="main-content">
          <div class="row">
            <div class="col-lg-8">
              <span>Stand Blog HTML5 Template</span>
              <h4>Creative HTML Template For Bloggers!</h4>
            </div>
            <div class="col-lg-4">
              <div class="main-button">
                <a href="https://templatemo.com/tm-551-stand-blog" target="_parent">Download Now!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="blog-posts grid-system">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="all-blog-posts">
          <div class="row">

          <?php foreach($category as $item){ ?>
            <div class="col-lg-4">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img width="100%" height="300px" style="object-fit: cover;" src="<?php echo base_url('uploads/news/'.$item['n_img']); ?>" alt="">
                </div>
                <div class="down-content">
                  <span><?php echo $item['n_category']; ?></span>
                  <a href="<?php echo base_url('single/'.$item['n_id']); ?>">
                  
                    <?php if(strlen($item['n_title']) >= 40){ ?>
                      <h4><?php echo mb_substr($item['n_title'],0,40,"UTF-8")."..."; ?></h4>
                    <?php }else{ ?>
                      <h4><?php echo $item['n_title']; ?></h4>
                    <?php } ?>
                    
                  </a>
                  <ul class="post-info">
                    <li><a href="#"><?php echo date("M d Y", strtotime($item['n_date'])); ?></a></li>
                  </ul>
                </div>
              </div>
            </div>
          <?php } ?>
            







          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<?php $this->load->view('user/includes/footer'); ?>
<?php $this->load->view('user/includes/footerStyle'); ?>