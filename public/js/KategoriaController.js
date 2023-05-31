import KategriakView from "./KategoriakView.js"
import adatLekeresModel from "./adatLekeresModel.js"

class KategoriaController{
    constructor(){
        const token = $(`meta[name="csrf-token"]`).attr("content")
        let model = new adatLekeresModel(token)
        model.adatBe("/kategoria",this.katMegjelen)
    }
    katMegjelen(tomb){
        new KategriakView(tomb);
    }
}
export default KategoriaController