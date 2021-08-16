<?php

$headTitle = get_field('title');
$counter = 1;
$btn_title = get_field('button_title');
$btn_link = get_field('button_link');
$email = get_field('email');
$phone_number = get_field('phone_number');
$ask_more = get_field('ask_more');
$subsection_title = get_field('subsection_title')
?>

<section class="section bewerben-section pb-5" id="bewerben">


    <div class="container-fluid ">

        <div class="row d-flex align-items-start justify-content-center ">
            <div class="col-lg-7 col-sm-8 col-10  d-flex section-title">
                <h2><?php echo $headTitle ?></h2>
            </div>
        </div>

        <?php if( have_rows('text') ): ?>
            <?php while( have_rows('text') ): the_row(); 
                            $subtitle = get_sub_field('subtitle');
                            $subtext = get_sub_field('subtext');

                            ?>
                <div class="row d-flex align-items-start justify-content-center ">

                    <div class="col-lg-7 col-sm-8 col-10 page-title d-flex section-title d-flex flex-column subtitle">
                        <h3><? echo $subtitle ?></h3>
                                <? echo $subtext ?>
                    </div>

                </div>
            <?php endwhile; ?>  
        <?php endif; ?>


    </div>
</section>


<section class="section jetzt-bewerben-section">

    <div class="container-fluid ">

        <div class="row d-flex align-items-start justify-content-center ">
            <div class="col-lg-7 col-sm-8 col-10 d-flex">
                <h2><?php echo $subsection_title ?></h2>
            </div>
        </div>

        <?php if( have_rows('jetzt_bewerben') ): ?>
            <?php while( have_rows('jetzt_bewerben') ): the_row(); 
                            $point_desc = get_sub_field('point_desc');
                            ?>
                <div class="row d-flex align-items-start justify-content-center pb-4">
                    <div class="col-lg-7 col-sm-8 col-10 d-flex">
                        <div class="steps d-flex">
                            <div class="numeration d-flex align-items-center justify-content-center">
                                    <?php echo $counter; $counter++ ?>
                            </div>
                            <div class="description">
                                <?php echo $point_desc ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>  
        <?php endif; ?>





      
        <div class="row d-flex align-items-start justify-content-center pb-3">

            <div class="col-sm-7  d-flex d-flex    justify-content-lg-start justify-content-center">
                <a href="<?php echo $btn_link ?>" class="btn btn-bewerben d-flex justify-content-center align-items-center">
                    <?php echo $btn_title ?>
                </a>
            </div>
         
        </div>

        <div class="row d-flex align-items-center justify-content-center pt-5 pt-md-3 ">
            <div class="col-9 col-sm-7 col-lg-3 d-flex flex-column justify-content-center  more-ask">
                <?php echo $ask_more ?>
                <a href="mailto:<?php echo $email ?>"><?php echo $email ?></a>
                <a href="tel:<?php echo $phone_number ?>"><?php echo $phone_number ?></a>

            </div>
            <div class="col-lg-4  d-flex img-col justify-content-center justify-content-lg-end">
                <img class="bewerben-img" src="<?php echo get_template_directory_uri(); ?>/img/bewerben-image.png" >
            </div>
        </div>
        
    </div>

    
</section>
