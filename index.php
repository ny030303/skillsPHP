<?php require("db.php") ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<?php require("head.php"); ?>
    <style>
        section {
            /* background-image: url("background.png");
            background-repeat: no-repeat;
            background-size: cover; */
            background-color:#90b0d2;
            min-height: 100%;
            min-width: 1024px;

            width: 100%;
            height: auto;

            position: fixed;
            top: 0;
            left: 0;
        }
        #hiText {
            text-align: center;
            padding-top:30px;
            font-size:70px;
            color:#ffe3af;
        }
    </style>
</head>
<body>
<section>
    <?php require("nav.php"); ?>
    <div class="container">
        <div class="row mt-4 d-flex justify-content-center">
            <div class="col-md-10 col-sm-12">
                <div class="jumbotron bg-white" >
                    <h1 class="display-4">양디고 게시판</h1>
                    <p class="lead">양디고 게시판입니다. 아무나 말하시고 아무나 지우세요</p>
                    <hr class="my-4">
                    <p>뭐라 쓸 말이 없네요. 귀찮아요</p>
                    <a class="btn btn-outline-primary" href="/list.php" role="button">게시판 보기</a>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
<!-- 10.104.104.125:9090 -->