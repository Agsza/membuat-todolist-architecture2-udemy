<?php

namespace Entity {
    class TodoList {
        private int $id;
        private string $todo;
        public function __construct(string $todo = "") {$this->todo = $todo;}
        public function getTodo(){return $this->todo;}
        public function setTodo(string $todo){ $this->todo = $todo; }
        public function getId(){return $this->id;}
        public function setId(int $id){ $this->id = $id; }
    }
}
