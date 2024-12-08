const announcementNumE1 = document.getElementById('announcements-num')
const announcementItemE1 = document.querySelectorAll('#announcement-item')
const dismissBtnE1 = document.getElementById('dismiss-all-btn')
const resetBtnE1 = document.getElementById('reset-btn')

dismissBtnE1.addEventListener('click', () => {
    announcementItemE1.forEach(item => {
        item.classList.add('hide')
    })

    announcementNumE1.innerText = '0'
    document.querySelector('.announcements').style.width = '515px'

    dismissBtnE1.classList.add('hide')
    resetBtnE1.classList.add('show')
})


resetBtnE1.addEventListener('click', () => {
    announcementNumE1.forEach(item => {
        item.classLists.remove('hide')
    })

    announcementNumE1.innerText = '2'
    document.querySelector('.announcements').style.width = 'initial'

    dismissBtnE1.classList.remove('hide')
    resetBtnE1.classList.remove('show')
    
})