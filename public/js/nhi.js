// RANGE PICKER DATE



function increaseValue() {
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('number').value = value;
}

function decreaseValue() {
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : '';
    value--;
    document.getElementById('number').value = value;
}

function nextTab(event, page) {
    event.preventDefault()
    const elementTab = document.querySelectorAll('.tab-pane')
    elementTab.forEach(item => {
        console.log('remove');
        item.classList.remove('active')
        item.classList.remove('show')
    })
    const elementBoxStep = document.getElementById(`step${page}`)

    elementBoxStep.classList.remove('disable-step')

    document.querySelector(`.tab-${page}`).classList.add('show')
    document.querySelector(`.tab-${page}`).classList.add('active')
}