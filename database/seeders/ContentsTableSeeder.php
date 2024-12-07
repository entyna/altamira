<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Content;

class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Content::create(['key' => 'infobox-heading', 'lang' => 'cs', 'value' => 'Vánoční otevírací doba']);
        Content::create(['key' => 'infobox-heading', 'lang' => 'en', 'value' => 'Holiday Opening Hours']);
        Content::create(['key' => 'infobox-text', 'lang' => 'cs', 'value' => 'Lákamí vůněhulás úmyval rohlivý jednovod lek an školivé sůl bájedpodl roští. Povačkoje hanalemi jenžto čuvad málně lehraží jakočil zásou k jednovátc tavětraje.']);
        Content::create(['key' => 'infobox-text', 'lang' => 'en', 'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.']);
    }
}
