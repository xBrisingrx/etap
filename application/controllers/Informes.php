<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informes extends CI_Controller {

	public function __construct()
	{
	  parent::__construct();
	  $this->load->model('Persona_model');
	  $this->load->library('excel');
	}

	public function index()
	{

	}

    public function test(){
        $this->excel->setActiveSheetIndex(0);
        $this->excel->getActiveSheet()->setTitle('test worksheet');
        $this->excel->getActiveSheet()->setCellValue('A1', 'Un poco de texto');
        $this->excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(20);
        $this->excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
        $this->excel->getActiveSheet()->mergeCells('A1:D1');
 
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="nombredelfichero.xls"');
        header('Cache-Control: max-age=0'); //no cache
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        // Forzamos a la descarga
        $objWriter->save('php://output');
    }

	public function Informe_matriz()
	{
		// Informe matriz del personal 
		$data = $this->Persona_model->get();
		if ($data > 0) {
			$this->excel->setActiveSheetIndex(0);
			$this->excel->getActiveSheet()->setTitle('matriz_personal');
			// Contador de filas en 2 porque la 1 se usa para el titulo
			$contador = 2;
			// Titulo en el excel
			$this->excel->getActiveSheet()->setCellValue('A1', 'Informe personal - ');
			$this->excel->getActiveSheet()->mergeCells('A1:D1');
			$this->excel->getActiveSheet()->getStyle("A1")->getFont()->setBold(true);
			$this->excel->getActiveSheet()->getStyle('A1')->getFill()->applyFromArray(array(
        'type' => PHPExcel_Style_Fill::FILL_SOLID,
        'startcolor' => array(
             'rgb' => 'F28A8C'
        )
    	));

			// Aplicamos el ancho a las columnas
			$this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
      $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
      $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
      $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
      $this->excel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
      $this->excel->getActiveSheet()->getColumnDimension('F')->setWidth(20);
      $this->excel->getActiveSheet()->getColumnDimension('G')->setWidth(20);
      //Le aplicamos negrita a los títulos de la cabecera.
      $this->excel->getActiveSheet()->getStyle("A{$contador}")->getFont()->setBold(true);
      $this->excel->getActiveSheet()->getStyle("B{$contador}")->getFont()->setBold(true);
      $this->excel->getActiveSheet()->getStyle("C{$contador}")->getFont()->setBold(true);
      $this->excel->getActiveSheet()->getStyle("D{$contador}")->getFont()->setBold(true);
      $this->excel->getActiveSheet()->getStyle("E{$contador}")->getFont()->setBold(true);
      $this->excel->getActiveSheet()->getStyle("F{$contador}")->getFont()->setBold(true);
      $this->excel->getActiveSheet()->getStyle("G{$contador}")->getFont()->setBold(true);
      //Definimos los títulos de la cabecera.
      $this->excel->getActiveSheet()->setCellValue("A{$contador}", 'APELLIDO/S, NOMBRE/S (DNI)');
      $this->excel->getActiveSheet()->setCellValue("B{$contador}", 'Carnet Municipal');
      $this->excel->getActiveSheet()->setCellValue("C{$contador}", 'Carnet Sanitario');
      $this->excel->getActiveSheet()->setCellValue("D{$contador}", 'Examen medico');
      $this->excel->getActiveSheet()->setCellValue("E{$contador}", 'IAPG');
      $this->excel->getActiveSheet()->setCellValue("F{$contador}", 'IAPG (Certificado)');
      $this->excel->getActiveSheet()->setCellValue("G{$contador}", 'Psicofisico CNRT');
      //Definimos la data del cuerpo.        
      foreach($data as $d){
         //Incrementamos una fila más, para ir a la siguiente.
         $contador++;
         //Informacion de las filas de la consulta.
         $this->excel->getActiveSheet()->setCellValue("A{$contador}", $d->dni);

         $this->excel->getActiveSheet()->setCellValue("B{$contador}", $d->nombre);
         $this->excel->getActiveSheet()->setCellValue("C{$contador}", $d->apellido);
      }
      //Le ponemos un nombre al archivo que se va a generar.
      $archivo = "matriz_de_personal.xls";
      header('Content-Type: application/vnd.ms-excel');
      header('Content-Disposition: attachment;filename="'.$archivo.'"');
      header('Cache-Control: max-age=0');
      $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
      //Hacemos una salida al navegador con el archivo Excel.
      $objWriter->save('php://output');
		} else{
			echo "No se han encontrado resultados";
			exit;
		}
	}


}
