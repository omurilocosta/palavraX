function get_data_from_tip(desc_tip) {
    document.getElementById('desc-tip').innerText = desc_tip
    console.log(desc_tip)
}

// ? FUNCTION TO OPEN MODAL TIPS
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
// ? FUNCTION TO OPEN MODAL POINTS
const finishBtn = document.querySelector('#finishBtn')
const modalPoints = document.querySelector('.modal-point')
finishBtn.addEventListener('click', () => {
    modalPoints.style.display = 'block'
})
const checkBtn = document.querySelector('#check')
checkBtn.addEventListener('click', () => {
    modalPoints.style.display = 'block'
})
// ? FUNCTION TO SET POINTS
const points_winner = document.querySelector('#points-winner')
const points_round = document.querySelector('#points-round')
let d_points = 0
let p_points = 20
function contPoints() {
    d_points += 1
    p_points -= 1
    
    if (d_points == 20) {
        modalPoints.style.display = 'block'
        points_round.innerText = d_points
        points_winner.innerText = p_points
    }
    
    points_round.innerText = d_points
    points_winner.innerText = p_points
}
points_round.innerText = d_points
points_winner.innerText = p_points