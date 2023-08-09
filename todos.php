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
$todoList = $db->prepare("
        SELECT SQL_CALC_FOUND_ROWS title, id, description, completed, user_id
        FROM todos WHERE user_id  = {$user}
        LIMIT {$start}, {$perPage}
    ");
$todoList->execute();
$todoList = $todoList->fetchAll(PDO::FETCH_ASSOC);

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
    <div class="container">
        <h2 class = "text-center my-5">THIS IS YOUR TODO LIST!!</h2>

        <div class = "row justify-content-center">
            <div class = "col-md-10">
                <div class ="card card-default">
                    <div class = "card-header">Todo list</div>
                    <div class = "card-body">
                        <ul class = "list-group">

                            <?php
                            foreach($todoList as $todo){?>
                            <li class = "list-group-item flex">
                                <?php echo $todo['title'];?>
                                <?php if(!$todo['completed']) {?>
                                <tr>
                                    <?php
                                    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1; // Get the current page number
                                    ?>

                                    <td>
                                        <a href="/complete.php?ID=<?php echo $todo['id']; ?>&page=<?php echo $currentPage; ?>" class="btn btn-warning btn float-right mr-2" style="color:white">
                                            Complete
                                        </a>
                                    </td>
                                <?php } ?>
                                    <td>
                                        <a href="/view.php?id=<?php echo $todo['id']?>&description=<?php echo $todo['description']?>" class="btn btn-primary btn float-right mr-2">
                                            View
                                        </a>
                                    </td>
                                </tr>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center my-3">
            <div class="pagination">
                <?php
                echo '<style>.page-number { margin-right: 10px; }</style>';

                $maxVisiblePages = 5;
                $halfMaxVisiblePages = floor($maxVisiblePages / 2);
                $startPage = max(1, $currentPage - $halfMaxVisiblePages);
                $endPage = min($startPage + $maxVisiblePages - 1, $pages);

                if ($currentPage > 1) {
                    $previousPageLink = $currentPage === 2 ? "/home.php" : "/todos.php/?page=" . ($currentPage - 1) . "&per-page=" . $perPage;
                    echo '<span class="page-number"><a href="' . $previousPageLink . '"> << </a></span>';
                    if ($currentPage > 2) {
                        echo '<span class="page-number"><a href="/todos.php/?page=' . ($currentPage - 1) . '&per-page=' . $perPage . '"> ...</a></span>';
                    }
                }

                for ($x = $startPage; $x <= $endPage; $x++) {
                    echo '<span class="page-number"><a href="/todos.php/?page=' . $x . '&per-page=' . $perPage . '">' . $x . '</a></span>';
                }

                if ($endPage < $pages) {
                    echo '<span class="page-number"><a href="/todos.php/?page=' . ($currentPage + 1) . '&per-page=' . $perPage . '">...</a></span>';
                    echo '<span class="page-number"><a href="/todos.php/?page=' . $pages . '&per-page=' . $perPage . '"> >> </a></span>';
                }
                ?>
            </div>
        </div>

        <div style="display: flex; justify-content: center;">
            <a href="<?php echo $currentPage == 1 ? '/home.php' : '/todos.php/?page=' . ($currentPage - 1) . '&per-page=' . $perPage; ?>" style="color:white" class="btn btn-primary">
                Back
            </a>
        </div>
    </div>
</body>
</html>
<?php
    }else{
        header("Location: index.php");
        exit();
    }
?>
