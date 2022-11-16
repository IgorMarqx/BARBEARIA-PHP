const selectHour = document.getElementById('selectHour')
const divCustom = document.getElementById('custom')
const btnToggle = document.getElementById('toggle')



function toggleDivCustom(){
    btnToggle.addEventListener('click', () =>{
        if(divCustom.style.display === 'none'){
            divCustom.style.display = 'block'
            btnToggle.innerText = 'Ver horários padrões'
        }else{
            divCustom.style.display = 'none'
            btnToggle.innerText = 'Escolha seu horário'
        }
    })
}

toggleDivCustom()