<?php
// require '../vendor/autoload.php';
echo"<pre>";

// $student_info = [
//     'name' => 'sulaiman',
//     'phone' => '0147859625',
//     'adress' => [
//         'permanent' => 'meherpur'
//     ],
//     'designation' => 'student',

// ];
// $student_info2 = [
//     'name' => 'sulaiman',
//     'phone' => '0147859625',
//     'adress' => [
//         'permanent' => 'meherpur'
//     ],
//     'designation' => 'student',

// ];



// var_dump($student_info);
// var_dump($student_info2);

class UserInfo{
    public $name;
    public $l_name;
    public $phone;
    public $email;
    public $permanent_adress;
    public $Present_adress;
    public $designetaion;
    private $date;

    function __construct($name, $phone, $email) {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
    }

    public function full_name() {
        return $this->name.' '.$this ->l_name;
    }

    public function set_date($date) {
        $this ->date = $date;
    }
    public function get_date($date) {
        $this ->date = $date;
    }

}

$user1 = new UserInfo('sulaiman', '01745360890', 'sulaimanbiswasbd@gmail.com');
$user1 ->l_name = 'biswas';
$user1 ->set_date = '25-65-25';

// $user1 -> name ='sulaimanbiswas';
// $user1 -> phone ='014745630890';

var_dump($user1);









?>


