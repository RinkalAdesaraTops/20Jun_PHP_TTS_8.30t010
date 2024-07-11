const arr=[36,22,5,43,36,44,22,1]


const myVar={};


arr.forEach((element)=>{

    if(!myVar[element]){
        myVar[element]=1;
    }else{
        myVar[element]=myVar[element]+1
    }

})

console.log(myVar)