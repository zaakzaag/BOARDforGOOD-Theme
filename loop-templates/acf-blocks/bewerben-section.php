<?php

$headTitle = get_field('title');
$counter = 1;
$btn_title = get_field('button_title');
$btn_link = get_field('button_link');
$email = get_field('email');
$phone_number = get_field('phone_number');
?>

<section class="section bewerben-section" id="bewerben">


    <div class="container-fluid ">


        <div class="row d-flex align-items-start justify-content-center ">

            <div class="col-lg-8 d-flex section-title">
<h2><?php echo $headTitle ?></h2>



            </div>

        </div>



                <?php if( have_rows('text') ): ?>
                    <?php while( have_rows('text') ): the_row(); 
                                    $subtitle = get_sub_field('subtitle');
                                    $subtext = get_sub_field('subtext');

                                    ?>
                             <div class="row d-flex align-items-start justify-content-center ">

                <div class="col-lg-8 page-title d-flex section-title d-flex flex-column subtitle">
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

            <div class="col-lg-8 d-flex">
                <h2>Jetzt bewerben!</h2>

            </div>

        </div>

        <?php if( have_rows('jetzt_bewerben') ): ?>
                    <?php while( have_rows('jetzt_bewerben') ): the_row(); 
                                    $point_desc = get_sub_field('point_desc');

                                    ?>
        <div class="row d-flex align-items-start justify-content-center pb-5">

<div class="col-1  numeration  ">
   <?php echo $counter; $counter++ ?>

</div>
<div class="col-7 description">
<?php echo $point_desc ?>
</div>
</div>
                    <?php endwhile; ?>  
                <?php endif; ?>





      
        <div class="row d-flex align-items-start justify-content-center pb-5">

            <div class="col-sm-8 d-flex d-flex  px-0  justify-content-lg-start justify-content-center">
            <button type="button" class="btn btn-bewerben"><?php echo $btn_title ?></button>

            </div>
         
        </div>

        <div class="row d-flex align-items-center justify-content-center pb-5 pt-3">

            <div class="col-md-4 d-flex flex-column px-0 more-ask">
                <h3> Noch Fragen? </h3>
           
Beate Eckhardt, Präsidentin Beirat der Board For Good Foundation, hilft dir gerne weiter:

<a href="mailto:<?php echo $email ?>"><?php echo $email ?></a>

<a href="tel:<?php echo $phone_number ?>"><?php echo $phone_number ?></a>



            </div>
            <div class="col-md-4 d-flex">
            Beate Eckhardt, Präsidentin Beirat der Board For Good Foundation, hilft dir gerne weiter:
info@boardforgood.ch+41 76 555 23 45
            </div>
        </div>

    </div>

    
</section>
