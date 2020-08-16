<?php

class Task
{

    private function checkTask($task)
    {
        if ($task == '') {
            return false;
        } else {
            return true;
        }
    }

    public function addTask($task, $pdo)
    {
        if ($this -> checkTask($task))
        {
            echo '<p class="good">' . 'Успешно' . '</p>';
            $sql = 'INSERT INTO tasks(task) VALUES(:task)';
            $query = $pdo -> prepare($sql);
            $query -> execute(['task' => $task]);
        } else {
            echo '<p class="bad">' . 'Введите задание' . '</p>';
        }
    }

    public function updateTask($pdo)
    {
        $query = $pdo -> query('SELECT * FROM `tasks` ORDER BY `id` DESC');
        while ($row = $query -> fetch(PDO::FETCH_OBJ)) {
            echo '<li><b>' . $row -> task . '</b><a href="/delete.php?id=' . $row -> id . '" class="btn btn-danger mt-2 delete" 
            id=' . $row -> id . '>Удалить</a></li>';
        }
    }

    public function deleteTask($id, $pdo)
    {
        $sql = 'DELETE FROM `tasks` WHERE `id` = ?';
        $query = $pdo -> prepare($sql);
        $query -> execute([$id]);
    }
}