<?php

use Illuminate\Database\Seeder;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('PostsSeeder');
    }
}

/**
* 
*/
class PostsSeeder extends Seeder
{
	
	public function run()
	{
		DB::table('Posts')->delete();
		Post::create([
			'title' => 'First Post',
			'slug' => 'first-post',
			'excerpt' => '<b>First Post body</b>',
			'content' => '<b>Content First Post body</b>',
			'published' => true,
			'published_at' => Db::raw('CURRENT_TIMESTAMP'),
		]);

		Post::create([
			'title' => 'Second Post',
			'slug' => 'second-post',
			'excerpt' => '<b>Second Post body</b>',
			'content' => '<b>Content Second Post body</b>',
			'published' => false,
			'published_at' => Db::raw('CURRENT_TIMESTAMP'),
		]);

		Post::create([
			'title' => 'Third Post',
			'slug' => 'Third-post',
			'excerpt' => '<b>Third Post body</b>',
			'content' => '<b>Content Third Post body</b>',
			'published' => false,
			'published_at' => Db::raw('CURRENT_TIMESTAMP'),
		]);
	}
}
