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
            <h4><?php echo $get_single_news['n_category']; ?></h4>
            <h2 style="text-transform: none;"><?php echo $get_single_news['n_title']; ?></h2>
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
                <a rel="nofollow" href="https://templatemo.com/tm-551-stand-blog" target="_parent">Download Now!</a>
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
      <div class="col-lg-8">
        <div class="all-blog-posts">
          <div class="row">
            <div class="col-lg-12">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="<?php echo base_url('uploads/news/' . $get_single_news['n_img']); ?>" alt="">
                </div>
                <div class="down-content">
                  <span><?php echo $get_single_news['n_category']; ?></span>
                  <h4><?php echo $get_single_news['n_title']; ?></h4>
                  <ul class="post-info">
                    <li><?php echo date("d M Y", strtotime($get_single_news['n_date'])); ?></li>
                  </ul>
                  <p><?php echo $get_single_news['n_description']; ?></p>

                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="sidebar">
          <div class="row">

            <div class="col-lg-12">
              <div class="sidebar-item recent-posts">
                <div class="sidebar-heading">
                  <h2>Recent Posts</h2>
                </div>
                <div class="content">
                  <ul>
                    <?php foreach ($get_limit5_news as $item) { ?>
                      <li>
                        <a href="<?php echo base_url('single/'.$item['n_id']); ?>">
                          <h5><?php echo $item['n_title']; ?></h5>
                          <span><?php echo date("d M Y", strtotime($item['n_date'])); ?></span>
                        </a>
                      </li>
                    <?php } ?>


                  </ul>
                </div>
              </div>
            </div>

            <div class="col-lg-12">
              <div class="sidebar-item tags">
                <div class="sidebar-heading">
                  <h2>Categories</h2>
                </div>
                <div class="content">
                  <ul>
                    <?php foreach ($get_all_categories as $item) { ?>
                      <li><a href="<?php echo base_url('category/'.$item['c_name']); ?>"><?php echo $item['c_name']; ?></a></li>
                    <?php } ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php $this->load->view('user/includes/footer'); ?>
<?php $this->load->view('user/includes/footerStyle'); ?>