const BASEURL = 'http://192.168.0.199/eyelaser'

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
