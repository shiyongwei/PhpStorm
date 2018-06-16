<link href="/public/css/classify.css" type="text/css" rel="stylesheet" />
<div class="js-page">

    <div class="container">
        <div class="row-fluid" style="margin-top: 30px;">
            <div class="main_cont span12">
                <div class="row-fluid">
                    <h1 class="span8">
                        摩托车自驾游
                    </h1>
                </div>


                <div class="search_bar js-searchContainer">
                    <div class="btn-group">
                        <button id="search-country-select" data-toggle="dropdown" class="btn-highlight dropdown-toggle">
                            所有城市
                        </button>

                        <span class="arrow"><span class="arrow"></span></span>

                        <ul class="dropdown-menu" data-text-for-selector="#search-country-select">

							<?php foreach ($city as $key=>$citys): ?>
                                <li class="search-dropdown-select-option">
                                    <a href="#">
										<?php echo $citys['cit_name']?>
                                    </a>
                                </li>
							<?php endforeach; ?>
                        </ul>
                    </div>

                    <strong>
                        <span class="no_results js-toursCount"><?php echo count($uriving)?></span>
                        自驾
                        现有旅游项目
                    </strong>

                    <form action="/%E6%91%A9%E6%89%98%E8%BD%A6%E5%9B%A2%E9%98%9F%E6%B8%B8" method="get" class="search-form tour_search_form">
                        <input type="text" name="q" class="input-medium js-queryField" placeholder="搜索旅行项目..." value="">

                        <input type="submit" value="Search">
                    </form>

                    <div class="clearfix"></div>
                </div>


                <div class="clearfix"></div>

                <section class="tours_list">
                    <div class="row-fluid">
						<?php foreach ($uriving as $key=>$urivings): ?>
                        <!--one-->
                        <div class="tour span4  js-tourContainer" data-duration="19" style="width: 31%;margin-left: 15px!important;margin-top: 15px;">
                            <a href="detail?id=<?php echo $urivings['id']?>">
                                <div class="img_cont">
                                    <img alt="115th Anniversary Route 66 - 19 Day Tour" class="tour_image" src="https://d56b293rhv8dp.cloudfront.net/tours/406/maps/size368c/hd_route66_19_days-1.jpg?1519582492">
                                    <span class="tour_name">
                                    <span><?php echo $urivings['urivingtitle']?></span>
                                        <span class="tour_type">自驾游</span>
                                    </span>
                                </div>

                                <span class="tour_dest">
                                    <!--Milwaukee, WI-->
                                    <em class="bold" dir="ltr"><?php echo $urivings['day']?></em>
                                </span>

                                <div class="actions">
                                    <div class="tour_price">
                                        <div class="starting_info">
                                            <span class="title">起始价格</span>
                                            <em class="bold">¥<?php echo $urivings['price']?></em>
                                        </div>
                                        <span class="btn-highlight">查看旅游线路</span>
                                    </div>
                                </div>
                            </a>
                        </div>
						<?php endforeach; ?>

                    </div>

                    <div class="clearfix"></div>


                </section>
            </div>
        </div>
    </div>


    <div class="modal hide fade overlayWrapper js-tourInclusionsOverlay tourInclusions-wrapper">
        <div class="modal-header">
            <h3>
                <span class="translation_missing" title="translation missing: zh.views.motorcycle_tours.tour.table-tour-Inclusions.Tour-Inclusions">Tour Inclusions</span>
            </h3>

            <button class="close" aria-hidden="true" data-dismiss="modal" type="button">
                ×
            </button>

            <div class="clearfix"></div>
        </div>

        <div class="modal-body">
            <div class="table-container">
                <table class="table">
                    <thead>
                    <tr>
                        <th>EagleRider Exclusive Extras - 15 Day Tour</th>
                        <th>单独购买价格</th>
                        <th>With Tour Package</th>
                    </tr>
                    </thead>

                    <tbody>
                    </tbody>

                    <tfoot>
                    <tr>
                        <td>旅行价值总计</td>
                        <td colspan="2">
                            每人
                        </td>
                    </tr>
                    </tfoot>
                    <tfoot>
                    </tfoot>
                </table>
            </div>

            <div class="table-container">
                <table class="table">
                    <thead>
                    <tr>
                        <th>EagleRider Exclusive Extras - 8 Day Tour</th>
                        <th>单独购买价格</th>
                        <th>EagleRider旅行套餐价格</th>
                    </tr>
                    </thead>

                    <tbody>
                    </tbody>

                    <tfoot>
                    <tr>
                        <td>旅行价值总计</td>
                        <td colspan="2">
                            每人
                        </td>
                    </tr>
                    </tfoot>
                    <tfoot>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        window.onDomLoadFN = function() {
            ER.ToursFiltration.init();

            $('.js-pagination .js-perPageSelect').change(function() {
                var selectedOption = $(this).find('option:selected');

                window.location.href = (window.location.pathname + $.query.set("per_page", selectedOption.val()).toString());
            });

            $('.js-tourInclusions').click(function() {
                ER.Layout.showOverlay($('.js-tourInclusionsOverlay'));
            });
        };
    </script>
</div>