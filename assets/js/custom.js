$('document').ready(function(){
let menuList=[];
const current_path = window.location.pathname.split('/').pop();
console.log(`current file name from URL is :: ${current_path}`);
$('.menu_ul > li').each(function(i, obj) {
    //test
    let dataUrl=$(this).attr('data-url');
    menuList.push(dataUrl)
    if(dataUrl==current_path){
        $(this).addClass("btn_active");
    }
});
console.log(`menuList loaded...`, menuList);

$()
});