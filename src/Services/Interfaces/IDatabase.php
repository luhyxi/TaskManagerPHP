<?php

namespace Services\Intefaces;

    interface IDatabase {
        private string $host { get; set; }
        private string $username { get; set; }
        private string $password { get; set; }
        private string $pdo { get; set; }
        private string $error { get; set; }
        
        // Create a desired query
        public function query(string $sql);
        
        // Execute the desired query
        public function execute(string $sql);

        // Turns the result of a query into an array
        public function resultSet();
    }