var ifr = $("#ifr")[0];

let enName = $('table tr td:nth-child(3)');
let XYs = $('table tr td:nth-child(4)');
let SRs = $('table tr td:nth-child(5)');
let SMs = $('table tr td:nth-child(6)');


// let addr = "https://bulbapedia.bulbagarden.net/wiki/Pikachu_(Pok%C3%A9mon)#Game_locations";

XYs[0].innerHTML = "eee";

// for(let i = 0; i < XYs.length; i++){
for(let i = 0; i < 5; i++){ 
    let link = enName[i].children[0].href;
    loadIframe("ifr",link);     
    console.log(ifr);
    //  console.log(XYs[i].id);
    // let link = enName[i].children[0].href;
    //  console.log(link);
    // loadIframe("ifr",link);     
    // console.log(ifr);
}



// --------- Function ---------

function loadIframe(iframeName, url) {
    var $iframe = $('#' + iframeName);
    if ( $iframe.length ) {
        $iframe.attr('src',url);
        // wait(3000);        
        return false;
    }
    return true;
}
function wait(ms){
    var start = new Date().getTime();
    var end = start;
    while(end < start + ms) {
      end = new Date().getTime();
   }
 }