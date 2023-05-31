import TesztekView from "./TesztekView.js";
import adatLekeresModel from "./adatLekeresModel.js"

class TesztController{
    constructor(){
        const token = $(`meta[name="csrf-token"]`).attr("content")
        let model = new adatLekeresModel(token);
        model.adatBe('/tesztek',this.megjelenit)
    }
    megjelenit(tomb){
        new TesztekView(tomb);
    }
}
export default TesztController