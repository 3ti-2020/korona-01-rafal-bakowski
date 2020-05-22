const a = document.querySelector(".a");
const b = document.querySelector(".b");
const c = document.querySelector(".c");




a.addEventListener("click", function(){

   
        if(a.className == "item a"){
            a.className = "a1"
        }

        else{
            a.className = "item a"
        }

       
    
})

b.addEventListener("click", function(){

   
    if(b.className == "item b"){
        b.className = "b1"
    }

    else{
        b.className = "item b"
    }



})

c.addEventListener("click", function(){

   
    

    if(c.className == "item c"){
        c.className = "c1"
    }

    else{
        c.className = "item c"
    }


})
