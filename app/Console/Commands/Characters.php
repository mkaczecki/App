<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\TitleController;

class Characters extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'JSON:characters {amount}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates Character objects from JSON downloaded data';

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
     * @return int
     */
    public function handle()
    {   $amount = $this->argument('amount');
        $url = "https://www.anapioficeandfire.com/api/characters?pageSize=" . $amount; 
        $response = Http::get($url);
        if($response->ok()){
            $data = $response->json();
            foreach($data as $character){
                $characterID = CharacterController::create($character);
                foreach($character["titles"] as $title){
                    if($title != null && $title !=""){
                        TitleController::create($title, $characterID);
                    }
                }
            }
            echo "\nSuccess! ".$amount." Character objects created.\n";
        } else {
            echo "\nSomething went wrong. No objects created\n";
        }
        return 0;
    }
}




