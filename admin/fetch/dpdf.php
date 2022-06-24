<?php 
 
namespace App\Http\Controllers; 
 
use App\Http\Controllers\Controller; 
 
// Reference the Dompdf namespace 
use Dompdf\Dompdf; 
 
class HomeController extends Controller 
{ 
     
    public function convert() 
    { 
        // Instantiate and use the dompdf class 
        $dompdf = new Dompdf(); 
         
        // Load HTML content  
        $dompdf->loadHtml('<h1>Welcome to CodexWorld.com</h1>');  
          
        // (Optional) Setup the paper size and orientation  
        $dompdf->setPaper('A4', 'landscape');  
          
        // Render the HTML as PDF  
        $dompdf->render(); 
         
        // Output the generated PDF (1 = download and 0 = preview) 
        $dompdf->stream("welcome.pdf", array("Attachment"=>1)); 
    } 
     
} 