<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: auth.php');
}
?>


<div class="col-md-6">
    <div class="card mt-4">
        <div class="card-header">
            <h2 class="text-center">Список тестов</h2>
        </div>

        <div class="card-body">
            <ul class="list-group">
                <?php
                $res = $db->query("SELECT * FROM tests");
                while ($row = $res->fetch()) {
                    ?>
                    <li class="list-group-item"><a href="index.php?id=<?php echo $row['id']; ?>"  class="list-group-item list-group-item-action text-center"><?php echo $row['title']; ?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>