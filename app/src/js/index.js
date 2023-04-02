const BASEURL = 'http://localhost/eyelaser'

const linkEntradaMedico = document.getElementById('link-medico')
const linkEntradaPaciente = document.getElementById('link-paciente')
const ctaPerfisEntrada = document.querySelector('.js-cta-perfis-entrada')

const textCtaHeroPadrao = document.querySelector('.text-cta-hero-padrao')
const textCtaHeroPaciente = document.querySelector('.text-cta-hero-paciente')
const textCtaHeroMedico = document.querySelector('.text-cta-hero-medico')

linkEntradaMedico.addEventListener('click', (event) => {
  event.preventDefault()
  window.location.href = `${BASEURL}/medico`
})

linkEntradaPaciente.addEventListener('click', (event) => {
  event.preventDefault()
  window.location.href = `${BASEURL}/paciente`
})

linkEntradaPaciente.addEventListener('mouseover', (event) => {
  hideAllTextCtaHeroPerfis()
  textCtaHeroPaciente.classList.remove('is-hidden')
})
linkEntradaMedico.addEventListener('mouseover', (event) => {
  hideAllTextCtaHeroPerfis()  
  textCtaHeroMedico.classList.remove('is-hidden')

})

ctaPerfisEntrada.addEventListener('mouseover', (event) => {
  hideAllTextCtaHeroPerfis()
  textCtaHeroPadrao.classList.remove('is-hidden')

})

function hideAllTextCtaHeroPerfis() {
  textCtaHeroPaciente.classList.add('is-hidden')
  textCtaHeroMedico.classList.add('is-hidden')
  textCtaHeroPadrao.classList.add('is-hidden')
}


