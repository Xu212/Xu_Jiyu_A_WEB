import TesztView from "./TesztView.js";

class TesztekView{
    constructor(tomb){
        $('article').append('<div id="tesztek"></div>');
        let szuloElem = $("#tesztek");
        tomb.forEach(teszt => {
            new TesztView(szuloElem,teszt);
        });
    }
}
export default TesztekView