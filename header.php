<!doctype html>
<html>

<head>

    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title><?php echo $title; ?></title>
    <meta name="author" content="Christian MARQUAY"/>
    <meta name="description" content="<?php echo $description; ?>"/>
    <meta name="robots" content="index, follow"/>

    <link rel="icon" type="image/png" href="images/cm.png"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="css/style.min.css"/>

</head>
<body class="container-fluid">
<?php include_once("analyticstracking.php") ?>

<header class="row">
    <nav class="navbar navbar-default">
        <div class="col-xs-12 col-sm-6 navbar-header">
            <a class="col-xs-12 navbar-brand"
                <?php
                if ($title == "Christian MARQUAY") {
                    echo "href=\"#\"";
                } else {
                    echo "href=\"index.php\"";
                }
                ?>><span class="hidden-xs">CM</span> Christian MARQUAY</a>
        </div>
        <ul class="col-xs-12 col-sm-4 nav navbar-nav pull-right text-center">
            <li class="col-xs-6 dropdown">
                <a href="#" class="dropdown-toggle text-center" data-toggle="dropdown">CMI<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a
                            <?php
                            if ($title == "CMI - Amazon") {
                                echo "href=\"#\"";
                            } else {
                                echo "href=\"cmi.php?document=Amazon\"";
                            }
                            ?>>Monographie d'entreprise</a></li>
                    <li><a
                            <?php
                            if ($title == "CMI - NewCMIst") {
                                echo "href=\"#\"";
                            } else {
                                echo "href=\"cmi.php?document=NewCMIst\"";
                            }
                            ?>>New CMIst</a></li>
                </ul>
            </li>
            <li class="col-xs-6"><a
                    <?php
                    if ($title == "Contact") {
                        echo "href=\"#\"";
                    } else {
                        echo "href=\"contact.php\"";
                    }
                    ?>>Contact</a>
            </li>
        </ul>
    </nav>
</header>