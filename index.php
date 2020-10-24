<html>
<head>
    <title></title>
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<div class="container">
    <div class="tmp_header">
        <h1><?php bloginfo("name"); ?></h1>
    </div>
    <div class="tmp_title">
        <p><?php bloginfo("description"); ?></p>
    </div>
    <hr>
    
    <div class="post" >
        
       
        <div class="row">
            <?php while(have_posts()):
            the_post();    
        ?>
        <div class="col-md-12" <?php post_class(); ?>>
            <div class="card">
                <div class="card-body">
                    <div class="author">
                        <p><?php the_author(); ?></p>
                    </div>
                    <div class="date">
                        <p><?php the_date(); ?></p>
                    </div>
                    <div class="post_title">
                        <a href="#"><p><?php the_title(); ?></p></a>
                    </div>
                    <div class="post_img">
                        <a href="#"><?php if(has_post_thumbnail()){
                            the_post_thumbnail();
                        } ?></a>
                    </div>
                    
                    <div class="post_para">
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
            </div>
            <hr>
        </div>
        <?php endwhile; ?> 
            


            
            


            
            



            


           


            

            

            
        </div>
        
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="footer_text">
            <p>All rights to Codember</p>
        </div>
    </div>
</div>

<?php wp_footer(); ?>




</body>
</html>