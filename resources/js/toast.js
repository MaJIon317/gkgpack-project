window.toast = function(message = '', type = 'success', autoClose = 5000) {
    if (message === '') { return }

    let toastContainer = document.getElementById('toast'),
        random = Math.ceil(Math.random()*1000000);
  
    if (!toastContainer) {
        toastContainer = document.createElement('div'), toastContainer.setAttribute('id', 'toast'), toastContainer.classList.add('toast'), document.body.appendChild(toastContainer);
    }

    const alert = `<div class="toast__alert toast__alert--${type}" id="toast__alert-${random}">
                    <div class="toast__alert-message">${message}</div>
                    <span class="toast__alert-close"></span>
                </div>`

    toastContainer.insertAdjacentHTML('afterbegin', alert)
  
    setTimeout(() => {
        const isAlert = document.getElementById(`toast__alert-${random}`)
      
        if (typeof (isAlert) != 'undefined' && isAlert != null) isAlert.classList.add('toast__alert--in')
    }, 100)

    setTimeout(() => {
        const isAlert = document.getElementById(`toast__alert-${random}`)
        if (typeof (isAlert) != 'undefined' && isAlert != null) isAlert.classList.remove('toast__alert--in')
        setTimeout(() => {
            const isAlert = document.getElementById(`toast__alert-${random}`)

            if (isAlert) {
                isAlert.remove()
            }
        }, 100)
    }, autoClose)

    const closeBtn = document.querySelector('.toast__alert-close')
    closeBtn.addEventListener('click', () => {
        const isAlert = document.getElementById(`toast__alert-${random}`)
 
        if (isAlert) {
            isAlert.classList.remove('toast__alert--in')
        }

        setTimeout(() => {
            const isAlert = document.getElementById(`toast__alert-${random}`)

            if (isAlert) {
                isAlert.remove()
            }
        }, 100)
    })
}