function admin(){
    let dashboard = document.getElementById('dash').style;
    dashboard.paddingBottom = ".3em";
    dashboard.borderBottomStyle = "solid";
    dashboard.borderBottomWidth = ".1em";
    dashboard.color = "yellow";
    dashboard.textDecorationColor = "yellow";
    console.log("In dashboard");
}
function tamil_dash(){
    let dashboard = document.getElementById('dash').style;
    dashboard.paddingBottom = ".3em";
    dashboard.borderBottomStyle = "solid";
    dashboard.borderBottomWidth = ".1em";
    dashboard.color = "yellow";
    dashboard.textDecorationColor = "yellow";
    console.log("In dashboard");
}
function gotamil(){
    window.location.href = "tamil.php";
}
function home(){
    window.location.href = "user.php";
}
var i = 0;
var slides = ["slide1","slide2","slide3","slide4","slide5","slide6"];
var div = ["div1","div2","div3","div4","div5","div6","div7"];
function slide(){
    var n = (i+3);
    if(n < 6){
        document.getElementById(slides[i]).style.display = "none";
        document.getElementById(slides[n]).style.display = "block";
        i++;
    } 
}
function before(){
    console.log("The i now is : "+i);
    var a = i-1;
    var b = a+3;
    if(a >= 0){
        document.getElementById(slides[a]).style.display= "block";
        document.getElementById(slides[b]).style.display = "none";
        i--;
    }  
}
var j = 0;
function slide1(){
    var n = (j+3);
    if(n < 7){
        document.getElementById(div[j]).style.display = "none";
        document.getElementById(div[n]).style.display = "block";
        j++;
    }

}
function prev1(){
    console.log("The i now is : "+j);
    var a = j-1;
    var b = a+3;
    if(a >= 0){
        document.getElementById(div[a]).style.display= "block";
        document.getElementById(div[b]).style.display = "none";
        j--;
    }
}
let k = 1,l = 1;
function play_audio(){
    var aid = "song_toplay"+l;
    console.log("hello" +aid);
    document.getElementById(aid).currentTime = 0;
    document.getElementById('buttons').classList.toggle('buttons1');
    if(k % 2 != 0){
        document.getElementById(aid).play();
    }
    else{
        document.getElementById(aid).pause();
    }
    document.getElementById(aid).onended = function(){
        alert("Song is Ended");
        l++;
        play_audio();
    }
    k++;
}
let m = 2,n=1;
function next(){
   l++;
   var id = "song_toplay"+(l-1);
   document.getElementById(id).pause();
   play_audio();
}
function prev(){
    l--;
    var id = "song_toplay"+(l+1);
    document.getElementById(id).pause();
    play_audio();
}