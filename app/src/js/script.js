const BASEURL = 'http://127.0.0.1/eyelaser'

const linkEntradaMedico = document.getElementById('link-medico')
const linkEntradaPaciente = document.getElementById('link-paciente')

const cardsPerfis = document.querySelectorAll('.selecao-perfis .perfil-card')

linkEntradaMedico.addEventListener('click', (event) => {
  event.preventDefault()
  window.location.href = `${BASEURL}/medico`
})

linkEntradaPaciente.addEventListener('click', (event) => {
  event.preventDefault()
  window.location.href = `${BASEURL}/paciente`
})

cardsPerfis.forEach(card => {
  card.addEventListener('mouseover', async () => {
    await clearAllPerfilCardHovered()
    card.classList.add('perfil-hovered')
  })
})

const clearAllPerfilCardHovered = () => {
  cardsPerfis.forEach(card => {
    card.classList.remove('perfil-hovered')
  })
}
