<?php

use Illuminate\Database\Seeder;
use App\Models\Book;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ファクトリー作成
        // factory(Book::class, 50)->create();
        DB::table('books')->insert([
        //    [
        //         'title' => '',
        //         'cover' => '',
        //         'author' => '',
        //         'isbn' => '',
        //         'page' => '',
        //         'publisher' => '',
        //         'published_at' => '',
        //         'description' => '',
        //         'read_at' => null,
        //         'user_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //    ],
           [
                'title' => '嫌われる勇気―――自己啓発の源流「アドラー」の教え',
                'cover' => 'kirawareruyuuki.jpeg',
                'author' => '岸見 一郎',
                'isbn' => '9784478025819',
                'page' => 294,
                'publisher' => 'ダイヤモンド社',
                'published_at' => '2013/12/12',
                'description' => '本書は、フロイト、ユングと並び「心理学の三大巨頭」と称される、アルフレッド・アドラーの思想(アドラー心理学)を、「青年と哲人の対話篇」という物語形式を用いてまとめた一冊です。欧米で絶大な支持を誇るアドラー心理学は、「どうすれば人は幸せに生きることができるか」という哲学的な問いに、きわめてシンプルかつ具体的な“答え”を提示します。この世界のひとつの真理とも言うべき、アドラーの思想を知って、あなたのこれからの人生はどう変わるのか?もしくは、なにも変わらないのか…。さあ、青年と共に「扉」の先へと進みましょう―。',
                'read_at' => null,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
           ],
           [
            'title' => '反応しない練習: あらゆる悩みが消えていくブッダの超・合理的な「考え方」',
            'cover' => 'hannnousinairennsyuu.jpeg',
            'author' => '草薙龍瞬',
            'isbn' => '9784041030400',
            'page' => '222',
            'publisher' => 'KADOKAWA',
            'published_at' => '2015',
            'description' => '悩みは「消す」ことができる。そしてそれには「方法」がある――ブッダの「超合理的で、超シンプル」な教えを日常生活に活かすには? 注目の“独立派”出家僧が原始仏教からひもとく“役に立つ仏教”。',
            'read_at' => null,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
       ],
       [
        'title' => 'ゼロ秒思考: 頭がよくなる世界一シンプルなトレーニング',
        'cover' => 'zerobyousikou.jpeg',
        'author' => '赤羽雄二',
        'isbn' => '9784478020999',
        'page' => '214',
        'publisher' => 'ダイヤモンド社',
        'published_at' => '2013',
        'description' => 'A4の紙に1件1ページで書く。ゆっくり時間をかけるのではなく、1ページを1分以内にさっと書く。毎日10ページ書き、フォルダに投げ込んで瞬時に整理する。それだけで、マッキンゼーのプログラムでも十分に教えていない、最も基本的な「考える力」を鍛えられる。深く考えることができるだけでなく、「ゼロ秒思考」と言える究極のレベルに近づける。',
        'read_at' => null,
        'user_id' => 1,
        'created_at' => now(),
        'updated_at' => now(),
   ],
    [
        'title' => 'チーズはどこへ消えた？',
        'cover' => 'tiizuhadokonikieta.jpeg',
        'author' => 'スペンサー・ジョンソン',
        'isbn' => '',
        'page' => '96',
        'publisher' => '扶桑社',
        'published_at' => '2000/11/30',
        'description' => 'この小さな本が世界のビジネスマンを変えてゆく!迷路のなかに住む、2匹のネズミと2人の小人。彼らは迷路をさまよった末、チーズを発見する。チーズは、ただの食べ物ではなく、人生において私たちが追い求めるもののシンボルである。ところがある日、そのチーズが消えた!ネズミたちは、本能のままにすぐさま新しいチーズを探しに飛び出していく。ところが小人たちは、チーズが戻って来るかも知れないと無駄な期待をかけ、現状分析にうつつを抜かすばかり。しかし、やがて一人が新しいチーズを探しに旅立つ決心を…。大手トップ企業が次々と社員教育に採用。単純なストーリーに託して、状況の変化にいかに対応すべきかを説き、各国でベストセラーとなった注目の書。状況変化への対応を説いたビジネス書として、人生のいろいろな局面を象徴した生き方の本として多くの人に読まれています。アナタの人生は確実に変わる!',
        'read_at' => null,
        'user_id' => 1,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'title' => '時間革命: 1秒もムダに生きるな',
        'cover' => 'jikannkakumei.jpeg',
        'author' => '堀江貴文',
        'isbn' => '9784023318304',
        'page' => '235',
        'publisher' => '朝日新聞出版',
        'published_at' => '2019',
        'description' => 'あなたの人生に「革命」を起こす!ホリエ式時間術。',
        'read_at' => null,
        'user_id' => 1,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'title' => 'PHPﾌﾚｰﾑﾜｰｸLaravel入門第2版',
        'cover' => 'laravel_1.jpeg',
        'author' => '掌田津耶乃',
        'isbn' => '9784798060996',
        'page' => '356',
        'publisher' => '秀和システム',
        'published_at' => '2020',
        'description' => '2017年刊行後大好評の『PHPフレームワークLaravel入門』が2019年9月リリースのバージョン6に対応した改訂版!',
        'read_at' => null,
        'user_id' => 1,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'title' => 'PHPフレームワーク Laravel Webアプリケーション開発バージョン5.5LTS対応',
        'cover' => 'laravel_2.jpeg',
        'author' => '竹澤有貴, 栗生和明, 新原雅司, 大村創太郎',
        'isbn' => '9784802611848',
        'page' => '531',
        'publisher' => 'ソシム',
        'published_at' => '2018/10/05',
        'description' => '“実践パターン”と“ユースケース”で学ぶ、開発現場で使えるプロのテクニック。Laravelアプリケーションの構造・設計がすべて分かる。データベースとの連携、ユーザー認証、処理の分離、テスト駆動開発、運用etc.',
        'read_at' => null,
        'user_id' => 1,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    // [
    //     'title' => '',
    //     'cover' => '',
    //     'author' => '',
    //     'isbn' => '',
    //     'page' => '',
    //     'publisher' => '',
    //     'published_at' => '',
    //     'description' => '',
    //     'read_at' => null,
    //     'user_id' => 1,
    //     'created_at' => now(),
    //     'updated_at' => now(),
    // ],






        ]);
    }
}
