class KategoriaView{
    constructor(szuloElem,kategoria){
        $(szuloElem).append(`<option value ="${kategoria.kategorianev}">${kategoria.kategorianev}</option>`)
    }
}
export default KategoriaView