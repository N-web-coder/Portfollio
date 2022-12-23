const tablinks = document.getElementsByClassName("tab-links")
const tabcontents = document.getElementsByClassName("tab-contents")

function openTab(tabname){
    for(link of tablinks){
        link.classList.remove("active-links");
    }
    for(content of tabcontents){
        content.classList.remove("actiev-tab");
    }
    event.currentTarget.classList.add("active-links")
    document.getElementById(tabname).classList.add("actiev-tab")
}

var sidemenu = document.getElementById("sidemenu")

function openMenu(){
    sidemenu.style.right = "0"
}
function closeMenu(){
    sidemenu.style.right = "-200px"
}


const scriptURL = 'https://script.google.com/macros/s/AKfycbyZ-c2bZfdUQ_Vw4dEhdcropP82jnT4qvOpLhO4R83At9EA13Ka_vBjDiyaWVcrejkK/exec'
const form = document.forms['submit-to-google-sheet']

const msg = document.getElementById("msg")

form.addEventListener('submit', e => {
    e.preventDefault()
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
.then(response => {
    msg.innerHTML = "Message sent successfully"
    setTimeout(function(){
        msg.innerHTML = ""
    },3000)
    form.reset()
})
.catch(error => console.error('Error!', error.message))
})