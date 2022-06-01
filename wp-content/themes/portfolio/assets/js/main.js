if (!document.URL.includes("archive") && !document.URL.includes("projects")) {
// FORMULAIRE SYNC WITH PRESENTATION
    const pName = document.getElementById("p_name");
    const pFirstname = document.getElementById("p_firstname");
    const fName = document.getElementById("f_name");
    const fFirstname = document.getElementById("f_firstname");
    const pSubject = document.getElementById("p_subject");
    const fSubject = document.getElementById("f_subject");

    pName.addEventListener('keyup', () => {
        fName.value = pName.value;
    });
    pFirstname.addEventListener('keyup', () => {
        fFirstname.value = pFirstname.value;
    });
    pSubject.addEventListener('change', () => {
        if (pSubject.value === "illu") {
            fSubject.value = "illu"
        } else {
            fSubject.value = "web_site"
        }
    });


// CANVAS RESIZE
    const canvas = document.getElementById("canvas");
    let canvasHeight = document.querySelector(".index__presentation");

    window.addEventListener('load', () => {
        canvas.width = window.innerWidth/6;
        canvas.height = canvasHeight.clientHeight + (canvas.width*2);
    })
    window.addEventListener('resize', () => {
        console.log(canvasHeight)
        canvas.width = window.innerWidth/6;
        canvas.height = canvasHeight.clientHeight + canvas.width*2;
    });


// SPOOPY EYES
    const retina = document.querySelectorAll(".eye_retina");
    const container = document.querySelector(".index__contact");

    container.addEventListener("mousemove", (e) => {
        e = e || window.event;

        const { pageX, pageY } = e;
        const { innerWidth, innerHeight } = window;

        let left = (pageX / innerWidth) * 100;
        let top = (e.clientY / innerHeight) * 100;

        left = left < 25 ? 25 : left;
        left = left > 75 ? 75 : left;
        top = top < 25 ? 25 : top;
        top = top > 75 ? 75 : top;

        retina.forEach((f) => {
            f.style.left = `${left > 45 && left < 55 ? 50 : left}%`;
            f.style.top = `${top > 45 && top < 55 ? 50 : top}%`;
        });
    });

    const eyes = document.querySelectorAll(".eyes");
    for (const eye of eyes) {
        eye.classList.add('invisible');
    }

    container.addEventListener("click", (e) => {
        for (const eye of eyes) {
            eye.classList.remove('invisible');
        }
    });
    container.addEventListener("keyup", (e) => {
        for (const eye of eyes) {
            eye.classList.remove('invisible');
        }
    });
}


// FADE-IN
const items = document.querySelectorAll('.fade-in');

for (const item of items) {
    item.classList.add('fade');
}
const cb = function(entries){
    entries.forEach(entry => {
        if(entry.isIntersecting){
            entry.target.classList.add('inview');
        }
    });
}
const obs = new IntersectionObserver(cb);
for(let i=0; i < items.length; i++){
    obs.observe(items[i]);
}



