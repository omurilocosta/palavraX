function get_data_from_tip(desc_tip) {
    document.getElementById('desc-tip').innerText = desc_tip
    console.log(desc_tip)
}

const modal = document.querySelector('#modal-tip')

function abrirModal(index) {
    modal.style.display = 'block'

    function erroButton() {       
        modal.style.display = 'none'
        let item = document.getElementById(`n${index}`)
        item.classList.add('error')
        
    }
    const closeButton = modal.querySelector('#close')
    if (closeButton) {
        closeButton.addEventListener('click', erroButton)
    }
}

