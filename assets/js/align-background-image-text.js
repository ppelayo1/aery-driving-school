
//call after the DOM is loaded
window.addEventListener("DOMContentLoaded", align_background_image_text, false);

function align_background_image_text(){
    updateHeaderTextPos();
    window.addEventListener('resize', updateHeaderTextPos);

    function updateHeaderTextPos(){
        const headerElem = document.querySelector('.heroHeader');
        const headerAbsElem = headerElem.querySelector('.position-absolute');
        const headerTextElem = headerAbsElem.querySelector('.header-text-box');
        const rect = headerElem.getBoundingClientRect();
        const rectY = rect.top;
        const windowY = window.scrollY;
        const offSetY = windowY + rectY;
        const headerH = headerElem.clientHeight;
        const headerTextH = headerTextElem.clientHeight;
        const headerW = headerElem.clientWidth;
        const headerTextW = headerTextElem.clientWidth;
        const lgBreakPt = 992;

        console.log(headerTextElem);
        if(window.innerWidth >= lgBreakPt){
            headerAbsElem.style.top = 72 + 'px';
        }else{
            console.log('test')
            
            headerAbsElem.style.top = offSetY +  (headerH - headerTextH) / 2 + 'px';
        }


        headerAbsElem.style.left = (headerW - headerTextW) / 2 + 'px';
        console.log(windowY);
        console.log(rectY);

        //relativeElem.style.top = newRelativeTop + 'px';
        //relativeElem.style.left = newRelativeLeft + 'px';
    }
}