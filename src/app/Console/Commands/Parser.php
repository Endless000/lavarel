<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\DomCrawler\Crawler;
use Sunra\PhpSimple\HtmlDomParser;

class Parser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Parser';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $pages = range(1, 100 , 1);
        foreach ($pages as $page) {
            $url = 'https://book24.ua/publishers/?PAGEN_1=' .$page;
            $html = file_get_contents($url);
            $crawler = new Crawler($html);
            $crawler = $crawler->filter('span[class="item"]');
        }



    }
}
