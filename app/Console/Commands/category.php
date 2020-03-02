<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class category extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:category {wording}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Ajouter catégorie pour les boissons';

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
        $category = \App\Category::create([
            'wording' => $this->argument('wording')
        ]);

        $this->info($category->wording . ' : ajouté avec succès');
    }
}
