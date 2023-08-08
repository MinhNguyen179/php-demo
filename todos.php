<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['user_name'])){
?>
<?php
$db = new PDO('mysql:dbname=php-todo;host=127.0.0.1', 'root','Muaxuan179');
$page = isset($_GET['page']) ? (int)$_GET['page'] :1;
$perPage = isset($_GET['page']) && $_GET['per-page'] <= 50 ? (int)$_GET['per-page']:5;
// Get the current page number from the URL parameter
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$user = $_SESSION['id'];
//Positioning
$start = ($page > 1) ? ($page * $perPage) - $perPage : 0;
//Query
$todolist = $db->prepare("
        SELECT SQL_CALC_FOUND_ROWS title, id, description, completed
        FROM todos WHERE user_id  = {$user}
        LIMIT {$start}, {$perPage}
    ");
$todolist->execute();
$todolist = $todolist->fetchAll(PDO::FETCH_ASSOC);

//Pages

$total = $db -> query("SELECT FOUND_ROWS() as total")->fetch()['total'];
$pages = ceil($total/$perPage);

?>
<!DOCTYPE html>
<html>
<head>
    <title>SIGN UP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<form action="todos.php" method="post">
    <div class="container">
        <form action = "complete.php" method="post">
            <h2 class = "text-center my-5">THIS IS YOUR TODO LIST!!</h2>
            <div class = "row justify-content-center">
                <div class = "col-md-10">
                    <div class ="card card-default">
                        <div class = "card-header">Todo list</div>
                        <div class = "card-body">
                            <ul class="list-group">
                                <?php
                                foreach ($todolist as $todo) {
                                    echo '<li class="list-group-item d-flex justify-content-between">';
                                    echo $todo['title'];
                                    echo '<div class="action-links">';
                                    if (!$todo['completed']) {
                                        echo '<a href="complete.php" class="complete-btn btn btn-warning btn float-right">Complete</a>';
                                    }
                                    echo '<a href="/todos.php/' . $todo['id'] . '/complete.php" class="view-btn btn-primary btn float-right mr-2">View</a>';
                                    echo '</div>';
                                    echo '</li>';
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="row justify-content-center my-3">
            <div class="pagination">
                <?php
                echo '<style>.page-number { margin-right: 10px; }</style>';

                $maxVisiblePages = 5;
                $halfMaxVisiblePages = floor($maxVisiblePages / 2);
                $startPage = max(1, $currentPage - $halfMaxVisiblePages);
                $endPage = min($startPage + $maxVisiblePages - 1, $pages);

                if ($startPage > 1) {
                    echo '<span class="page-number"><a href="/todos.php/?page=1&per-page=' . $perPage . '"> << </a></span>';
                    echo '<span class="page-number"><a href="/todos.php/?page=' . ($currentPage - 1) . '&per-page=' . $perPage . '"> ...</a></span>';
                }

                for ($x = $startPage; $x <= $endPage; $x++) {
                    echo '<span class="page-number"><a href="/todos.php/?page=' . $x . '&per-page=' . $perPage . '">' .$x. '</a></span>';
                }

                if ($endPage < $pages) {
                    echo '<span class="page-number"><a href="/todos.php/?page=' . ($currentPage + 1) . '&per-page=' . $perPage . '">...</a></span>';
                    echo '<span class="page-number"><a href="/todos.php/?page=' . $pages . '&per-page=' . $perPage . '"> >> </a></span>';
                }
                ?>

            </div>
        </div>
    </div>
</form>
</body>
</html>
<?php
    }else{
        header("Location: index.php");
        exit();
    }
?>
