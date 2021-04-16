function optionSelector(select_id, option){
    let element = document.getElementById(select_id);
    let select_length = element.options.length;

    for(let index=0; index < select_length; index++ ){
        if(option == element.options[index]){
            element.selectedIndex= index;
            break;
        }
    }
}
