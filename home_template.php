<?php
    /**
     * Template Name: Home Page
     */
    get_header();
?>

<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.6.4/jquery.fullPage.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.6.4/jquery.fullPage.js"></script>
</head>
<body>
    <div class = "nav">
        <input type = "checkbox" id = "nav-check">
        <div class = "nav-header">
            <div class = "nav-title">
                <img src=" <?php echo home_url(); ?>/wp-content/uploads/2020/03/home_logo1.png">
            </div>
        </div>
        <div class = "nav-btn">
            <lable for="nav-check">
                <span></span>
                <span></span>
                <span></span>
            </label >
        </div>
        <div class = "select-lang select-lang-for-mobile">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2020/03/select_lang.png">
            <a href = "#">中</a>
            <div class ="vertical-line"></div>
            <a href = "#">En</a>
        </div>
        <div class = "nav-links">
            <div class = "menu-items">
                <a href="<?php echo home_url();?>/home">首页</a>
                <a href="<?php echo home_url();?>/facerecognition">人脸识别</a>
                <a href="<?php echo home_url();?>/services">服务</a>
                <a href="<?php echo home_url();?>/case">案例</a>
                <a href="<?php echo home_url();?>/about">关于</a>
                <a href="<?php echo home_url();?>/connect">联系</a>
            </div>
            <div class = "select-lang">
                <img src="<?php echo home_url(); ?>/wp-content/uploads/2020/03/select_lang.png">
                <a href = "#">中</a>
                <div class ="vertical-line"></div>
                <a href = "#">En</a>
            </div>
        </div>
    </div>
    <div>
    
</body>
</html>