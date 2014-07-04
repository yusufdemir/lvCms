<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
        $this->call('defaultCategories');
        $this->command->info('default Categories created :) !');

        $this->call('defaultUsers');
        $this->command->info('default Users created :) !');

        $this->call('defaultPosts');
        $this->command->info('default Posts created :) !');
	}

}


class defaultCategories extends Seeder{

    public function run(){
        // Tabloyu Temizler
        DB::table('cats')->delete();
        // tabloya girilecek veriler
        DB::table('cats')->insert(array(
            array(
                'name'=>'ANY',
                'slug'=>'any',
                'description'=>'Any Posts'
            ),
            array(
                'name'=>'PAGES',
                'slug'=>'pages',
                'description'=>'All Pages'
            )
        ));

    }

}

class defaultUsers extends Seeder{

    public function run(){
        // Tabloyu Temizler
        DB::table('users')->delete();
        // tabloya girilecek veriler
        DB::table('users')->insert(array(
            array(
                'name'		=> 'admin',
                'surname'	=> 'admin',
                'email'		=> 'admin@test.com',
                'password'	=> Hash::make('asdasd'),
                'created_at'=> date('Y-m-d H:i:s'),
                'vis'		=> 'admin'
            ),
            array(
                'firstname'	=> 'editor',
                'surname'	=> 'editor',
                'email'		=> 'editor@test.com',
                'password'	=> Hash::make('asdasd'),
                'created_at'=> date('Y-m-d H:i:s'),
                'vis'		=> 'editor'
            )
        ));

    }

}

class defaultPosts extends Seeder{

    public function run(){
        // Tabloyu Temizler
        DB::table('posts')->delete();
        // tabloya girilecek veriler
        DB::table('posts')->insert(array(
            array(
                'head'		=> 'Lorem Ipsum Dor Sit Amet',
                'slug'		=> Str::slug('Lorem Ipsum Dor Sit Amet'),
                'media'		=> '#',
                'content'	=> "Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.",
                'user_id'	=> 1,
                'cat_id'	=> 1,
                'publish_date' => date('Y-m-d')
            ),
            array(
                'head'		=> 'Neden Kullanırız ?',
                'slug'		=> Str::slug('Neden Kullanırız ?'),
                'media'		=> '#',
                'content'	=> "Yinelenen bir sayfa içeriğinin okuyucunun dikkatini dağıttığı bilinen bir gerçektir. Lorem Ipsum kullanmanın amacı, sürekli 'buraya metin gelecek, buraya metin gelecek' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda birçok masaüstü yayıncılık paketi ve web sayfa düzenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında 'lorem ipsum' anahtar sözcükleri ile arama yapıldığında henüz tasarım aşamasında olan çok sayıda site listelenir. Yıllar içinde, bazen kazara, bazen bilinçli olarak (örneğin mizah katılarak), çeşitli sürümleri geliştirilmiştir.",
                'user_id'	=> 2,
                'cat_id'	=> 2,
                'publish_date' => date('Y-m-d')
            )
        ));

    }

}