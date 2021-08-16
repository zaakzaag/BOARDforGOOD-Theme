<?php

$sectionTitle = get_field('section_title');
$description= get_field('description');
$board_title= get_field('board_title');
$counter = 1;
$btn_title = get_field('button_title');
$btn_link = get_field('button_link');
$email = get_field('email');
$phone_number = get_field('phone_number');
?>

<section class="section uberuns-section pb-5" id="uberuns">


    <div class="container-fluid ">


        <div class="row d-flex align-items-start justify-content-center ">

            <div class="col-lg-7 col-sm-8 col-10 d-flex section-title">
            <h2><?php echo $sectionTitle ?></h2>



            </div>

        </div>

        <div class="row d-flex align-items-start justify-content-center ">

            <div class="col-lg-7 col-sm-8 col-10 page-title d-flex section-title d-flex flex-column subtitle pb-5">
                <?php echo $description ?>
            </div>
        </div>

        <div class="row d-flex align-items-start justify-content-center ">

            <div class="col-lg-7 col-sm-8 col-10 d-flex section-title">
            <h3><? echo $board_title ?></h3>



            </div>

        </div>

                <?php if( have_rows('advisory_board') ): ?>
                    <?php while( have_rows('advisory_board') ): the_row(); 
                                    $name_and_role = get_sub_field('name_and_role');
                                    $details = get_sub_field('details');
                                    $linkedin_link = get_sub_field('linkedin_link');
                                    $img = get_sub_field('photo');
                                    $photo_url = $img['url'];

                                    ?>
                        <div class="row d-flex align-items-center justify-content-center  pt-4  pb-4">

                            <div class="col-lg-7 col-sm-8 col-10 d-flex section-title">
                               <div class="person d-flex align-items-center">
                                    <div class="person-img d-flex">
                                        <img src="<?php echo $photo_url?>" alt="Person">
                                    </div>
                                    <div class="person-details d-flex flex-column">
                                        <div class="name-role"><?php echo $name_and_role ?></div>
                                        <div class="details"><?php echo $details ?></div>
                                        <a href="<?php echo $linkedin_link ?>"><i class="fa fa-linkedin-square" aria-hidden="true"></i> LinkedIn </a>
                                    </div>

                               </div>
                            </div>

                        </div>
                    <?php endwhile; ?>  
                <?php endif; ?>


    
</section>
