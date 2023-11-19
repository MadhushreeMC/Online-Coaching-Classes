#imgContainer {
width: 100%;
text-align: center;
position: relative;
}
#imgArea {
display: inline-block;
margin: 0 auto;
width: 150px;
height: 150px;
position: relative;
background-color: #eee;
font-family: Arial, Helvetica, sans-serif;
font-size: 13px;
}
#imgArea img {
outline: medium none;
vertical-align: middle;
width: 100%;
}
#imgChange {
background: url("../img/overlay.png") repeat scroll 0 0 rgba(0, 0, 0, 0);
bottom: 0;
color: #FFFFFF;
display: block;
height: 30px;
left: 0;
line-height: 32px;
position: absolute;
text-align: center;
width: 100%;
}
#imgChange input[type="file"] {
bottom: 0;
cursor: pointer;
height: 100%;
left: 0;
margin: 0;
opacity: 0;
padding: 0;
position: absolute;
width: 100%;
z-index: 0;
}

/* Progressbar */.progressBar {
background: none repeat scroll 0 0 #E0E0E0;
left: 0;
padding: 3px 0;
position: absolute;
top: 50%;
width: 100%;
display: none;
}
.progressBar .bar {
background-color: #FF6C67;
width: 0%;
height: 14px;
}
.progressBar .percent {
display: inline-block;
left: 0;
position: absolute;
text-align: center;
top: 2px;
width: 100%;
}