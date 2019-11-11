<?php
$title = get_sub_field('title');
$popular = get_sub_field('popular_tag');
$popularflag = the_field('cover_price');
?>

<div id="product-tiles" class="uk-section uk-section-muted">
            <div class="uk-container">
            <?php echo $title ?>
            <p class="uk-margin-medium-bottom" style="text-align: center !important;">Take a closer look at some of our products</p>
            <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match uk-grid" uk-grid="">
            <div class="uk-first-column">
            <div class="uk-card uk-card-default uk-margin-right">
            <span class="uk-badge <?php the_field('popular_tag', 465); ?>">Popular</span>
            <div class="uk-card-body uk-text-center">
            <h2 class="uk-card-title uk-margin-remove-bottom uk-text-center"><?php echo get_the_title(465); ?></h2>
            <p class="uk-margin-small-top"><?php the_field('cover_description', 465); ?></p>
            </div>
            <div class="uk-card-footer">
            <div uk-grid="" class="uk-grid-medium uk-flex-middle uk-flex-center uk-grid uk-grid-stack">
            <div class="uk-first-column"> 
            <span class="uk-text-small uk-text-center">FROM</span></div>
            </div>
            <h3 class="uk-text-center price">£<?php the_field('cover_price', 465); ?>
            </h3>
            <div style="width: 100% !important;" class="uk-flex">
            <a href="<?php the_field('cover_join_url', 465); ?>" target="_blank" style="margin-right: 6px;" class="tm-button-default uk-button uk-button-default uk-icon uk-width-1-2">Join Today</a>
            <a href="#euro-break" uk-toggle style="margin-left: 6px;" class="tm-button-default uk-button uk-button-secondary uk-icon uk-width-1-2">Learn more</a>
            </div>
            </div>
            </div>
            </div>
            <div>
            <div class="uk-card uk-card-default uk-margin-right">
            <span class="uk-badge <?php the_field('popular_tag', 466); ?>">Popular</span>
            <div class="uk-card-body uk-text-center">
            <h2 class="uk-card-title uk-margin-remove-bottom uk-text-center"><?php echo get_the_title(466); ?></h2>
            <p class="uk-margin-small-top"><?php the_field('cover_description', 466); ?>
            </p>
            </div>
            <div class="uk-card-footer">
            <div uk-grid="" class="uk-grid-medium uk-flex-middle uk-flex-center uk-grid uk-grid-stack">
            <div class="uk-first-column"> 
            <span class="uk-text-small uk-text-center">FROM</span></div>
            </div>
                    <h3 class="uk-text-center price">£<?php the_field('cover_price', 466); ?>
                    </h3>
                    <div style="width: 100% !important;" class="uk-flex">
                    <a href="<?php the_field('cover_join_url', 466); ?>" target="_blank" style="margin-right: 6px;" class="tm-button-default uk-button uk-button-default uk-icon uk-width-1-2">Join Today</a>
                    <a href="#euro-rescue" uk-toggle style="margin-left: 6px;" class="tm-button-default uk-button uk-button-secondary uk-icon uk-width-1-2">Learn more</a>
                    </div>
                    </div>
            </div>
            </div>
            <div>
            <div class="uk-card uk-card-default uk-margin-right">
            <span class="uk-badge <?php the_field('popular_tag', 467); ?>">Popular</span>
            <div class="uk-card-body uk-text-center">
            <h2 class="uk-card-title uk-margin-remove-bottom uk-text-center"><?php echo get_the_title(467); ?></h2>
            <p class="uk-margin-small-top"><?php the_field('cover_description', 467); ?>
            </p>
            </div>
            <div class="uk-card-footer">
            <div uk-grid="" class="uk-grid-medium uk-flex-middle uk-flex-center uk-grid uk-grid-stack">
            <div class="uk-first-column"> 
            <span class="uk-text-small uk-text-center">FROM</span></div>
            </div>
            <h3 class="uk-text-center price">£<?php the_field('cover_price', 467); ?>
            </h3>
            <div style="width: 100% !important;" class="uk-flex">
            <a href="<?php the_field('cover_join_url', 467); ?>" target="_blank" style="margin-right: 6px;" class="tm-button-default uk-button uk-button-default uk-icon uk-width-1-2">Join Today</a>
            <a href="#euro-rescue-plus" uk-toggle style="margin-left: 6px;" class="tm-button-default uk-button uk-button-secondary uk-icon uk-width-1-2">Learn more</a>
            </div>
            </div>
            </div>
            </div>
        </div>



        <hr class="uk-margin-top">
        <div uk-grid="" class="uk-grid-medium uk-flex-middle uk-flex-center uk-grid uk-grid-stack">
        <div class="uk-first-column"><a href="<?php echo get_site_url(); ?>/compare-breakdown-services" class="uk-margin-top uk-button uk-button-secondary tm-button-default uk-icon">Can't Decide? Compare all of our products</a></div>
        </div>
        
        </div></div>
        

        <div id="euro-break" class="uk-modal" uk-modal>
        <div class="uk-modal-dialog uk-padding-small">
    
            <button class="uk-modal-close-default" type="button" uk-close></button>
    
            <div class="uk-modal-header">
            <h2 class="uk-modal-title">Why choose Euro Break?</h2>
            </div>
    
            <div class="uk-modal-body" uk-overflow-auto>
            <h3>3 days of cover. Benefits include car hire, emergency accommodation & recovery of your vehicle.<br> </h3>

            <table class="uk-table uk-table-divider product-features">
                    <tbody>
                        <tr>
                        <th class="uk-table-2-6">Cover Benefits</th>
                        </tr>
                        <tr>
                            <td>24 hour emergency number</td>
                            <td style="text-align: right;"><span class="no uk-icon" uk-icon="icon: close; ratio: 1.5"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="close"><path fill="none" stroke="#000" stroke-width="1.06" d="M16,16 L4,4"></path><path fill="none" stroke="#000" stroke-width="1.06" d="M16,4 L4,16"></path></svg></span></td>
                        </tr>
                        <tr>
                            <td>Roadside assistance &amp; Garage Repairs</td>
                            <td style="text-align: right;" class="uk-text-large">£100</td>
                        </tr>
                        <tr>
                            <td>Recovery to nearest garage or rail head</td>
                            <td style="text-align: right;"><span uk-icon="icon: check; ratio: 1.5" class="uk-icon"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="check"><polyline fill="none" stroke="#000" stroke-width="1.1" points="4,10 8,15 17,4"></polyline></svg></span></td>
                            </tr>
                        <tr>
                            <td>Spare Part Costs</td>
                            <td style="text-align: right;"><span class="no uk-icon" uk-icon="icon: close; ratio: 1.5"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="close"><path fill="none" stroke="#000" stroke-width="1.06" d="M16,16 L4,4"></path><path fill="none" stroke="#000" stroke-width="1.06" d="M16,4 L4,16"></path></svg></span></td>
                        </tr>
                         <tr>
                            <td>Spare Parts location and freight costs</td>
                            <td style="text-align: right;" class="uk-text-large">£100</td>
                        </tr>
                        <tr>
                            <td>Garage storage costs</td>
                            <td style="text-align: right;" class="uk-text-large">£100</td>
                        </tr>
                        <tr>
                            <td>Hire Car</td>
                            <td style="text-align: right;"><span class="uk-text-large">£50</span> per day</td>
                        </tr>
                        <tr>
                            <td>Rail or Coach Fares to continue the holiday and return home</td>
                            <td style="text-align: right;"><span uk-icon="icon: check; ratio: 1.5" class="uk-icon"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="check"><polyline fill="none" stroke="#000" stroke-width="1.1" points="4,10 8,15 17,4"></polyline></svg></span></td>
                        </tr>
                        <tr>
                            <td>Emergency accommodation costs (per person per night)</td>
                            <td style="text-align: right;"><span class="uk-text-large">£25</span></td>
                        </tr>
                        <tr>
                            <td>Recovery of car to home address, if it cannot be repaired before your planned return date</td>
                            <td style="text-align: right;"><span uk-icon="icon: check; ratio: 1.5" class="uk-icon"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="check"><polyline fill="none" stroke="#000" stroke-width="1.1" points="4,10 8,15 17,4"></polyline></svg></span></td>
                        </tr>
                        <tr>
                            <td>Replacement driver if sole available driver becomes ill</td>
                            <td style="text-align: right;"><span class="uk-text-large">£100</span> per day</td>
                        </tr>
                        <tr>
                            <td>Emergency Repairs to secure car after break-in</td>
                            <td style="text-align: right;"><span uk-icon="icon: close; ratio: 1.5" class="uk-icon"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="close"><path fill="none" stroke="#000" stroke-width="1.06" d="M16,16 L4,4"></path><path fill="none" stroke="#000" stroke-width="1.06" d="M16,4 L4,16"></path></svg></span></td>
                        </tr>
                        <tr>
                            <td>Tent hire following theft or damage (excluding weather damage)</td>
                            <td style="text-align: right;"><span uk-icon="icon: close; ratio: 1.5" class="uk-icon"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="close"><path fill="none" stroke="#000" stroke-width="1.06" d="M16,16 L4,4"></path><path fill="none" stroke="#000" stroke-width="1.06" d="M16,4 L4,16"></path></svg></span></td>
                        </tr>
                        <tr>
                            <td>Phone calls</td>
                            <td style="text-align: right;"><span uk-icon="icon: close; ratio: 1.5" class="uk-icon"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="close"><path fill="none" stroke="#000" stroke-width="1.06" d="M16,16 L4,4"></path><path fill="none" stroke="#000" stroke-width="1.06" d="M16,4 L4,16"></path></svg></span></td>
                        </tr>
                        <tr>
                            <td>Car collection costs after repair</td>
                            <td style="text-align: right;">Economy return ferry or tunnel fare</td>
                        </td></tr>

                        <tr>
                            <td>UK Car Hire Benefits</td>
                            <td style="text-align: right;"><span uk-icon="icon: close; ratio: 1.5" class="uk-icon"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="close"><path fill="none" stroke="#000" stroke-width="1.06" d="M16,16 L4,4"></path><path fill="none" stroke="#000" stroke-width="1.06" d="M16,4 L4,16"></path></svg></span></td>
                        </tr>
                        <tr>
                            <td>Court Bonds</td>
                            <td style="text-align: right;"><span uk-icon="icon: close; ratio: 1.5" class="uk-icon"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="close"><path fill="none" stroke="#000" stroke-width="1.06" d="M16,16 L4,4"></path><path fill="none" stroke="#000" stroke-width="1.06" d="M16,4 L4,16"></path></svg></span></td>
                        </tr>
                        <tr>
                            <td>Customs Duty</td>
                            <td style="text-align: right;"><span uk-icon="icon: close; ratio: 1.5" class="uk-icon"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="close"><path fill="none" stroke="#000" stroke-width="1.06" d="M16,16 L4,4"></path><path fill="none" stroke="#000" stroke-width="1.06" d="M16,4 L4,16"></path></svg></span></td>
                        </tr>
                        <tr>
                            <td>General average/salvage</td>
                            <td style="text-align: right;"><span uk-icon="icon: close; ratio: 1.5" class="uk-icon"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="close"><path fill="none" stroke="#000" stroke-width="1.06" d="M16,16 L4,4"></path><path fill="none" stroke="#000" stroke-width="1.06" d="M16,4 L4,16"></path></svg></span></td>
                        </tr>
                        <tr>
                            <td>Legal Costs/Expenses</td>
                            <td style="text-align: right;"><span uk-icon="icon: close; ratio: 1.5" class="uk-icon"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="close"><path fill="none" stroke="#000" stroke-width="1.06" d="M16,16 L4,4"></path><path fill="none" stroke="#000" stroke-width="1.06" d="M16,4 L4,16"></path></svg></span></td>
                        </tr>
                        <tr>
                            <td>Overall limit of cover</td>
                            <td style="text-align: right;"><span class="uk-text-large">£1,000</span></td>
                        </tr>
                        <tr>
                            <td>Maximum persons covered</td>
                            <td style="text-align: right;">5 (incl. driver)</td>
                        </tr>
                        
                        
                    </tbody>
                </table>
    
            </div>
    
            <div class="uk-modal-footer uk-text-right">
            <a href="<?php echo get_site_url(); ?>/compare-breakdown-services" uk-toggle="" style="width: auto; margin-right: 6px;" class="uk-margin-small-top uk-margin-small-bottom tm-button-default uk-button uk-button-secondary uk-icon uk-width-1-2">Compare Cover Options</a>
            <a href="<?php the_field('cover_join_url', 465); ?>" target="_blank" style="width: auto;" class="uk-margin-small-top uk-margin-small-bottom tm-button-default uk-button uk-button-default uk-icon uk-width-1-2">Join With Euro Break</a>
            </div>
    
        </div>
    </div>
    
    <div id="euro-rescue" class="uk-modal" uk-modal>
    <div class="uk-modal-dialog uk-padding-small">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="uk-modal-header">
        <h2 class="uk-modal-title">Why choose Euro Rescue?</h2>
        </div>

        <div class="uk-modal-body" uk-overflow-auto>
        <h3>For trips over 3 days. Providing many more benefits than EuroBreak. Annual cover is also available.<br> </h3>

        <table class="uk-table uk-table-divider product-features">
                <tbody>
                    <tr>
                    <th class="uk-table-2-6">Cover Benefits</th>
                    </tr>
                    <tr>
                        <td>24 hour emergency number</td>
                        <td style="text-align: right;"><span class="no uk-icon" uk-icon="icon: close; ratio: 1.5"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="close"><path fill="none" stroke="#000" stroke-width="1.06" d="M16,16 L4,4"></path><path fill="none" stroke="#000" stroke-width="1.06" d="M16,4 L4,16"></path></svg></span></td>
                    </tr>
                    <tr>
                        <td>Roadside assistance &amp; Garage Repairs</td>
                        <td style="text-align: right;" class="uk-text-large">£100</td>
                    </tr>
                    <tr>
                        <td>Recovery to nearest garage or rail head</td>
                        <td style="text-align: right;"><span uk-icon="icon: check; ratio: 1.5" class="uk-icon"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="check"><polyline fill="none" stroke="#000" stroke-width="1.1" points="4,10 8,15 17,4"></polyline></svg></span></td>
                        </tr>
                    <tr>
                        <td>Spare Part Costs</td>
                        <td style="text-align: right;"><span class="no uk-icon" uk-icon="icon: close; ratio: 1.5"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="close"><path fill="none" stroke="#000" stroke-width="1.06" d="M16,16 L4,4"></path><path fill="none" stroke="#000" stroke-width="1.06" d="M16,4 L4,16"></path></svg></span></td>
                    </tr>
                     <tr>
                        <td>Spare Parts location and freight costs</td>
                        <td style="text-align: right;" class="uk-text-large">£100</td>
                    </tr>
                    <tr>
                        <td>Garage storage costs</td>
                        <td style="text-align: right;" class="uk-text-large">£100</td>
                    </tr>
                    <tr>
                        <td>Hire Car</td>
                        <td style="text-align: right;"><span class="uk-text-large">£50</span> per day</td>
                    </tr>
                    <tr>
                        <td>Rail or Coach Fares to continue the holiday and return home</td>
                        <td style="text-align: right;"><span uk-icon="icon: check; ratio: 1.5" class="uk-icon"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="check"><polyline fill="none" stroke="#000" stroke-width="1.1" points="4,10 8,15 17,4"></polyline></svg></span></td>
                    </tr>
                    <tr>
                        <td>Emergency accommodation costs (per person per night)</td>
                        <td style="text-align: right;"><span class="uk-text-large">£25</span></td>
                    </tr>
                    <tr>
                        <td>Recovery of car to home address, if it cannot be repaired before your planned return date</td>
                        <td style="text-align: right;"><span uk-icon="icon: check; ratio: 1.5" class="uk-icon"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="check"><polyline fill="none" stroke="#000" stroke-width="1.1" points="4,10 8,15 17,4"></polyline></svg></span></td>
                    </tr>
                    <tr>
                        <td>Replacement driver if sole available driver becomes ill</td>
                        <td style="text-align: right;"><span class="uk-text-large">£100</span> per day</td>
                    </tr>
                    <tr>
                        <td>Emergency Repairs to secure car after break-in</td>
                        <td style="text-align: right;"><span uk-icon="icon: close; ratio: 1.5" class="uk-icon"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="close"><path fill="none" stroke="#000" stroke-width="1.06" d="M16,16 L4,4"></path><path fill="none" stroke="#000" stroke-width="1.06" d="M16,4 L4,16"></path></svg></span></td>
                    </tr>
                    <tr>
                        <td>Tent hire following theft or damage (excluding weather damage)</td>
                        <td style="text-align: right;"><span uk-icon="icon: close; ratio: 1.5" class="uk-icon"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="close"><path fill="none" stroke="#000" stroke-width="1.06" d="M16,16 L4,4"></path><path fill="none" stroke="#000" stroke-width="1.06" d="M16,4 L4,16"></path></svg></span></td>
                    </tr>
                    <tr>
                        <td>Phone calls</td>
                        <td style="text-align: right;"><span uk-icon="icon: close; ratio: 1.5" class="uk-icon"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="close"><path fill="none" stroke="#000" stroke-width="1.06" d="M16,16 L4,4"></path><path fill="none" stroke="#000" stroke-width="1.06" d="M16,4 L4,16"></path></svg></span></td>
                    </tr>
                    <tr>
                        <td>Car collection costs after repair</td>
                        <td style="text-align: right;">Economy return ferry or tunnel fare</td>
                    </td></tr>

                    <tr>
                        <td>UK Car Hire Benefits</td>
                        <td style="text-align: right;"><span uk-icon="icon: close; ratio: 1.5" class="uk-icon"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="close"><path fill="none" stroke="#000" stroke-width="1.06" d="M16,16 L4,4"></path><path fill="none" stroke="#000" stroke-width="1.06" d="M16,4 L4,16"></path></svg></span></td>
                    </tr>
                    <tr>
                        <td>Court Bonds</td>
                        <td style="text-align: right;"><span uk-icon="icon: close; ratio: 1.5" class="uk-icon"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="close"><path fill="none" stroke="#000" stroke-width="1.06" d="M16,16 L4,4"></path><path fill="none" stroke="#000" stroke-width="1.06" d="M16,4 L4,16"></path></svg></span></td>
                    </tr>
                    <tr>
                        <td>Customs Duty</td>
                        <td style="text-align: right;"><span uk-icon="icon: close; ratio: 1.5" class="uk-icon"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="close"><path fill="none" stroke="#000" stroke-width="1.06" d="M16,16 L4,4"></path><path fill="none" stroke="#000" stroke-width="1.06" d="M16,4 L4,16"></path></svg></span></td>
                    </tr>
                    <tr>
                        <td>General average/salvage</td>
                        <td style="text-align: right;"><span uk-icon="icon: close; ratio: 1.5" class="uk-icon"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="close"><path fill="none" stroke="#000" stroke-width="1.06" d="M16,16 L4,4"></path><path fill="none" stroke="#000" stroke-width="1.06" d="M16,4 L4,16"></path></svg></span></td>
                    </tr>
                    <tr>
                        <td>Legal Costs/Expenses</td>
                        <td style="text-align: right;"><span uk-icon="icon: close; ratio: 1.5" class="uk-icon"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="close"><path fill="none" stroke="#000" stroke-width="1.06" d="M16,16 L4,4"></path><path fill="none" stroke="#000" stroke-width="1.06" d="M16,4 L4,16"></path></svg></span></td>
                    </tr>
                    <tr>
                        <td>Overall limit of cover</td>
                        <td style="text-align: right;"><span class="uk-text-large">£1,000</span></td>
                    </tr>
                    <tr>
                        <td>Maximum persons covered</td>
                        <td style="text-align: right;">5 (incl. driver)</td>
                    </tr>
                    
                    
                </tbody>
            </table>

        </div>

        <div class="uk-modal-footer uk-text-right">
        <a href="<?php echo get_site_url(); ?>/compare-breakdown-services" uk-toggle="" style="width: auto; margin-right: 6px;" class="uk-margin-small-top uk-margin-small-bottom tm-button-default uk-button uk-button-secondary uk-icon uk-width-1-2">Compare Cover Options</a>
        <a href="<?php the_field('cover_join_url', 466); ?>" target="_blank" style="width: auto;" class="uk-margin-small-top uk-margin-small-bottom tm-button-default uk-button uk-button-default uk-icon uk-width-1-2">Join With Euro Rescue</a>
        </div>

    </div></div>
    
    
    <div id="euro-rescue-plus" class="uk-modal" uk-modal>
    <div class="uk-modal-dialog uk-padding-small">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="uk-modal-header">
        <h2 class="uk-modal-title">Why choose Euro Rescue Plus?</h2>
        </div>

        <div class="uk-modal-body" uk-overflow-auto>

        <h3>For trips of longer durations. Cover includes all the benefits of Euro Break & Euro Rescue plus more.<br> </h3>

        <table class="uk-table uk-table-divider product-features">
                <tbody>
                    <tr>
                    <th class="uk-table-2-6">Cover Benefits</th>
                    </tr>
                    <tr>
                        <td>24 hour emergency number</td>
                        <td style="text-align: right;"><span class="no uk-icon" uk-icon="icon: close; ratio: 1.5"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="close"><path fill="none" stroke="#000" stroke-width="1.06" d="M16,16 L4,4"></path><path fill="none" stroke="#000" stroke-width="1.06" d="M16,4 L4,16"></path></svg></span></td>
                    </tr>
                    <tr>
                        <td>Roadside assistance &amp; Garage Repairs</td>
                        <td style="text-align: right;" class="uk-text-large">£100</td>
                    </tr>
                    <tr>
                        <td>Recovery to nearest garage or rail head</td>
                        <td style="text-align: right;"><span uk-icon="icon: check; ratio: 1.5" class="uk-icon"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="check"><polyline fill="none" stroke="#000" stroke-width="1.1" points="4,10 8,15 17,4"></polyline></svg></span></td>
                        </tr>
                    <tr>
                        <td>Spare Part Costs</td>
                        <td style="text-align: right;"><span class="no uk-icon" uk-icon="icon: close; ratio: 1.5"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="close"><path fill="none" stroke="#000" stroke-width="1.06" d="M16,16 L4,4"></path><path fill="none" stroke="#000" stroke-width="1.06" d="M16,4 L4,16"></path></svg></span></td>
                    </tr>
                     <tr>
                        <td>Spare Parts location and freight costs</td>
                        <td style="text-align: right;" class="uk-text-large">£100</td>
                    </tr>
                    <tr>
                        <td>Garage storage costs</td>
                        <td style="text-align: right;" class="uk-text-large">£100</td>
                    </tr>
                    <tr>
                        <td>Hire Car</td>
                        <td style="text-align: right;"><span class="uk-text-large">£50</span> per day</td>
                    </tr>
                    <tr>
                        <td>Rail or Coach Fares to continue the holiday and return home</td>
                        <td style="text-align: right;"><span uk-icon="icon: check; ratio: 1.5" class="uk-icon"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="check"><polyline fill="none" stroke="#000" stroke-width="1.1" points="4,10 8,15 17,4"></polyline></svg></span></td>
                    </tr>
                    <tr>
                        <td>Emergency accommodation costs (per person per night)</td>
                        <td style="text-align: right;"><span class="uk-text-large">£25</span></td>
                    </tr>
                    <tr>
                        <td>Recovery of car to home address, if it cannot be repaired before your planned return date</td>
                        <td style="text-align: right;"><span uk-icon="icon: check; ratio: 1.5" class="uk-icon"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="check"><polyline fill="none" stroke="#000" stroke-width="1.1" points="4,10 8,15 17,4"></polyline></svg></span></td>
                    </tr>
                    <tr>
                        <td>Replacement driver if sole available driver becomes ill</td>
                        <td style="text-align: right;"><span class="uk-text-large">£100</span> per day</td>
                    </tr>
                    <tr>
                        <td>Emergency Repairs to secure car after break-in</td>
                        <td style="text-align: right;"><span uk-icon="icon: close; ratio: 1.5" class="uk-icon"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="close"><path fill="none" stroke="#000" stroke-width="1.06" d="M16,16 L4,4"></path><path fill="none" stroke="#000" stroke-width="1.06" d="M16,4 L4,16"></path></svg></span></td>
                    </tr>
                    <tr>
                        <td>Tent hire following theft or damage (excluding weather damage)</td>
                        <td style="text-align: right;"><span uk-icon="icon: close; ratio: 1.5" class="uk-icon"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="close"><path fill="none" stroke="#000" stroke-width="1.06" d="M16,16 L4,4"></path><path fill="none" stroke="#000" stroke-width="1.06" d="M16,4 L4,16"></path></svg></span></td>
                    </tr>
                    <tr>
                        <td>Phone calls</td>
                        <td style="text-align: right;"><span uk-icon="icon: close; ratio: 1.5" class="uk-icon"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="close"><path fill="none" stroke="#000" stroke-width="1.06" d="M16,16 L4,4"></path><path fill="none" stroke="#000" stroke-width="1.06" d="M16,4 L4,16"></path></svg></span></td>
                    </tr>
                    <tr>
                        <td>Car collection costs after repair</td>
                        <td style="text-align: right;">Economy return ferry or tunnel fare</td>
                    </td></tr>

                    <tr>
                        <td>UK Car Hire Benefits</td>
                        <td style="text-align: right;"><span uk-icon="icon: close; ratio: 1.5" class="uk-icon"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="close"><path fill="none" stroke="#000" stroke-width="1.06" d="M16,16 L4,4"></path><path fill="none" stroke="#000" stroke-width="1.06" d="M16,4 L4,16"></path></svg></span></td>
                    </tr>
                    <tr>
                        <td>Court Bonds</td>
                        <td style="text-align: right;"><span uk-icon="icon: close; ratio: 1.5" class="uk-icon"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="close"><path fill="none" stroke="#000" stroke-width="1.06" d="M16,16 L4,4"></path><path fill="none" stroke="#000" stroke-width="1.06" d="M16,4 L4,16"></path></svg></span></td>
                    </tr>
                    <tr>
                        <td>Customs Duty</td>
                        <td style="text-align: right;"><span uk-icon="icon: close; ratio: 1.5" class="uk-icon"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="close"><path fill="none" stroke="#000" stroke-width="1.06" d="M16,16 L4,4"></path><path fill="none" stroke="#000" stroke-width="1.06" d="M16,4 L4,16"></path></svg></span></td>
                    </tr>
                    <tr>
                        <td>General average/salvage</td>
                        <td style="text-align: right;"><span uk-icon="icon: close; ratio: 1.5" class="uk-icon"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="close"><path fill="none" stroke="#000" stroke-width="1.06" d="M16,16 L4,4"></path><path fill="none" stroke="#000" stroke-width="1.06" d="M16,4 L4,16"></path></svg></span></td>
                    </tr>
                    <tr>
                        <td>Legal Costs/Expenses</td>
                        <td style="text-align: right;"><span uk-icon="icon: close; ratio: 1.5" class="uk-icon"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="close"><path fill="none" stroke="#000" stroke-width="1.06" d="M16,16 L4,4"></path><path fill="none" stroke="#000" stroke-width="1.06" d="M16,4 L4,16"></path></svg></span></td>
                    </tr>
                    <tr>
                        <td>Overall limit of cover</td>
                        <td style="text-align: right;"><span class="uk-text-large">£1,000</span></td>
                    </tr>
                    <tr>
                        <td>Maximum persons covered</td>
                        <td style="text-align: right;">5 (incl. driver)</td>
                    </tr>
                    
                    
                </tbody>
            </table>

        </div>

        <div class="uk-modal-footer uk-text-right">
        <a href="<?php echo get_site_url(); ?>/compare-breakdown-services" uk-toggle="" style="width: auto; margin-right: 6px;" class="uk-margin-small-top uk-margin-small-bottom tm-button-default uk-button uk-button-secondary uk-icon uk-width-1-2">Compare Cover Options</a>
        <a href="<?php the_field('cover_join_url', 467); ?>" target="_blank" style="width: auto;" class="uk-margin-small-top uk-margin-small-bottom tm-button-default uk-button uk-button-default uk-icon uk-width-1-2">Join With Euro Rescue Plus</a>
        </div>

    </div></div>