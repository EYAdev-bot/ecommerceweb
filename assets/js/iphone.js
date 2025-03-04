indexvalue = 0;
function image() {
    setTimeout(image, 2500);
    const img = document.querySelectorAll("#iphone");
    for (let i = 0; i < img.length; i++) {
        img[i].style.display = "none";
        
    }
    indexvalue++;
    if (indexvalue > img.length) {
        indexvalue=1
     } 
      img[indexvalue-1].style.display=""
    
}
image();