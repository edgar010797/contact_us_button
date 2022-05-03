<?php $MegaArray = get_option('MegaArray'); ?>

<div class="wrap">
    <h1> <?php echo get_admin_page_title() ?> </h1>
    <p>Разрабочик — <a href="https://t.me/edgar_veni_vidi_vici">Edgar Podosyan</a></p>
    <form name="seo_contact_us_options_form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>?page=seo-contact-us-options&amp;updated=true">
        <table width="100%" border="0" cellpadding="0" cellspacing="0" style="margin-top:40px; border-spacing: 5px 1rem;">
            <thead>
                <tr>
                    <th style="text-align:center">Название кнопки</th>
                    <th style="text-align:center">Ссылка</th>
                    <th style="text-align:center">Цвет (Hex)</th>
                    <th style="text-align:center">Иконка (<a target="_blank" href="https://fontawesome.com/v4.7/icons/">FontAwesome v4.7</a>)</th>
                </tr>
            </thead>
            <tbody class="seo-contact-us-options-wrap" align="center">

            <?php
            $x = 0;
            if(!empty($MegaArray)){
                foreach ($MegaArray as $button) {
                    $x == 0 ? $a = '' : $a = $x;
                    ?>
                    <tr class="seo-contact-us-options-field">
                        <td style="border: 1px solid #dee2e6;padding: .3rem;">
                            <input placeholder="WhatsApp" id="" name="seo_contact_us_options_name_<?php echo $a; ?>" type="text"
                                   value="<?php echo $button['seo_contact_us_options_name']; ?>" style="width:95%" required>
                        </td>
                        <td style="border: 1px solid #dee2e6;padding: .3rem;">
                            <input placeholder="tel:7 (701) 607-00-41" class="seo_contact_us_options_a"
                                   name="seo_contact_us_options_a_<?php echo $a; ?>" type="text"
                                   value="<?php echo $button['seo_contact_us_options_a']; ?>" style="width:95%" required>
                        </td>
                        <td style="border: 1px solid #dee2e6;padding: .3rem;">
                            <input placeholder="#9E7B71" id="" name="seo_contact_us_options_color_<?php echo $a; ?>" type="text"
                                   value="<?php echo $button['seo_contact_us_options_color']; ?>" style="width:95%" required>
                        </td>
                        <td style="border: 1px solid #dee2e6;padding: .3rem;">
                            <input placeholder="<i class='fab fa-font-awesome-flag'></i>" id=""
                                   name="seo_contact_us_options_logo_<?php echo $a; ?>" type="text"
                                   value="<?php echo htmlspecialchars($button['seo_contact_us_options_logo']); ?>" style="width:95%"
                                   required>
                        </td>
                        <td style="width: 40px">
                            <button type="button" class="remove-seo-contact-us-options-field button button-primary">Удалить кнопку
                            </button>
                        </td>
                    </tr>
                    <?php $x = $x + 1;
                }
            } else {
                ?>
                <tr class="seo-contact-us-options-field">
                    <td style="border: 1px solid #dee2e6;padding: .3rem;">
                        <input placeholder="WhatsApp" id="" name="seo_contact_us_options_name_" type="text"
                               value="" style="width:95%" required>
                    </td>
                    <td style="border: 1px solid #dee2e6;padding: .3rem;">
                        <input placeholder="tel:7 (701) 607-00-41" class="seo_contact_us_options_a"
                               name="seo_contact_us_options_a_" type="text"
                               value="" style="width:95%" required>
                    </td>
                    <td style="border: 1px solid #dee2e6;padding: .3rem;">
                        <input placeholder="#9E7B71" id="" name="seo_contact_us_options_color_" type="text"
                               value="" style="width:95%" required>
                    </td>
                    <td style="border: 1px solid #dee2e6;padding: .3rem;">
                        <input placeholder="<i class='fab fa-font-awesome-flag'></i>" id=""
                               name="seo_contact_us_options_logo_" type="text"
                               value="" style="width:95%"
                               required>
                    </td>
                    <td style="width: 40px">
                        <button type="button" class="remove-seo-contact-us-options-field button button-primary">Удалить кнопку
                        </button>
                    </td>
                </tr>
                <?php
            }?>

            </tbody>
        </table>
        <button type="button" class="add-seo-contact-us-options-field button button-primary" style="margin-top:40px">Добавить еще кнопку</button>
        <p class="submit">
            <input type="submit" name="submit" id="submit" class="button button-primary" value="Сохранить изменения">
        </p>
    </form>
</div>

<?php if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    echo "<div style='padding-left: 20px;color: green;margin-bottom: 40px;'><p style='font-size: 18px;font-weight: bold;'>Настройки сохранены!</p></div>";
} ?>

<table class="table table-bordered table-sm table-striped">
    <thead>
    <tr>
        <th style="border: 1px solid #dee2e6;padding: .3rem;">Приложения</th>
        <th style="border: 1px solid #dee2e6;padding: .3rem;">Ссылки</th>
        <th style="border: 1px solid #dee2e6;padding: .3rem;">Платформы</th>
        <th style="border: 1px solid #dee2e6;padding: .3rem;">Описания</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th style="border: 1px solid #dee2e6;padding: .3rem;">Skype</th>
        <td style="border: 1px solid #dee2e6;padding: .3rem;">skype:YOUR_NICKNAME?chat</td>
        <td style="border: 1px solid #dee2e6;padding: .3rem;">desktop, iOS, Android</td>
        <td style="border: 1px solid #dee2e6;padding: .3rem;"></td>
    </tr>
    <tr>
        <th style="border: 1px solid #dee2e6;padding: .3rem;">Viber</th>
        <td style="border: 1px solid #dee2e6;padding: .3rem;">viber://chat?number=%2B13034997111</td>
        <td style="border: 1px solid #dee2e6;padding: .3rem;">desktop, iOS, Android</td>
        <td style="border: 1px solid #dee2e6;padding: .3rem;">
            Please use <b>%2B</b> instead of <b>+</b> sign in phone number
        </td>
    </tr>
    <tr>
        <th style="border: 1px solid #dee2e6;padding: .3rem;">WhatsApp</th>
        <td style="border: 1px solid #dee2e6;padding: .3rem;">https://wa.me/+13034997111</td>
        <td style="border: 1px solid #dee2e6;padding: .3rem;">iOS, Android</td>
        <td style="border: 1px solid #dee2e6;padding: .3rem;"></td>
    </tr>
    <tr>
        <th style="border: 1px solid #dee2e6;padding: .3rem;">WhatsApp</th>
        <td style="border: 1px solid #dee2e6;padding: .3rem;">https://web.whatsapp.com/send?l=en&amp;phone=+13034997111</td>
        <td style="border: 1px solid #dee2e6;padding: .3rem;">desktop</td>
        <td style="border: 1px solid #dee2e6;padding: .3rem;"></td>
    </tr>
    <tr>
        <th style="border: 1px solid #dee2e6;padding: .3rem;">WhatsApp</th>
        <td style="border: 1px solid #dee2e6;padding: .3rem;">https://api.whatsapp.com/send?phone=13034997111&amp;text=some%20predefined%20message&amp;source=&amp;data=</td>
        <td style="border: 1px solid #dee2e6;padding: .3rem;">desktop, iOS, Android</td>
        <td style="border: 1px solid #dee2e6;padding: .3rem;"></td>
    </tr>
    <tr>
        <th style="border: 1px solid #dee2e6;padding: .3rem;">Telegram</th>
        <td style="border: 1px solid #dee2e6;padding: .3rem;">https://t.me/+13034997111</td>
        <td style="border: 1px solid #dee2e6;padding: .3rem;">desktop, iOS, Android</td>
        <td style="border: 1px solid #dee2e6;padding: .3rem;"></td>
    </tr>
    <tr>
        <th style="border: 1px solid #dee2e6;padding: .3rem;">Facebook Messenger</th>
        <td style="border: 1px solid #dee2e6;padding: .3rem;">https://m.me/YOUR_PAGE_NAME</td>
        <td style="border: 1px solid #dee2e6;padding: .3rem;">desktop, iOS, Android</td>
        <td style="border: 1px solid #dee2e6;padding: .3rem;"></td>
    </tr>
    <tr>
        <th style="border: 1px solid #dee2e6;padding: .3rem;">Email</th>
        <td style="border: 1px solid #dee2e6;padding: .3rem;">mailto:YOUR-EMAIL@ADDRESS.COM</td>
        <td style="border: 1px solid #dee2e6;padding: .3rem;">desktop, iOS, Android</td>
        <td style="border: 1px solid #dee2e6;padding: .3rem;"></td>
    </tr>
    <tr>
        <th style="border: 1px solid #dee2e6;padding: .3rem;">Direct phone call</th>
        <td style="border: 1px solid #dee2e6;padding: .3rem;">tel:+13034997111</td>
        <td style="border: 1px solid #dee2e6;padding: .3rem;">iOS, Android</td>
        <td style="border: 1px solid #dee2e6;padding: .3rem;"></td>
    </tr>
    <tr>
        <th style="border: 1px solid #dee2e6;padding: .3rem;">Direct SMS</th>
        <td style="border: 1px solid #dee2e6;padding: .3rem;">sms:+13034997111</td>
        <td style="border: 1px solid #dee2e6;padding: .3rem;">iOS, Android</td>
        <td style="border: 1px solid #dee2e6;padding: .3rem;"></td>
    </tr>
    </tbody>
</table>

 <script src="<?php echo plugins_url( "/assets/js/seo-contact-us-admin-scripts.js" , __FILE__ ) ?>"></script>