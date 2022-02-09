
//call after the DOM is loaded
window.addEventListener("DOMContentLoaded", align_background_image_text, false);

function align_background_image_text(){
    updateHeaderTextPos();
    window.addEventListener('resize', updateHeaderTextPos);

    function updateHeaderTextPos(){
        const headerElem = document.querySelector('.heroHeader');
        const relativeElem = document.querySelector('.heroHeader .header-text-position-relative');
        const headerTextElem = relativeElem.querySelector('.header-text-box');
    
        const headerElemH = headerElem.clientHeight;
        const headerElemW = headerElem.clientWidth;

        const headerTextH = headerTextElem.clientHeight;
        const headerTextW = headerTextElem.clientWidth;

        //get the top and left adjustments
        const newRelativeTop = (headerElemH - headerTextH)/2;
        const newRelativeLeft = (headerElemW - headerTextW)/2;
        
        relativeElem.style.top = newRelativeTop + 'px';
        relativeElem.style.left = newRelativeLeft + 'px';
    }
}