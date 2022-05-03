
<div class="seo-social-buttons">
    <?php
     $MegaArray = get_option('MegaArray');
     foreach($MegaArray as $button) {
            echo "<a class='seo-social-button ".$button['seo_contact_us_options_name']."' href='". $button['seo_contact_us_options_a'] ."'>";
            echo $button['seo_contact_us_options_logo'];
            echo "</a>";
     }
     ?>
    <span class="seo-first-social-button seo-all-in-one-but">
     <i class="fa fa-phone" aria-hidden="true"></i>
    </span>
</div>


