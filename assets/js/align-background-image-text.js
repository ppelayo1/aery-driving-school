
//call after the DOM is fully loaded, necessary as the actual width of the elements must be obtained
window.addEventListener("load", align_background_image_text, false);

function align_background_image_text(){
    updateHeaderTextPos();
    window.addEventListener('resize', updateHeaderTextPos);

    function updateHeaderTextPos(){
        //getting the elements from dom
        const headerElem = document.querySelector('.heroHeader');
        const headerAbsElem = headerElem.querySelector('.position-absolute');
        const headerTextElem = headerAbsElem.querySelector('.header-text-box');
        const rect = headerElem.getBoundingClientRect();
        console.log(window.innerWidth);
        //needed for offset
        const rectY = rect.top;
        const windowY = window.scrollY;
        const offSetY = windowY + rectY;

        //need to get the width and height of the hero header container and the text within
        const headerH = headerElem.clientHeight;
        const headerTextH = headerTextElem.clientHeight;
        const headerW = headerElem.clientWidth;
        const headerTextW = headerTextElem.clientWidth;

        //centering text vertically
        headerAbsElem.style.top = offSetY +  (headerH - headerTextH) / 2 + 'px';
        
        //Centering the text horizontally
        headerAbsElem.style.left = (headerW - headerTextW) / 2 + 'px';
    }
}