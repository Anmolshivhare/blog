 <!-- End Header -->

 <main id="main">

     <!-- ======= Breadcrumbs ======= -->
     <div class="breadcrumbs">
         <div class="page-header d-flex align-items-center" style="background-image: url('');">
             <div class="container position-relative">
                 <div class="row d-flex justify-content-center">
                     <div class="col-lg-6 text-center">
                         <h2>Blog</h2>
                         <!-- <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.
              </p> -->
                     </div>
                 </div>
             </div>
         </div>
         <nav>

             <div class="container">
                 <ol>
                     <li><a href="<?php  echo base_url();?>">Home</a></li>
                     <li>Blog</li>
                     <li class="float-right"><a href="http://localhost/blog/admin"
                             class="btn btn-primary text-white">Login</a></li>

                 </ol><br> 
                 <input type="text" id="myInput" onkeyup="mySearchFunction()" placeholder="Search" style="padding: 1px 0px 2px 10px;
     "><button type="reload" onkeyup="mySearchFunction()"><i class="fa fa-search"></i></button>

             </div>
         </nav>
     </div><!-- End Breadcrumbs -->

     <!-- ======= Blog Section ======= -->
     
     <section id="blog" class="blog">
         <div class="container" data-aos="fade-up">
             <ul id="stateList" style="padding-left: 0px;">
                 <div class="row gy-4 posts-list">
                     <?php foreach($viewblog as $view){

                      ?>
                     <section class="col-xl-4 col-md-6" style="padding:15px 15px;">
                         <article>

                             <div class="post-img">
                                 <a href="<?php echo base_url();?>home/blog_details/<?php echo $view->id;?>"><img
                                         src="<?php echo base_url();?>upload_images/<?php echo $view->b_img;?>" alt=""
                                         class="img-fluid" width="100%" style="height:300px !important;"></a>
                             </div>

                             <p class="post-category"><?php echo $view->b_title;?></p>

                             <h2 class="title">
                                 <a
                                     href="<?php echo base_url();?>home/blog_details/<?php echo $view->id;?>"><?php echo $view->b_heading;?></a>
                             </h2>

                             <div class="d-flex align-items-center">
                                 <!-- <img src="<?php echo base_url();?>front_assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0"> -->
                                 <div class="post-meta">
                                     <p class="post-author-list"><?php echo $view->b_name;?></p>
                                     <p class="post-date">
                                         <time datetime="2022-01-01"><?php
                                $date=date_create($view->createdate);
                                echo date_format($date,"M d,Y");
                          ?></time>
                                     </p>
                                 </div>
                             </div>

                         </article>
                     </section><!-- End post list item -->
                     <?php  } ?>
                 </div>
             </ul>

     </section><!-- End Blog Section -->

 </main><!-- End #main -->

 <!-- ======= Footer ======= -->









<!-- 
 <div>Alabama</div>
 <div>Alaska</div>
 <div>Arizona</div>
 <div>Arkansas</div>
 <div>California</div>
 <h1>hello</h1> -->




 <script>
function mySearchFunction() {
    // Declare variables
    var input, filter, ul, div, item, i, txtValue;
    // User Input
    input = document.getElementById("myInput");
    // Filter, makes search not case sensitive
    filter = input.value.toUpperCase();
    // Grabs the parent element by id
    ul = document.getElementById("stateList");
    // Individual item on list
    div = ul.getElementsByTagName("section");

    // Treats lists items like an array, where each item can be accessed through      it's index
    for (i = 0; i < div.length; i++) {
        item = div[i];
        // Iterate over each list item to see if the value of the input, ignoring         case, matches the inner text or inner html of the item.
        txtValue = item.textContent || item.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            // Displays list items that are a match, and nothing if no match
            div[i].style.display = "";
        } else {
            div[i].style.display = "none";
        }
    }
}
 </script>