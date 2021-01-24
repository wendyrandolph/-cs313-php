//increment the quantity of the products 

let btnAdd = document.querySelector('#add');
let btnMinus = document.querySelector('#minus');
let input = document.querySelector('#input');

btnAdd.addEventListener('click', () => {
    input.value = parseInt(input.value) + 1; 

})

btnMinus.addEventListener('click', () => {
    if(input.value > 1){
    input.value = parseInt(input.value) - 1; 
    }else { 
        input.value = 0 ; 
    }
})  
   
    
