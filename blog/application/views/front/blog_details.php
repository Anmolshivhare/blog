 <main id="main">

     <!-- ======= Breadcrumbs ======= -->
     <div class="breadcrumbs">
         <div class="page-header d-flex align-items-center" style="background-image: url('');">
             <div class="container position-relative">
                 <div class="row d-flex justify-content-center">
                     <div class="col-lg-6 text-center">
                         <h2>Blog Details</h2>
                         <!-- <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p> -->
                     </div>
                 </div>
             </div>
         </div>
         <nav>
             <div class="container">
                 <ol>
                     <li><a href="<?php echo base_url();?>">Home</a></li>
                     <li>Blog Details</li>
                 </ol>
             </div>
         </nav>
     </div><!-- End Breadcrumbs -->

     <!-- ======= Blog Details Section ======= -->
     <section id="blog" class="blog">
         <div class="container" data-aos="fade-up">

             <div class="row g-5">

                 <div class="col-lg-7">

                     <article class="blog-details">

                         <div class="post-img">
                             <img src="<?php echo base_url();?>upload_images/<?php echo $viewblog[0]->b_img;?>" alt=""
                                 class="img-fluid">
                         </div>

                         <h2 class="title"><?php echo $viewblog[0]->b_heading;?></h2>

                        

                         <div class="meta-top">
                             <ul>
                                 <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                         href="#"><?php echo $viewblog[0]->b_name;?></a></li>
                                 <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time
                                             datetime="2020-01-01">
                                             <?php
                                $date=date_create($view->createdate);
                                echo date_format($date,"M d,Y");
                          ?></time></a></li>
                                 <!-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12 Comments</a></li> -->
                             </ul>


                         </div><!-- End meta top -->

                        <br> 
                         <p style="text-align:
                             justify;">
 
                             <?php echo $viewblog[0]-> b_description;?>
                             </p> 

                         <div class="content" id="Et_quae_iure_vel_ut_odit_alias">
                             <!-- <p>
                  Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                  Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.
                </p>

                <p>
                  Sit repellat hic cupiditate hic ut nemo. Quis nihil sunt non reiciendis. Sequi in accusamus harum vel aspernatur. Excepturi numquam nihil cumque odio. Et voluptate cupiditate.
                </p> -->

                             <!-- <blockquote>
                  <p>
                    Et vero doloremque tempore voluptatem ratione vel aut. Deleniti sunt animi aut. Aut eos aliquam doloribus minus autem quos.
                  </p>
                </blockquote> -->


                             <?php  //echo $viewblog[0]->b_ques1 ;
                
                 $question = json_decode($viewblog[0]->b_ques1);
                 $answer = json_decode($viewblog[0]->b_desc1);
                //   print_r($question);
                $y=1;
                $i=0;
                foreach($question as $view) {
                ?>
                   <br>
                              <h5 id="ques<?php echo $i;?>" style="color:#008374;"><?php echo $y; ?> .<b> <?php echo $question[$i] ;?>.</b>  </h5>
                             <p style="text-align:
                             justify;">
                             <?php echo $answer[$i] ;?>.
                             </p> 
                            <?php $i++; 
                            $y++; } 
                            ?>

                             




                         </div><!-- End post content -->

                         <div class="meta-bottom">
                             <i class="bi bi-folder"></i>
                             <ul class="cats">
                                 <li><a href="#">Business</a></li>
                             </ul>

                             <i class="bi bi-tags"></i>
                             <ul class="tags">
                                 <li><a href="#">Creative</a></li>
                                 <li><a href="#">Tips</a></li>
                                 <li><a href="#">Marketing</a></li>
                             </ul>
                         </div><!-- End meta bottom -->

                     </article><!-- End blog post -->

                     <!-- <div class="post-author d-flex align-items-center">
              <img src="assets/img/blog/blog-author.jpg" class="rounded-circle flex-shrink-0" alt="">
              <div>
                <h4>Jane Smith</h4>
                <div class="social-links">
                  <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                  <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                  <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                </div>
                <p>
                  Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                </p>
              </div>
            </div> -->
                     <!-- End post author -->

                 </div>

                 <div class="col-lg-5">

                     <div class="sidebar">

                         <!-- <div class="sidebar-item search-form">
                <h3 class="sidebar-title">Search</h3>
                <form action="" class="mt-3">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div> -->
                         <!-- End sidebar search formn-->

                         <div class="sidebar-item categories">
                             <h3 class="sidebar-title">Questions:</h3>
                             <ul class="mt-3">
                                 <?php //echo $viewblog[0]->b_ques1 ;
                              $i=1;
                              $id=0;
                              foreach(json_decode($viewblog[0]->b_ques1) as $ques){
                              ?>

                           
                                 <li>
                                     <h5><a href="#ques<?php echo $id;?>"><?php echo $i; ?>. <b> <?php echo $ques ;?>.</b></a></h5>
                                 </li>

                                 <?Php
                                  $i++;
                                  $id++;
                                  } ?>


                             </ul>
                         </div><!-- End sidebar categories-->

                         <div class="sidebar-item recent-posts">
                             <h3 class="sidebar-title">Recent Posts</h3>
                             <?php foreach($viewdata as $view){

                  ?>
                             <div class="mt-3">

                                 <div class="post-item mt-3">
                                     <img src="<?php echo base_url();?>upload_images/<?php echo $view->b_img;?>" alt="">
                                     <div>
                                         <h4><a
                                                 href="<?php echo base_url();?>home/blog_details/<?php echo $view->id;?>"><?php echo $view->b_heading;?></a>
                                         </h4>
                                         <time datetime="2020-01-01">
                                             <?php
                                $date=date_create($view->createdate);
                                echo date_format($date,"M d,Y");
                          ?>

                                         </time>
                                     </div>
                                 </div>


                             </div>
                             <?php } ?>

                         </div><!-- End sidebar recent posts-->

                         <!-- <div class="sidebar-item tags">
                <h3 class="sidebar-title">Tags</h3>
                <ul class="mt-3">
                  <li><a href="#">App</a></li>
                  <li><a href="#">IT</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Mac</a></li>
                  <li><a href="#">Design</a></li>
                  <li><a href="#">Office</a></li>
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Studio</a></li>
                  <li><a href="#">Smart</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div> -->
                         <!-- End sidebar tags-->

                     </div><!-- End Blog Sidebar -->

                 </div>
             </div>

         </div>
     </section><!-- End Blog Details Section -->

 </main><!-- End #main -->