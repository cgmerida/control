<?php

use Flynsarmy\CsvSeeder\CsvSeeder;

class FamilyTableSeeder extends CsvSeeder
{

    public function __construct()
    {
        $this->table = 'families';
        $this->filename = base_path() . '/database/seeds/csvs/control.csv';
        $this->csv_delimiter = ';';
        $this->should_trim = true;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Recommended when importing larger CSVs
        // DB::disableQueryLog();

        // Uncomment the below to wipe the table clean before populating
        // DB::table($this->table)->truncate();

        parent::run();
    }

}
