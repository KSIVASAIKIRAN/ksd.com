<?php

namespace App\Exports;

use App\Harvesting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Sheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromArray;


class HarvestingInfoExport implements FromCollection, WithEvents, ShouldAutoSize, WithMapping
{
	
	protected $plantid;
	protected $divid;

    function __construct($plantid, $divid) {
        $this->plantid = $plantid;
		$this->divid = $divid;
    }
	
    /**
    * @return \Illuminate\Support\Collection
    */
	
	/* public function array():array
    {    
        $reportOut = DB::table('harvesting_info')->where('division_id',1)->where('plantation_id',1)->get()->toArray();

        return $reportOut;
    } */
	
    public function collection()
    {
		
		$particularsinfo = DB::table('harvesting_info')->where('division_id',1)->where('plantation_id',1)->get();		
		//$noofseedingsinfo = DB::table('harvesting_info')->where('division_id',1)->where('plantation_id',1)->get(['no_of_seedings']);		
		/* $survivalpercent = DB::table('harvesting_info')->where('division_id',$div_id)->where('plantation_id',1)->get(['survival_percent']);		
		$avggirth = DB::table('harvesting_info')->where('division_id',$div_id)->where('plantation_id',1)->get(['average_girth']);
		$pulpestyield = DB::table('harvesting_info')->where('division_id',$div_id)->where('plantation_id',1)->get(['pulp_est_yield']);
		$pulpactyield = DB::table('harvesting_info')->where('division_id',$div_id)->where('plantation_id',1)->get(['pulp_act_yield']);
		$faggotestyield = DB::table('harvesting_info')->where('division_id',$div_id)->where('plantation_id',1)->get(['faggot_est_yield']);
		$faggotactyield = DB::table('harvesting_info')->where('division_id',$div_id)->where('plantation_id',1)->get(['faggot_act_yield']);
		$propsestyield = DB::table('harvesting_info')->where('division_id',$div_id)->where('plantation_id',1)->get(['props_est_yield']);
		$propsactyield = DB::table('harvesting_info')->where('division_id',$div_id)->where('plantation_id',1)->get(['props_act_yield']);
		$barkestyield = DB::table('harvesting_info')->where('division_id',$div_id)->where('plantation_id',1)->get(['bark_est_yield']);
		$barkactyield = DB::table('harvesting_info')->where('division_id',$div_id)->where('plantation_id',1)->get(['bark_act_yield']);
		$fwoodestyield = DB::table('harvesting_info')->where('division_id',$div_id)->where('plantation_id',1)->get(['fuel_wood_est_yield']);
		$fwoodactyield = DB::table('harvesting_info')->where('division_id',$div_id)->where('plantation_id',1)->get(['fuel_wood_act_yield']);
		$othersestyield = DB::table('harvesting_info')->where('division_id',$div_id)->where('plantation_id',1)->get(['others_est_yield']);
		$othersactyield = DB::table('harvesting_info')->where('division_id',$div_id)->where('plantation_id',1)->get(['others_act_yield']);
		$pwoodpurchaser = DB::table('harvesting_info')->where('division_id',$div_id)->where('plantation_id',1)->get(['purchaser_of_pulpwood']);
		$salepricepermt = DB::table('harvesting_info')->where('division_id',$div_id)->where('plantation_id',1)->get(['sale_price_per_mt']);
		$rrforpulp = DB::table('harvesting_info')->where('division_id',$div_id)->where('plantation_id',1)->get(['rr_pulp']);
		$rrforfaggotwood = DB::table('harvesting_info')->where('division_id',$div_id)->where('plantation_id',1)->get(['rr_faggot_wood']);
		$rrforprops = DB::table('harvesting_info')->where('division_id',$div_id)->where('plantation_id',1)->get(['rr_props']);
		$rrforbark = DB::table('harvesting_info')->where('division_id',$div_id)->where('plantation_id',1)->get(['rr_bark']);
		$rrforfuelwood = DB::table('harvesting_info')->where('division_id',$div_id)->where('plantation_id',1)->get(['rr_fuel_wood']);
		$rrforothersone = DB::table('harvesting_info')->where('division_id',$div_id)->where('plantation_id',1)->get(['rr_others_mention1']);
		$rrforotherstwo = DB::table('harvesting_info')->where('division_id',$div_id)->where('plantation_id',1)->get(['rr_others_mention2']);
		$rrfortotalrevenue = DB::table('harvesting_info')->where('division_id',$div_id)->where('plantation_id',1)->get(['total_revenue_realised']);
		$expinc = DB::table('harvesting_info')->where('division_id',$div_id)->where('plantation_id',1)->get(['expenditure_incurred']);
		$costbenefitratio = DB::table('harvesting_info')->where('division_id',$div_id)->where('plantation_id',1)->get(['cost_benefit_ratio']);
		$remarks = DB::table('harvesting_info')->where('division_id',$div_id)->where('plantation_id',1)->get(['remarks']);	
		
       $res= Harvesting::where('harvesting_info.division_id', '=', $this->divid)	
                                ->where('harvesting_info.plantation_id', '=', $this->plantid)								   
							   ->first();	
						
			//$res->rotation_year = $particularsinfo;
			//$res->no_of_seedings = $noofseedingsinfo;
		//dd($res); */
		
		return $particularsinfo;
							   
					
    } 
	
	/* public function map($particularsinfo): array
    {
		//dd($particularsinfo);
		$year = $particularsinfo->rotation_year;
		$seedings = $particularsinfo->no_of_seedings;
		//$seedings = $particularsinfo->no_of_seedings;
       $data = array($year,$seedings);
	  // dd($data);
	   return [
           [ $year],[$seedings]
            
            
        ];
    }
	
	/*public function startCell(): string
    {
        return 'A2';
    }*/
    public function registerEvents(): array {
        
        return [
		
			BeforeSheet::class => function (BeforeSheet $event) {
				$event->sheet
				->getPageSetup()
				->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
			},
            AfterSheet::class => function(AfterSheet $event) {
                /** @var Sheet $sheet */
                $sheet = $event->sheet;
				//$sheet->mergeCells('A1:A2');
				$sheet->setCellValue('A1', "S.No");
				$sheet->getStyle('A1')->getAlignment()->setWrapText(true);
				$sheet->setCellValue('A2', "1");
				$sheet->getStyle('A2')->getAlignment()->setWrapText(true);
				$sheet->setCellValue('A3', "2");
				$sheet->getStyle('A3')->getAlignment()->setWrapText(true);
				$sheet->setCellValue('A4', "3");
				$sheet->getStyle('A4')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('A5:A6');
				$sheet->setCellValue('A5', "4");
				$sheet->getStyle('A5')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('A7:A8');
				$sheet->setCellValue('A7', "5");
				$sheet->getStyle('A7')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('A9:A10');
				$sheet->setCellValue('A9', "6");
				$sheet->getStyle('A9')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('A11:A12');
				$sheet->setCellValue('A11', "7");
				$sheet->getStyle('A11')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('A13:A14');
				$sheet->setCellValue('A13', "8");
				$sheet->getStyle('A13')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('A15:A16');
				$sheet->setCellValue('A15', "9");
				$sheet->getStyle('A15')->getAlignment()->setWrapText(true);				
				$sheet->setCellValue('A17', "10");
				$sheet->getStyle('A17')->getAlignment()->setWrapText(true);
				$sheet->setCellValue('A18', "11");
				$sheet->getStyle('A18')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('A19:A26');
				$sheet->setCellValue('A19', "12");
				$sheet->getStyle('A19')->getAlignment()->setWrapText(true);
				$sheet->setCellValue('A27', "13");
				$sheet->getStyle('A27')->getAlignment()->setWrapText(true);
				$sheet->setCellValue('A28', "14");
				$sheet->getStyle('A28')->getAlignment()->setWrapText(true);
				$sheet->setCellValue('A29', "15");
				$sheet->getStyle('A29')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('B1:C1');
				$sheet->setCellValue('B1', "Particulars");
				$sheet->getStyle('B1')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('B2:C2');
				$sheet->setCellValue('B2', "No of Seedings / Stemps in harvesting year");
				$sheet->getStyle('B2')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('B3:C3');
				$sheet->setCellValue('B3', "Survival % in Harvesting year");
				$sheet->getStyle('B3')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('B4:C4');
				$sheet->setCellValue('B4', "Average Girth(Cms)");
				$sheet->getStyle('B4')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('B5:B6');
				$sheet->setCellValue('B5', "Pulpwood");
				$sheet->getStyle('B5')->getAlignment()->setWrapText(true);
				$sheet->setCellValue('C5', "Estimated yield (MTs)");
				$sheet->getStyle('C5')->getAlignment()->setWrapText(true);
				$sheet->setCellValue('C6', "Actual yield MTs");
				$sheet->getStyle('C6')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('B7:B8');
				$sheet->setCellValue('B7', "Faggot Wood");
				$sheet->getStyle('B7')->getAlignment()->setWrapText(true);
				$sheet->setCellValue('C7', "Estimated yield (MTs)");
				$sheet->getStyle('C7')->getAlignment()->setWrapText(true);
				$sheet->setCellValue('C8', "Actual yield MTs");
				$sheet->getStyle('C8')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('B9:B10');
				$sheet->setCellValue('B9', "Props");
				$sheet->getStyle('B9')->getAlignment()->setWrapText(true);
				$sheet->setCellValue('C9', "Estimated yield (No.s)");
				$sheet->getStyle('C9')->getAlignment()->setWrapText(true);
				$sheet->setCellValue('C10', "Actual yield Nos");
				$sheet->getStyle('C10')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('B11:B12');
				$sheet->setCellValue('B11', "Bark");
				$sheet->getStyle('B11')->getAlignment()->setWrapText(true);
				$sheet->setCellValue('C11', "Estimated yield (MTs)");
				$sheet->getStyle('C11')->getAlignment()->setWrapText(true);
				$sheet->setCellValue('C12', "Actual yield MTs");
				$sheet->getStyle('C12')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('B13:B14');
				$sheet->setCellValue('B13', "Fuel wood");
				$sheet->getStyle('B13')->getAlignment()->setWrapText(true);
				$sheet->setCellValue('C13', "Estimated yield (MTs)");
				$sheet->getStyle('C13')->getAlignment()->setWrapText(true);
				$sheet->setCellValue('C14', "Actual yield MTs");
				$sheet->getStyle('C14')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('B15:B16');
				$sheet->setCellValue('B15', "Others (mention)");
				$sheet->getStyle('B15')->getAlignment()->setWrapText(true);
				$sheet->setCellValue('C15', "Estimated yield (MTs)");
				$sheet->getStyle('C15')->getAlignment()->setWrapText(true);
				$sheet->setCellValue('C16', "Actual yield MTs");
				$sheet->getStyle('C16')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('B17:C17');
				$sheet->setCellValue('B17', "Purchaser of Pulpwood");
				$sheet->getStyle('B17')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('B18:C18');
				$sheet->setCellValue('B18', "Sale price per MT");
				$sheet->getStyle('B18')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('B19:B26');
				$sheet->setCellValue('B19', "Revenue Realised (Rs in Lacs)");
				$sheet->getStyle('B19')->getAlignment()->setWrapText(true);
				$sheet->setCellValue('C19', "Pulp");
				$sheet->getStyle('C19')->getAlignment()->setWrapText(true);
				$sheet->setCellValue('C20', "Faggot wood");
				$sheet->getStyle('C20')->getAlignment()->setWrapText(true);
				$sheet->setCellValue('C21', "Props");
				$sheet->getStyle('C21')->getAlignment()->setWrapText(true);
				$sheet->setCellValue('C22', "Bark");
				$sheet->getStyle('C22')->getAlignment()->setWrapText(true);
				$sheet->setCellValue('C23', "Fuel wood");
				$sheet->getStyle('C23')->getAlignment()->setWrapText(true);
				$sheet->setCellValue('C24', "Others - mention");
				$sheet->getStyle('C24')->getAlignment()->setWrapText(true);
				$sheet->setCellValue('C25', "Others - mention");
				$sheet->getStyle('C25')->getAlignment()->setWrapText(true);
				$sheet->setCellValue('C26', "Total Revenue Realised");
				$sheet->getStyle('C26')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('B27:C27');
				$sheet->setCellValue('B27', "Expenditure incurred (rotation year wise)");
				$sheet->getStyle('B27')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('B28:C28');
				$sheet->setCellValue('B28', "Cost Benefit ratio");
				$sheet->getStyle('B28')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('B29:C29');
				$sheet->setCellValue('B29', "Note / Remarks");
				$sheet->getStyle('B29')->getAlignment()->setWrapText(true);
				
				
				//$sheet->mergeCells('C1:C2');
				
                
                $styleArray = [
                    'alignment' => [
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                    ],
                ];
                
                $cellRange = 'A1:A29'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->applyFromArray($styleArray);
				$event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setBold(true);
				
				$cellRange = 'B1:B29'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->applyFromArray($styleArray);
				$event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setBold(true); 
				
				$cellRange = 'C1:C29'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->applyFromArray($styleArray);
				$event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setBold(true); 
            },
        ];
    }
      
   /* public function headings(): array
    {
        return [
                
                "Plantation", 
                "Division",				
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
    } */
}
