import KategoriaView from "./KategoriaView.js";

class KategriakView{
    constructor(tomb){
        this.kategoriak= tomb
        let szuloElem = $('#kategoria')
        tomb.forEach(kategoria => {
            new KategoriaView(szuloElem, kategoria);
        });
        $("select").on('click',()=>{
            this.kategoriaSzures()
        })
        
    }
    kategoriaSzures(){
        let menu =  document.getElementById("kategoria");;
        let kategoria = "";
       menu.addEventListener("change",()=>{
        let i = 0;
        while(i< this.kategoriak.length && menu.value!=this.kategoriak[i].kategorianev){
            i++
        }
        if(i<this.kategoriak.length){
                kategoria = this.kategoriak[i].kategorianev
            } 
        this.sajatEvent("kategoriaValtozas",kategoria)
        })
    }
    sajatEvent(eventNev,kategoria) {
        const esemeny = new CustomEvent(eventNev, {detail: kategoria})
        window.dispatchEvent(esemeny)
      }
}
export default KategriakView