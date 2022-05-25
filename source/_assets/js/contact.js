import notyf from './notyf'

const fakeSend = () => new Promise((resolve) => setTimeout(resolve, 2000));

const send = (form) => {
    return fetch(form.action, {
        method: 'POST',
        headers: {'Content-Type': 'application/json', 'Accept': 'application/json'},
        body: JSON.stringify(Object.values(form.elements).slice(0, -1)
            .reduce((acc, input) => ({ ...acc, [input.name]: input.value }), {})
        )
    })
    .then((response) => {
        return response.status === 200 ? response : Promise.reject({ response })
    });
};

const contactForm = document.forms[0];

if (contactForm) {
    contactForm.onsubmit = (e) => {
        e.preventDefault();
        e.target.elements['submit'].disabled = true;

        fakeSend(contactForm)
            .then((response) => {
                notyf.success('发送成功，你加我微信：242171');
                contactForm.reset();
            })
            .catch((error) => {
                notyf.error('发送失败，你加我微信:242171');
                console.log(error.response);
            })
            .finally(() => {
                contactForm.elements['submit'].disabled = false;
            });
    };
}
