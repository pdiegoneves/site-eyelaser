const BASEURL = 'http://127.0.0.1/eyelaser'

const linkEntradaMedico = document.querySelector('.link.medico')
const linkEntradaPaciente = document.querySelector('.link.paciente')

linkEntradaMedico.addEventListener('click', (event) => {
  event.preventDefault()
  window.location.href = `${BASEURL}/medico`
})

linkEntradaPaciente.addEventListener('click', (event) => {
  event.preventDefault()
  window.location.href = `${BASEURL}/paciente`
})
