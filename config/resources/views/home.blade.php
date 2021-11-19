@extends('layouts.admin')
@section ('header')
<div class="content-headear">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="card-header">
              <center>  <h3 class="m-0"><b><i>Foto Kategori Wisata</i></b></h3></center>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<style>
    /* CSS Resets */
* {
padding:0;
margin:0;
}
img {
max-width: 100%;
height: auto;
}
ul,ol {
list-style-type: none;
}
/* end css reset */.container { /* posisikan letak slidernya */
margin:10% auto;
position: relative;
overflow: hidden;
}
.container, ul.slide li img{
width:1000px; /* Sesuaikan sendiri */
height: 500px; /* Sesuaikan sendiri */
}ul.slide {
position: absolute;
display: block;
width:300%; /* <– Angka 3 Bergantung pada jumlah slide */
}.caption { /* styling untuk deskripsi setiap slide */
position: absolute;
background-color: rgba(0,0,0,0.5);
bottom:0;
padding:10px;
color:#fff;
left: 0;
right: 0;
}/* Yang membuatnya jadi slider, alias kode intinya */
ul.slide li {
display: inline-block;
float: left;
-webkit-box-sizing:border-box;
-moz-box-sizing:border-box;
ox-sizing:border-box;
-webkit-transition: -webkit-transform 2000ms;
-moz-transition: -moz-transform 2000ms;
transition: -webkit-transform 2000ms, transform 2000ms;
}
ul.slide li.slide-1 {
left: 0%;
}
ul.slide li.slide-2 {
left: 100%;
}
ul.slide li.slide-3 {
left: 200%;
}
#nav-1:checked ~ ul.slide li{
-webkit-transform: translateX(0%);
-moz-transform: translateX(0%);
transform: translateX(0%);
}
#nav-2:checked ~ ul.slide li{
-webkit-transform: translateX(-100%);
-moz-transform: translateX(-100%);
transform: translateX(-100%);
}
#nav-3:checked ~ ul.slide li {
-webkit-transform: translateX(-200%);
-moz-transform: translateX(-200%);
transform: translateX(-200%);
}
/* End, yang membuatnya jadi slider *//* Navigator */.radio-nav { /* menghilangkan radio button */
display: none;
}/* styling untuk tombol next dan previous slide */
.nav-arrow {
position: absolute;
top:45%;
width:50px;
height: 50px;
}
.nav-next {
right:10px;
}
.nav-prev {
left:10px;
}
.nav-arrow label {
-webkit-transition:all 0.3s;
-moz-transition:all 0.3s;
transition:all 0.3s;
background-color: rgba(0,0,0,0.3);
color: #fff;
border-radius: 50%;
display: block;
position: absolute;
padding:15px 20px;
cursor: pointer;
z-index: 1;
opacity: 0;
font-weight: bold;
line-height: 1;
}
.container:hover .nav-arrow label{
background-color: rgba(0,0,0,0.7);
}
/* end styling untuk tombol next dan previous slide */
/* Ini termasuk kode inti. Setiap slide mempunya tombol prev dan next-nya masing-masing. Nah, tampilkan tombol yang tepat dengan kode dibawah ini*/
#nav-1:checked ~ .nav-prev label.nav-3,
#nav-1:checked ~ .nav-next label.nav-2,
#nav-2:checked ~ .nav-prev label.nav-1,
#nav-2:checked ~ .nav-next label.nav-3,
#nav-3:checked ~ .nav-prev label.nav-2,
#nav-3:checked ~ .nav-next label.nav-1 {
z-index: 2;
opacity: 1;
}
/* end *//* Navigator */
</style>
<div class="container">
    <input type="radio" name="slide" class="radio-nav" id="nav-1" checked/>
    <input type="radio" name="slide" class="radio-nav" id="nav-2"/>
    <input type="radio" name="slide" class="radio-nav" id="nav-3"/><ul class="slide">
        <li class="slide-1">
            <img src="{{asset('assets/dist/img/pantai.jpg')}}"/>
            <div class="caption">Pantai</div>
        </li>
        <li class="slide-2">
            <img src="{{asset('assets/dist/img/kebun.jpg')}}"/>
            <div class="caption">kebun</div>
        </li>
        <li class="slide-3">
            <img src="{{asset('assets/dist/img/gunung.jpg')}}"/>
            <div class="caption">Pegunungan</div>
        </li>
        </ul><div class="nav-arrow nav-next">
            <label class="nav-1" for="nav-1">></label>
            <label class="nav-2" for="nav-2">></label>
            <label class="nav-3" for="nav-3">></label>
        </div>
        <div class="nav-arrow nav-prev">
            <label class="nav-1" for="nav-1"><</label>
            <label class="nav-2" for="nav-2"><</label>
            <label class="nav-3" for="nav-3"><</label>
        </div>
</div>
@endsection
