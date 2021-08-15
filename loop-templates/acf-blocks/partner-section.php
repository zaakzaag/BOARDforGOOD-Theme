<section class="section partner-section pb-4" id="partner">


    <div class="container-fluid ">


        <div class="row d-flex align-items-start justify-content-center ">

            <div class="col-lg-7 col-sm-8 col-10 d-flex section-title">
            <h2>Partner</h2>
            </div>

        </div>
        <div class="row d-flex align-items-start justify-content-center pb-5">
            <div class="col-lg-7 col-sm-8 col-10 section-title d-table">
                    <?php if( have_rows('partners') ): ?>
                        <?php while( have_rows('partners') ): the_row(); 
                                        $role_name = get_sub_field('role_name');
                                        ?>
                                        <div class="partner d-table-row">
                                            <div class=" partner-role d-table-cell pt-3">
                                                <?php echo $role_name ?>
                                            </div>
                                            <div class=" pl-4 pr-md-2 partner-info d-table-cell">
                                           
                                                <?php if( have_rows('partner_info') ): ?>
                                                    <?php while( have_rows('partner_info') ): the_row(); 
                                                            $partner_name = get_sub_field('partner_name');
                                                            $partner_link = get_sub_field('partner_link');
                                                            ?>
                                                                  
                                                                        <a href="<? echo $partner_link ?>">
                                                            <? echo $partner_name ?>
                                                        </a>
                                                                     
                                                    
                                               
                                    

                                                    <?php endwhile; ?>  
                                                <?php endif; ?>
                                                     
                                            </div>

                                        </div>
                        <?php endwhile; ?>  
                    <?php endif; ?>
                </div>
             </div>

            <div class="row d-flex align-items-start justify-content-center pt-5 pb-4">
                <div class="col-lg-10 col-sm-8 col-10">
                    <div class="partner-logo-wrapper">
                        <?php if( have_rows('partners') ): ?>
                            <?php while( have_rows('partners') ): the_row(); ?>
                                                <?php if( have_rows('partner_info') ): ?>
                                                    <?php while( have_rows('partner_info') ): the_row(); 
                                                            $partner_logo = get_sub_field('partner_logo');
                                                            $partner_link = get_sub_field('partner_link');
                                                            ?>
                                                                  
                                                        <a href="<? echo $partner_link ?>">
                                                            <div class="hover-effect"></div>
                                                            <img src="<?php echo $partner_logo['url'] ?>" alt="<?php echo $partner_logo['alt'] ?>">
                                                        </a>

                                                    <?php endwhile; ?>  
                                                <?php endif; ?>
                            <?php endwhile; ?>  
                        <?php endif; ?>
                    </div>
                </div>
            </div>





    </div>
    
</section>
