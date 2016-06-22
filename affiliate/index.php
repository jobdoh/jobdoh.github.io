<?php
    $affiliate = $_SERVER["QUERY_STRING"];
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no"/>
    <title>Jobdoh</title>
    <meta name="description" content="香港 炒散, 散工, 兼職，外快，揾錢，臨時工 App">
    <meta name="keywords" content="散工, 兼職, 臨時工, working holiday，工作假期，揾錢，part-time job, ManPower, Adecco">
    <meta name="author" content="Jobdoh Team">
    <meta name="Resource-type" content="Document">
    <meta name="msapplication-tap-highlight" content="no">

    <style type="text/css">
        body { font-family: Roboto, sans-serif; width:275px; height: 130px; background-color: #3b7ee0; text-align: center; }
        h1 { color: #fff; }
        h2 { color: #fff; }
        a { color: #fffb8f; text-decoration: none; }
        .slides {
            display: block;
            position: fixed;
            top: 0;
            left: 0;
        }
        .slides .slide {
            -moz-transition: 0.3s all ease;
            -webkit-transition: 0.3s all ease;
            -o-transition: 0.3s all ease;
            transition: 0.3s all ease;
        }
        .title {
            color: #fff;
            font-weight: 600;
            font-size: 16px;
            float: left;
            padding: 6px;
            text-align: left;
            margin-top: 6px;
        }
        .title p{
            padding: 0;
            margin: 0;
            font-size: 13px;
            font-weight: 400;
            margin-top: 6px;
        }
        .content-bg {
            position: absolute;
            background: #222;
            opacity: 0.35;
            width: 275px;
            height: 70px;
            bottom: 0;
        }
        .content {
            position: absolute;
            width: 275px;
            height: 70px;
            bottom: 0;
        }
        .btn-primary {
            display: inline-block;
            font-weight: 400;
            cursor: pointer;
            border: 1px solid transparent;
            -webkit-border-radius: 50px;
            -moz-border-radius: 50px;
            border-radius: 50px;
            padding: 3px 8px;
            -moz-transition: 0.3s all ease;
            -webkit-transition: 0.3s all ease;
            -o-transition: 0.3s all ease;
            transition: 0.3s all ease;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            font-size: 14px;
            text-align: center;
            color: #ffffff;
            background-color: #E45651;
            border-color: #ffffff;
        }
        .btn-primary:hover {
            color: #ffffff;
            background-color: #fa5254;
            border-color: #ffffff;
        }
        .btn-right-bottom {
            float: right;
            position: fixed;
            bottom: 0;
            right: 0;
            margin: 6px;

        }
    </style>

    <script type="text/javascript">
        slideimages = new Array();
        slideimages[0] = new Image() ;
        slideimages[0].src = "./images/s1.png" ;
        slideimages[1] = new Image();
        slideimages[1].src = "./images/s2.png";
        slideimages[2] = new Image();
        slideimages[2].src = "./images/s3.png";
        slideimages[3] = new Image();
        slideimages[3].src = "./images/s4.png";
//        slideimages[0] = new Image() ;
//        slideimages[0].src = "./images/s4.jpg" ;
//        slideimages[1] = new Image();
//        slideimages[1].src = "./images/s5.jpg";
//        slideimages[2] = new Image();
//        slideimages[2].src = "./images/s6.jpg";
    </script>

</head>
<body>
    <a href="http://page.jobdoh.com/?affiliate=<?php echo $affiliate; ?>" target="_blank" style="text-decoration: none;">
        <div id="slides" class="slides" style="display: inline; width: 275px; height: 130px">
            <img class="slide" src="./images/s4.jpg" id="slide" style="width: 275px; height: 130px; left:0; top:0;" />
        </div>
        <div class="content-bg">
        </div>
        <div class="content">
            <div class="title">
                Quick hire at your fingertip
                <p>Efficient, Reliable, Convenient</p>
            </div>
            <a class="btn-primary btn-right-bottom" href="http://page.jobdoh.com/?affiliate=<?php echo $affiliate; ?>" target="_blank">Hire NOW</a>
        </div>
    </a>
    <script type="text/javascript">
        var step=0
        function slideit(){
            if (!document.images)
                return
            document.getElementById('slide').src = slideimages[step].src
            if (step < (slideimages.length - 1))
                step++;
            else
                step=0;
            setTimeout("slideit()",200)
        }

        slideit();

    </script>
</body>
</html>