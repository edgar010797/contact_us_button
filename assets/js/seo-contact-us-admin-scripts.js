
//добавление
let AddSEOContactUsOptionsField = document.querySelector('.add-seo-contact-us-options-field');
let AddSEOContactUsOptionsFieldCount = document.querySelectorAll('.seo-contact-us-options-field').length;
AddSEOContactUsOptionsField.addEventListener('click',
    () => {
        let SEOContactUsButtonField = document.querySelector('.seo-contact-us-options-field:first-child');
        let SEOContactUsOptionsWrap = document.querySelector('.seo-contact-us-options-wrap');
        let SEOContactUsButtonFieldClone = SEOContactUsButtonField.cloneNode(true);
        SEOContactUsOptionsWrap.append(SEOContactUsButtonFieldClone);
        let AllInputsSEOContactUsButtonFieldClone = SEOContactUsButtonFieldClone.querySelectorAll('input');
        for (let InputSEOContactUsButtonFieldClone of AllInputsSEOContactUsButtonFieldClone){
               InputSEOContactUsButtonFieldClone.value = "";
               let Attribute_Name = InputSEOContactUsButtonFieldClone.getAttribute('name');
               InputSEOContactUsButtonFieldClone.setAttribute('name', Attribute_Name + AddSEOContactUsOptionsFieldCount);
        }
        AddSEOContactUsOptionsFieldCount = AddSEOContactUsOptionsFieldCount + 1;
    }
);


//удаление
window.addEventListener('click',
    e => {
        if (!e.target.closest('.seo-contact-us-options-field:first-child') && e.target.classList.contains('remove-seo-contact-us-options-field')){
            e.target.closest('.seo-contact-us-options-field').remove();
        }
    }
);


//перед отправкой формы кодирует в base64 значения в полях ссылок
let SubmitSEOContactUsOptionsFields = document.querySelector('#submit');
SubmitSEOContactUsOptionsFields.addEventListener('click',
    () => {
        let aSEOContactUsOptionsField = document.querySelectorAll('.seo_contact_us_options_a');
        for (let InputaSEOContactUsOptionsField of aSEOContactUsOptionsField){
            InputaSEOContactUsOptionsField.value = window.btoa(InputaSEOContactUsOptionsField.value);
        }
    }
);


