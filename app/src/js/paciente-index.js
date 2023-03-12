const BASEURL = 'http://127.0.0.1/eyelaser'

const likCirurgiaRefrativa = document.querySelector('.js-link-cirurgia-refrativa')

likCirurgiaRefrativa.addEventListener('click', (event) => {
  event.preventDefault()
  window.location.href = `${BASEURL}/cirurgia_refrativa`
})
