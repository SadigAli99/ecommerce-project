@extends('back.layouts.master')

@section('content')
    <div class="main_content_iner ">
        <div class="container-fluid p-0 ">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="single_element">
                        <div class="quick_activity">
                            <div class="row">
                                <div class="col-12">
                                    <div class="quick_activity_wrap">
                                        <!-- single_quick_activity  -->
                                        <div class="single_quick_activity">
                                            <div class="count_content">
                                                <p>Revenue</p>
                                                <h3>$<span class="counter">35000</span> </h3>
                                            </div>
                                            <a href="#" class="notification_btn">Today</a>
                                            <div id="bar1" class="barfiller">
                                                <div class="tipWrap">
                                                    <span class="tip"></span>
                                                </div>
                                                <span class="fill" data-percentage="95"></span>
                                            </div>
                                        </div>
                                        <!-- single_quick_activity  -->
                                        <div class="single_quick_activity">
                                            <div class="count_content">
                                                <p>Orders</p>
                                                <h3><span class="counter">35000</span> </h3>
                                            </div>
                                            <a href="#" class="notification_btn yellow_btn">This Week</a>
                                            <div id="bar2" class="barfiller">
                                                <div class="tipWrap">
                                                    <span class="tip"></span>
                                                </div>
                                                <span class="fill" data-percentage="65"></span>
                                            </div>
                                        </div>
                                        <!-- single_quick_activity  -->
                                        <div class="single_quick_activity">
                                            <div class="count_content">
                                                <p>Leads</p>
                                                <h3>$<span class="counter">50000</span> </h3>
                                            </div>
                                            <a href="#" class="notification_btn green_btn">This Month</a>
                                            <div id="bar3" class="barfiller">
                                                <div class="tipWrap">
                                                    <span class="tip"></span>
                                                </div>
                                                <span class="fill" data-percentage="75"></span>
                                            </div>
                                        </div>
                                        <!-- single_quick_activity  -->
                                        <div class="single_quick_activity">
                                            <div class="count_content">
                                                <p>Lead Conversion Rate</p>
                                                <h3><span class="counter">50</span> %</h3>
                                            </div>
                                            <a href="#" class="notification_btn violate_btn">Anual</a>
                                            <div id="bar4" class="barfiller">
                                                <div class="tipWrap">
                                                    <span class="tip"></span>
                                                </div>
                                                <span class="fill" data-percentage="85"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Payment History</h3>
                                </div>
                                <div class="header_more_tool">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown">
                                            <i class="ti-more-alt"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#"> <i class="ti-eye"></i>
                                                Action</a>
                                            <a class="dropdown-item" href="#"> <i class="ti-trash"></i>
                                                Delete</a>
                                            <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="#"> <i class="ti-printer"></i>
                                                Print</a>
                                            <a class="dropdown-item" href="#"> <i class="fa fa-download"></i>
                                                Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body p-0">
                            <div id="iq-chart-order" style="height: 400px; position: relative;"> </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">1 United States Dollar Equals</h3>
                                </div>
                                <div class="header_more_tool">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown">
                                            <i class="ti-more-alt"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#"> <i class="ti-eye"></i>
                                                Action</a>
                                            <a class="dropdown-item" href="#"> <i class="ti-trash"></i>
                                                Delete</a>
                                            <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="#"> <i class="ti-printer"></i>
                                                Print</a>
                                            <a class="dropdown-item" href="#"> <i class="fa fa-download"></i>
                                                Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="equal_hdr mb_15 d-flex justify-content-between align-items-center flex-wrap">
                                <h4 class="f_s_28 f_w_700">0.50 Euro</h4>
                                <a href="#" class="Euro_btn">Euro</a>
                            </div>
                            <p class="color_gray f_s_14 f_w_700 mb_15 ">24 Apr 6.00 am UTC Declaration</p>
                            <div class="grid_4rap">
                                <div class="single_wrap_input">
                                    <div class="common_input">
                                        <input type="text" placeholder="1">
                                    </div>
                                </div>
                                <div class="single_wrap_input">
                                    <select class="nice_Select2 wide" name="" id="">
                                        <option value="1">United State</option>
                                        <option value="1">United State</option>
                                    </select>
                                </div>
                                <div class="single_wrap_input">
                                    <div class="common_input">
                                        <input type="text" placeholder="1">
                                    </div>
                                </div>
                                <div class="single_wrap_input">
                                    <select class="nice_Select2 wide" name="" id="">
                                        <option value="1">Euro</option>
                                        <option value="1">Euro</option>
                                    </select>
                                </div>
                            </div>
                            <div id="area-spaline"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="white_card  mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Payment History</h3>
                                </div>
                                <div class="header_more_tool">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown">
                                            <i class="ti-more-alt"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#"> <i class="ti-eye"></i>
                                                Action</a>
                                            <a class="dropdown-item" href="#"> <i class="ti-trash"></i>
                                                Delete</a>
                                            <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="#"> <i class="ti-printer"></i>
                                                Print</a>
                                            <a class="dropdown-item" href="#"> <i class="fa fa-download"></i>
                                                Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="table-responsive">
                                <table class="table bayer_table m-0">
                                    <tbody>
                                        <tr style="border: hidden;">
                                            <td>
                                                <img class="byder_thumb"
                                                    src="{{ asset('back/assets') }}/img/Payment/1.png" alt="">
                                            </td>
                                            <td>
                                                <div class="payment_gatway">
                                                    <h5 class="byer_name  f_s_16 f_w_700 color_theme"> Deposit
                                                        PayPal</h5>
                                                    <p class="color_gray f_s_12 f_w_700 ">5 march, 18:33</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="payment_gatway text-end">
                                                    <h5 class="byer_name  f_s_16 f_w_700 color_theme"> +2000</h5>
                                                    <p class="color_gray f_s_12 f_w_700 ">EUR</p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr style="border: hidden;">
                                            <td>
                                                <img class="byder_thumb"
                                                    src="{{ asset('back/assets') }}/img/Payment/2.png" alt="">
                                            </td>
                                            <td>
                                                <div class="payment_gatway">
                                                    <h5 class="byer_name  f_s_16 f_w_700 color_theme"> Deposit
                                                        PayPal</h5>
                                                    <p class="color_gray f_s_12 f_w_700 ">5 march, 18:33</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="payment_gatway text-end">
                                                    <h5 class="byer_name  f_s_16 f_w_700 color_theme"> +2000</h5>
                                                    <p class="color_gray f_s_12 f_w_700 ">EUR</p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr style="border: hidden;">
                                            <td>
                                                <img class="byder_thumb"
                                                    src="{{ asset('back/assets') }}/img/Payment/3.png" alt="">
                                            </td>
                                            <td>
                                                <div class="payment_gatway">
                                                    <h5 class="byer_name  f_s_16 f_w_700 color_theme"> Deposit from
                                                        Bank</h5>
                                                    <p class="color_gray f_s_12 f_w_700 ">5 march, 18:33</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="payment_gatway text-end">
                                                    <h5 class="byer_name  f_s_16 f_w_700 color_theme"> +2000</h5>
                                                    <p class="color_gray f_s_12 f_w_700 ">EUR</p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr style="border: hidden;">
                                            <td>
                                                <img class="byder_thumb"
                                                    src="{{ asset('back/assets') }}/img/Payment/4.png" alt="">
                                            </td>
                                            <td>
                                                <div class="payment_gatway">
                                                    <h5 class="byer_name  f_s_16 f_w_700 color_theme"> Cancelled
                                                    </h5>
                                                    <p class="color_gray f_s_12 f_w_700 ">5 march, 18:33</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="payment_gatway text-end">
                                                    <h5 class="byer_name  f_s_16 f_w_700 color_theme"> +2000</h5>
                                                    <p class="color_gray f_s_12 f_w_700 ">EUR</p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr style="border: hidden;">
                                            <td>
                                                <img class="byder_thumb"
                                                    src="{{ asset('back/assets') }}/img/Payment/5.png" alt="">
                                            </td>
                                            <td>
                                                <div class="payment_gatway">
                                                    <h5 class="byer_name  f_s_16 f_w_700 color_theme"> Deposit from
                                                        Bank</h5>
                                                    <p class="color_gray f_s_12 f_w_700 ">5 march, 18:33</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="payment_gatway text-end">
                                                    <h5 class="byer_name  f_s_16 f_w_700 color_theme"> +2000</h5>
                                                    <p class="color_gray f_s_12 f_w_700 ">EUR</p>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- card_height_100  -->
                    <div class="white_card  mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Monthly Invoices</h3>
                                </div>
                                <div class="header_more_tool">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown">
                                            <i class="ti-more-alt"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#"> <i class="ti-eye"></i>
                                                Action</a>
                                            <a class="dropdown-item" href="#"> <i class="ti-trash"></i>
                                                Delete</a>
                                            <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="#"> <i class="ti-printer"></i>
                                                Print</a>
                                            <a class="dropdown-item" href="#"> <i class="fa fa-download"></i>
                                                Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="table-responsive">
                                <table class="table bayer_table2 m-0">
                                    <tbody>
                                        <tr>
                                            <td class="w_70">
                                                <img class="byder_thumb wh_56"
                                                    src="{{ asset('back/assets') }}/img/Payment/check_1.png"
                                                    alt="">
                                            </td>
                                            <td>
                                                <div class="payment_gatway">
                                                    <h5 class="byer_name  f_s_16 f_w_700 color_theme"> Deposit
                                                        PayPal</h5>
                                                    <p class="color_gray f_s_12 f_w_700 ">5 march, 18:33</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="payment_gatway text-end">
                                                    <h5 class="byer_name  f_s_16 f_w_700 color_theme"> +2000</h5>
                                                    <p class="color_gray f_s_12 f_w_700 ">EUR</p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="byder_thumb wh_56"
                                                    src="{{ asset('back/assets') }}/img/Payment/check_2.png"
                                                    alt="">
                                            </td>
                                            <td>
                                                <div class="payment_gatway">
                                                    <h5 class="byer_name  f_s_16 f_w_700 color_theme"> Deposit
                                                        PayPal</h5>
                                                    <p class="color_gray f_s_12 f_w_700 ">5 march, 18:33</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="payment_gatway text-end">
                                                    <h5 class="byer_name  f_s_16 f_w_700 color_theme"> +2000</h5>
                                                    <p class="color_gray f_s_12 f_w_700 ">EUR</p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="byder_thumb wh_56"
                                                    src="{{ asset('back/assets') }}/img/Payment/check_3.png"
                                                    alt="">
                                            </td>
                                            <td>
                                                <div class="payment_gatway">
                                                    <h5 class="byer_name  f_s_16 f_w_700 color_theme"> Deposit from
                                                        Bank</h5>
                                                    <p class="color_gray f_s_12 f_w_700 ">5 march, 18:33</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="payment_gatway text-end">
                                                    <h5 class="byer_name  f_s_16 f_w_700 color_theme"> +2000</h5>
                                                    <p class="color_gray f_s_12 f_w_700 ">EUR</p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="byder_thumb wh_56"
                                                    src="{{ asset('back/assets') }}/img/Payment/check_4.png"
                                                    alt="">
                                            </td>
                                            <td>
                                                <div class="payment_gatway">
                                                    <h5 class="byer_name  f_s_16 f_w_700 color_theme"> Cancelled
                                                    </h5>
                                                    <p class="color_gray f_s_12 f_w_700 ">5 march, 18:33</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="payment_gatway text-end">
                                                    <h5 class="byer_name  f_s_16 f_w_700 color_theme"> +2000</h5>
                                                    <p class="color_gray f_s_12 f_w_700 ">EUR</p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="byder_thumb wh_56"
                                                    src="{{ asset('back/assets') }}/img/Payment/check_5.png"
                                                    alt="">
                                            </td>
                                            <td>
                                                <div class="payment_gatway">
                                                    <h5 class="byer_name  f_s_16 f_w_700 color_theme"> Deposit from
                                                        Bank</h5>
                                                    <p class="color_gray f_s_12 f_w_700 ">5 march, 18:33</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="payment_gatway text-end">
                                                    <h5 class="byer_name  f_s_16 f_w_700 color_theme"> +2000</h5>
                                                    <p class="color_gray f_s_12 f_w_700 ">EUR</p>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="white_card mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Social Media</h3>
                                </div>
                                <div class="header_more_tool">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown">
                                            <i class="ti-more-alt"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#"> <i class="ti-eye"></i>
                                                Action</a>
                                            <a class="dropdown-item" href="#"> <i class="ti-trash"></i>
                                                Delete</a>
                                            <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="#"> <i class="ti-printer"></i>
                                                Print</a>
                                            <a class="dropdown-item" href="#"> <i class="fa fa-download"></i>
                                                Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="single_social_media d-flex align-items-center">
                                        <div class="icon_media">
                                            <i class="fab fa-facebook-f"></i>
                                        </div>
                                        <div class="media_contet">
                                            <span>Folower</span>
                                            <h4>35000</h4>
                                        </div>
                                    </div>
                                    <div class="single_social_media d-flex align-items-center">
                                        <div class="icon_media twitter_bg">
                                            <i class="fab fa-twitter"></i>
                                        </div>
                                        <div class="media_contet">
                                            <span>Folower</span>
                                            <h4>2500</h4>
                                        </div>
                                    </div>
                                    <div class="single_social_media d-flex align-items-center">
                                        <div class="icon_media youtube_bg">
                                            <i class="fab fa-youtube"></i>
                                        </div>
                                        <div class="media_contet">
                                            <span>Folower</span>
                                            <h4>1.7M</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="single_social_media d-flex align-items-center">
                                        <div class="icon_media insta_bg">
                                            <i class="fab fa-instagram"></i>
                                        </div>
                                        <div class="media_contet">
                                            <span>Folower</span>
                                            <h4>35000</h4>
                                        </div>
                                    </div>
                                    <div class="single_social_media d-flex align-items-center">
                                        <img class="img-fluid" src="{{ asset('back/assets') }}/img/plane.png"
                                            alt="">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="white_card mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Recent Activity</h3>
                                </div>
                                <div class="header_more_tool">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown">
                                            <i class="ti-more-alt"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#"> <i class="ti-eye"></i>
                                                Action</a>
                                            <a class="dropdown-item" href="#"> <i class="ti-trash"></i>
                                                Delete</a>
                                            <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="#"> <i class="ti-printer"></i>
                                                Print</a>
                                            <a class="dropdown-item" href="#"> <i class="fa fa-download"></i>
                                                Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div id="iq-chart-efficient" style="height: 250px; position: relative;"></div>
                        </div>
                    </div>
                    <div class="white_card mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Recent Activity</h3>
                                </div>
                                <div class="header_more_tool">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown">
                                            <i class="ti-more-alt"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#"> <i class="ti-eye"></i>
                                                Action</a>
                                            <a class="dropdown-item" href="#"> <i class="ti-trash"></i>
                                                Delete</a>
                                            <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="#"> <i class="ti-printer"></i>
                                                Print</a>
                                            <a class="dropdown-item" href="#"> <i class="fa fa-download"></i>
                                                Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="Activity_timeline">
                                <ul>
                                    <li>
                                        <div class="activity_bell"></div>
                                        <div class="timeLine_inner d-flex align-items-center">
                                            <div class="activity_wrap d-flex ">
                                                <h6 class="nowrap">5 min ago</h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="activity_bell"></div>
                                        <div class="timeLine_inner d-flex align-items-center">
                                            <div class="activity_wrap d-flex ">
                                                <h6 class="nowrap">5 min ago</h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="activity_bell"></div>
                                        <div class="timeLine_inner d-flex align-items-center">
                                            <div class="activity_wrap d-flex ">
                                                <h6 class="nowrap">5 min ago</h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="col-lg-12">
                    <div class="white_card card_height_100 mb_30 QA_section">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Monthly Invoices</h3>
                                </div>
                                <div class="header_more_tool">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown">
                                            <i class="ti-more-alt"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#"> <i class="ti-eye"></i>
                                                Action</a>
                                            <a class="dropdown-item" href="#"> <i class="ti-trash"></i>
                                                Delete</a>
                                            <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="#"> <i class="ti-printer"></i>
                                                Print</a>
                                            <a class="dropdown-item" href="#"> <i class="fa fa-download"></i>
                                                Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="QA_table table-responsive ">
                                <!-- table-responsive -->
                                <table class="table pt-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Profile</th>
                                            <th scope="col">Activity Type</th>
                                            <th scope="col">Owner</th>
                                            <th scope="col">Task</th>
                                            <th scope="col">Budget</th>
                                            <th scope="col">Priority</th>
                                            <th scope="col">Period</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Deadline</th>
                                            <th scope="col">Attachment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> <img class="user_thumb"
                                                    src="{{ asset('back/assets') }}/img/invoice_img/man_1.png"
                                                    alt="">
                                            </td>
                                            <td>Product</td>
                                            <td class="nowrap">Tom Smitn</td>
                                            <td class="nowrap">Client data test</td>
                                            <td>$125000</td>
                                            <td>High</td>
                                            <td>Oct</td>
                                            <td><img class="check_status"
                                                    src="{{ asset('back/assets') }}/img/invoice_img/check.png"
                                                    alt="">
                                            </td>
                                            <td> 25/10/2020</td>
                                            <td> <button class="btn_1">PDF</button> </td>
                                        </tr>
                                        <tr>
                                            <td> <img class="user_thumb"
                                                    src="{{ asset('back/assets') }}/img/invoice_img/man_2.png"
                                                    alt="">
                                            </td>
                                            <td>Product</td>
                                            <td class="nowrap">Tom Smitn</td>
                                            <td class="nowrap">Client data test</td>
                                            <td>$125000</td>
                                            <td>High</td>
                                            <td>Oct</td>
                                            <td><img class="check_status"
                                                    src="{{ asset('back/assets') }}/img/invoice_img/check.png"
                                                    alt="">
                                            </td>
                                            <td> 25/10/2020</td>
                                            <td> <button class="btn_1">PDF</button> </td>
                                        </tr>
                                        <tr>
                                            <td> <img class="user_thumb"
                                                    src="{{ asset('back/assets') }}/img/invoice_img/man_3.png"
                                                    alt="">
                                            </td>
                                            <td>Product</td>
                                            <td class="nowrap">Tom Smitn</td>
                                            <td class="nowrap">Client data test</td>
                                            <td>$125000</td>
                                            <td>High</td>
                                            <td>Oct</td>
                                            <td><img class="check_status"
                                                    src="{{ asset('back/assets') }}/img/invoice_img/check.png"
                                                    alt="">
                                            </td>
                                            <td> 25/10/2020</td>
                                            <td> <button class="btn_1">PDF</button> </td>
                                        </tr>
                                        <tr>
                                            <td> <img class="user_thumb"
                                                    src="{{ asset('back/assets') }}/img/invoice_img/man_4.png"
                                                    alt="">
                                            </td>
                                            <td>Product</td>
                                            <td class="nowrap">Tom Smitn</td>
                                            <td class="nowrap">Client data test</td>
                                            <td>$125000</td>
                                            <td>High</td>
                                            <td>Oct</td>
                                            <td><img class="check_status"
                                                    src="{{ asset('back/assets') }}/img/invoice_img/close.png"
                                                    alt="">
                                            </td>
                                            <td> 25/10/2020</td>
                                            <td> <button class="btn_1">PDF</button> </td>
                                        </tr>
                                        <tr>
                                            <td> <img class="user_thumb"
                                                    src="{{ asset('back/assets') }}/img/invoice_img/man_5.png"
                                                    alt="">
                                            </td>
                                            <td>Product</td>
                                            <td class="nowrap">Tom Smitn</td>
                                            <td class="nowrap">Client data test</td>
                                            <td>$125000</td>
                                            <td>High</td>
                                            <td>Oct</td>
                                            <td><img class="check_status"
                                                    src="{{ asset('back/assets') }}/img/invoice_img/close.png"
                                                    alt="">
                                            </td>
                                            <td> 25/10/2020</td>
                                            <td> <button class="btn_1">PDF</button> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
