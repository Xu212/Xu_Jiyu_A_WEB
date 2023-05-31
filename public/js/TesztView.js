class TesztView{
    constructor(szuloElem, teszt){
        szuloElem.append(`<div class="kerdesTar" id="kerdes${teszt.id}">
        <p class = "kerdes">${teszt.kerdes}</p>
        <div class ="valaszok" id="valaszok${teszt.id}">
        <p class ="valasz" id="valasz${teszt.id}{1}>">${teszt.v1}</p>
        <p class ="valasz" id="valasz${teszt.id}{2}>">${teszt.v2}</p>
        <p class ="valasz" id="valasz${teszt.id}{3}>">${teszt.v3}</p>
        <p class ="valasz" id="valasz${teszt.id}{4}>">${teszt.v4}</p>
        </div>
        <p class="tesztKategoria" id ="kategoria${teszt.id}">${teszt.kategorianev}</p>
        </div>`);
        document.getElementById(`kategoria${teszt.id}`).style.display = "none"
    }
}
export default TesztView