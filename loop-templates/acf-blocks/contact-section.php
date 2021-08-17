<?php

$section_title = get_field('section_title');
$privacy_policy = get_field('privacy_policy');

?>

<section class="section contact-section pb-5" id="Kontakt">

    <div class="container-fluid ">

        <div class="row d-flex align-items-start justify-content-center ">

            <div class="col-lg-7 col-md-10 col-sm-11 col-12 d-flex">
                <h2><?php echo $section_title ?></h2>
            </div>
        </div>



        <?php if( have_rows('address') ): ?>
            <?php while( have_rows('address') ): the_row(); 
                                    $address_data = get_sub_field('address_data');
                                    ?>
                <div class="row d-flex align-items-start justify-content-center py-2 ">

                    <div class="col-lg-7 col-md-10 col-sm-11 col-12 d-flex">
                        <address>
                            <?php echo $address_data ?>
                        </address>
                    </div>
                </div>
            <?php endwhile; ?>  
        <?php endif; ?>


        <div class="go-to-top d-flex justify-content-between align-items-center pt-4 pb-2 mx-4">
            <div class="privacy-policy">
                <?php if ($privacy_policy): ?>
                    <a href="<?php echo $privacy_policy['privacy_policy_link'] ?>"><?php echo $privacy_policy['privacy_policy_title'] ?></a>
                <?php endif; ?>
            </div>
            <div id="btn-top" class="go-top-btn btn btn-outline-dark d-flex justify-content-center align-items-center ">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-arrow-top.svg" > 
                Top
            </div>
        </div>
    
    </div>
</section>
