class TesztView{
    constructor(szuloElem, teszt){
        szuloElem.append(`<div id="kerdes${teszt.id}">
        <p class = "kerdes">${teszt.kerdes}</p>
        <div id="valaszok${teszt.id}">
        <p class ="valasz" id="valasz${teszt.id}{1}>">${teszt.v1}</p>
        <p class ="valasz" id="valasz${teszt.id}{2}>">${teszt.v2}</p>
        <p class ="valasz" id="valasz${teszt.id}{3}>">${teszt.v3}</p>
        <p class ="valasz" id="valasz${teszt.id}{4}>">${teszt.v4}</p>
        </div>
        </div>`);
    }
}
export default TesztView