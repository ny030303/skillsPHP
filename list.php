<?php
require("db.php");

$page = isset($_GET['p']) ? $_GET['p'] : 1;

if(!is_numeric($page)) $page = 1;

$sql = "SELECT COUNT(*) AS cnt FROM boards";

$data = fetch($con, $sql);
$totalCnt = $data->cnt;
$ppn = 5; //페이지당 글의 수
$totalPage = ceil($totalCnt / $ppn);

$cpp = 5;

$endPage = ceil($page / $cpp) * $cpp;
$startPage = $endPage - $cpp + 1;

$prev = true;
$next = true;
if ($endPage > $totalPage) {
    $endPage = $totalPage;
    $next = false;
}

if($startPage == 1) {
    $prev = false;
}

$sql = "SELECT * FROM boards ORDER BY id DESC LIMIT " . ($page - 1) * 5 . ", 5";
$list = fetchAll($con, $sql);

// echo "<pre>";
// var_dump($list);
// var_dump($list[0]->title);
// echo "</pre>";
?>

<!DOCTYPE html>
<html lang="ko">
<?php require("head.php"); ?>
<style>
    section {
        width: 1400px;
        text-align: center;
        margin: auto;
    }

    table {
        width: 100%;
    }

    #tableTitle {
        height: 30px;
        background-color: #ddd4;
        color: #555;
        font-size: 20px;
    }

    table {
        margin-top: 10px;
    }

    tr {
        border-bottom: 1px solid #dddf;
        font-size: 18px;
        color: #68A;
        height: 44px;
    }

    td a {
        color: #7ac1a0;
        transition: .3s;
    }

    td a:hover {
        color: #5a8470;
        text-decoration: none;
    }
</style>
</head>

<body>
    <?php require("nav.php"); ?>
    <div class="row my-4 d-flex justify-content-center">
        <div class="col-10">
            <h1>게시판 리스트</h1>
        </div>
    </div>

    <section>
        <!-- <h1>게시판</h1> -->
        <div class="row d-flex justify-content-center">
        <div class="col-10">
            <table class="table table-striped table-hover thead-dark">
                <tr>
                    <th>글번호</th>
                    <th width="60%">제목</th>
                    <th>글쓴이</th>
                    <th>작성일</th>
                </tr>

                <?php
                foreach ($list as $item) :
                    ?>
                    <tr>
                        <td><?= $item->id ?></td>
                        <td>
                            <a href="/view.php?id=<?= $item->id ?>">
                                <?= $item->title ?>
                            </a>
                        </td>
                        <td><?= $item->writer ?></td>
                        <td><?= $item->wdate ?></td>
                    </tr>
                <?php
            endforeach;
            ?>

            </table>
        </div>
    </div>
    <div class="row d-flex justify-content-center mt-3">
        <div class="col-10 text-right">
            <a class="btn btn-outline-success" href="/form.php">글쓰기</a>
        </div>
    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item <?= $prev ? "" : "disabled" ?>">
                <a class="page-link" href="/list.php?p=<?= $startPage - 1 ?>" tabindex="-1">이전</a>
            </li>
            
            <?php for($i = $startPage; $i <= $endPage; $i++) : ?>
                <li class="page-item <?= $i == $page ? "active" : "" ?>">
                    <a class="page-link" href="/list.php?p=<?= $i ?>">
                        <?= $i ?>
                    </a>
                </li>
            <?php endfor; ?>

            <li class="page-item <?= $next ? "" : "disabled" ?>">
                <a class="page-link" href="/list.php?p=<?= $endPage + 1?>">다음</a>
            </li>
        </ul>
    </nav>
        <!-- <a herf="/form.php">글쓰기</a> -->
    </section>

</body>

</html>