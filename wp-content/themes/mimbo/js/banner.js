var bannerAD=new Array();
var bannerADlink=new Array();
var adNum=0;

bannerAD[1]="../../../../wp-content/themes/mimbo/images/ind/1.gif";
bannerADlink[1]="";
bannerAD[2]="../../wp-content/themes/mimbo/images/ind/2.gif";
bannerADlink[2]="";
bannerAD[3]="../../wp-content/themes/mimbo/images/ind/3.gif";
bannerADlink[3]="";
bannerAD[4]="../../wp-content/themes/mimbo/images/ind/4.gif";
bannerADlink[4]="";
bannerAD[5]="../../wp-content/themes/mimbo/images/ind/5.gif";
bannerADlink[5]="";
bannerAD[6]="../../wp-content/themes/mimbo/images/ind/6.gif";
bannerADlink[6]="";
bannerAD[7]="../../wp-content/themes/mimbo/images/ind/7.gif";
bannerADlink[7]="";
bannerAD[8]="../../wp-content/themes/mimbo/images/ind/8.gif";
bannerADlink[8]="";


var preloadedimages=new Array();
for (i=1;i<bannerAD.length;i++){
preloadedimages[i]=new Image();
preloadedimages[i].src=bannerAD[i];
}

function setTransition(){
if (document.all){
bannerADrotator.filters.revealTrans.Transition=Math.floor(Math.random()*23);
bannerADrotator.filters.revealTrans.apply();
}
}

function playTransition(){
if (document.all)
bannerADrotator.filters.revealTrans.play()
}

function nextAd(){
if(adNum<bannerAD.length-1)adNum++ ;
else adNum=1;
setTransition();
document.images.bannerADrotator.src=bannerAD[adNum];
playTransition();
theTimer=setTimeout("nextAd()", 5000);
}

function jump2url(){
jumpUrl=bannerADlink[adNum];
jumpTarget='_blank';
if (jumpUrl != ''){
if (jumpTarget != '')window.open(jumpUrl,jumpTarget);
else location.href=jumpUrl;
}
}
function displayStatusMsg() { 
status=bannerADlink[adNum];
document.returnValue = true;
}
