<?php

namespace Geekbrains\Application1\Models;

function isGoodDate(string $strDate):bool{
    $date_array = explode("-", $strDate);
    if(count($date_array) != 3){
        echo "False\n";
        return FALSE;
    }
    $now_date_array = explode(":",date("d:m:Y"));
    if (($date_array[0] > 31)or($date_array[1] > 12)or($date_array[2] > $now_date_array[2])){
        return FALSE;
    }
    if($date_array[2] == $now_date_array[2]){
        if($date_array[1] > $now_date_array[1]){
            return FALSE; 
        }else if($date_array[1] == $now_date_array[1]){
            if ($date_array[0] > $now_date_array[0]){
                return FALSE; 
            }
        }

    }
    return TRUE;
}
class User {

    private ?string $userName;
    private ?int $userBirthday;
    private static string $storageAddress = '/storage/birthdays.txt';

    public function __construct(string $name = null, int $birthday = null){
        $this->userName = $name;
        $this->userBirthday = $birthday;
    }

    public function setName(string $userName) : void {
        $this->userName = $userName;
    }

    public function getUserName(): string {
        return $this->userName;
    }

    public function getUserBirthday(): int {
        return $this->userBirthday;
    }

    public function setBirthdayFromString(string $birthdayString) : void {
        $this->userBirthday = strtotime($birthdayString);
    }

    public static function getAllUsersFromStorage(): array|false {
        
        $address = $_SERVER['DOCUMENT_ROOT'] . User::$storageAddress;
        if (file_exists($address) && is_readable($address)) {
            $file = fopen($address, "r");
            
            $users = [];
        
            while (!feof($file)) {
                $userString = fgets($file);
                $userArray = explode(",", $userString);

                $user = new User(
                    $userArray[0]
                );
                $user->setBirthdayFromString($userArray[1]);

                $users[] = $user;
            }
            
            fclose($file);

            return $users;
        }
        else {
            return false;
        }
    }
  
    public static function addFunction(string $name,string $date) : string {
        mb_internal_encoding("UTF-8");
        if (!isGoodDate($date)){
            return "Введены некоректные данные даты рождения :({$date})";
        }
        $data = iconv('windows-1251','UTF-8',$name) . ", " . $date . "\r\n";
        $address = $_SERVER['DOCUMENT_ROOT'] . User::$storageAddress;
        $fileHandler = fopen($address, 'a');
        if(fwrite($fileHandler, $data)){
            return "Запись $data добавлена ";
        }
        else {
            return "Произошла ошибка записи. Данные не сохранены";
        }
        fclose($fileHandler);
    }
}