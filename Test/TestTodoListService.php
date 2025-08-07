<?php


    require_once __DIR__ . "/../Entity/TodoList.php";
    require_once __DIR__ . "/../Repository/TodoListRepository.php";
    require_once __DIR__ . "/../Service/TodoListService.php";
    require_once __DIR__ . "/../Config/Database.php";

    use Service\TodoListServiceImpls;
    use Repository\TodoListRepositoryImpl;
    use Entity\TodoList;

    function testShowTodoList(){

    
       $connection = \Config\Database::getConnection();
       $todolistRepository = new TodoListRepositoryImpl($connection);
       
       $todoListService = new TodoListServiceImpls($todolistRepository);
       $todoListService->addTodoList("BELAJAR PHP");
       $todoListService->addTodoList("BELAJAR PHP OOP");
       $todoListService->addTodoList("BELAJAR PHP DATABASE");
       $todoListService->showTodoList();

    }

    function testAddTodoList() {

        $connection = \Config\Database::getConnection();
        $todolistRepository = new TodoListRepositoryImpl($connection);


        $todolistService = new TodoListServiceImpls($todolistRepository);
      

        $todolistService->showTodoList();

    }

    function testRemoveTodoList() {
        $connection = \Config\Database::getConnection();
        $todolistRepository = new TodoListRepositoryImpl($connection);

        $todolistService = new TodoListServiceImpls($todolistRepository);
        echo $todolistService->removeTodoList(5) . PHP_EOL; 
        echo $todolistService->removeTodoList(4) . PHP_EOL; 
        echo $todolistService->removeTodoList(3) . PHP_EOL; 
        echo $todolistService->removeTodoList(2) . PHP_EOL; 
        echo $todolistService->removeTodoList(1) . PHP_EOL; 

    }

    testShowTodoList();

?>
