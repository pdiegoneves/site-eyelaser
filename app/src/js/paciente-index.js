const BASEURL = 'http://localhost/eyelaser'

const likCirurgiaRefrativa = document.querySelector('.js-link-cirurgia-refrativa')

likCirurgiaRefrativa.addEventListener('click', (event) => {
  event.preventDefault()
  window.location.href = `${BASEURL}/cirurgia_refrativa`
})
