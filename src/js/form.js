const formSubmit = () => {
    const form = document.querySelector('form#exec-contacts')
    if ( form ) {
        const button = form.querySelector('button#submit')
        button.addEventListener('click', (e) => {
            e.preventDefault();
            let formData = new FormData(form);
            for (var key in exec_ajax) {
                formData.append(key, exec_ajax[key]);
            }

            for(let [name, value] of formData) {
                console.dir(`${name} = ${value}`);
            }

            formValidate(form.elements);
            // console.dir(form.elements[1]);
        })
    }
}
formSubmit();

function formValidate(form) {
    for (var key in form) {
        if ( form[key].required == true ) {
            if ( !form[key].value ) {
                console.dir(form[key]);
            }
        }
    }
}
