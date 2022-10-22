    <?php $this->load->view('user/includes/headerStyle'); ?>
    <?php $this->load->view('user/includes/navbar'); ?>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text">
      <div class="container-fluid">
        <div class="owl-banner owl-carousel">

          <?php foreach ($get_all_news as $item) { ?>
            <div class="item">
              <img width="100%" height="400" style="object-fit: cover;" src="<?php echo base_url('uploads/news/' . $item['n_img']); ?>" alt="">
              <div class="item-content">
                <div class="main-content">
                  <div class="meta-category">
                    <span><?php echo $item['n_category']; ?></span>
                  </div>
                  <a href="post-details.html">
                    <h4><?php echo $item['n_title']; ?></h4>
                  </a>
                  <ul class="post-info">
                    <li><a href="#"><?php echo $item['a_name']; ?></a></li>
                    <li><a href="#"><?php echo date("M d Y", strtotime($item['n_date'])); ?></a></li>
                  </ul>
                </div>
              </div>
            </div>
          <?php } ?>






        </div>
      </div>
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


    <section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">

                <?php foreach ($get_limit_news as $item) { ?>
                  <div class="col-lg-12">
                    <div class="blog-post">
                      <div class="blog-thumb">
                        <img width="100%" height="450px" style="object-fit: cover;" src="<?php echo base_url('uploads/news/' . $item['n_img']); ?>" alt="">
                      </div>
                      <div class="down-content">
                        <span><?php echo $item['n_category']; ?></span>
                        <a href="post-details.html">
                          <h4><?php echo $item['n_title']; ?></h4>
                        </a>
                        <ul class="post-info">
                          <li><a href="#"><?php echo $item['a_name']; ?></a></li>
                          <li><a href="#"><?php echo date("M d Y", strtotime($item['n_date'])); ?></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                <?php } ?>



                <div class="col-lg-12">
                  <div class="main-button">
                    <a href="blog.html">View All Posts</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
                <div class="col-lg-12">
                  <div class="sidebar-item search">
                    <form id="search_form" name="gs" method="GET" action="#">
                      <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
                    </form>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                      <h2>Recent Posts</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <?php foreach($get_limit5_news as $item){ ?>
                          <li>
                            <a href="post-details.html">
                              <h5><?php echo $item['n_title']; ?></h5>
                              <span><?php echo date("M d Y", strtotime($item['n_date'])); ?></span>
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
                        <?php foreach($get_all_categories as $item){ ?>
                          <li><a href="<?php echo $item['c_name']; ?>"><?php echo $item['c_name']; ?></a></li>
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