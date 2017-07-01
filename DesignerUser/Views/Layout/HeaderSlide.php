<header id="myCarousel" class="carousel slide" style="margin-left: 90px;margin-right: 90px;">
    <!-- Indicators -->
    <ol class="carousel-indicators" >
        <li data-target="#myCarousel" data-slide-to="0" class="active" style="background-color: #3b8ab8"></li>
        <li data-target="#myCarousel" data-slide-to="1" style="background-color: #3b8ab8"></li>
        <li data-target="#myCarousel" data-slide-to="2" style="background-color: #3b8ab8"></li>
        <li data-target="#myCarousel" data-slide-to="3"style="background-color: #3b8ab8"></li>
        <li data-target="#myCarousel" data-slide-to="4"style="background-color: #3b8ab8"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill" style="background-image:url('../../Assets/image/slider.jpg');" ></div>
            <div class="carousel-caption">
                <h2 style="color: #1b6d85">Mùa Hè Tới Rồi</h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('../../Assets/image/nen4.jpg');"></div>
            <div class="carousel-caption">
                <h2 style="color: #1b6d85">Chung Ta Chuận Bị</h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('../../Assets/image/nen1.jpg');"></div>
            <div class="carousel-caption">
                <h2 style="color: #1b6d85">Cho Nhưng Chuyến Đi Dài</h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('../../Assets/image/nen2.jpg');"></div>
            <div class="carousel-caption">
                <h2 style="color: #1b6d85">Để  Tận Hưởng Cuốc Sống</h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('../../Assets/image/nen3.jpg');"></div>
            <div class="carousel-caption">
                <h2 style="color: #1b6d85">Đất Nước Và Con Người VIỆT NAM</h2>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>
<script>
    $('.carousel').carousel({
        interval: 1000 //changes the speed
    })
</script>