// alert("hello");
document.getElementById('inquiry-form').addEventListener('submit', function(event) {
    event.preventDefault();

    const serviceID = 'service_vjw2hyo';
    const templateID = 'template_q4ocpmq';

    emailjs.sendForm(serviceID, templateID, this)
        .then(() => {
            alert('Inquiry sent successfully!');
            document.getElementById('inquiry-form').reset();
        }, (err) => {
            alert(JSON.stringify(err));
        });
});
