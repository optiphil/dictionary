

var sideBar = document.querySelector(".side-bar")
let searchMe = document.querySelector(".inputSearch")
let btn = document.querySelector(".btn")
let wordMeaning = document.querySelector(".meaning p")
const menu = document.querySelector(".side-bar")
const button = document.querySelector(".side-bar-block")
let navigate = false

let wordDef;
const getEvent = async()=>{
    let dynamic = await searchMe.value;
    const res = await fetch(`https://www.dictionaryapi.com/api/v3/references/collegiate/json/${dynamic}?key=3488cc2c-650d-49f6-a197-08113e68d74b`)
    const data =await res.json();
     let result =  data.map(e => {
           return e.shortdef[0]
       })
wordMeaning.innerHTML = result
}

btn.addEventListener("click", () => {
    getEvent()
})
function controlNav(){
if (navigate){
navigate=false
}else{
navigate = true
}
}
function togglemenu() {
if (navigate) {
menu.style.display="block"

}else{
menu.style.display="none"
}
}
button.addEventListener("click", ()=>{
controlNav()
togglemenu()
})
    function ans() {  
       alert ("This link doesn't work. Philip's still working on it");  
    }  
    function submit(){
        alert("Your answer has been received and will be verified shortly")
    }