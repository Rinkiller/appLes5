<?php

namespace Geekbrains\Application1\Controllers;

use Geekbrains\Application1\Render;
use Geekbrains\Application1\Models\User;

class UserController {

    public function actionIndex() {
        $users = User::getAllUsersFromStorage();
        
        $render = new Render();

        if(!$users){
            return $render->renderPage(
                'user-empty.tpl', 
                [
                    'title' => 'Список пользователей в хранилище',
                    'message' => "Список пуст или не найден"
                ]);
        }
        else{
            return $render->renderPage(
                'user-index.tpl', 
                [
                    'title' => 'Список пользователей в хранилище',
                    'users' => $users
                ]);
        }
    }
    public function actionAdd() {
        $routeArray = explode('/', $_SERVER['REQUEST_URI']);
        $render = new Render();
        if(count($routeArray)<4){
            return $render->renderPage(
                'user-empty.tpl', 
                [
                    'title' => 'Ошибка пользователя',
                    'message' => "Неверные данные в запросе"
                ]);
        }
        $result = User::addFunction($routeArray[3],$routeArray[4]);
        return $render->renderPage(
            'user-empty.tpl', 
            [
                'title' => 'Добавление пользователя в хранилище',
                'message' => $result
            ]);
    }
}