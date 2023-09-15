<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Sheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
//use Maatwebsite\Excel\Concerns\WithStartRow;

class SampleOperationsInfoExport implements FromCollection, WithHeadings, WithCustomStartCell, WithEvents, ShouldAutoSize
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
        
		$data = DB::table('plantations')->where('pid', $this->plantid)->get(['pid']);
		
		return $data;
		
    } 
	
	
	
	public function startCell(): string
    {
        return 'A2';
    }
    public function registerEvents(): array {
        
        return [
            AfterSheet::class => function(AfterSheet $event) {
                /** @var Sheet $sheet */
                $sheet = $event->sheet;
				$sheet->mergeCells('A1:A2');
				$sheet->setCellValue('A1', "Plantation");
				$sheet->getStyle('A1')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('B1:B2');
				$sheet->setCellValue('B1', "Year (start from year of planting till conversion)");
				$sheet->getStyle('B1')->getAlignment()->setWrapText(true);
                $sheet->mergeCells('C1:D1');
                $sheet->setCellValue('C1', "Ploughing before sowing of sunheap");
				$sheet->getStyle('C1')->getAlignment()->setWrapText(true);
                $sheet->mergeCells('E1:F1');
                $sheet->setCellValue('E1', "Sunheap sowing");
				$sheet->getStyle('E1')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('G1:H1');
                $sheet->setCellValue('G1', "Ploughing back sunhemp crop");
				$sheet->getStyle('G1')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('I1:J1');
                $sheet->setCellValue('I1', "Fertilizer application");
				$sheet->getStyle('I1')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('K1:L1');
                $sheet->setCellValue('K1', "Circular weeding");
				$sheet->getStyle('K1')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('M1:N1');
                $sheet->setCellValue('M1', "Line weeding");
				$sheet->getStyle('M1')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('O1:P1');
                $sheet->setCellValue('O1', "Ploughing to break capilaries");
				$sheet->getStyle('O1')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('Q1:R1');
                $sheet->setCellValue('Q1', "Criss-cross ploughing");
				$sheet->getStyle('Q1')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('S1:S2');
                $sheet->setCellValue('S1', "Harvesting month");
				$sheet->getStyle('S1')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('T1:U1');
                $sheet->setCellValue('T1', "1st Coppices cutting");
				$sheet->getStyle('T1')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('V1:W1');
                $sheet->setCellValue('V1', "2nd Coppices cutting");
				$sheet->getStyle('V1')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('X1:Y1');
                $sheet->setCellValue('X1', "Fire tracing operations");
				$sheet->getStyle('X1')->getAlignment()->setWrapText(true);
                
                $styleArray = [
                    'alignment' => [
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                    ],
                ];
                
                $cellRange = 'A1:Y1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->applyFromArray($styleArray);
				$event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setBold(true);
				
				$cellRange = 'A2:Y2'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->applyFromArray($styleArray);
				$event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setBold(true);
            },
        ];
    }
      
    public function headings(): array
    {
        return [
                
                "Plantation",  
                "Year",
                "Phy",
                "Fin",
				"Phy",
                "Fin",
				"Phy",
                "Fin",
				"Phy",
                "Fin",
				"Phy",
                "Fin",
				"Phy",
                "Fin",
				"Phy",
                "Fin",
				"Phy",
                "Fin",
				"Hmonth",
				"Phy",
                "Fin",
				"Phy",
                "Fin",
				"Phy",
                "Fin"
                				
        ];
    }
	
	/* public function startRow(): int
    {
     return 3;
    } */
}
