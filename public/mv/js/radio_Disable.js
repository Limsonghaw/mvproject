const noRadio = document.getElementById('radioNo');
const link_Input = document.getElementById('online_link');
noRadio.addEventListener('change', function() {
    if (noRadio.checked) {
        link_Input.disabled = true;
    } else {
        link_Input.disabled = false;
    }
});
const yesRadio = document.getElementById('radioYes');
const bothRadio = document.getElementById('radioBoth');
yesRadio.addEventListener('change', function() {
    if (yesRadio.checked) {
        link_Input.disabled = false;
    } else {
        link_Input.disabled = true;
    }
});
bothRadio.addEventListener('change', function() {
    if (bothRadio.checked) {
        link_Input.disabled = false;
    } else {
        link_Input.disabled = true;
    }
});

const ticketNo = document.getElementById('ticketNo');
const price = document.getElementById('price');
const promotional_price = document.getElementById('promotional_price');
ticketNo.addEventListener('change', function() {
    if (ticketNo.checked) {
        price.disabled = true;
        promotional_price.disabled = true;
    } else {
        price.disabled = false;
        promotional_price.disabled = false;
    }
});
const ticketYes = document.getElementById('ticketYes');
ticketYes.addEventListener('change', function() {
    if (ticketYes.checked) {
        price.disabled = false;
        promotional_price.disabled = false;
    } else {
        price.disabled = true;
        promotional_price.disabled = true;
    }
});
