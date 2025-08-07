<?php

require_once __DIR__ . '/../Entity/TodoList.php';
require_once __DIR__ . '/../Repository/TodoListRepository.php';
require_once __DIR__ . '/../Service/TodoListService.php';
require_once __DIR__ . '/../View/TodoListView.php';
require_once __DIR__ . '/../Helper/InputHelper.php';
require_once __DIR__ . "/../Config/Database.php";

use \Entity\TodoList;
use \Repository\TodoListRepositoryImpl;
use \Service\TodoListServiceImpls;
use \View\TodoListView;


    function testViewShowTodoList(): void 

    {
         $connection = \Config\Database::getConnection();
         $todoListRepository = new TodoListRepositoryImpl($connection);
        $todoListService = new TodoListServiceImpls($todoListRepository);
        $todoListView = new TodoListView($todoListService);

        $todoListService->addTodoList("BELAJAR PHP");
        $todoListService->addTodoList("BELAJAR PHP OOP");
        $todoListService->addTodoList("BELAJAR PHP DATABASE");
        
        $todoListView->showTodoList();

    }

    function testViewAddTodoList(): void 

    {

        $connection = \Config\Database::getConnection();
        $todoListRepository = new TodoListRepositoryImpl($connection);
        $todoListService = new TodoListServiceImpls($todoListRepository);
        $todoListView = new TodoListView($todoListService);

        $todoListService->addTodoList("BELAJAR PHP");
        $todoListService->addTodoList("BELAJAR PHP OOP");
        $todoListService->addTodoList("BELAJAR PHP DATABASE");
        
        $todoListView->addTodoList();
        $todoListService->showTodoList();

    }


    function testViewRemove(): void 

    {

        $connection = \Config\Database::getConnection();
        $todoListRepository = new TodoListRepositoryImpl($connection);
        $todoListService = new TodoListServiceImpls($todoListRepository);
        $todoListView = new TodoListView($todoListService);

        $todoListService->addTodoList("BELAJAR PHP");
        $todoListService->addTodoList("BELAJAR PHP OOP");
        $todoListService->addTodoList("BELAJAR PHP DATABASE");

        $todoListService->showTodoList();
        $todoListView->removeTodoList();

        $todoListService->showTodoList();
        $todoListView->removeTodoList();

        $todoListService->showTodoList();

    }



    testViewRemove();

?>