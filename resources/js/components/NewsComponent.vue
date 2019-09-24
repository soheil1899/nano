<template>
    <div class="container-fluid mt-5 pt-5">
        <div class="text-center px-5 pb-5 pt-3">
            <h2 class="border-bottom pb-2"><strong>
                Last News
            </strong></h2>
            <input type="button" class="btn btn-outline-dark mt-3 vollkorn-font" value="View All News">
        </div>

        <div class="row px-1 px-md-5 mx-0 pb-5">
            <div class="col-6 col-md-4 p-2">
                <div class="product-item text-center p-3">
                    <img src="/media/test/01.jpg" width="80%">
                    <h5 class="mt-3"><strong>
                        News 1
                    </strong></h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit quisque, magnis imperdiet fermentum nullam
                        quis neque praesent, vivamus nibh commodo porttitor molestie ultrices fusce.</p>
                </div>
            </div>
            <div class="col-6 col-md-4 p-2 ">
                <div class="product-item text-center p-3">
                    <img src="/media/test/02.jpg" width="80%">
                    <h5 class="mt-3"><strong>
                        News 2
                    </strong></h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit quisque, magnis imperdiet fermentum nullam
                        quis neque praesent, vivamus nibh commodo porttitor molestie ultrices fusce.</p>
                </div>
            </div>
            <div class="col-6 col-md-4 p-2">
                <div class="product-item text-center p-3">
                    <img src="/media/test/03.jpg" width="80%">
                    <h5 class="mt-3"><strong>
                        News 3
                    </strong></h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit quisque, magnis imperdiet fermentum nullam
                        quis neque praesent, vivamus nibh commodo porttitor molestie ultrices fusce.</p>                </div>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        name: "NewsComponent"
    }
</script>

<style scoped>
    .product-item {
        border: 1px solid #ddd;
    }

    .product-item:hover {
        border: none;
        box-shadow: 0 0 10px 3px #ccc;
    }
</style>
