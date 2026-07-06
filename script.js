let images=[];
let current=0;

async function loadImages(){

    let response=await fetch("images.php");

    images=await response.json();

}

async function start(){

    await loadImages();

    const img=document.getElementById("slide");

    function next(){

        if(images.length===0)return;

        img.style.opacity=0;

        setTimeout(()=>{

            img.src="images/"+images[current];

            img.style.opacity=1;

            current++;

            if(current>=images.length){

                current=0;

                loadImages();

            }

        },1000);

    }

    next();

    setInterval(next,10000);

}

start();