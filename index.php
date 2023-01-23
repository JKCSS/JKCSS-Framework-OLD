@import url('https://fonts.googleapis.com/css2?family=Catamaran:wght@500&family=Roboto:ital@1&family=Sofia+Sans&family=Source+Sans+Pro&display=swap');
/*
    use fonts
    font-family: 'Catamaran', sans-serif;
    font-family: 'Roboto', sans-serif;
    font-family: 'Sofia Sans', sans-serif;
    font-family: 'Source Sans Pro', sans-serif;

    https://drive.google.com/uc?export=download&id=1kXjq5Oik5YSPafbIFd98reqEM-6Os1t_
*/

*{
    margin: 0;
    font-family: 'Source Sans Pro', sans-serif;
}
.box-container{
    margin: 0px 200px 0px 200px;
}
.main-nav{
    background-color: rgb(19, 19, 39);
    width: 100%;
    color: white;
    padding: 20px 0px 20px 0;
    border-bottom: 1px solid rgb(221, 20, 221);
}
.main-nav .left-side{
    padding: 8px;
    border: 2px solid purple;
    width: 160px;
    border-radius: 2px;
    box-shadow: 5px 5px 10px purple;
}
.main-nav .right-side{
    margin-left: 91%;
    margin-top: -40px;
}
.main-nav .right-side .download-btn{
    padding: 10px 20px 10px 20px;
    background: transparent;
    border: 2px solid purple;
    color: white;
    font-size: 16px;
    border-radius: 2px;
    transition: 0.5s;
}
.download-btn:hover{
    box-shadow: 5px 5px 30px purple;
    cursor: pointer;
}
.footer-content{
    padding: 50px 0 50px 0;
    background-color: rgb(19, 19, 39);
    color: white;
    border-top: 1px solid purple;
}
.footer-content .footer-grid{
    display: grid;
    width: 100%;
    height: auto;
    grid-template-columns: repeat(4, 1fr);
    grid-auto-rows: minmax(250px, auto);
    grid-gap: 2rem;
    grid-template-areas: "a b c d";
    padding: 45 45 45 45;
    margin-top: 20px;
    margin-bottom: 5px;
    margin-left: -50px;
}
.fitem1{
    grid-area: a;
}
.fitem2{
    grid-area: b;
}
.fitem3{
    grid-area: c;
}
.fitem4{
    grid-area: d;
}

.fitem1 .title, .fitem2 .title, .fitem3 .title, .fitem4 .title{
    padding-bottom: 50px;
    text-align: center;
    font-size: 20px;
}
.fitem2 .title, .fitem3 .title{
    color: rgb(221, 20, 221);
}
.fitem1, .fitem2, .fitem3, .fitem4{
    padding: 30px 50px;
    border-radius: 5px;
}
.fitem1, .fitem4{
    background-color: purple;
    box-shadow: 5px 5px 10px rgb(82, 10, 82);
    border: 2px solid purple;
}
.fitem2, .fitem3{
    border: 2px solid rgb(221, 20, 221);
    box-shadow: 5px 5px 10px purple;
}
.fitem2 ul, .fitem3 ul{
    list-style-type: none;
}
.fitem2 ul li, .fitem3 ul li{
    padding: 10px;
}
.fitem2 ul li a, .fitem3 ul li a{
    color: white;
    text-decoration: none;
}
.fitem2 ul li a:hover, .fitem3 ul li  a:hover{
    color: white;
    padding: 2px;
    cursor: pointer;
    color: rgb(221, 20, 221);
}
.follow{
    padding: 30px 0 30px 0;
}
.subscribe .form-input {
    width: 100%;
    height: 40px;
    padding: 10px;
    margin-bottom: 20px;
    background: transparent;
    border: 2px solid white;
    border-radius: 2px;
    color: white;
}
.subscribe .sub-btn{
    width: 100%;
    height: 30px;
    border: 2px solid white;
    color: white;
    background: transparent;
    border-radius: 2px;
    transition: 0.5s;
}
.sub-btn:hover{
    background-color: white;
    border: 2px solid purple;
    cursor: pointer;
    color: purple;
}
.main-title{
    text-align: center;
    font-size: 40px;
}
.footer-hr{
    border-top: 1px solid white;
    margin-top: 20px;
}
.copy{
    padding-top: 15px;
    text-align: center;
}
.copy a{
    text-decoration: none;
    color: rgb(221, 20, 221);
}
.main-content{
    color: white;
    background-color: rgb(19, 19, 39);
    font-family: 'Roboto', sans-serif;
    padding: 100px 0 100px 0;
}
.main-content .title{
    text-align: center;
    font-size: 35px;
}
.main-content .body{
    text-align: center;
    margin: 20px 0 20px 0;
}
.main-content .body .main-jk-img{
    border: 1px solid rgb(221, 20, 221);
    border-radius: 5px;
    box-shadow: 5px 5px 10px purple;
}
.text-main{
    text-align: center;
    color: rgb(221, 20, 221);
    padding-top: 25px;
}
.get-strated{
    margin-top: 20px;
    padding: 10px 40px;
    font-size: 18px;
    background-color: transparent;
    border: 2px solid rgb(221, 20, 221);
    color: rgb(221, 20, 221);
    border-radius: 5px;
    transition: 0.5s;
}
.get-strated:hover{
    box-shadow: 5px 5px 20px purple;
    cursor: pointer;
}
.main-hr{
    border-top: 1px solid rgb(0, 255, 106);
}
.item-content{
    background-color: rgb(19, 19, 39);
    color: white;
    padding: 0 0 50px 0;
}
.item-content .title{
    padding: 50px 0 20px 0;
    font-size: 18px;
}
.item-grid{
    display: grid;
    width: 100%;
    height: auto;
    grid-template-columns: repeat(4, 1fr);
    grid-auto-rows: minmax(250px, auto);
    grid-gap: 2rem;
    grid-template-areas: "a b c d" "e f g h";
    padding: 45 45 45 45;
    margin-top: 20px;
    margin-bottom: 5px;
}
.iitem1{
    grid-area: a;
}
.iitem2{
    grid-area: b;
}
.iitem3{
    grid-area: c;
}
.iitem4{
    grid-area: d;
}
.iitem5{
    grid-area: e;
}
.iitem6{
    grid-area: f;
}
.iitem7{
    grid-area: g;
}
.iitem8{
    grid-area: h;
}
/* 
    ***************************************************************************************

                             commen laptop screen and small screens

                                            769px - 1400px

    ***************************************************************************************
*/

@media only screen and (min-device-width: 821px) and (max-device-width: 1400px) {
    .box-container{
        margin: 0px 180px 0px 180px;
    }
    .main-nav .right-side{
        margin-left: 89%;
        margin-top: -40px;
    }
    .footer-content .footer-grid{
        display: grid;
        width: 100%;
        height: auto;
        grid-template-columns: repeat(2, 1fr);
        grid-auto-rows: minmax(250px, auto);
        grid-gap: 2rem;
        grid-template-areas: "a b" "c d";
        padding: 45 45 45 45;
        margin-top: 20px;
        margin-bottom: 5px;
        margin-left: -50px;
    }
}

/* 
    ***************************************************************************************

                                        iPads, Tablets

                                        481px — 768px

    ***************************************************************************************
*/

@media only screen and (min-device-width: 481px) and (max-device-width: 820px) {
    .box-container{
        margin: 0px 70px 0px 70px;
    }
    .main-nav .right-side{
        margin-left: 83%;
        margin-top: -40px;
    }
    .footer-content .footer-grid{
        display: grid;
        width: 100%;
        height: auto;
        grid-template-columns: repeat(2, 1fr);
        grid-auto-rows: minmax(250px, auto);
        grid-gap: 2rem;
        grid-template-areas: "a b" "c d";
        padding: 45 45 45 45;
        margin-top: 20px;
        margin-bottom: 5px;
        margin-left: -50px;
    }
}


/* 
    ***************************************************************************************

                                     commen mobile screen

                                            320x480

    ***************************************************************************************
*/

@media only screen and (min-device-width: 320px) and (max-device-width: 480px) {
    .box-container{
        margin: 0px 20px 0px 20px;
    }
    .main-nav .right-side{
        margin-left: 68%;
        margin-top: -40px;
    }
    .footer-content .footer-grid{
        display: grid;
        width: 100%;
        height: auto;
        grid-template-columns: repeat(1, 1fr);
        grid-auto-rows: minmax(250px, auto);
        grid-gap: 2rem;
        grid-template-areas: "a" "b" "c" "d";
        padding: 45 45 45 45;
        margin-top: 20px;
        margin-bottom: 5px;
        margin-left: -50px;
    }
}
