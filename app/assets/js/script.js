const BASEURL = 'http://localhost/eyelaser'

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
