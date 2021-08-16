<?php 

$underlined_word = get_field("underlined_word");
$rest_title = get_field("rest_title");
$description = get_field("description");
$circle_text = get_field("circle_text")
?>

<section class="section top-section ">


    <div class="container-fluid px-0">

        <div class="row d-flex align-items-start justify-content-center pb-4 pt-3 mx-0 position-relative">

            <div class="col-lg-7 col-sm-10 col-10 section-title text-center px-0 ">
                <div class="underline-word d-flex justify-content-center"><h1><?php echo $underlined_word ?></h1></div>
                <div class="rest-text"><h1> <?php echo $rest_title ?></h1></div>
               
            </div>
            <?php if(!empty($circle_text)): ?>
            <div class="circle-big position-absolute d-none d-md-flex justify-content-center align-items-center text-center">
                <?php echo $circle_text ?>
            </div>
            <?php endif;?>
        </div>
        
    <div class="hero-image d-flex justify-content-center mt-md-5 mt-lg-4 "><img class="hero-img" src="<?php echo get_template_directory_uri(); ?>/img/hero-image.png" > </div>
        

        <div class="row d-flex align-items-start justify-content-center gradient-part mx-0">

            <div class="col-lg-7 col-sm-8 col-10  description-top pb-5">
                <?php echo $description ?>
            </div>

        </div>

    </div>


    
</section>