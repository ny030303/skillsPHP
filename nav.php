<!-- <<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="/">로고</a> -->
<!-- <style>
    * {
        box-sizing: border-box;
        padding: 0;
        margin:0;
    }
    .headList {
        width: 95%;
        margin: auto;
        padding-left:75px;
    }
    li {
        list-style: none;
    }

    a {
        text-decoration: none;
    }

    .headerbtn {
        background-color:#fff;
    }

    #title {
        padding: 30px;
        border-bottom: 1px solid #ddd;
        background-color: #fff;
        width: 100%;
        display: block;
        margin: 0 0 10px 0;
        color: #333;
        font-size: 30px;
    }
    #titleIn {
        margin: 0 0 5px 0;
        display: inline-block;
    }

    a:hover {        
        text-decoration: none;
    } -->

<!-- </style> -->

<!-- <nav>
    <div id="title"><a id="titleIn" href="/index.php">어서와! 게시판에</a><div>
    <ul class="btn-group headList">
        <a href="/list.php" class="headerbtn btn btn-outline-primary">게시판</a>
        <a href="/form.php" class="headerbtn btn btn-outline-primary">글쓰기</a>
    </ul>
</nav> -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">로고</a>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/list.php">게시판</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/form.php">글쓰기</a>
            </li>
        </ul>

        <ul class="navbar-nav">
            <?php if(isset($_SESSION['user'])) : ?>
                <li class="nav-item">
                    <a href="#" class="nav-link"><?= $_SESSION['user']->nickname ?>님</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout.php">로그아웃</a>
                </li>
            <?php else : ?>
                <li class="nav-item">
                    <a class="nav-link" href="/register.php">회원가입</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login.php">로그인</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>