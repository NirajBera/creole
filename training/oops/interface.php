
<?php

        interface Car23
        {
            //public $name;
            //only abstract method
            //no need of abstract keyword 
            //it is by default public and abstract 
            public function intro();
        }


        class kia2 implements Car23
        {
            public function intro()
            {
                return "car name is :- kia";
            }
        }

        class bmw2 implements Car23
        {
            public function intro()
            {
                return "car name is :- bmw";
            }
        }

       
        $kia = new kia2("kia");
        echo $kia->intro();
        echo "<br>";

        $bmw = new bmw2("bmw");
        echo $bmw->intro();


            // interface extends interface
            interface Widget
            {

                public function getPopularTags();
            }

            interface UserInterface extends Widget
            {

                public function setMenu($menu_array);

                public function getContent($page);
            }

            //multiple inheritance throw interface
            interface bike
            {

                public function getName();
            }

            interface Advertisement
            {

                public function getAdsTile();
            }

            interface rider extends Widget, Advertisement
            {

                public function setBikeList($list_array);

                public function getContent($page);
            }
       
?>

