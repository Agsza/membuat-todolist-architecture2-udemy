<?php

    require_once __DIR__ . '/Entity/TodoList.php';
    require_once __DIR__ . '/Helper/InputHelper.php';
    require_once __DIR__ . '/Repository/TodoListRepository.php';
    require_once __DIR__ . '/Service/TodoListService.php';
    require_once __DIR__ . '/View/ViewTodoList.php';
    require_once __DIR__ . '/Config/Database.php';


    use Repository\TodoListRepositoryImpl;
    use Service\TodoListServiceImpls;
    use View\TodoListView;
    

    echo "Aplikasi TodoList" . PHP_EOL;

    $connection = \Config\Database::getConnection();
    $todoListRepository = new TodoListRepositoryImpl($connection);
    $todoListService = new TodoListServiceImpls($todoListRepository);
    $todoListView = new TodoListView($todoListService);

    $todoListView->showTodoList();

?>