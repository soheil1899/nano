<template>
    <div>

        <nav class="navbar navbar-expand-lg navbar-light vollkorn-font">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">HOME</a>
                    </li>
                    <li class="nav-item mx-2 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown">
                            ABOUT US
                            <i class="fa fa-angle-down fa-sm ml-1"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">About Us</a>
                            <a class="dropdown-item" href="#">About Blue Ocean</a>
                            <a class="dropdown-item" href="#">Vision and Mission</a>
                            <a class="dropdown-item" href="#">HSE</a>
                            <a class="dropdown-item" href="#">Why?</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Chart</a>
                        </div>
                    </li>
                    <li class="nav-item mx-2 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                           data-toggle="dropdown">
                            PRODUCT
                            <i class="fa fa-angle-down fa-sm ml-1"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                            <a class="dropdown-item" href="#">Galva Silver</a>
                            <a class="dropdown-item" href="#">High Tech Paint and Coatings</a>
                            <a class="dropdown-item" href="#">Nano Materials</a>
                            <a class="dropdown-item" href="#">Conventional Coatings</a>
                        </div>
                    </li>
                    <li class="nav-item mx-2 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                           data-toggle="dropdown">
                            CERTIFICATE
                            <i class="fa fa-angle-down fa-sm ml-1"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                            <a class="dropdown-item" href="#">Iranian Maritime Industries</a>
                            <a class="dropdown-item" href="#">Association</a>
                            <a class="dropdown-item" href="#">ICCC 2015</a>
                            <a class="dropdown-item" href="#">Knowledge Base</a>
                            <a class="dropdown-item" href="#">Patent</a>
                            <a class="dropdown-item" href="#">Science</a>
                            <a class="dropdown-item" href="#">IACS Type Approval</a>
                            <a class="dropdown-item" href="#">Type Approval Certificate</a>
                        </div>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">LIBRARY</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">ACCOUNT</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control header-serchinput mr-sm-2" type="search" placeholder="Search"
                           aria-label="Search">
                    <button class="btn btn-outline-success header-serchbtn my-2 my-sm-0" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
        </nav>
    </div>
</template>

<script>
    export default {
        name: "Navigation",
    }

</script>

<style scoped>

</style>
