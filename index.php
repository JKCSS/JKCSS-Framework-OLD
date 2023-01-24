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
    box-shadow: 5px 5px 30px rgb(0, 255, 106);
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
    grid-auto-rows: minmax(300px, auto);
    grid-gap: 3rem;
    grid-template-areas: "a b c d" "e f g h";
    padding: 45 45 45 45;
    margin-top: 20px;
    margin-bottom: 5px;
    margin-left: -50px;
}
.iitem1, .iitem2, .iitem3, .iitem4, .iitem5, .iitem6, .iitem7, .iitem8{
    border: 1px solid rgb(202, 198, 198);
    text-align: center;
    padding-top: 50px;
    border-radius: 5px;
    background-color: rgb(30, 30, 46);
}
.iitem1, .iitem6{
    box-shadow: 5px 5px 30px rgb(221, 20, 221);
}
.iitem2, .iitem5{
    box-shadow: 5px 5px 30px orange;
}
.iitem3, .iitem8{
    box-shadow: 5px 5px 30px rgb(15, 64, 197);
}
.iitem4, .iitem7{
    box-shadow: 5px 5px 30px rgb(37, 204, 112);
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

.item-pbtn{
    padding: 10px 35px 10px 35px;
    background: transparent;
    border-radius: 5px;
    transition: 0.5s;
}
.iitem1 .item-pbtn, .iitem6 .item-pbtn{
    border: 1px solid rgb(221, 20, 221);
    color: rgb(221, 20, 221);
}
.iitem1:hover, .iitem2:hover, .iitem3:hover, .iitem4:hover, .iitem5:hover, .iitem6:hover, .iitem7:hover, .iitem8:hover{ 
    cursor: pointer;
}
.iitem1:hover .item-pbtn, .iitem6:hover .item-pbtn{
    box-shadow: 5px 5px 30px rgb(221, 20, 221);
    padding: 20px;
}
.iitem2 .item-pbtn, .iitem5 .item-pbtn{
    border: 1px solid orange;
    color: orange;
}
.iitem2:hover .item-pbtn, .iitem5:hover .item-pbtn{
    box-shadow: 5px 5px 30px orange;
    padding: 20px;
}
.iitem3 .item-pbtn, .iitem8 .item-pbtn{
    border: 1px solid rgb(15, 64, 197);
    color: rgb(15, 64, 197);
}
.iitem3:hover .item-pbtn, .iitem8:hover .item-pbtn{
    box-shadow: 5px 5px 30px rgb(15, 64, 197);
    padding: 20px;
}
.iitem4 .item-pbtn, .iitem7 .item-pbtn{
    border: 1px solid rgb(37, 204, 112);
    color: rgb(37, 204, 112);
}
.iitem4:hover .item-pbtn, .iitem7:hover .item-pbtn{
    box-shadow: 5px 5px 30px rgb(37, 204, 112);
    padding: 20px;
}
.follow-content{
    background-color: rgb(19, 19, 39);
    padding: 0 0 50px 0;
    color: white;
}
.follow-content .title{
    padding: 50px 0 20px 0;
    font-size: 30px;
    text-align: center;
}
.orange-hr{
    border-top: 2px solid orange;
    box-shadow: 5px 5px 30px orange;
}
.follow-content .body{
    text-align: center;
    margin: 20px 0 20px 0;
}
.follow-content .body .follow-item-git, .follow-item-linked, .follow-item-tw, .follow-item-stack{
    font-size: 40px;
    margin: 0 20px 0 20px;
    transition: 0.5s;
}
.follow-item-git:hover, .follow-item-linked:hover, .follow-item-tw:hover, .follow-item-stack:hover{
    cursor: pointer;
    color: white;
}
.follow-item-git{
    color: rgb(221, 20, 221);
    text-shadow: 2px 2px 8px purple;
}
.follow-item-linked{
    color: rgb(37, 204, 112);
    text-shadow: 2px 2px 8px rgb(37, 204, 112);
}
.follow-item-tw{
    color: orange;
    text-shadow: 2px 2px 8px orange;
}
.follow-item-stack{
    color: rgb(15, 64, 197);
    text-shadow: 2px 2px 8px rgb(15, 64, 197);
}
.green-hr{
    margin-top: 50px;
    border-top: 2px solid rgb(37, 204, 112);
    box-shadow: 5px 5px 30px rgb(37, 204, 112);
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
