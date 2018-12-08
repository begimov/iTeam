<?php

namespace App\Http\Controllers\Home;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Repositories\Eloquent\Criteria\With;
use App\Repositories\Eloquent\Criteria\Where;
use App\Repositories\Eloquent\Criteria\WhereIn;
use App\Repositories\Contracts\Pages\PageRepository;

class HomeController extends Controller
{

    protected $pages;

    protected $guzzle;

    protected $postsData = [
        '242' => 'В этом разделе размещен цикл бизнес-уроков управляющего партнера компании iTeam Александра Кочнева, посвященных внедрению процессно-ориентированного подхода к управлению компанией. Автор дает пошаговое практическое руководство в виде «дорожной карты», которое поможет Вам навести порядок в бизнес-процессах компании и овладеть методами их совершенствования.',
        '235' => 'В этом разделе размещен цикл бизнес-уроков управляющего партнера компании iTeam Александра Кочнева, посвященных построению системы целевого управления компанией. Автор дает практическое руководство по созданию механизмов управления бизнесом, обеспечивающих результативность и эффективность организации.',
        '1408' => 'Даже если стратегия компании представляется совершенно ясной ее руководителю, этого недостаточно для того, чтобы она успешно выполнялась. стратегия должна быть понятна всем членам управленческой команды и сотрудникам, необходимы средства управления реализацией стратегии, позволяющие направлять и отслеживать траекторию движения фирмы к ее стратегическим целям. Статья посвящена методике построения сбалансированной системы показателей, которая является инструментом стратегического управления компанией.',
        '1777' => 'Если в компании назрела необходимость упорядочения процессов управления, создания стройной системы планирования и контроля, значит, речь идет о постановке системы управленческого учета и бюджетирования. Фундаментом этой системы является финансовая структура.',
        '1829' => 'Все хорошее когда-то заканчивается. Обильные пастбища со временем истощаются. Плодородные земли приходят в упадок. Растущий прежде рынок становится тесным для тех, кто устремился на него, чтобы получить свою долю «пирога».',
        '2951' => 'Эта статья излагает основные элементы уникальной методики, подробно описанной автором в Практическом руководстве по созданию миссии организации. Пока еще многие руководители рассматривают миссию компании, как некое украшение корпоративного фасада, впрочем, необязательное. Но времена меняются….'
    ];

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PageRepository $pages, Client $guzzle)
    {
        $this->pages = $pages;

        $this->guzzle = $guzzle;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = $this->getBlogPosts();

        $mks = $this->getMasterClasses();

        $mps = $this->getMasterProjects();

        return view('home.index', compact('mks', 'posts', 'mps'));
    }

    protected function getBlogPosts()
    {
        try {
            $categories = json_decode($this->guzzle->request(
                'GET', config('urls.blog') 
                . 'wp-json/wp/v2/categories?include=242,235'
            )->getBody());

            $articles = json_decode($this->guzzle->request(
                'GET', config('urls.blog') 
                . 'wp-json/wp/v2/posts?include=1408,1777,1829,2951'
            )->getBody());

            foreach ($data = array_merge($categories, $articles) as $post) {
                $post->desc = $this->postsData[$post->id];
            };

            return $data;

        } catch (\Exception $e) {
            return collect([]);
        }
        
    }

    protected function getMasterClasses()
    {
        $relations = ['elements', 'elements.files'];

        return $this->pages
            // ->oldest()
            // ->limit(6)
            ->withCriteria([
                new With($relations),
                new Where('category_id', 1),
                new WhereIn('id', [28, 27, 26, 25, 24, 23])
            ])
            ->get();
    }

    protected function getMasterProjects()
    {
        return app()->make(PageRepository::class)
            ->latest()
            ->limit(5)
            ->withCriteria([
                new Where('category_id', 2)
            ])
            ->get();
    }
}
