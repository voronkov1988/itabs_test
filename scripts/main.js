'use strict'
const submit = document.querySelector('.submit')
const menuModal = document.querySelector('.menuModal')
const burger = document.querySelector('.mobileMenu')
const closeModal = document.querySelector('.closeModal')

document.addEventListener('click', (e)=> {
   if(!e.target.closest('.menuModal') 
      && !e.target.closest('.mobileMenu') ){
         menuModal.classList.remove('menuModal__active')
  }
})

closeModal.addEventListener('click', ()=> {
   menuModal.classList.remove('menuModal__active')
})

burger.addEventListener('click', () => {
   console.log('a')
   menuModal.classList.add('menuModal__active')
})

submit.addEventListener('click', async (e) => {
   e.preventDefault()
   let formData = new FormData()
   const mailInput = document.querySelector('.mailInput').value
   formData.append('mail', mailInput)
   const regular = /^[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}$/i
   if(mailInput.match(regular)){
      return await fetch('../main.php', {
         method: 'POST',
         body: formData
      })
      .then(result => {
         if(result.status === 200) {
            alert(`${mailInput} успешно добавлен`)
         }
      })
   }
   else {
      alert('Это не email')
   }
   
})

console.log(submit)