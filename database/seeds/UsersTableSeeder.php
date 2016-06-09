<?php


class UsersTableSeeder extends Seeder{

   public function run()
   {
        $faker = Faker\Factory::create();
        for($i=0;$i<10;$i++){


             $user=User::create(array(
                 'name'=>$faker->name,

                 'cnic'=>$faker->creditCardNumber,
                 'email'=>$faker->email,
                 'password'=>$faker->password([5],[10]),
                 'remember_token'=>str_random(50)




             ));
        }


   }
}