const formSubmit = () => {
    const form = document.querySelector('form#exec-contacts')
    if ( form ) {
        const formInputReq = form.querySelectorAll('input[type="text"][required]')
        const button = form.querySelector('button#submit')
        const agreePolicy = form.querySelector('input#agree-policy')
        button.addEventListener('click', (e) => {
            e.preventDefault();
            if ( agreePolicy.checked == false ) {
                agreePolicy.nextElementSibling.nextElementSibling.style.display = 'block'
                agreePolicy.nextElementSibling.nextElementSibling.style.marginTop = '8px'
            }
            agreePolicy.addEventListener('change', (e) => {
                if ( agreePolicy.checked == true ) {
                    agreePolicy.nextElementSibling.nextElementSibling.style.display = ''
                    agreePolicy.nextElementSibling.nextElementSibling.style.marginTop = ''
                }
            });
            let num = 0;
            if ( formValidate(formInputReq, num) && agreePolicy.checked == true ) {
                let formData = new FormData(form);
                for (var key in exec_ajax) {
                    formData.append(key, exec_ajax[key]);
                }
                console.dir('Yes');
                jQuery(document).ready( function($){
                    $.ajax({
                        url: "/wp-admin/admin-ajax.php",
                        method: 'post',
                        processData: false,
                        contentType: false,
                        data: formData,
                        beforeSend: function () {},
                        success: function (data) {
                            console.dir(data);
                            data = JSON.parse(data)
                            if ( data.class == 'success' ) {
                                // console.dir('Yes');
                                // var link = document.createElement('a');
                            	// link.setAttribute('href', '#');
                            	// link.setAttribute('class', 'js-open-modal');
                                // link.setAttribute('data-modal', 'form-success');
                            	// link.click();
                                document.querySelector('a#open-modal-fs').click();
                                form.reset();
                            } else {
                                // console.dir(data);
                            }
                        },
                        error: function (jqXHR, text, error) {
                            // Send error text output
                            console.log('Ошибка отправки.');
                        }
                    });
                });
            } else {
                console.dir('No');
            }
        })
    }
}
formSubmit();

function formValidate(form, num) {
    form.forEach((item) => {
        if ( !item.value ) {
            item.style.border = '0.5px solid var(--brand-dark-red, #A62B22)'
            item.nextElementSibling.style.color = 'var(--brand-dark-red, #A62B22)'
            item.nextElementSibling.nextElementSibling.style.display = 'block'
            num++;
        }
        item.addEventListener('input', (e) => {
            if ( item.value ) {
                item.style.border = ''
                item.nextElementSibling.style.color = ''
                item.nextElementSibling.nextElementSibling.style.display = ''
            }
        });
    });
    if ( num > 0 ) {
        return false;
    } else {
        return true;
    }
}
