<!DOCTYPE html>
<html lang="en">
<?php
include 'partials/header.php';

?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Management tour</title>
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css'>
    <link rel="stylesheet" href="./style.css">

</head>

<body>

    <body>
        <!-- slider banner  -->
        <div class="w-full h-full mb-4">
            <div class="w-full h-screen">
                <div class="w-full relative flex flex-col justify-center items-center bg-cover bg-center h-full" style="background-image: url('images/slider.jpg');">
                    <div class="">
                        <h2 class="text-white text-center text-6xl font-bold mb-4">Where Would You Like To Go?</h2>
                        <p class="text-white text-center text-2xl font-semibold">Checkout Beautiful Places Around the
                            World.
                        </p>
                    </div>
                    <!-- filter -->
                    <div class="w-11/12 p-2 bg-white border rounded-md">
                        <form action="/action_page.php" id="filterform">
                            <div class="grid grid-cols-4 gap-5">
                                <!-- location -->
                                <div class="flex items-center border-b justify-start gap-5">
                                    <div class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 fill-[#03B39C]" height="1em" viewBox="0 0 512 512">
                                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <path d="M320 64A64 64 0 1 0 192 64a64 64 0 1 0 128 0zm-96 96c-35.3 0-64 28.7-64 64v48c0 17.7 14.3 32 32 32h1.8l11.1 99.5c1.8 16.2 15.5 28.5 31.8 28.5h38.7c16.3 0 30-12.3 31.8-28.5L318.2 304H320c17.7 0 32-14.3 32-32V224c0-35.3-28.7-64-64-64H224zM132.3 394.2c13-2.4 21.7-14.9 19.3-27.9s-14.9-21.7-27.9-19.3c-32.4 5.9-60.9 14.2-82 24.8c-10.5 5.3-20.3 11.7-27.8 19.6C6.4 399.5 0 410.5 0 424c0 21.4 15.5 36.1 29.1 45c14.7 9.6 34.3 17.3 56.4 23.4C130.2 504.7 190.4 512 256 512s125.8-7.3 170.4-19.6c22.1-6.1 41.8-13.8 56.4-23.4c13.7-8.9 29.1-23.6 29.1-45c0-13.5-6.4-24.5-14-32.6c-7.5-7.9-17.3-14.3-27.8-19.6c-21-10.6-49.5-18.9-82-24.8c-13-2.4-25.5 6.3-27.9 19.3s6.3 25.5 19.3 27.9c30.2 5.5 53.7 12.8 69 20.5c3.2 1.6 5.8 3.1 7.9 4.5c3.6 2.4 3.6 7.2 0 9.6c-8.8 5.7-23.1 11.8-43 17.3C374.3 457 318.5 464 256 464s-118.3-7-157.7-17.9c-19.9-5.5-34.2-11.6-43-17.3c-3.6-2.4-3.6-7.2 0-9.6c2.1-1.4 4.8-2.9 7.9-4.5c15.3-7.7 38.8-14.9 69-20.5z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="w-full text-[grey]"> Destinations
                                        <div class="">
                                            <select class="w-full font-bold text-black bg-transparent" name="locations" id="locations" form="filterform">
                                                <option class="font-bold" value="">Locations</option>
                                                <option value="japan">Japan</option>
                                                <option value="singaphore">Singaphore</option>
                                                <option value="thailand">ThaiLand</option>
                                                <option value="france">France</option>
                                                <option value="italy">Italy</option>
                                                <option value="united kingdom">United Kingdom</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- activity -->
                                <div class="flex items-center border-b justify-start gap-5">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 fill-[#03B39C]" height="1em" viewBox="0 0 384 512">
                                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <path d="M192 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm51.3 182.7L224.2 307l49.7 49.7c9 9 14.1 21.2 14.1 33.9V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V397.3l-73.9-73.9c-15.8-15.8-22.2-38.6-16.9-60.3l20.4-84c8.3-34.1 42.7-54.9 76.7-46.4c19 4.8 35.6 16.4 46.4 32.7L305.1 208H336V184c0-13.3 10.7-24 24-24s24 10.7 24 24v55.8c0 .1 0 .2 0 .2s0 .2 0 .2V488c0 13.3-10.7 24-24 24s-24-10.7-24-24V272H296.6c-16 0-31-8-39.9-21.4l-13.3-20zM81.1 471.9L117.3 334c3 4.2 6.4 8.2 10.1 11.9l41.9 41.9L142.9 488.1c-4.5 17.1-22 27.3-39.1 22.8s-27.3-22-22.8-39.1zm55.5-346L101.4 266.5c-3 12.1-14.9 19.9-27.2 17.9l-47.9-8c-14-2.3-22.9-16.3-19.2-30L31.9 155c9.5-34.8 41.1-59 77.2-59h4.2c15.6 0 27.1 14.7 23.3 29.8z"></path>
                                        </svg>
                                    </div>
                                    <div class="w-full text-[grey]"> Activity
                                        <div class="">
                                            <select class="w-full font-bold text-black bg-transparent" name="booking" id="booking" form="filterform">
                                                <option value="">Booking Type</option>
                                                <option value="adventure">Adventure</option>
                                                <option value="beache">Beache</option>
                                                <option value="discovery">Discovery</option>
                                                <option value="mountain biking">Mountain Biking</option>
                                                <option value="tent camping">Tent Camping</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- date -->
                                <div class="flex items-center border-b justify-start gap-5">
                                    <div class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 fill-[#03B39C]" height="1em" viewBox="0 0 448 512">
                                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <path d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z" />
                                        </svg>
                                    </div>
                                    <div class="w-full text-[grey]"> Date From
                                        <div class="">
                                            <input class="w-full font-bold text-black bg-transparent" type="date" id="start" name="trip-start" value="2023-08-19" min="2023-08-19" max="2023-08-25" />
                                        </div>
                                    </div>
                                </div>
                                <!-- guests -->
                                <div id="guestsField" class="border-b pb-2">
                                    <div class="search_guests_field is-active" data-active-tour="1" data-title-tour="Guests" id="guestsSection">
                                        <div class="w-full relative justify-between flex flex-col gap-2">
                                            <div class="flex items-start gap-5"><svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 fill-[#03B39C]" height="1em" viewBox="0 0 448 512">
                                                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                    <path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
                                                </svg>
                                                <div class="search_guests_title flex gap-2 text-[grey]">Guests <span class="search_guests_title_value text-black">0</span></div>

                                            </div>
                                            <div class="field-content absolute top-[100%] bg-white rounded-lg p-4 ">
                                                <div class="search_guests_select_wrapper close_by_apply_btn is-active grid gap-y-2">
                                                    <div class="input_select_field input_select_field_guests is-active flex w-full justify-between gap-4" data-name="guests[43]" data-inputfield="1" data-active-tour="1" data-title-tour="Guests">

                                                        <span class="select_guests_title text-black">Children</span>
                                                        <div class=" justify-between gap-2 flex items-center">
                                                            <span class="search_guests_plus btn-search-guests-change btn-secondary-outlined"><svg xmlns="http://www.w3.org/2000/svg" class="bg-[#03B39C] rounded-lg px-2 py-1 w-10 h-5" height="1em" viewBox="0 0 448 512">
                                                                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                    <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                                                                </svg></span>
                                                            <span class="select_guests_value  text-black">0</span>
                                                            <span class="search_guests_minus btn-search-guests-change btn-secondary-outlined"><svg xmlns="http://www.w3.org/2000/svg" class="bg-[#03B39C] rounded-lg px-2 py-1 w-10 h-5" height="1em" viewBox="0 0 448 512">
                                                                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                    <path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
                                                                </svg></span>
                                                            <input type="hidden" class="select_guests_input_value" name="guests[43]" value="0">
                                                        </div>
                                                    </div>
                                                    <div class="input_select_field input_select_field_guests is-active flex w-full justify-between gap-4" data-name="guests[44]" data-inputfield="1" data-active-tour="1" data-title-tour="Guests">

                                                        <span class="select_guests_title text-black">Youth</span>
                                                        <div class="justify-between gap-2 flex items-center">
                                                            <span class="search_guests_plus btn-search-guests-change btn-secondary-outlined"><svg xmlns="http://www.w3.org/2000/svg" class="bg-[#03B39C] rounded-lg px-2 py-1 w-10 h-5" height="1em" viewBox="0 0 448 512">
                                                                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                    <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                                                                </svg></span>
                                                            <span class="select_guests_value text-black">0</span>
                                                            <span class="search_guests_minus btn-search-guests-change btn-secondary-outlined"><svg xmlns="http://www.w3.org/2000/svg" class="bg-[#03B39C] rounded-lg px-2 py-1 w-10 h-5" height="1em" viewBox="0 0 448 512">
                                                                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                    <path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
                                                                </svg></span>
                                                            <input type="hidden" class="select_guests_input_value" name="guests[44]" value="0">
                                                        </div>
                                                    </div>
                                                    <div class="input_select_field input_select_field_guests is-active flex w-full justify-between gap-4" data-name="guests[42]" data-inputfield="1" data-active-tour="1" data-title-tour="Guests">

                                                        <span class="select_guests_title text-black">Adult</span>
                                                        <div class="justify-between gap-2 flex items-center">
                                                            <span class="search_guests_plus btn-search-guests-change btn-secondary-outlined"><svg xmlns="http://www.w3.org/2000/svg" class="bg-[#03B39C] rounded-lg px-2 py-1 w-10 h-5" height="1em" viewBox="0 0 448 512">
                                                                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                    <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                                                                </svg></span>
                                                            <span class="select_guests_value text-black">0</span>
                                                            <span class="search_guests_minus btn-search-guests-change btn-secondary-outlined"><svg xmlns="http://www.w3.org/2000/svg" class="bg-[#03B39C] rounded-lg px-2 py-1 w-10 h-5" height="1em" viewBox="0 0 448 512">
                                                                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                    <path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
                                                                </svg></span>
                                                            <input type="hidden" class="select_guests_input_value" name="guests[42]" value="0">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- apply -->
                            <div class="flex w-fit mx-auto px-4 py-2 bg-[#03B39C] rounded-full items-center gap-4 justify-center">
                                <input class="bg-[#03B39C] text-white flex items-center" type="submit" value="search"><svg xmlns="http://www.w3.org/2000/svg" class="fill-white h-4 w-4" viewBox="0 0 512 512">
                                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                                </svg>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        <!-- Activities -->
        <div class="w-full h-full text-center my-8">
            <span class="w-auto px-6 py-2 m-6 text-[#03b39c] rounded-md inline-block text-base relative bg-[#97beb94b] font-semibold">Popular
                Activities</span>
            <h2 class="text-5xl text-black font-bold">Or browse the selected type</h2>
        </div>

        <!-- carousel tour  -->
        <div class="container-fluid">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner row w-full mx-auto">
                    <div class="carousel-item col-md-4 active">
                        <div class="card w-full">
                            <img class="card-img-top img-fluid" src="./images/image-04.jpg" alt=" image cap">
                            <div class="card-body">
                                <p class="capitalize text-[#03B39C] m-0 text-lg">travel to</p>
                                <h4 class="card-title text-xl capitalize font-bold">italy</h4>
                                <p class="m-0">Lorem ipsum is simply sit of free text dolor.</p>
                                <p class="my-2"><small class="text-[#047867] bg-[#97beb94b] py-1 px-2 rounded-md font-bold">Discovery</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item col-md-4">
                        <div class="card w-full">
                            <img class="card-img-top img-fluid" src="./images/image-03.jpg" alt="image cap">
                            <div class="card-body">
                                <p class="capitalize text-[#03B39C] m-0 text-lg">travel to</p>
                                <h4 class="card-title text-xl capitalize font-bold">United Kingdom</h4>
                                <p class="m-0">Lorem ipsum is simply sit of free text dolor.</p>
                                <p class="my-2"><small class="text-[#047867] bg-[#97beb94b] py-1 px-2 rounded-md font-bold">Adventure</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item col-md-4">
                        <div class="card w-full">
                            <img class="card-img-top img-fluid" src="./images/image-02.jpg" alt="image cap">
                            <div class="card-body">
                                <p class="capitalize text-[#03B39C] m-0 text-lg">travel to</p>
                                <h4 class="card-title text-xl capitalize font-bold">france</h4>
                                <p class="m-0">Lorem ipsum is simply sit of free text dolor.</p>
                                <p class="my-2"><small class="text-[#047867] bg-[#97beb94b] py-1 px-2 rounded-md font-bold">Discovery</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item col-md-4">
                        <div class="card w-full">
                            <img class="card-img-top img-fluid" src="./images/image-01.jpg" alt="image cap">
                            <div class="card-body">
                                <p class="capitalize text-[#03B39C] m-0 text-lg">travel to</p>
                                <h4 class="card-title text-xl capitalize font-bold">Singapore</h4>
                                <p class="m-0">Lorem ipsum is simply sit of free text dolor.</p>
                                <p class="my-2"><small class="text-[#047867] bg-[#97beb94b] py-1 px-2 rounded-md font-bold">Adventure</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item col-md-4">
                        <div class="card w-full">
                            <img class="card-img-top img-fluid" src="./images/image-02.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p class="capitalize text-[#03B39C] m-0 text-lg">travel to</p>
                                <h4 class="card-title text-xl capitalize font-bold">ThaiLand</h4>
                                <p class="m-0">Lorem ipsum is simply sit of free text dolor.</p>
                                <p class="my-2"><small class="text-[#047867] bg-[#97beb94b] py-1 px-2 rounded-md font-bold"> Mountain biking</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item col-md-4">
                        <div class="card w-full">
                            <img class="card-img-top img-fluid" src="./images/image-03.jpg" alt="image cap">
                            <div class="card-body">
                                <p class="capitalize text-[#03B39C] m-0 text-lg">travel to</p>
                                <h4 class="card-title text-xl capitalize font-bold">lebanon</h4>
                                <p class="m-0">Lorem ipsum is simply sit of free text dolor.</p>
                                <p class="my-2"><small class="text-[#047867] bg-[#97beb94b] py-1 px-2 rounded-md font-bold">Beache</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item col-md-4">
                        <div class="card w-full">
                            <img class="card-img-top img-fluid" src="./images/image-04.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p class="capitalize text-[#03B39C] m-0 text-lg">travel to</p>
                                <h4 class="card-title text-xl capitalize font-bold">turkey</h4>
                                <p class="m-0">Lorem ipsum is simply sit of free text dolor.</p>
                                <p class="my-2"><small class="text-[#047867] bg-[#97beb94b] py-1 px-2 rounded-md font-bold">Adventure</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="flex gap-10 px-0 py-28 m-6">
            <div class="w-1/2 bg-white text-black">
                <span class="w-auto px-6 py-2 m-6 text-[#03b39c] rounded-md inline-block text-base relative bg-[#97beb94b] font-semibold">Availability
                </span>
                <h2 class="text-5xl text-black font-bold mb-8 pl-6">We are most funning </br>company about travel </br>
                    and
                    adventure</h2>
                <p class="text-base mb-6 pl-4">
                    Sit amet consectetur velit integer tincidunt sceleries nodalesry volutpat neque fermentum malesuada
                    sceleris quecy massa lacus ultrices eget leo cras odio blandit rhoncus eues feugiat.
                </p>

                <div class="w-full flex items-center">
                    <div class="flex justify-center px-2 py-2 w-auto gap-2 rounded-lg shadow-xl rotate-[-8deg] items-center text-black m-2">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" class="w-7 h-7 rounded-full stroke-2 bg-[#DC8CF8] fill-[#fff] p-2 m-2" viewBox="0 0 448 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                        </svg>
                        <p class="m-0 text-bold text-[#1C231F] text-base font-semibold">
                            Family Camping
                        </p>
                    </div>
                    <div class="flex justify-center px-2 py-2 w-auto gap-2 rounded-lg shadow-xl rotate-[3deg] items-center text-black m-2">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" class="w-7 h-7 rounded-full stroke-2 bg-[#DC8CF8] fill-[#fff] p-2 m-2" viewBox="0 0 448 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                        </svg>
                        <p class="m-0 text-bold text-[#1C231F] text-base font-semibold">
                            Wild Camping
                        </p>
                    </div>
                </div>
                <div class="w-full flex items-center">
                    <div class="flex justify-center px-2 py-2 w-auto gap-2 rounded-lg shadow-xl rotate-[-8deg] items-center text-black m-2">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" class="w-7 h-7 rounded-full stroke-2 bg-[#DC8CF8] fill-[#fff] p-2 m-2" viewBox="0 0 448 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                        </svg>
                        <p class="m-0 text-bold text-[#1C231F] text-base font-semibold">
                            Fishing
                        </p>
                    </div>
                    <div class="flex justify-center px-2 py-2 w-auto gap-2 rounded-lg shadow-xl rotate-[3.5deg] items-center text-black m-2">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" class="w-7 h-7 rounded-full stroke-2 bg-[#DC8CF8] fill-[#fff] p-2 m-2" viewBox="0 0 448 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                        </svg>
                        <p class="m-0 text-bold text-[#1C231F] text-base font-semibold">

                            Mountaim Biking
                        </p>
                    </div>
                </div>
                <div class="w-full flex items-center">
                    <div class="flex justify-center px-2 py-2 w-auto gap-2 rounded-lg shadow-xl rotate-[-8deg] items-center text-black m-2">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" class="w-7 h-7 rounded-full stroke-2 bg-[#DC8CF8] fill-[#fff] p-2 m-2" viewBox="0 0 448 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                        </svg>
                        <p class="m-0 text-bold text-[#1C231F] text-base font-semibold">
                            Luxury Cabin
                        </p>
                    </div>
                    <div class="flex justify-center px-2 py-2 w-auto gap-2 rounded-lg shadow-xl rotate-[3.5deg] items-center text-black m-2">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" class="w-7 h-7 rounded-full stroke-2 bg-[#DC8CF8] fill-[#fff] p-2 m-2" viewBox="0 0 448 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                        </svg>
                        <p class="m-0 text-bold text-[#1C231F] text-base font-semibold">
                            Couple Camping
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-1/2">
                <div class="w-full text-black bg-white rounded-md mx-2 px-5 py-5">
                    <img src="./images/image-15.jpg" class="w-full mx-auto rounded-t-full">
                </div>
            </div>
        </div>
        <div class="flex gap-10 px-0 m-6">
            <div class="w-1/2">
                <div class="w-full relative text-black bg-white rounded-md bg-cover bg-center h-full" style="background-image: url('./images/tour-2.jpg');">
                    <div class="absolute top-[40%] left-[40%] bg-[#ffffffcf] w-28 h-28 rounded-full shadow-[0_3px_50px_rgba(0,0,0,0.36)] cursor-pointer">
                        <div class="w-24 h-24 justify-center items-center flex absolute top-[8px] right-[8px] cursor-pointer text-center before:rounded-full before:absolute before:content-[''] before:animate-spin before:border-[5px] before:border-l-[#7f7f7f0f] before:border-t-[#7f7f7f0f] before:cursor-pointer before:w-24 before:h-24 before:border-b-[#047867] before:border-r-[#047867]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-[#047867] w-6 h-6" height="1em" viewBox="0 0 384 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 bg-white text-black">
                <span class="w-auto px-6 py-2 m-6 text-[#03b39c] rounded-md inline-block text-base relative bg-[#97beb94b] font-semibold">Availability
                </span>
                <h2 class="text-5xl text-black font-bold mb-5">Enjoy real adventure</h2>
                <button class="accordion bg-[#eee] border-l-[#047867] border-l-[4px] text-start text-black text-lg font-bold cursor-pointer p-4 w-full outline-none focus:outline-none transition-[0.4s]">How
                    Much Price About Tour & Travels</button>
                <div class="px-4 hidden bg-white overflow-hidden text-start">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua.</p>
                </div>

                <button class="accordion bg-[#eee] border-l-[#047867] border-l-[4px] text-start text-black text-lg font-bold cursor-pointer p-4 w-full outline-none focus:outline-none transition-[0.4s]">We’re
                    giving all the best services to you</button>
                <div class="px-4 hidden bg-white overflow-hidden text-start">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua.</p>
                </div>

                <button class="accordion bg-[#eee] border-l-[#047867] border-l-[4px] text-start text-black text-lg font-bold cursor-pointer p-4 w-full outline-none focus:outline-none transition-[0.4s]">Best
                    Experience Travel Agency</button>
                <div class="px-4 hidden bg-white overflow-hidden text-start">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua.</p>
                </div>
            </div>
        </div>


        <div>
            <!-- tour list -->
            <div class="text-center w-full">
                <span class="w-auto px-6 py-2 m-6 text-[#03b39c] rounded-md inline-block text-base relative bg-[#97beb94b] font-semibold">Availability
                </span>
                <p class="text-5xl font-bold text-black">Amazing tour places around </br>the world
                </p>
            </div>
            <div class="grid grid-cols-4 gap-5 mx-10 mb-28 mt-16">
                <div class="border rounded-lg">
                    <img src="images/tour-8-500x360.jpg" width=400 height=400>
                    <div class="p-4">
                        <div class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-[yellow]" height="1em" viewBox="0 0 576 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-[yellow]" height="1em" viewBox="0 0 576 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-[yellow]" height="1em" viewBox="0 0 576 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-[yellow]" height="1em" viewBox="0 0 576 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-[yellow]" height="1em" viewBox="0 0 576 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                        </div>
                        <p class="text-sm text-black font-semibold my-2">Discovery ThaiLand Waves Tour</p>
                        <div class="flex items-center my-2 gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-[#03B39C] h-5 w-5" height="1em" viewBox="0 0 384 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                            </svg>
                            <p class="text-[10px] text-[grey] m-0">Main Street, Brooklyn, NY</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-[#03B39C] h-5 w-5" height="1em" viewBox="0 0 512 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M326.7 403.7c-22.1 8-45.9 12.3-70.7 12.3s-48.7-4.4-70.7-12.3c-.3-.1-.5-.2-.8-.3c-30-11-56.8-28.7-78.6-51.4C70 314.6 48 263.9 48 208C48 93.1 141.1 0 256 0S464 93.1 464 208c0 55.9-22 106.6-57.9 144c-1 1-2 2.1-3 3.1c-21.4 21.4-47.4 38.1-76.3 48.6zM256 91.9c-11.1 0-20.1 9-20.1 20.1v6c-5.6 1.2-10.9 2.9-15.9 5.1c-15 6.8-27.9 19.4-31.1 37.7c-1.8 10.2-.8 20 3.4 29c4.2 8.8 10.7 15 17.3 19.5c11.6 7.9 26.9 12.5 38.6 16l2.2 .7c13.9 4.2 23.4 7.4 29.3 11.7c2.5 1.8 3.4 3.2 3.7 4c.3 .8 .9 2.6 .2 6.7c-.6 3.5-2.5 6.4-8 8.8c-6.1 2.6-16 3.9-28.8 1.9c-6-1-16.7-4.6-26.2-7.9l0 0 0 0 0 0c-2.2-.7-4.3-1.5-6.4-2.1c-10.5-3.5-21.8 2.2-25.3 12.7s2.2 21.8 12.7 25.3c1.2 .4 2.7 .9 4.4 1.5c7.9 2.7 20.3 6.9 29.8 9.1V304c0 11.1 9 20.1 20.1 20.1s20.1-9 20.1-20.1v-5.5c5.3-1 10.5-2.5 15.4-4.6c15.7-6.7 28.4-19.7 31.6-38.7c1.8-10.4 1-20.3-3-29.4c-3.9-9-10.2-15.6-16.9-20.5c-12.2-8.8-28.3-13.7-40.4-17.4l-.8-.2c-14.2-4.3-23.8-7.3-29.9-11.4c-2.6-1.8-3.4-3-3.6-3.5c-.2-.3-.7-1.6-.1-5c.3-1.9 1.9-5.2 8.2-8.1c6.4-2.9 16.4-4.5 28.6-2.6c4.3 .7 17.9 3.3 21.7 4.3c10.7 2.8 21.6-3.5 24.5-14.2s-3.5-21.6-14.2-24.5c-4.4-1.2-14.4-3.2-21-4.4V112c0-11.1-9-20.1-20.1-20.1zM48 352H64c19.5 25.9 44 47.7 72.2 64H64v32H256 448V416H375.8c28.2-16.3 52.8-38.1 72.2-64h16c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V400c0-26.5 21.5-48 48-48z" />
                            </svg>
                            <p class="text-[10px] text-[grey] m-0">From</p>
                            <span class="text-base font-bold text-[#DC8CF8] m-0">$150.00</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between border-t gap-2">
                        <div class="flex items-center">
                            <div class="flex gap-2 px-4 py-3 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                </svg>
                                <span class="text-[10px] text-[grey] m-0">4 days</span>
                            </div>
                            <div class="flex gap-2 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512">
                                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM609.3 512H471.4c5.4-9.4 8.6-20.3 8.6-32v-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2h61.4C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z" />
                                </svg>
                                <span class="text-[10px] text-[grey] m-0">15</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between gap-2 mx-2">
                            <span class="text-base text-[grey] hover:text-[#b48cc0] m-0 cursor-pointer">Explore</span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="border rounded-lg">
                    <img src="images/tour-11.jpg" width=400 height=400>
                    <div class="p-4">
                        <div class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-[yellow]" height="1em" viewBox="0 0 576 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-[yellow]" height="1em" viewBox="0 0 576 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-[yellow]" height="1em" viewBox="0 0 576 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-[yellow]" height="1em" viewBox="0 0 576 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-[yellow]" height="1em" viewBox="0 0 576 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                        </div>
                        <p class="text-sm text-black font-semibold my-2">Discovery United Kingdom Tour</p>
                        <div class="flex items-center my-2 gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-[#03B39C] h-5 w-5" height="1em" viewBox="0 0 384 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                            </svg>
                            <p class="text-[10px] text-[grey] m-0">Main Street, Brooklyn, NY</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-[#03B39C] h-5 w-5" height="1em" viewBox="0 0 512 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M326.7 403.7c-22.1 8-45.9 12.3-70.7 12.3s-48.7-4.4-70.7-12.3c-.3-.1-.5-.2-.8-.3c-30-11-56.8-28.7-78.6-51.4C70 314.6 48 263.9 48 208C48 93.1 141.1 0 256 0S464 93.1 464 208c0 55.9-22 106.6-57.9 144c-1 1-2 2.1-3 3.1c-21.4 21.4-47.4 38.1-76.3 48.6zM256 91.9c-11.1 0-20.1 9-20.1 20.1v6c-5.6 1.2-10.9 2.9-15.9 5.1c-15 6.8-27.9 19.4-31.1 37.7c-1.8 10.2-.8 20 3.4 29c4.2 8.8 10.7 15 17.3 19.5c11.6 7.9 26.9 12.5 38.6 16l2.2 .7c13.9 4.2 23.4 7.4 29.3 11.7c2.5 1.8 3.4 3.2 3.7 4c.3 .8 .9 2.6 .2 6.7c-.6 3.5-2.5 6.4-8 8.8c-6.1 2.6-16 3.9-28.8 1.9c-6-1-16.7-4.6-26.2-7.9l0 0 0 0 0 0c-2.2-.7-4.3-1.5-6.4-2.1c-10.5-3.5-21.8 2.2-25.3 12.7s2.2 21.8 12.7 25.3c1.2 .4 2.7 .9 4.4 1.5c7.9 2.7 20.3 6.9 29.8 9.1V304c0 11.1 9 20.1 20.1 20.1s20.1-9 20.1-20.1v-5.5c5.3-1 10.5-2.5 15.4-4.6c15.7-6.7 28.4-19.7 31.6-38.7c1.8-10.4 1-20.3-3-29.4c-3.9-9-10.2-15.6-16.9-20.5c-12.2-8.8-28.3-13.7-40.4-17.4l-.8-.2c-14.2-4.3-23.8-7.3-29.9-11.4c-2.6-1.8-3.4-3-3.6-3.5c-.2-.3-.7-1.6-.1-5c.3-1.9 1.9-5.2 8.2-8.1c6.4-2.9 16.4-4.5 28.6-2.6c4.3 .7 17.9 3.3 21.7 4.3c10.7 2.8 21.6-3.5 24.5-14.2s-3.5-21.6-14.2-24.5c-4.4-1.2-14.4-3.2-21-4.4V112c0-11.1-9-20.1-20.1-20.1zM48 352H64c19.5 25.9 44 47.7 72.2 64H64v32H256 448V416H375.8c28.2-16.3 52.8-38.1 72.2-64h16c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V400c0-26.5 21.5-48 48-48z" />
                            </svg>
                            <p class="text-[10px] text-[grey] m-0">From</p>
                            <span class="text-base font-bold text-[#DC8CF8] m-0">$200.00</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between border-t gap-2">
                        <div class="flex items-center">
                            <div class="flex gap-2 px-4 py-3 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                </svg>
                                <span class="text-[10px] text-[grey] m-0">5 days</span>
                            </div>
                            <div class="flex gap-2 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512">
                                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM609.3 512H471.4c5.4-9.4 8.6-20.3 8.6-32v-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2h61.4C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z" />
                                </svg>
                                <span class="text-[10px] text-[grey] m-0">12</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between gap-2 mx-2">
                            <span class="text-base text-[grey] hover:text-[#b48cc0] m-0 cursor-pointer">Explore</span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="border rounded-lg">
                    <img src="images/WhatsApp Image 2023-08-10 at 22.41.08.jpg" width=400 height=400>
                    <div class="p-4">
                        <div class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-[yellow]" height="1em" viewBox="0 0 576 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-[yellow]" height="1em" viewBox="0 0 576 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-[yellow]" height="1em" viewBox="0 0 576 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-[yellow]" height="1em" viewBox="0 0 576 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-[yellow]" height="1em" viewBox="0 0 576 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                        </div>
                        <p class="text-sm text-black font-semibold my-2">Discovery Italy Clouds Tour</p>
                        <div class="flex items-center my-2 gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-[#03B39C] h-5 w-5" height="1em" viewBox="0 0 384 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                            </svg>
                            <p class="text-[10px] text-[grey] m-0">Main Street, Brooklyn, NY</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-[#03B39C] h-5 w-5" height="1em" viewBox="0 0 512 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M326.7 403.7c-22.1 8-45.9 12.3-70.7 12.3s-48.7-4.4-70.7-12.3c-.3-.1-.5-.2-.8-.3c-30-11-56.8-28.7-78.6-51.4C70 314.6 48 263.9 48 208C48 93.1 141.1 0 256 0S464 93.1 464 208c0 55.9-22 106.6-57.9 144c-1 1-2 2.1-3 3.1c-21.4 21.4-47.4 38.1-76.3 48.6zM256 91.9c-11.1 0-20.1 9-20.1 20.1v6c-5.6 1.2-10.9 2.9-15.9 5.1c-15 6.8-27.9 19.4-31.1 37.7c-1.8 10.2-.8 20 3.4 29c4.2 8.8 10.7 15 17.3 19.5c11.6 7.9 26.9 12.5 38.6 16l2.2 .7c13.9 4.2 23.4 7.4 29.3 11.7c2.5 1.8 3.4 3.2 3.7 4c.3 .8 .9 2.6 .2 6.7c-.6 3.5-2.5 6.4-8 8.8c-6.1 2.6-16 3.9-28.8 1.9c-6-1-16.7-4.6-26.2-7.9l0 0 0 0 0 0c-2.2-.7-4.3-1.5-6.4-2.1c-10.5-3.5-21.8 2.2-25.3 12.7s2.2 21.8 12.7 25.3c1.2 .4 2.7 .9 4.4 1.5c7.9 2.7 20.3 6.9 29.8 9.1V304c0 11.1 9 20.1 20.1 20.1s20.1-9 20.1-20.1v-5.5c5.3-1 10.5-2.5 15.4-4.6c15.7-6.7 28.4-19.7 31.6-38.7c1.8-10.4 1-20.3-3-29.4c-3.9-9-10.2-15.6-16.9-20.5c-12.2-8.8-28.3-13.7-40.4-17.4l-.8-.2c-14.2-4.3-23.8-7.3-29.9-11.4c-2.6-1.8-3.4-3-3.6-3.5c-.2-.3-.7-1.6-.1-5c.3-1.9 1.9-5.2 8.2-8.1c6.4-2.9 16.4-4.5 28.6-2.6c4.3 .7 17.9 3.3 21.7 4.3c10.7 2.8 21.6-3.5 24.5-14.2s-3.5-21.6-14.2-24.5c-4.4-1.2-14.4-3.2-21-4.4V112c0-11.1-9-20.1-20.1-20.1zM48 352H64c19.5 25.9 44 47.7 72.2 64H64v32H256 448V416H375.8c28.2-16.3 52.8-38.1 72.2-64h16c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V400c0-26.5 21.5-48 48-48z" />
                            </svg>
                            <p class="text-[10px] text-[grey] m-0">From</p>
                            <span class="text-base font-bold text-[#DC8CF8] m-0">$129.00</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between border-t gap-2">
                        <div class="flex items-center">
                            <div class="flex gap-2 px-4 py-3 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                </svg>
                                <span class="text-[10px] text-[grey] m-0">3 days</span>
                            </div>
                            <div class="flex gap-2 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512">
                                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM609.3 512H471.4c5.4-9.4 8.6-20.3 8.6-32v-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2h61.4C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z" />
                                </svg>
                                <span class="text-[10px] text-[grey] m-0">10</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between gap-2 mx-2">
                            <span class="text-base text-[grey] hover:text-[#b48cc0] m-0 cursor-pointer">Explore</span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="border rounded-lg">
                    <img src="images/WhatsApp Image 2023-08-10 at 22.41.09.jpg" width=400 height=400>
                    <div class="p-4">
                        <div class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-[yellow]" height="1em" viewBox="0 0 576 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-[yellow]" height="1em" viewBox="0 0 576 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-[yellow]" height="1em" viewBox="0 0 576 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-[yellow]" height="1em" viewBox="0 0 576 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-[yellow]" height="1em" viewBox="0 0 576 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                        </div>
                        <p class="text-sm text-black font-semibold my-2">Discovery France Breezes Tour</p>
                        <div class="flex items-center my-2 gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-[#03B39C] h-5 w-5" height="1em" viewBox="0 0 384 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                            </svg>
                            <p class="text-[10px] text-[grey] m-0">Main Street, Brooklyn, NY</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-[#03B39C] h-5 w-5" height="1em" viewBox="0 0 512 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M326.7 403.7c-22.1 8-45.9 12.3-70.7 12.3s-48.7-4.4-70.7-12.3c-.3-.1-.5-.2-.8-.3c-30-11-56.8-28.7-78.6-51.4C70 314.6 48 263.9 48 208C48 93.1 141.1 0 256 0S464 93.1 464 208c0 55.9-22 106.6-57.9 144c-1 1-2 2.1-3 3.1c-21.4 21.4-47.4 38.1-76.3 48.6zM256 91.9c-11.1 0-20.1 9-20.1 20.1v6c-5.6 1.2-10.9 2.9-15.9 5.1c-15 6.8-27.9 19.4-31.1 37.7c-1.8 10.2-.8 20 3.4 29c4.2 8.8 10.7 15 17.3 19.5c11.6 7.9 26.9 12.5 38.6 16l2.2 .7c13.9 4.2 23.4 7.4 29.3 11.7c2.5 1.8 3.4 3.2 3.7 4c.3 .8 .9 2.6 .2 6.7c-.6 3.5-2.5 6.4-8 8.8c-6.1 2.6-16 3.9-28.8 1.9c-6-1-16.7-4.6-26.2-7.9l0 0 0 0 0 0c-2.2-.7-4.3-1.5-6.4-2.1c-10.5-3.5-21.8 2.2-25.3 12.7s2.2 21.8 12.7 25.3c1.2 .4 2.7 .9 4.4 1.5c7.9 2.7 20.3 6.9 29.8 9.1V304c0 11.1 9 20.1 20.1 20.1s20.1-9 20.1-20.1v-5.5c5.3-1 10.5-2.5 15.4-4.6c15.7-6.7 28.4-19.7 31.6-38.7c1.8-10.4 1-20.3-3-29.4c-3.9-9-10.2-15.6-16.9-20.5c-12.2-8.8-28.3-13.7-40.4-17.4l-.8-.2c-14.2-4.3-23.8-7.3-29.9-11.4c-2.6-1.8-3.4-3-3.6-3.5c-.2-.3-.7-1.6-.1-5c.3-1.9 1.9-5.2 8.2-8.1c6.4-2.9 16.4-4.5 28.6-2.6c4.3 .7 17.9 3.3 21.7 4.3c10.7 2.8 21.6-3.5 24.5-14.2s-3.5-21.6-14.2-24.5c-4.4-1.2-14.4-3.2-21-4.4V112c0-11.1-9-20.1-20.1-20.1zM48 352H64c19.5 25.9 44 47.7 72.2 64H64v32H256 448V416H375.8c28.2-16.3 52.8-38.1 72.2-64h16c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V400c0-26.5 21.5-48 48-48z" />
                            </svg>
                            <p class="text-[10px] text-[grey] m-0">From</p>
                            <span class="text-base font-bold text-[#DC8CF8] m-0">$250.00</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between border-t gap-2">
                        <div class="flex items-center">
                            <div class="flex gap-2 px-4 py-3 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                </svg>
                                <span class="text-[10px] text-[grey] m-0">7 days</span>
                            </div>
                            <div class="flex gap-2 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512">
                                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM609.3 512H471.4c5.4-9.4 8.6-20.3 8.6-32v-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2h61.4C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z" />
                                </svg>
                                <span class="text-[10px] text-[grey] m-0">20</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between gap-2 mx-2">
                            <span class="text-base text-[grey] hover:text-[#b48cc0] m-0 cursor-pointer">Explore</span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div></div>
            <div></div>
        </div>
        <div class="w-11/12 mx-auto rounded-t-md py-4 px-10 relative flex flex-col justify-center items-center bg-[#b48cc0] bg-cover bg-center h-full" style="background-image: url('./images/bg-shape-04.png');">
            <div class="flex w-full justify-between items-center gap-5">
                <div class="flex gap-5 p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 rounded-full  stroke-white hover:bg-[#027465] fill-[#fff] p-2 m-4" height="1em" viewBox="0 0 512 512">
                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M192 93.7C192 59.5 221 0 256 0c36 0 64 59.5 64 93.7l0 66.3L497.8 278.5c8.9 5.9 14.2 15.9 14.2 26.6v56.7c0 10.9-10.7 18.6-21.1 15.2L320 320v80l57.6 43.2c4 3 6.4 7.8 6.4 12.8v42c0 7.8-6.3 14-14 14c-1.3 0-2.6-.2-3.9-.5L256 480 145.9 511.5c-1.3 .4-2.6 .5-3.9 .5c-7.8 0-14-6.3-14-14V456c0-5 2.4-9.8 6.4-12.8L192 400V320L21.1 377C10.7 380.4 0 372.7 0 361.8V305.1c0-10.7 5.3-20.7 14.2-26.6L192 160V93.7z" />
                    </svg>
                    <div class="text-white font-semibold"> QUISEQUE VEL ORTOR
                        <div class="text-bold text-white text-2xl"> Ready to adventure and enjoy natural</div>
                    </div>
                </div>
                <div>
                    <button class="bg-white text-[#0BB6A1] font-bold w-auto py-4 px-6 rounded-md">  Explore More</button>
                </div>
            </div>
        </div>




        <?php
        include 'partials/footer.php';

        ?>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="<?= ROOT_URL ?>/js/main.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="jquery.min.js"></script>
        <script src="owlcarousel/owl.carousel.min.js"></script>
        <script src='https://code.jquery.com/jquery-1.12.4.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js'></script>
        <script src="./script.js"></script>
        <script src="./js/increment.js"></script>
        <script src="./js/accordion.js"></script>
    </body>

</html>