const BASEURL = 'http://127.0.0.1/eyelaser'

const linkEntradaMedico = document.getElementById('link-medico')
const linkEntradaPaciente = document.getElementById('link-paciente')
const textoDinamicoEntrada = document.querySelector('.js-text-hero-dinamico')
const ctaPerfisEntrada = document.querySelector('.js-cta-perfis-entrada')

linkEntradaMedico.addEventListener('click', (event) => {
  event.preventDefault()
  window.location.href = `${BASEURL}/medico`
})

linkEntradaPaciente.addEventListener('click', (event) => {
  event.preventDefault()
  window.location.href = `${BASEURL}/paciente`
})

linkEntradaPaciente.addEventListener('mouseover', (event) => {
  textoDinamicoEntrada.innerText = 'Tratamentos personalizados, seguros e eficazes para as necessidades de seus olhos.'
})
linkEntradaMedico.addEventListener('mouseover', (event) => {
  textoDinamicoEntrada.innerText = 'Junte-se a uma equipe de especialistas comprometidos com a excelência.'
})

ctaPerfisEntrada.addEventListener('mouseover', (event) => {
  textoDinamicoEntrada.innerText = 'Qual o seu perfil?'
})


