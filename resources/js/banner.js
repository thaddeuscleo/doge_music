import {environment} from "./environment";

let testimonyText = document.getElementById('testimony-text')
let soundguys = document.getElementById('soundguys')
let businessInsider = document.getElementById('business-insider')
let pcmag = document.getElementById('pcmag')
let techradar = document.getElementById('techradar')
let whatHifi = document.getElementById('what-hifi')
let joinMember = document.getElementById('join-member')

setSoundGuys()

let elements = [soundguys, businessInsider, pcmag, techradar, whatHifi]

if(joinMember){
    joinMember.addEventListener('click', () => {
        let path = `${environment.host}register`
        window.open(path)
        console.log('hello')
    })
}



soundguys.addEventListener('click', () => {
    elements.forEach((e) => e.classList.remove("selected"))
    soundguys.classList.add("selected")
    setSoundGuys()
})

businessInsider.addEventListener('click', () => {
    elements.forEach((e) => e.classList.remove("selected"))
    businessInsider.classList.add("selected")
    setBusinessInsider()
})

whatHifi.addEventListener('click', () => {
    elements.forEach((e) => e.classList.remove("selected"))
    whatHifi.classList.add("selected")
    setWhatHifi()
})

techradar.addEventListener('click', () => {
    elements.forEach((e) => e.classList.remove("selected"))
    techradar.classList.add("selected")
    setTechRadar()
})

pcmag.addEventListener('click', () => {
    elements.forEach((e) => e.classList.remove("selected"))
    pcmag.classList.add("selected")
    setPcMag()
})

function setSoundGuys() {
    setTestimonyText(0)
}

function setBusinessInsider() {
    setTestimonyText(1)
}

function setWhatHifi() {
    setTestimonyText(2)
}

function setTechRadar() {
    setTestimonyText(3)
}

function setPcMag() {
    setTestimonyText(4)
}

function setTestimonyText(testimony) {
    const texts = [
        '"The DOGE MUSIC user satisfaction is fantastic. It didn’t matter whether I ' +
        'was using the desktop or mobile audio player — its sound very great and enjoyable experience."',
        '"Audiophiles and more discerning listeners won’t be disappointed with DOGE MUSIC HiFi."',
        '“The best combination of sound quality, music selection and enjoyment.”',
        'DOGE MUSIC is a superb music record provider, ideal for anyone with a penchant for ' +
        'hi-fidelity audio.',
        '"DOGE Music, with its high-quality audio, music-related articles, and first dibs on tickets ' +
        'to hot concerts and sporting events, is one of the best and most unique audio provider."'
    ]

    testimonyText.innerText = texts[testimony]
}
