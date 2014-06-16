<?php

class UserTableSeeder extends Seeder {
  public function run()
  {
    DB::table('users')->delete();

    User::create(array(
      'username' => 'veryuser',
      'password' => Hash::make('muchpassword')
    ));
    
    User::create(array(
      'username' => 'otheruser',
      'password' => Hash::make('verypassword')
    ));

  }
}
