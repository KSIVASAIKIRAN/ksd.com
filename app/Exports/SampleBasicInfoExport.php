<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;

class SampleBasicInfoExport implements FromCollection, WithHeadings
//class SampleBasicInfoExport implements FromArray, WithHeadings
{
	private $id;
	
    /**
    * @return \Illuminate\Support\Collection
    */
   
        

    public function __construct(int $plantid) 
    {
        //$this->divid = $divid;
		$this->plantid = $plantid;
    }
    
    public function collection()
    {
        //return Users::whereYear('created_at', $this->year)->get();
		$data = DB::table('plantations')->where('pid', $this->plantid)->get(['pid']);
		//$data = [$this->divid,$this->plantid];
		//dd($data);
		return $data;
		//dd($data);
    } 
    
	
	

    /**
     * @return array
     */
    public function headings(): array
    {
        return [		   
            'Plantation',
            'Range',
            'Series',
			'Year of Plantation',
			'RF Block',
			'Net Area',
			'Gross Area',
			'Espacement',
			'Village',
			'Mandal',
			'District',
			'Assembly',
			'Parliament',
			'Forest Division',
			'Name of the Plantation Watcher',
        ];
    }
}
