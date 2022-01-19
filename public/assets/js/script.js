const actives = document.getElementsByClassName('active');
for (const active of actives) {
    active.addEventListener('click', function () {
        active.innerHTML = 'Validé !';
        active.classList.toggle('color');
        active.addEventListener('click', function () {
            active.innerHTML = 'Sélectionner';
            active.classList.remove('color');
        })
    })
}


const button1 = document.getElementById('button1');
const button2 = document.getElementById('button2');
const button3 = document.getElementById('button3');
const button4 = document.getElementById('button4');
const button5 = document.getElementById('button5');

const id1 = document.getElementById('1');
const id2 = document.getElementById('2');
const id3 = document.getElementById('3');
const id4 = document.getElementById('4');
const id5 = document.getElementById('5');
const id6 = document.getElementById('6');
const id7 = document.getElementById('7');
const id8 = document.getElementById('8');
const id9 = document.getElementById('9');
const id10 = document.getElementById('10');
const id11 = document.getElementById('11');
const id12 = document.getElementById('12');
const id13 = document.getElementById('13');
const id14 = document.getElementById('14');
const id15 = document.getElementById('15');
const id16 = document.getElementById('16');
const id17 = document.getElementById('17');
const id18 = document.getElementById('18');
const id19 = document.getElementById('19');
const id20 = document.getElementById('20');
const id21 = document.getElementById('21');


id1.addEventListener('click', function () {
    button1.classList.toggle('color-button');
})

id2.addEventListener('click', function () {
    button1.classList.toggle('color-button');
})

id3.addEventListener('click', function () {
    button1.classList.toggle('color-button');
})

id4.addEventListener('click', function () {
    button1.classList.toggle('color-button');
})
id5.addEventListener('click', function () {
    button2.classList.toggle('color-button');
})
id6.addEventListener('click', function () {
    button2.classList.toggle('color-button');
})
id7.addEventListener('click', function () {
    button2.classList.toggle('color-button');
})
id8.addEventListener('click', function () {
    button2.classList.toggle('color-button');
})
id9.addEventListener('click', function () {
    button2.classList.toggle('color-button');
})
id10.addEventListener('click', function () {
    button2.classList.toggle('color-button');
})
id11.addEventListener('click', function () {
    button3.classList.toggle('color-button');
})
id12.addEventListener('click', function () {
    button3.classList.toggle('color-button');
})
id13.addEventListener('click', function () {
    button3.classList.toggle('color-button');
})
id14.addEventListener('click', function () {
    button3.classList.toggle('color-button');
})
id15.addEventListener('click', function () {
    button4.classList.toggle('color-button');
})
id16.addEventListener('click', function () {
    button4.classList.toggle('color-button');
})
id17.addEventListener('click', function () {
    button4.classList.toggle('color-button');
})
id18.addEventListener('click', function () {
    button5.classList.toggle('color-button');
})
id19.addEventListener('click', function () {
    button5.classList.toggle('color-button');
})
id20.addEventListener('click', function () {
    button5.classList.toggle('color-button');
})
id21.addEventListener('click', function () {
    button5.classList.toggle('color-button');
})





