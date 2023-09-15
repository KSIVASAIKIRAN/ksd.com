<?php

namespace App\Exports;

use App\BasicInfo;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Sheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class BasicInfoExport implements FromCollection, WithHeadings, WithEvents, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
	
	protected $id;
	protected $divid;

    function __construct($id, $divid) {
        $this->id = $id;
		 $this->divid = $divid;
    }
	
	

	
	public function headings():array{
        return[
            'Division', 
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
	
	/*public function startCell(): string
    {
        return 'A2';
    }*/
	
	public function registerEvents(): array {
        
        return [
            AfterSheet::class => function(AfterSheet $event) {

                /** @var Sheet $sheet */
				
				
                
                
                $styleArray = [
                    'alignment' => [
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                    ],
                ];
                
                $cellRange = 'A1:P1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->applyFromArray($styleArray);
				$event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setBold(true);
				$event->sheet->getDelegate()->getColumnDimension('A')->setWidth(20);
				$event->sheet->getDelegate()->getColumnDimension('B')->setWidth(20);
				$event->sheet->getDelegate()->getColumnDimension('C')->setWidth(20);
				$event->sheet->getDelegate()->getColumnDimension('D')->setWidth(20);
				$event->sheet->getDelegate()->getColumnDimension('E')->setWidth(20);
				$event->sheet->getDelegate()->getColumnDimension('F')->setWidth(20);
				$event->sheet->getDelegate()->getColumnDimension('G')->setWidth(20);
				$event->sheet->getDelegate()->getColumnDimension('H')->setWidth(20);
				$event->sheet->getDelegate()->getColumnDimension('I')->setWidth(20);
				$event->sheet->getDelegate()->getColumnDimension('J')->setWidth(20);
				$event->sheet->getDelegate()->getColumnDimension('K')->setWidth(20);
				$event->sheet->getDelegate()->getColumnDimension('L')->setWidth(20);
				$event->sheet->getDelegate()->getColumnDimension('M')->setWidth(20);
				$event->sheet->getDelegate()->getColumnDimension('N')->setWidth(20);
				$event->sheet->getDelegate()->getColumnDimension('O')->setWidth(20);
				$event->sheet->getDelegate()->getColumnDimension('P')->setWidth(30);
				
            },
        ];
    }
	
    public function collection()
    {
		//$divisionid = Auth::user()->division_id;
        return BasicInfo::join('divisions', 'divisions.div_id', '=', 'basic_info.div_id')
		                       ->join('plantations','plantations.pid','=','basic_info.plantation_id')
		                       ->where('basic_info.plantation_id', '=', $this->id)	
                                ->where('basic_info.div_id', '=', $this->divid)								   
							   ->get(['divisions.div_name','plantations.plantation_name','basic_info.divrange','basic_info.series','basic_info.year','basic_info.rfblock','basic_info.netarea','basic_info.grossarea','basic_info.espacement','basic_info.village','basic_info.mandal','basic_info.district','basic_info.assembly','basic_info.parliament','basic_info.forestdivision','basic_info.plantationwatcher']);
							   
				
							   
					
    }
}
