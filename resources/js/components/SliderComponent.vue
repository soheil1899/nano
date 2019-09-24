<template>
    <div>
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active position-relative">
                        <div class="position-absolute slider-opacity"></div>
                        <img src="/media/test/12.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
<!--                            <h5>First slide label</h5>-->
<!--                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum</p>-->
                        </div>
                    </div>
                    <div class="carousel-item position-relative">
                        <div class="position-absolute slider-opacity"></div>
                        <img src="/media/test/13.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item position-relative">
                        <div class="position-absolute slider-opacity"></div>
                        <img src="/media/test/14.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
<!--                            <h5>Third slide label</h5>-->
<!--                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur</p>-->
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "SliderComponent"
    }
</script>

<style scoped>
    .slider-opacity {
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }
    .carousel-indicators li{
        width: 2%;
        height: 10px;
        border-radius: 50%;
    }
</style>
