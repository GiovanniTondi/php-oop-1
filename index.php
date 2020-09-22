<?php

    class User
    {

        public $name;
        public $surname;
        public $mail;


        public function __construct($name, $surname, $mail)
        {
            $this-> name = $name;
            $this-> surname = $surname;
            $this-> mail = $mail;
        }

        public function __toString()
        {

            return "Name: " . $this-> name . "<br />"
                . "Surname: " . $this-> surname . "<br />"
                . "Email: " . $this-> mail . "<br /><br />";
        }
    }


    $user1 = new User('Giovanni', 'Tondi', 'tondi@mail.com');
    $user2 = new User('Pinco', 'Pallino', 'pincopallino@mail.com');

    echo $user1 . "<br />" . $user2;
