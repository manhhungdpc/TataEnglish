<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use  yii\helpers\BaseUrl;

$this->title = 'Tata English';
?>
<?php
$image = [
Html::img(Yii::$app->request->baseUrl.'/img/logo.png',array('width'=>'269px','height'=>'50%','title'=>'home page','id'=>'class'))
,
Html::img(Yii::$app->request->baseUrl.'/img/page1_icon1.png',array('class'=>'icon-s'))
,
Html::img(Yii::$app->request->baseUrl.'/img/page1_icon2.png',array('class'=>'icon-s'))
,
Html::img(Yii::$app->request->baseUrl.'/img/page1_icon3.png',array('class'=>'icon-s'))
,
Html::img(Yii::$app->request->baseUrl.'/img/page1_pic4.jpg',array('id'=>'footer-image'))
,
Html::img(Yii::$app->request->baseUrl.'/img/gift.png',array('class'=>'gift','width'=>'50px','height'=>"50px"))
]; 
?>
<div class="container">
    <header>
        <div id="header-top">
            <div class="row">
                <div class="col-xs-12   col-md-2 ">
                 <?=$image[0] ; ?>" 
             </div>
             <div class="col-xs-12   col-sm-12 col-md-2 col-md-push-6 ">
                <button class="btn-md  btn"><h5>Đăng ký học thử miễn phí</h5></button>
            </div>
            <div class="col-xs-12   col-sm-12 col-md-4  col-md-rush-5 ">
                <nav>                           
                    <div class="col-xs-3 col-sm-3 col-md-3 "  >
                        <a href="#"><h5>home</h5></a>
                    </div>
                    <div class="col-xs-5 col-sm-4">
                        <a href="#"><h5>contact</h5></a>
                    </div>
                    <div class="col-xs-2  col-sm-3">
                        <a href="#"><h5>login</h5></a>
                    </div>
                </nav>
            </div>
            <div class="clearfix"></div>
        </div>                    
    </div>
    <div class="header-bot">
        <div class="sub-bot-top">
            <div class="row">
                <div class="col-xs-12">
                    <p class="big-size">PREPARING STUDENTS FOR SUCCESSFUL FUTURE!</p>
                </div>
                <div class="col-xs-12">
                    <div class="col-xs-1">
                        <i></i>
                    </div>
                    <div class="col-xs-10"><p class="medium-size">Life isn't about finding yourself , life is about creating yourself</p>
                    </div>
                    <div class="col-xs-1">
                        <em></em>
                    </div>
                </div>
            </div>
            <div class="clearfix">
            </div>
        </div>
    </div>
</header>

<div id="contents">

    <div class="sub-main-top">
        <div class="row">
            <div class="col-xs-10 col-xs-push-1    col-sm-4  col-md-4 ">
                <div class="thump">
                    <div class="bot-image">
                        <?=$image[1]; ?>
                    </div>
                    <p class="medium-size"><span>Lộ trình học tập<span></p></br>
                    <p class="small-size">
                        <span>Level 1: Phát âm, nghe nói phản xạ</span><br>
                        <span>Level 2: Nghe nói đọc viết cơ bản</span><br>
                        <span>Level 3: Nghe nói đọc viết nâng cao</span><br>
                        <span>Level 4: Cam kết đầu ra TOEIC 700+ </span><br>
                    </p>
                    <button class="btn">Read more</button>
                </div>
            </div>

            <div class="col-xs-10 col-xs-push-1 col-sm-4 col-md-4 " >  
                <div class="thump">
                    <div class="bot-image">
                        <?=$image[2]; ?>
                    </div>
                    <p class="medium-size"><span>Trang web tự học</span></p></br>
                    <p class="small-size">
                        <span>Học bằng âm thanh, hình ảnh sinh động</span></br>
                        <span>Từ vựng chỉ cần học 1 lần là thuộc làu</span></br>
                        <span>Học ngữ pháp ứng dụng vào 4 kĩ năng</span></br>
                        <span>Luyện nghe chưa bao giờ lại dễ đến thế</span></br>
                    </p>

                    <button class="btn">Read more</button>
                </div>
            </div>

            <div class="col-xs-10 col-xs-push-1  col-sm-4 col-md-4">
                <div class="thump">
                    <div class="bot-image">
                        <?=$image[3];  ?>
                    </div>
                    <p class="medium-size"><span>Cảm nhận học sinh</span></p></br>
                    <p class="small-size">
                        <span>"Đại học cũng bốn năm rồi</span></br>
                        <span>Toàn là nằm ngủ không thì chơi game</span></br>
                        <span>Ngoài ra chẳng biết gì thêm</span></br>
                        <span>Thời gian cứ thế êm đềm trôi qua". </span></br>
                    </p>
                    <button class="btn">Read more</button>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>


    <div class="sub-main-mid">
        <div class="row">

            <div class="col-xs-12  col-sm-12 col-md-12 ">
                <div class="sologan">
                    <p class="medium-size"><span>Video học sinh:</span></p>
                    <p class="small-size"><span>Cuối cùng khi tốt nghiệp tại TATA thì các học viên không chỉ đạt được khả năng Nghe, Nói, Đọc, Viết thành thạo để áp dụng vào cuộc sống và công việc sau này mà còn đạt được ít nhất 700 điểm Toeic.</span></p>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="col-xs-12 col-sm-4  col-md-4">
                    <div class="thump">
                        <iframe width="100%" height="235" src="https://www.youtube.com/embed/CU8fg8j2Jmk" frameborder="0" allowfullscreen></iframe>
                        <p class="medium-size"><span>Tốt nghiệp level 1</span></p>
                        <p class="small-size"><span>Chỉ sau 20 tuần là toàn bộ các học viên đã có thể phát âm chuẩn tất cả các từ theo từ điển Oxford và có thể nói chuyện một cách thoải mái, tự nhiên về các vấn đề quen thuộc trong cuộc sống.</span></p>
                        <button class="btn">Read more</button>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="thump"> 
                        <iframe width="100%" height="235" src="https://www.youtube.com/embed/8QmQOUQWVq0" frameborder="0" allowfullscreen></iframe>
                        <p class="medium-size"><span>Tốt nghiệp level 2</span></p>
                        <p class="small-size">Và sau 20 tuần tiếp theo các học viên không chỉ nắm vững tất cả các cấu trúc ngữ pháp áp dụng vào Nghe, Nói, Đọc, Viết mà còn có thể nói chuyện trơn tru, tự nhiên với những người nước ngoài.</p>  
                        <button class="btn">Read more</button>
                    </div>        
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="thump">
                        <iframe width="100%" height="235" src="https://www.youtube.com/embed/HNeanpYXr3A" frameborder="0" allowfullscreen></iframe>
                        <p class="medium-size"><span>Cam kết đầu ra</span></p>
                        <p class="small-size"><span>Hầu hết học sinh đến với TATA đều bắt đầu từ con số không, phát âm thì sai đến 99%.
                            Thế nhưng ... </span></p>
                            <button class="btn">Read more</button>
                        </div>  
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>

        <div class="sub-main-bot">
            <div class="row">

                <div class="col-xs-12 col-ms-12 col-md-4">

                    <div class="thump">
                        <div class="col-xs-2 col-sm-2 col-md-2">
                            <?=$image[5] ?>
                            <strong ></strong>
                        </div>
                        <div class="col-xs-8  col-xs-push-1 col-sm-6 col-md-10" >
                            <p class="small-size">Mời bạn tham gia 2 tuần học thử miễn phí tại TATA để nhận ra rằng mình hoàn toàn có thể tự học được cả 4 kỹ năng Nghe, Nói, Đọc, Viết trong Tiếng Anh </p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-8">
                    <?=$image[4]; ?>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 ">
                    <button class="btn"><h5>Đăng ký học thử miễn phí</h5></button>
                </div>
                <div class="clearfix"></div>

            </div>

        </div>

    </div>  



    <footer>
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <p class="big-size">DOWNLOAD TỪ ĐIỂN OXFORD</p>
            </div>
            <div class="col-xs-12  col-sm-12 col-md-12"><p class="medium-size">
                <p>Từ điển Oxford là từ điển tốt nhất thế giới để luyện phát âm, tra cứu các hiện tượng ngữ pháp và cách sử dụng các từ vựng..</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button class="btn"><h4>Download</h4></button>
            </div>
            <div class="col-xs-12  col-sm-12 col-md-12">
                <div class="col-xs-12  col-sm-7 col-md-7">
                    <p style="text-align: left;" class="medium-size">Tata English</p>
                </div>
                <div class="col-xs-12  col-sm-5 col-md-5">
                <p style="text-align: left;" class="small-size">Số 9, ngõ 1, đường Cầu Vồng, Đức Thắng, Bắc Từ Liêm, Hà Nội
                    </p>
                </div>
            </div>
            <div class="clearfix"></div>

        </div>
    </footer>


</div>