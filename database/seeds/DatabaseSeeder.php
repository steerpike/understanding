<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(PeopleTableSeeder::class);
        $this->call(InfluencePersonTableSeeder::class);
        $this->call(InfluencesTableSeeder::class);
        $this->call(MediaTableSeeder::class);
        $this->call(MediaPersonTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CategoryPersonTableSeeder::class);
        $this->call(BookPersonTableSeeder::class);
        $this->call(BooksTableSeeder::class);
        $this->call(BookCategoryTableSeeder::class);
    }
}
