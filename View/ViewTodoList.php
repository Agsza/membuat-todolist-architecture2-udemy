<?php

    namespace View {

    use Service\TodoListService;
    use Helper\InputHelper;

        class TodoListView
        {

            private TodoListService $todoListService;

            public function __construct(TodoListService $todoListService){

                $this->todoListService = $todoListService;

            }


            function showTodoList(): void
            {

                
    
                while(true) {

                    $this->todoListService->showTodoList();

                    echo "Menu" .PHP_EOL;
                    echo "1. Tambah Todo" . PHP_EOL;
                    echo "2. Hapus Todo" . PHP_EOL;
                    echo "x. Keluar Todo" . PHP_EOL;

                    $pilihan = InputHelper::input("pilih");

                    if($pilihan == "1"){
                        $this->addTodoList();
                    }elseif($pilihan == "2") {
                       $this->removeTodoList();
                    }elseif($pilihan == "x") {
                        break;
                    } else {
                        echo "Pilihan Tidak Dapat Dimengerti !" . PHP_EOL;
                    }

                }

                echo "Sampai Jumpa".PHP_EOL;

            }



            function addTodoList(): void
            {

                echo "MENAMBAH TODO" .PHP_EOL;
                $todo = InputHelper::input("todo (x untuk Batal) ");

                // Debug isi dari $todo

                if($todo == "x") {
                    echo "Batal Menambah Todo" . PHP_EOL;
                } else {
                    $this->todoListService->addTodoList($todo);
                }


            }
            function removeTodoList(): void
            {

                echo "MENGHAPUS TODO" .PHP_EOL;
                $pilihan = InputHelper::input("Nomor (x untuk batalkan)");

                if($pilihan == "x" | $pilihan == "X" ) {

                    echo "Batal menghapus Todo" . PHP_EOL;

                } else {

                    $this->todoListService->removeTodoList($pilihan);

                }


                
            }


        } 


    }


?>