<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ZzB09L6H7NlA4Iy8SC8U9zQDq3Ym59nGtW5KqoC2LsAuv2L/6f5+8nqd9I5nYaa" crossorigin="anonymous">
    <title>Your Page Title</title>
    <style>
        /* Add your custom styles here */
        .highlight-bg-primary {
            background-color:darkorange;
            color: #fff;
        }

        .highlight-bg-green {
            background-color: #28a745;
            color: #fff;
        }

        .highlight-bg-twitter {
            background-color: #1da1f2;
            color: #fff;
        }

        .highlight-bg-facebook {
            background-color: #1877f2;
            color: #fff;
        }
    </style>
</head>
<body>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">

                <div class="col-12">
                    <div class="row row-cards">
                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm highlight-bg-primary">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="avatar">
                                                <!-- Your SVG icon here -->
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                {{ $totalCategory}}
                                            </div>
                                            <div class="text-muted">
                                                Total Package
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm highlight-bg-green">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="avatar">
                                                <!-- Your SVG icon here -->
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                {{ $totalProduct}}
                                            </div>
                                            <div class="text-muted">
                                                Total Car
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm highlight-bg-twitter">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="avatar">
                                                <!-- Your SVG icon here -->
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                {{$totalBookingtotal}} Total booked
                                            </div>
                                            <div class="text-muted">
                                                {{$totalBooking}} Booked This month
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm highlight-bg-facebook">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="avatar">
                                                <!-- Your SVG icon here -->
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                0 Likes
                                            </div>
                                            <div class="text-muted">
                                                0 today
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Traffic summary</h3>
                            <div id="chart-mentions" class="chart-lg"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Locations</h3>
                            <div class="ratio ratio-21x9">
                                <div>
                                    <div id="map-world" class="w-100 h-100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-rJdoAeg+d7Em+TOrnxQlH2h2L8x7/nOi2w9eWjCqZ8sJ2cJ3RSn/t5CkSrF2Hoi7" crossorigin="anonymous"></script>
</body>
</html>
