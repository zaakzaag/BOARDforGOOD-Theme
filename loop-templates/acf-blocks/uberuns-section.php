<?php

$headTitle = get_field('title');
$counter = 1;
$btn_title = get_field('button_title');
$btn_link = get_field('button_link');
$email = get_field('email');
$phone_number = get_field('phone_number');
?>

<section class="section uberuns-section" id="uber-uns">


    <div class="container-fluid ">


        <div class="row d-flex align-items-start justify-content-center ">

            <div class="col-lg-8 d-flex section-title">
            <h2>Über uns</h2>



            </div>

        </div>

        <div class="row d-flex align-items-start justify-content-center ">

            <div class="col-lg-8 page-title d-flex section-title d-flex flex-column subtitle pb-5">
                <h3>Engagiert für junge Köpfe und frische Ideen</h3>

                <p>Die Board For Good Foundation wurde im Juni 2021 von Beate Eckhardt und Prof. Dr. Georg von Schnurbein gegründet. Die gemeinnützige und steuerbefreite Board For Good Foundation ist als unselbständige Stiftung unter dem Dach der Fondation des Fondateurs organisiert. 
                </p>
                <p>Die Stipendien werden von mehreren Schweizer Förderstiftungen finanziert, das gesamte Programm von der Credit Suisse und verschiedenen Netzwerkpartnern unterstützt. Unser Gründungspartner ist SwissFoundations, der Verband der Schweizer Förderstiftungen.
                </p>


            </div>
        </div>
        <div class="row d-flex align-items-start justify-content-center ">

            <div class="col-lg-8 page-title d-flex section-title d-flex flex-column pb-5">
                <h3>Beirat</h3>

                <?php if( have_rows('advisory_board') ): ?>
                    <?php while( have_rows('advisory_board') ): the_row(); 
                                    $name_and_role = get_sub_field('name_and_role');
                                    $details = get_sub_field('details');
                                    $linkedin_link = get_sub_field('linkedin_link');
                                    $img = get_sub_field('photo');
                                    $photo_url = $img['url'];

                                    ?>
                        <div class="row d-flex align-items-center pt-4  pb-4">

                            <div class="col-2  col_person_photo  ">
                                <img src="<?php echo $photo_url?>" alt="Person">
                            </div>

                            <div class="col-8 d-flex flex-column person-details">
                                <div class="name-role"><?php echo $name_and_role ?></div>
                                <div class="details"><?php echo $details ?></div>
                                <a href="<?php echo $linkedin_link ?>"><i class="fa fa-linkedin-square" aria-hidden="true"></i> LinkedIn </a>
                            </div>

                        </div>
                    <?php endwhile; ?>  
                <?php endif; ?>


            </div>

        </div>

    
</section>
