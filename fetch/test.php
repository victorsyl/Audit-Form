<?php

require_once 'dompdf/autoload.inc.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->set_option('isHtml5ParserEnabled', true);

$html = <<<'ENDHTML'
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content=
        "width=device-width, initial-scale=1.0">
    <title>
        MINI BAKERIES
    </title>
    <style>

    body {
        background-color:#f5f5f5;
        font-family: serif;
        text-align: center;
    }

    form {
        background-color: #f5f5f5;
        max-width: 1200px;
        margin: 0px auto;
        padding: 100px 50px;
        box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
    }
    h3{
        color:midnightblue;
    }
    h4{
        color:darkblue;
        text-align: left;
    }
    div-table {
      display: table;         
      border: 1px solid ;
      border-spacing: 0 
                border-radius: 20px;
                font-family: inherit;
                padding-top: 10px;
      padding-bottom: 10px;
      padding-left: 50px;
      padding-right: 10px;
                display: block;
                width: 95%;
    }
    '.'div-table-row {
      display: table-row;
      width: 500px;
      clear: both;
    }
    .div-table-col {
      float: left; 
      display: table-column;
        margin-top: 10px;         
      width: 250px;         
    }
    .div-table-col2 {
      float: left; 
      display: table-column;
       margin-top: 10px;         
      width: 180px;         
    }
    button {
        background-color: #777;
        border: 1px solid #777;
        border-radius: 2px;
        font-family: inherit;
        font-size: 21px;
        display: block;
        width: 50%;
        margin-top: 50px;
        margin-bottom: 20px;
        
    }
</style>
</head>

<body>
<span id="error">
 <!---- Initializing Session for errors --->
</span>
<!-- Create Form -->
    <form id="form"  method="post"><b>
        <img src="supaloaf.png" style="width:80px;height:80px;">
        <h1>MINI BAKERIES (N) LTD</h1>
        <h2>BAKERY VISIT CHECKLIST</h2>
        <label>ID:</label>
        <input type="text" name="id" id="id" placeholder="id" onkeyup="GetDetail(this.value)" value="">
        <!--<button type="submit" onclick="GetDetail(this.value)" value="">click me</button> -->
        <label>Branch Name:</label>
        <input type="text" name="branchname" id="branchname" placeholder="branchname" value=""><br><br>
        <label>Branch Manager:</label>
        <input type="text" name="branchmanager" id="branchmanager" placeholder="branchmanager" value="">
        <label>Opertions Manager:</label>
        <input type="text" name="opsmanager" id="opsmanager" placeholder="opsmanager"  value="">
        <label>Date:</label>
        <input type="date" name="TransactionDate" id="TransactionDate" placeholder="date"  value="">                  
        <h3>1) Bakery Hygiene</h3>
        <label for="role" id="label-role">
            <h4>* Floor cleanliness</h4>
        <div class="div-table">
            <div class="div-table-row">
               <div class="div-table-col"><u>Description</u></div>
               <div  class="div-table-col"><u>Condition</u></div>
               <div  class="div-table-col"><u>Remarks</u></div>
            </div>
            <div class="div-table-row">
               <div class="div-table-col">Litter sweeping</div>
               <div class="div-table-col">
                    <input type="text" name="sweepcondition" id="sweepcondition" value="">
                </div>
               <div class="div-table-col">
                    <input type="text" name="sweepremark" id="sweepremark" value="">
                </div>
            </div>            
            <div class="div-table-row">
               <div class="div-table-col">Washing</div>
               <div class="div-table-col">
                    <input name="washcondition" id="washcondition" value="">   
                </div>
                <div class="div-table-col">
                   <input name="washremark" id="washremark" value="">
                </div>
            </div>
            <div class="div-table-row">
               <div  class="div-table-col">Dividing table cleanliness</div>
               <div class="div-table-col">
                <input name="tablecondition" id="tablecondition">
               </div>
               <div class="div-table-col">   
                     <!-- multi-line text input control -->
                    <input name="tableremark" id="tableremark"  >
                </div>
           </div>
          </div>
            <label for="role" id="label-role">
                <h4>* Toilet cleanliness</h4>
            <div class="div-table">
                <div class="div-table-row">
                    <div class="div-table-col"><u>Description</u></div>
                    <div  class="div-table-col"><u>Condition</u></div>
                    <div  class="div-table-col"><u>Remarks</u></div>
                </div>
               <div class="div-table-row">
                    <div class="div-table-col">Foul Smell</div>
                    <div class="div-table-col">
                        <input name="smellcondition" id="smellcondition">

                    </div>
                   <div class="div-table-col">
                        <input name="smellremark" id="smellremark" >
                   </div>
               </div>
               <div class="div-table-row">
                   <div class="div-table-col">Mopping of Floor</div>
                    <div class="div-table-col">
                        <input name="floorcondition" id="floorcondition">

                    </div>
                    <div class="div-table-col">
                       <!-- multi-line text input control -->
                       <input name="floorremark" id="floorremark" >
                    </div>
                </div>
               <div class="div-table-row">
                   <div class="div-table-col">Disposal of Garbage</div>
                   <div class="div-table-col">
                    <input name="garbagecondition" id="garbagecondition">

                   </div>
                   <div class="div-table-col">   
                         <!-- multi-line text input control -->
                        <input name="garbageremark" id="garbageremark" >
                   </div>
               </div>
            </div>
                <label for="role" id="label-role">
                <h4>* Flies Inside Bakery</h4>
                <div class="div-table">
                    <div class="div-table-row">
                        <div class="div-table-col"><u>Description</u></div>
                        <div  class="div-table-col"><u>Condition</u></div>
                        <div  class="div-table-col"><u>Remarks</u></div>
                    </div>
                   <div class="div-table-row">
                         <div class="div-table-col">Fly Catchers</div>
                       <div class="div-table-col">
                            <input name="catchercondition" id="catchercondition">
                        </div>
                       <div class="div-table-col">
                           <!-- multi-line text input control -->
                            <input name="catcherremark" id="catcherremark" >
                       </div>
                   </div>
                   <div class="div-table-row">
                       <div class="div-table-col">Incidence of Flies</div>
                       <div class="div-table-col">
                            <input name="fliescondition" id="fliescondition">
                              
                        </div>
                        <div class="div-table-col">
                           <!-- multi-line text input control -->
                           <input name="fliesremark" id="fliesremark" >
                        </div>
                    </div>
                    <div class="div-table-row">
                       <div class="div-table-col">Cockroaches</div>
                       <div class="div-table-col">
                            <input name="roachescondition" id="roachescondition">
                             
                       </div>
                       <div class="div-table-col">   
                             <!-- multi-line text input control -->
                            <input name="roachesremark" id="roachesremark" >
                       </div>
                   </div>
                   <div class="div-table-row">
                        <div class="div-table-col">Rats Bating</div>
                        <div class="div-table-col">
                             <input name="ratscondition" id="ratscondition">
                                
                        </div>
                        <div class="div-table-col">   
                              <!-- multi-line text input control -->
                            <input name="ratsremark" id="ratsremark" >
                        </div>
                    </div>
                    <div class="div-table-row">
                       <div class="div-table-col">Cleaning crates</div>
                       <div class="div-table-col">
                            <input name="cratescondition" id="cratescondition">
              
                       </div>
                       <div class="div-table-col">   
                             <!-- multi-line text input control -->
                            <input name="cratesremark" id="cratesremark" >
                       </div>
                   </div>
                </div>  
                <label for="role" id="label-role">
                    <h4>II )Uniforms Worn by staff</h4>
                    <div class="div-table">
                        <div class="div-table-row">
                            <div class="div-table-col"><u>Description</u></div>
                            <div  class="div-table-col"><u>Condition</u></div>
                            <div  class="div-table-col"><u>Remarks</u></div>
                        </div>
                       <div class="div-table-row">
                            <div class="div-table-col">Uniforms available to all production persons </div>
                            <div class="div-table-col">
                                <input name="uniformcondition" id="uniformcondition">
                                    
                            </div>
                           <div class="div-table-col">
                               <!-- multi-line text input control -->
                                <input name="uniformremark" id="uniformremark" >
                           </div>
                       </div>
                       <div class="div-table-row">
                           <div class="div-table-col">Supervisor Overcoat Clean State</div>
                           <div class="div-table-col">
                                <input name="scoatcondition" id="scoatcondition">
                                    
                            </div>
                            <div><div class="div-table-row"></div>
                               <!-- multi-line text input control -->
                               <input name="scoatremark" id="scoatremark" >
                            </div>
                        </div>
                       <div class="div-table-row">
                           <div class="div-table-col">Oven Man Uniform Maintained Clean</div>
                           <div class="div-table-col">
                                <input name="ovenmancondition" id="ovenmancondition">
                                   
                           </div>
                           <div class="div-table-col">   
                                 <!-- multi-line text input control -->
                                <input name="ovenmanremark" id="ovenmanremark" >
                           </div>
                        </div>
                       <div class="div-table-row">
                            <div class="div-table-col">Slicer Uniform Maintained Clean</div>
                            <div class="div-table-col">
                                <input name="suniformcondition" id="suniformcondition">
                                   
                            </div>
                            <div class="div-table-col">   
                                  <!-- multi-line text input control -->
                                <input name="suniformremark" id="suniformremark" >
                            </div>
                        </div>  
                    </div>
         
    </b></form>

<!-- Create Form -->
    <form id="form" action="section_2.php" method="post"><b>
        <img src="supaloaf.png" style="width:80px;height:80px;">
        <h1>MINI BAKERIES (N) LTD</h1>
        <h2>BAKERY VISIT CHECKLIST</h2>
        
        <label for="role" id="label-role">
            <h4>* Machine structural conditions and hygiene</h4>
    
        <div class="div-table">
            <div class="div-table-row">
               <div class="div-table-col2">Machines</div>
               <div  class="div-table-col2">Mechanical/Electrical</div>
               <div  class="div-table-col2">Hygiene/Layout</div>
               <div  class="div-table-col2">Remarks</div>
            </div>
           <div class="div-table-row">
                 <div class="div-table-col2">Mixer 1</div>
               <div class="div-table-col2">
                    <input name="m1mechanical" id="m1mechanical" value="">      
                </div>
                <div class="div-table-col2">
                   <input name="m1layout" id="m1layout" value="">
                         
                </div>
               <div class="div-table-col2">
                   <!-- multi-line text input control -->
                    <input name="mixer1" id="m1remark" value="" ></textarea>
               </div>
            </div>
             <div class="div-table-row">
                 <div class="div-table-col2">Mixer 2</div>
               <div class="div-table-col2">
                    <input name="m2mechanical" id="m2mechanical" value="">
                        
                </div>
                <div class="div-table-col2">
                   <input name="m2layout" id="m2layout" value="">
                        
                </div>
               <div class="div-table-col2">
                   <!-- multi-line text input control -->
                    <input name="mixer2" id="m2remark" value="" ></textarea>
               </div>
            </div>
             <div class="div-table-row">
                 <div class="div-table-col2">Dough Refiner</div>
               <div class="div-table-col2">
                    <input name="dmechannical" id="dmechanical" value="">
                       
                </div>
                <div class="div-table-col2">
                   <input name="refiner" id="dlayout" value="">
                        
                </div>
               <div class="div-table-col2">
                   <!-- multi-line text input control -->
                    <input name="doughrefiner" value="" id="dremark" ></textarea>
               </div>
            </div>
             <div class="div-table-row">
                 <div class="div-table-col2">Proover 1</div>
               <div class="div-table-col2">
                    <input name="p1mechanical" id="p1mechanical" value="">
                        
                </div>
                <div class="div-table-col2">
                   <input name="p1layout" id="p1layout" value="">
                         
                </div>
               <div class="div-table-col2">
                   <!-- multi-line text input control -->
                    <input name="proover1" id="p1remark" value="" ></textarea>
               </div>
            </div>
            <div class="div-table-row">
                 <div class="div-table-col2">Proover 2</div>
               <div class="div-table-col2">
                    <input name="p2mechanical" id="p2mechanical" value="">
                        
                </div>
                <div class="div-table-col2">
                   <input name="p2layout" id="p2layout" value="">
                         
                </div>
               <div class="div-table-col2">
                   <!-- multi-line text input control -->
                    <input name="proover2" id="p2remark" value="" ></textarea>
               </div>
            </div>
             <div class="div-table-row">
                 <div class="div-table-col2">Proover 3</div>
               <div class="div-table-col2">
                    <input name="p3mechanical" id="p3mechanical" value="">
                        
                </div>
                <div class="div-table-col2">
                   <input name="p3layout" id="p3layout" value="">
                         
                </div>
               <div class="div-table-col2">
                   <!-- multi-line text input control -->
                    <input name="proover3" id="p3remark" value="" ></textarea>
               </div>
            </div>
             <div class="div-table-row">
                 <div class="div-table-col2">Oven 1</div>
               <div class="div-table-col2">
                    <input name="o1mechanical" id="o1mechanical" value="">
                        
                </div>
                <div class="div-table-col2">
                   <input name="o1layout" id="o1layout" value="">
                         
                </div>
               <div class="div-table-col2">
                   <!-- multi-line text input control -->
                    <input name="oven1" id="o1remark" value="" ></textarea>
               </div>
            </div>
             <div class="div-table-row">
                 <div class="div-table-col2">Oven 2</div>
               <div class="div-table-col2">
                    <input name="o2mechanical" id="o2mechanical" value="">
                        
                </div>
                <div class="div-table-col2">
                   <input name="o2layout" id="o2layout" value="">
                         
                </div>
               <div class="div-table-col2">
                   <!-- multi-line text input control -->
                    <input name="oven2" id="o2remark" value="" ></textarea>
               </div>
            </div>
             <div class="div-table-row">
                 <div class="div-table-col2">Oven 3</div>
               <div class="div-table-col2">
                    <input name="o3mechanical" id="o3mechanical" value="">
                        
                </div>
                <div class="div-table-col2">
                   <input name="o3layout" id="o3layout" value="">
                         
                </div>
               <div class="div-table-col2">
                   <!-- multi-line text input control -->
                    <input name="oven3" id="o3remark" value="" ></textarea>
               </div>
            </div>
             <div class="div-table-row">
                 <div class="div-table-col2">Slicer</div>
               <div class="div-table-col2">
                    <input name="slicermechanical" id="slicermechanical" value="">
                        
                </div>
                <div class="div-table-col2">
                   <input name="slicerlayout" id="slicerlayout" value="">
                         
                </div>
               <div class="div-table-col2">
                   <!-- multi-line text input control -->
                    <input name="slicerremark" id="slicerremark" value="" ></textarea>
               </div>
            </div>
            <div class="div-table-row">
                 <div class="div-table-col2">Generator</div>
               <div class="div-table-col2">
                    <input name="gmechanical" id="gmechanical" value="">
                        
                </div>
                <div class="div-table-col2">
                   <input name="glayout" id="glayout" value="">
                         
                </div>
               <div class="div-table-col2">
                   <!-- multi-line text input control -->
                    <input name="gremark"  value="" id="gremark" ></textarea>
               </div>
            </div>
            <div class="div-table-row">
                 <div class="div-table-col2">Electronic Dough Scaler</div>
               <div class="div-table-col2">
                    <input name="edsmechanical" id="edsmechanical" value="">
                        
                </div>
                <div class="div-table-col2">
                   <input name="edslayout" id="edslayout" value="">
                         
                </div>
               <div class="div-table-col2">
                   <!-- multi-line text input control -->
                    <input name="edsremark" value="" id="edsremark" ></textarea>
               </div>
            </div>
             <div class="div-table-row">
                 <div class="div-table-col2">Slicing Scale</div>
               <div class="div-table-col2">
                    <input name="scalemechanical" id="scalemechanical" value="">
                        
                </div>
                <div class="div-table-col2">
                   <input name="scalelayout" id="scalelayout" value="">
                         
                </div>
               <div class="div-table-col2">
                   <!-- multi-line text input control -->
                    <input name="scaleremark" value="" id="scaleremark" ></textarea>
               </div>
            </div>
        </div>
        <h4>Maintenance of Electronic Scales</h4>
            <div class="div-table">
                <div class="div-table-row">
                   
                </div>
                <div class="div-table-row">
                   <div class="div-table-col">How often</div>
                   <div  class="div-table-col">State</div>
                   <div  class="div-table-col">Remarks</div>
                </div>
               <div class="div-table-row">
                    <div class="div-table-col">
                        <input name="often" id="maintenanceoften" value="">
                            
                    </div>
                    <div class="div-table-col">
                        <input name="state" id="maintenancestate" value="">
                            
                    </div>
                   <div class="div-table-col">
                       <!-- multi-line text input control -->
                        <input name="comment" id="maintenanceremark" value="" ></textarea>
                   </div>
               </div>
    
            </div>
                <label for="role" id="label-role">
                <h4>* IV) Bakeware Structural Condition and Hygiene</h4>
                <div class="div-table">
                     <div class="div-table-row">
                 <div class="div-table-col2">Baking Tins</div>
               <div class="div-table-col2">
                    <input name="baking" id="tinsmechanical" value="">
                        
                </div>
                <div class="div-table-col2">
                   <input name="tins" id="tinslayout" value="">
                         
                </div>
               <div class="div-table-col2">
                   <!-- multi-line text input control -->
                    <input name="bakingtins" id="tinsremark" value="" ></textarea>
               </div>
            </div>
            <div class="div-table-row">
                 <div class="div-table-col2">Cooling Wires</div>
               <div class="div-table-col2">
                    <input name="cooling" id="wiresmechanical" value="">
                        
                </div>
                <div class="div-table-col2">
                   <input name="wires" id="wireslayout" value="">
                         
                </div>
               <div class="div-table-col2">
                   <!-- multi-line text input control -->
                    <input name="coolingwires" value="" id="wiresremark" ></textarea>
               </div>
            </div>
        </div>            
        
    </div>
    </b></form>


<!-- Create Form -->
    <form id="form" action="salesrecords.php" method="post"><b>
        <img src="supaloaf.png" style="width:80px;height:80px;">
        <h1>MINI BAKERIES (N) LTD</h1>
        <h2>BAKERY VISIT CHECKLIST</h2>
        <h3>2) Production</h3>
        <h4>  I) Record Keeping - Mixing Chart Maintenance</h4>
        <h4><center>* Neatness</center></h4>
        <div class="div-table">
            <div class="div-table-row">
               <div class="div-table-col"><b>Description</b></div>
               <div  class="div-table-col"><b>Condition</b></div>
               <div  class="div-table-col"><b>Remarks</b></div>
            </div>
          <div class="form-control">
      <label for="role" id="label-role">
        
      </label>
    </div>
           <div class="div-table-row">
                 <div class="div-table-col">* Tideness</div>
               <div class="div-table-col">
                <input name="tideness" id="tideness">
                   
                     
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <input name="comment1" id="comment1"
                >
            
               </div>
           <div class="div-table-row">
               <div class="div-table-col">* Alterations</div>
               <div class="div-table-col">
                <input name="alterations" id="alterations">
                   
</div>
<div class="div-table-col">

   <!-- multi-line text input control -->
   <input name="comment2" id="comment2">

  </div>
           <div class="div-table-row">
               <div  class="div-table-col">* Surprise Checks by manager</div>
               <div class="div-table-col">
                <input name="manager_checks" id="manager_checks">
                    
               </div>
               <div class="div-table-col">   
                     <!-- multi-line text input control -->
                <input name="comment3" id="comment3"
                >
            
               </div>

               </div>
          </div>
           <div class="div-table-row">
               <div  class="div-table-col">* Mixing Chart and Cash Flow yield</div>
               <div class="div-table-col">
                <input name="mixchart_cashflow" id="mixchart_cashflow">
                    
               </div>
               <div class="div-table-col">   
                     <!-- multi-line text input control -->
                <input name="comment4" id="comment4"
                >
            
               </div>

               </div>
               <div class="div-table-row">
               <div  class="div-table-col">* Mixing Chart / Cash Flow Production</div>
               <div class="div-table-col">
                <input name="mixchart_production" id="mixchart_production">
                    
               </div>
               <div class="div-table-col">   
                     <!-- multi-line text input control -->
                <input name="comment5" id="comment5"
                >
            
               </div>

               </div>
          </div>
        </div>
        </div>
            <label for="role" id="label-role">
               <h4>  II) Production and Process cost Control</h4>
            <div class="div-table">
                <div class="div-table-row">
                   <div class="div-table-col"><b>Description</b></div>
                   <div  class="div-table-col"><b>Condition</b></div>
                   <div  class="div-table-col"><b>Remarks</b></div>
                </div>
               <div class="div-table-row">
                     <div class="div-table-col">* Utto Consumption</div>
                   <div class="div-table-col">
                    <input name="consumption" id="consumption">
                       
    </div>
                   <div class="div-table-col">
                       <!-- multi-line text input control -->
                    <input name="comment6" id="comment6"
                    >
                
                  
                   </div>
               <div class="div-table-row">
                   <div class="div-table-col">* Sell By Date</div>
                   <div class="div-table-col">
                    <input name="sellbydate" id="sellbydate">
                        
    </div>
    <div class="div-table-col">
       <!-- multi-line text input control -->
       <input name="comment7" id="comment7"
       >
    
      </div>

      </div>
               <div class="div-table-row">
                   <div class="div-table-col">* Bread Returns</div>
                   <div class="div-table-col">
                    <input name="breadreturns" id="breadreturns">
                        
                   </div>
                   <div class="div-table-col">   
                         <!-- multi-line text input control -->
                    <input name="comment8" id="comment8"
                    >
                
                   </div>
    
                   </div>
               </div>
    <div class="div-table-row">
                   <div class="div-table-col">* Damage Polybags</div>
                   <div class="div-table-col">
                    <input name="damagepolybags" id="damagepolybags">
                       
                   </div>
                   <div class="div-table-col">   
                         <!-- multi-line text input control -->
                    <input name="comment9" id="comment9"
                    >
                
                   </div>
                   <div class="div-table-row">
                   <div class="div-table-col">* Process Flow</div>
                   <div class="div-table-col">
                    <input name="processflow" id="processflow">
                       
                   </div>
                   <div class="div-table-col">   
                         <!-- multi-line text input control -->
                    <input name="comment10" id="comment10"
                    >
                
                   </div>
                   <div class="div-table-row">
                   <div class="div-table-col">* Efficiency of Slicing</div>
                   <div class="div-table-col">
                    <input name="slicing" id="slicing">
                        
                   </div>
                   <div class="div-table-col">   
                         <!-- multi-line text input control -->
                    <input name="comment11" id="comment11"
                    >
                
                   </div>
    
                   </div>
               </div>
    
                   </div>
               </div>
    
                   </div>
               </div>
                </div>
                <div>
                <h3>3) Bread / Dough Weight</h3>
        <div class="div-table">
            <div class="div-table-row">
               <div class="div-table-col"><b>Description</b></div>
               <div  class="div-table-col"><b>Condition</b></div>
               <div  class="div-table-col"><b>Remarks</b></div>
            </div>
           <div class="div-table-row">
                 <div class="div-table-col">* Dividing Range</div>
               <div class="div-table-col">
                <input name="dividing_range" id="dividing_range">
                  
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <input name="comment12" id="comment12"
                >
            
               </div>
           <div class="div-table-row">
               <div class="div-table-col">* Bread Weight</div>
               <div class="div-table-col">
                <input name="breadweight" id="breadweight">
                     
</div>
<div class="div-table-col">

   <!-- multi-line text input control -->
   <input name="comment13" id="comment13">

  </div>
</div>
</div>
</div>
<h3>4) Yield </h3>
        <div class="div-table">
            <div class="div-table-row">
               <div class="div-table-col"><b>Description</b></div>
               <div  class="div-table-col"><b>Condition</b></div>
               <div  class="div-table-col"><b>Remarks</b></div>
            </div>
           <div class="div-table-row">
                 <div class="div-table-col">* Bread Yield</div>
               <div class="div-table-col">
                <input name="bread_yield" id="bread_yield">
                   
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <input name="comment14" id="comment14"
                >
            
               </div>
           </div>
         </div>
</div>
                <label for="role" id="label-role">
                    <h3>5) Control Stock - Store arrangement</h3>
                    <div class="div-table">
                        <div class="div-table-row">
                           <div class="div-table-col"><b>Description</b></div>
                           <div  class="div-table-col"><b>Condition</b></div>
                           <div  class="div-table-col"><b>Remarks</b></div>
                        </div>
                       <div class="div-table-row">
                            <div class="div-table-col">* Sell By Tapes</div>
                            <div class="div-table-col">
                            <input name="tapes" id="tapes">    
                            </div>
                           <div class="div-table-col">
                               <!-- multi-line text input control -->
                                <input name="comment15" id="comment15">
                           </div>
                       </div>
                       <div class="div-table-row">
                           <div class="div-table-col">* Ingredients</div>
                           <div class="div-table-col">
                            <input name="ingredients" id="ingredients">                  
                            </div>
                            <div class="div-table-col">
                               <!-- multi-line text input control -->
                               <input name="comment16" id="comment16"
                               >
                              </div>
                              </div>
                       <div class="div-table-row">
                           <div class="div-table-col">*  Gunny Bags</div>
                           <div class="div-table-col">
                            <input name="gunnybags" id="gunnybags">
                                
                                 
                           </div>
                           <div class="div-table-col">   
                                 <!-- multi-line text input control -->
                            <input name="comment17" id="comment17"
                            >
                        
                           </div>
            
                           </div>
                           <div class="div-table-row">
                            <div class="div-table-col">* Flour</div>
                            <div class="div-table-col">
                             <input name="flour" id="flour">
                               
                                  
                            </div>
                            <div class="div-table-col">   
                                  <!-- multi-line text input control -->
                             <input name="comment18" id="comment18"
                             >
                         
                            </div>
                        </div>
                  
                           
                           <div class="div-table-row">
                            <div class="div-table-col">* Polybags</div>
                            <div class="div-table-col">
                             <input name="polybags" id="polybags">
                               
                                  
                            </div>
                            <div class="div-table-col">   
                                  <!-- multi-line text input control -->
                             <input name="comment19" id="comment19"
                             >
                         
                            </div>
                           <div class="div-table-row">
                            <div class="div-table-col">*Damaged Polybags</div>
                            <div class="div-table-col">
                             <input name="damagedpolybags" id="damagedpolybags">
                               
                                  
                            </div>
                            <div class="div-table-col">   
                                  <!-- multi-line text input control -->
                             <input name="comment20" id="comment20"
                             >
                         
                            </div>
                        </div>
                       </div>  
                     </div>
                 </div>
                        <label for="role" id="label-role">
                    <h3>6) Bread Quality</h3>
                    <div class="div-table">
                        <div class="div-table-row">
                           <div class="div-table-col"><b>Description</b></div>
                           <div  class="div-table-col"><b>Condition</b></div>
                           <div  class="div-table-col"><b>Remarks</b></div>
                        </div>
                       <div class="div-table-row">
                             <div class="div-table-col">* Market Returns</div>
                           <div class="div-table-col">
                            <input name="mkt_returns" id="mkt_returns">
                               
                            </div>
                           <div class="div-table-col">
                               <!-- multi-line text input control -->
                            <input name="comment21" id="comment21"
                            >
                        
                           </div>
                       <div class="div-table-row">
                           <div class="div-table-col">* Sell by Date Returns</div>
                           <div class="div-table-col">
                            <input name="sell_by_date_returns" id="sell_by_date_returns">
                               
            </div>
            <div><div class="div-table-col"></div>
               <!-- multi-line text input control -->
               <input name="comment22" id="comment22"
               >
            
              </div>
              </div>
                       <div class="div-table-row">
                           <div class="div-table-col">*Return Classified goods and damages</div>
                           <div class="div-table-col">
                            <input name="return_goods" id="return_goods">
                               
                           </div>
                           <div class="div-table-col">   
                                 <!-- multi-line text input control -->
                            <input name="comment23" id="comment23"
                            >
                        
                           </div>
            
                           </div>
                           <div class="div-table-row">
                            <div class="div-table-col">*Bread Color Generally</div>
                            <div class="div-table-col">
                             <input name="bread_color" id="bread_color">
                               
                            </div>
                            <div class="div-table-col">   
                                  <!-- multi-line text input control -->
                             <input name="comment24" id="comment24"
                             >
                         
                            </div>
                        </div>
                  
                           </div>
                           <div class="div-table-row">
                            <div class="div-table-col">*Shape and size</div>
                            <div class="div-table-col">
                             <input name="shape_size" id="shape_size">
                                
                            </div>
                            <div class="div-table-col">   
                                  <!-- multi-line text input control -->
                             <input name="comment25" id="comment25"
                             >
                         
                            </div>
                           <div class="div-table-row">
                            <div class="div-table-col">*Internal Texture</div>
                            <div class="div-table-col">
                             <input name="internal_texture" id="internal_texture">
                                
                            </div>
                            <div class="div-table-col">   
                                  <!-- multi-line text input control -->
                             <input name="comment26" id="comment26"
                             >
                         
                            </div>
                        </div>
                       </div>  
                    </div>
                    <h3>7)Finished Product</h3>
                    <h4>* Balance Maintenance</h4>
        <div class="div-table">
            <div class="div-table-row">
               <div class="div-table-col"><b>Description</b></div>
               <div  class="div-table-col"><b>Condition</b></div>
               <div  class="div-table-col"><b>Remarks</b></div>
            </div>
          
           <div class="div-table-row">
               <div  class="div-table-col">*Variety by variety physical balance</div>
               <div class="div-table-col">
                <input name="variety_by_varietyphysicalbalance" id="variety_by_varietyphysicalbalance">
                    
               </div>
               <div class="div-table-col">   
                     <!-- multi-line text input control -->
                <input name="comment27" id="comment27"
                >
            
               </div>
          </div>
           <div class="div-table-row">
               <div  class="div-table-col">* Stock Levels</div>
               <div class="div-table-col">
                <input name="stocklevels" id="stocklevels">
                    
               </div>
               <div class="div-table-col">   
                     <!-- multi-line text input control -->
                <input name="comment28" id="comment28"
                >
            
               </div>

               </div>
               <div class="div-table-row">
               <div  class="div-table-col">* Rotation of Stocks</div>
               <div class="div-table-col">
                <input name="rotationofstocks" id="rotationofstocks">
                   
               </div>
               <div class="div-table-col">   
                     <!-- multi-line text input control -->
                <input name="comment29" id="comment29"
                >
            
               </div>

               </div>
               <div class="div-table-row">
               <div  class="div-table-col">* Multiple sell by dates Packing</div>
               <div class="div-table-col">
                <input name="multiple_sell" id="multiple_sell">
                   
               </div>
               <div class="div-table-col">   
                     <!-- multi-line text input control -->
                <input name="comment30" id="comment30"
                >
            
               </div>

               </div>
          </div>
        </div>
        </div>
        
      </form>
                </div>
        <center>
    </center>
    </div>
    </b></form>


<!-- Create Form -->
    <form id="form" action="adminstaffing.php" method="post"><b>
        <img src="supaloaf.png" style="width:80px;height:80px;">
        <h1>MINI BAKERIES (N) LTD</h1>
        <h2>BAKERY VISIT CHECKLIST</h2>
        <h3>8) Sales Records</h3>
       
        <label for="role" id="label-role">
            <h4>* Loading Books</h4>
    
        <div class="div-table">
            <div class="div-table-row">
               <div class="div-table-col">Description</div>
               <div  class="div-table-col">Condition</div>
               <div  class="div-table-col">Remarks</div>
            </div>
           <div class="div-table-row">
                 <div class="div-table-col">Manager"s Loading Book</div>
               <div class="div-table-col">
                <input name="MngerLding_cond" id="MngerLding_cond" >
                    
                     
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <input name="MngerLding_remrk" id="MngerLding_remrk"
                >
            
               </div>
           <div class="div-table-row">
               <div class="div-table-col">Supervisor"s Loading Book</div>
               <div class="div-table-col">
                <input name="SupLding_cond" id="SupLding_cond">
                    
                     
</div>
<div class="div-table-col">

   <!-- multi-line text input control -->
   <input name="SupLding_remrk" id="SupLding_remrk"
   >

  </div>
           
          </div>
        </div>
        </div>
            <label for="role" id="label-role">
                <h4>* Security Books</h4>
                <h4><center>(a) Neatness - Overwriting & wite outs</center></h4>
            <div class="div-table">
                <div class="div-table-row">
                   <div class="div-table-col">Description</div>
                   <div  class="div-table-col">Condition</div>
                   <div  class="div-table-col">Remarks</div>
                </div>
               <div class="div-table-row">
                     <div class="div-table-col">Loading Book</div>
                   <div class="div-table-col">
                    <input name="Security_loading" id="Security_loading"  >
                       
                         
    </div>
                   <div class="div-table-col">
                       <!-- multi-line text input control -->
                    <input name="Securitylding_remrk" id="Securitylding_remrk"
                    >
                
                   </div>
               <div class="div-table-row">
                   <div class="div-table-col">Attendance</div>
                   <div class="div-table-col">
                    <input name="Security_attendance" id="Security_attendance">
                       
                         
    </div>
    <div class="div-table-col">
       <!-- multi-line text input control -->
       <input name="Securityatt_remrk" id="Securityatt_remrk"
       >
    
      </div>
      </div>
               <div class="div-table-row">
                   <div class="div-table-col">O.B</div>
                   <div class="div-table-col">
                    <input name="Security_OB" id="Security_OB">
                       
                   </div>
                   <div class="div-table-col">   
                         <!-- multi-line text input control -->
                    <input name="SecurityOB_remrk" id="SecurityOB_remrk"
                    >
                
                   </div>
    
                   </div>
               </div>
    
                </div>
                <label for="role" id="label-role">
                <h4><center>(b) Reliability & Accuracy</center></h4>
                <div class="div-table">
                    <div class="div-table-row">
                       <div class="div-table-col">Description</div>
                       <div  class="div-table-col">Condition</div>
                       <div  class="div-table-col">Remarks</div>
                    </div>
                    <div class="div-table-row">
                     <div class="div-table-col">Loading Book</div>
                   <div class="div-table-col">
                    <input name="Reliability_loading" id="Reliability_loading">
                       
                         
    </div>

                   <div class="div-table-col">
                       <!-- multi-line text input control -->
                    <input name="Reliabiltylding_remrk" id="Reliabiltylding_remrk"
                    >
                
                   </div>
               <div class="div-table-row">
                   <div class="div-table-col">Attendance</div>
                   <div class="div-table-col">
                    <input name="Reliability_Attendance" id="Reliability_Attendance">
                       
                         
    </div>
    <div class="div-table-col">
       <!-- multi-line text input control -->
       <input name="Reliabiltyatt_remrk" id="Reliabiltyatt_remrk"
       >
    
      </div>
      </div>
    <div class="div-table-row">
        <div class="div-table-col">O.B</div>
            <div class="div-table-col">
                <input name="Reliability_OB" id="Reliability_OB">
                    
            </div>
        <div class="div-table-col">   
                         <!-- multi-line text input control -->
            <input name="Reliabiltyob_remrk" id="Reliabiltyob_remrk"
                >
            
        </div>
         
            </div>
         
                </div>
        </div>
    </div>
                        
                <label for="role" id="label-role">
                    <h4>III )Mini Shop Loading Book</h4>
                    <div class="div-table">
                        <div class="div-table-row">
                           <div class="div-table-col">Description</div>
                           <div  class="div-table-col">Condition</div>
                           <div  class="div-table-col">Remarks</div>
                        </div>
                       <div class="div-table-row">
                             <div class="div-table-col">Neatness - Overwriting & wite outs </div>
                           <div class="div-table-col">
                            <input name="Minishpneatness_cond" id="Minishpneatness_cond">
                               
                                 
                            </div>
                           <div class="div-table-col">
                               <!-- multi-line text input control -->
                            <input name="Minishpneatness_remrk" id="Minishpneatness_remrk"
                            >
                        
                           </div>
                        </div>
                    </div>
                   
    </b></form>


<!-- Create Form -->
    <form id="form" action="trial2.php" method="post"><b>
        <img src="supaloaf.png" style="width:80px;height:80px;">
        <h1>MINI BAKERIES (N) LTD</h1>
        <h2>BAKERY VISIT CHECKLIST</h2>
       
        <h3>9) Administration and Staffing</h3>
        <label for="role" id="label-role">
            <h4>* Protection, Safety & Security</h4>
    
        <div class="div-table">
            <div class="div-table-row">
               <div class="div-table-col">Description</div>
               <div  class="div-table-col">Condition</div>
               <div  class="div-table-col">Remarks</div>
            </div>
           <div class="div-table-row">
                <div class="div-table-col">Oven Gloves</div>
                <div class="div-table-col">
                    <input name="OG_Cond" id="OG_Cond" >
                </div>  
                     
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                    <input name="OG_Remrk" id="OG_Remrk" >
               </div>
               <div class="div-table-col">Uniforms</div>
               <div class="div-table-col">
                    <input name="Uniform_Cond" id="Uniform_Cond" >                   
                </div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <input name="Uniform_Remrk" id="Uniform_Remrk"
                >
            
               </div> 
                 <div class="div-table-col">Shoes</div>
               <div class="div-table-col">
                <input name="Shoes_Cond" id="Shoes_Cond" >
                    
                     
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <input name="Shoes_Remrk" id="Shoes_Remrk"
                >
            
               </div> 
               <div class="div-table-col">Gum Boots</div>
               <div class="div-table-col">
                <input name="GB_Cond" id="GB_Cond" >
                    
                     
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <input name="GB_Remrk" id="GB_Remrk"
                >
            
               </div>
               <div class="div-table-col">Cleaning Gloves</div>
               <div class="div-table-col">
                <input name="CG_Cond" id="CG_Cond" >
                    
                     
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <input name="CG_Remrk" id="CG_Remrk"
                >
            
               </div>
               <div class="div-table-col">Dust Mask / Facemask</div>
               <div class="div-table-col">
                <input name="DM_Cond" id="DM_Cond" >
                    
                     
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <input name="DM_Remrk" id="DM_Remrk"
                >
            
               </div> 
               
               <div class="div-table-col">Emergency key</div>
               <div class="div-table-col">
                <input name="EK_Cond" id="EK_Cond" >
                    
                     
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <input name="EK_Remrk" id="EK_Remrk"
                >
            
               </div> 
                 <div class="div-table-col">Fire Extinguishers</div>
               <div class="div-table-col">
                <input name="FE_Cond" id="FE_Cond" >
                    
                     
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <input name="FE_Renrk" id="FE_Renrk"
                >
            
               </div> 
                 <div class="div-table-col">Alarm System</div>
               <div class="div-table-col">
                <input name="AS_Cond" id="AS_Cond" >
                    
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <input name="AS_Remrk" id="AS_Remrk"
                >
            
               
               </div> 
                 <div class="div-table-col">Panic Button - Mobile</div>
               <div class="div-table-col">
                <input name="Mobile_Cond" id="Mobile_Cond" >
                    
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <input name="Mobile_Remrk" id="Mobile_Remrk"
                >
            
               </div> 

               
                 <div class="div-table-col">Panic Button - Fixed</div>
               <div class="div-table-col">
                <input name="Fixed_Cond" id="Fixed_Cond" >
                    
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <input name="Fixed_Remrk" id="Fixed_Remrk"
                >
            
               </div>
                 <div class="div-table-col">Doors and Locking</div>
               <div class="div-table-col">
                <input name="DL_Cond" id="DL_Cond" >
                    
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <input name="DL_Remrk" id="DL_Remrk"
                >
            
               </div>

              
                 <div class="div-table-col">Security Lights</div>
               <div class="div-table-col">
                <input name="SL_Cond" id="SL_Cond" >
                    
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <input name="SL_Remrk" id="SL_Remrk"
                >
            
               </div>
            </div>
        </div>
        </div>
        <label for="role" id="label-role">
                <h4><p>(ii) Records</h4>
            <div class="div-table">
                <div class="div-table-row">
                   <div class="div-table-col">Description</div>
                   <div  class="div-table-col">Condition</div>
                   <div  class="div-table-col">Remarks</div>
                </div>
               <div class="div-table-row">
                     <div class="div-table-col">Muster Rolls updating</div>
                   <div class="div-table-col">
                    <input name="MR_Cond" id="MR_Cond"  >
                        
    </div>
                   <div class="div-table-col">
                       <!-- multi-line text input control -->
                    <input name="MR_Remrk" id="MR_Remrk"
                    >
                
                   </div>
                   <div class="div-table-col">* Supervisor</div>
                   <div class="div-table-col">
                    <input name="SupV_Cond" id="SupV_Cond">
                        
    </div>
    <div class="div-table-col">
       <!-- multi-line text input control -->
       <input name="SupV_Remrk" id="SupV_Remrk"
       >
    
      </div>
                   <div class="div-table-col">* Bakery Manager</div>
                   <div class="div-table-col">
                    <input name="BakMng_Cond" id="BakMng_Cond">
                        
                   </div>
                   <div class="div-table-col">   
                         <!-- multi-line text input control -->
                    <input name="BakMng_Remrk" id="BakMng_Remrk"
                    >
                
                   </div>
    
                   </div>
               </div>
    
                </div>
                        
                <label for="role" id="label-role">
                <h4><p>(iii) Discipline</h4>
            <div class="div-table">
                <div class="div-table-row">
                   <div class="div-table-col">Description</div>
                   <div  class="div-table-col">Condition</div>
                   <div  class="div-table-col">Remarks</div>
                </div>
               <div class="div-table-row">
                     <div class="div-table-col">* Punctuality & General Conduct</div>
                   <div class="div-table-col">
                    <input name="Discpline_Cond" id="Discpline_Cond"  >
                        
    </div>
                   <div class="div-table-col">
                       <!-- multi-line text input control -->
                    <input name="Discpline_Remrk" id="Discpline_Remrk"
                    >
                
                   </div>
            </div> 
        </div>
     </div>
     <label for="role" id="label-role">
                <h4><p>(iv) Training</h4>
            <div class="div-table">
                <div class="div-table-row">
                   <div class="div-table-col">Description</div>
                   <div  class="div-table-col">Condition</div>
                   <div  class="div-table-col">Remarks</div>
                </div>
               <div class="div-table-row">
                     <div class="div-table-col">* Educating Subordinates</div>
                   <div class="div-table-col">
                    <input name="Training_Cond" id="Training_Cond"  >
                        
    </div>
                   <div class="div-table-col">
                       <!-- multi-line text input control -->
                    <input name="Training_Remrk" id="Training_Remrk"
                    >
                
                   </div>
            </div> 
        </div>
     </div>
                <label for="role" id="label-role">
                    <h4>v)Staff Control</h4>
                    <div class="div-table">
                        <div class="div-table-row">
                           <div class="div-table-col">Description</div>
                           <div  class="div-table-col">Condition</div>
                           <div  class="div-table-col">Remarks</div>
                        </div>
                       <div class="div-table-row">
                            <div class="div-table-col">Continous 7 days working for casuals </div>
                            <div class="div-table-col">
                                <input name="SCwrk_Cond" id="SCwrk_Cond">    
                            </div>
                           <div class="div-table-col">
                               <!-- multi-line text input control -->
                                <input name="SCwrk_Remrk" id="SCwrk_Remrk" >
                           </div>
                       </div>
                       <div class="div-table-row">
                           <div class="div-table-col">Duty Roaster </div>
                           <div class="div-table-col">
                                <input name="SCdr_Cond" id="SCdr_Cond">              
                           </div>
                           <div class="div-table-col">
                               
                            <input name="SCdr_Remrk" id="SCdr_Remrk" >
                           
                        
                           </div>
                       </div>
                       <div class="div-table-row">
                           <div class="div-table-col">Exceeding 22 working days by casuals </div>
                            <div class="div-table-col">
                                <input name="SCexced_Cond" id="SCexced_Cond">    
                            </div>
                           <div class="div-table-col">
                               <!-- multi-line text input control -->
                            <input name="SCexced_remrk" id="SCexced_remrk"
                            >
                        
                           </div>
                       </div>
                           <div class="div-table-row">
                           <div class="div-table-col">Standard list of casual employees </div>
                           <div class="div-table-col">
                                <input name="SCCasual_Cond" id="SCCasual_Cond">
                            </div>
                           <div class="div-table-col">
                               <!-- multi-line text input control -->
                            <input name="SCCasual_Remrk" id="SCCasual_Remrk"
                            >
                        
                           </div>
                
        
    
    </div>
</div>

    </b></form>

<!-- Create Form -->
    <form id="form" action = "final.php" method = "post"><b>
        <img src="supaloaf.png" style="width:80px;height:80px;">
        <h1>MINI BAKERIES (N) LTD</h1>
        <h2>BAKERY VISIT CHECKLIST</h2>
       
        <label for="role" id="label-role">
        <p><h3>10) .Maintenance of all Books</p></h3>
        
        <h4>i)General Repairs</h4>
    
        <div class="div-table">
            <div class="div-table-row">
               <div class="div-table-col">Description</div>
               <div  class="div-table-col">Condition</div>
               <div  class="div-table-col">Remarks</div>
            </div>
           <div class="div-table-row">
                 <div class="div-table-col">*Repairs</div>
               <div class="div-table-col">
                <input name="gen_repairs_cond" id="gen_repairs_cond">
                    
                     
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <input name="gen_repairs_remarks" id="gen_repairs_remarks"
                >
            
               </div>
           <div class="div-table-row">
               <div class="div-table-col">*Accidents</div>
               <div class="div-table-col">
                <input name="gen_repair_acc_condition" id="gen_repair_acc_condition">
                     
                     
</div>
<div class="div-table-col">

   <!-- multi-line text input control -->
   <input name="gen_repairs_acc_remarks" id="gen_repairs_acc_remarks"
   >

  </div>
           

               </div>
          
        </div>
        </div>
        
        
        <h4>ii) First Aid Kit</h4>
        
        <div class="div-table">
            <div class="div-table-row">
               <div class="div-table-col">Description</div>
               <div  class="div-table-col">Condition</div>
               <div  class="div-table-col">Remarks</div>
            </div>
           <div class="div-table-row">
                 <div class="div-table-col">*Essentials</div>
               <div class="div-table-col">
                <input name="firstaid_ess_cond" id="firstaid_ess_cond">
                    
</div>
               <div class="div-table-col">
                   <!-- multi-line text input control -->
                <input name="firstaid_ess_remarks" id="firstaid_ess_remarks"
                >
            
               </div>
           <div class="div-table-row">
               <div class="div-table-col">*Using  Record</div>
               <div class="div-table-col">
                <input name="firstaid_usagerec_cond" id="firstaid_usagerec_cond">
                   
                     
</div>
<div class="div-table-col">

   <!-- multi-line text input control -->
   <input name="firstaid_usagerec_remarks" id="firstaid_usagerec_remarks"
   >

  </div>
           

               </div>
          
        </div>
        </div>
            <label for="role" id="label-role">
                <h4>iii) Miscellaneous Record</h4>
            <div class="div-table">
                <div class="div-table-row">
                   <div class="div-table-col">Description</div>
                   <div  class="div-table-col">Condition</div>
                   <div  class="div-table-col">Remarks</div>
                </div>
               <div class="div-table-row">
                     <div class="div-table-col">*Generator</div>
                   <div class="div-table-col">
                    <input name="gen_cond" id="gen_cond">
                        
                         
    </div>
                   <div class="div-table-col">
                       <!-- multi-line text input control -->
                    <input name="gen_remarks" id="gen_remarks"
                    >
                
                   </div>
               <div class="div-table-row">
                   <div class="div-table-col">*Production</div>
                   <div class="div-table-col">
                    <input name="prod_cond" id="prod_cond">
                        
                         
    </div>
    <div class="div-table-col">
       <!-- multi-line text input control -->
       <input name="prod_remarks" id="prod_remarks"
       >
    
      </div>
      </div>
               <div class="div-table-row">
                   <div class="div-table-col">*Crates records</div>
                   <div class="div-table-col">
                    <input name="crate_rec_cond" id="crate_rec_cond">
                       
                         
                   </div>
                   <div class="div-table-col">   
                         <!-- multi-line text input control -->
                    <input name="crat_remark" id="crat_remark"
                    >
                
                   </div>
    
                   </div>
                    <div class="div-table-row">
                     <div class="div-table-col">*Stationary book</div>
                   <div class="div-table-col">
                    <input name="station_book_cond" id="station_book_cond">
                        
                         
    </div>
                   <div class="div-table-col">
                       <!-- multi-line text input control -->
                    <input name="station_book_remarks" id="station_book_remarks"
                    >
                
                   </div>
                   </div>

                     <div class="div-table-row">
                     <div class="div-table-col">*Protective clothig book</div>
                   <div class="div-table-col">
                    <input name="protect_cloth_book" id="protect_cloth_book">
                        
                         
    </div>
                   <div class="div-table-col">
                       <!-- multi-line text input control -->
                    <input name="protect_cloth_book_rem" id="protect_cloth_book_rem"
                    >
                
                   </div>
                   </div>
                   
                    <div class="div-table-row">
                     <div class="div-table-col">*Vehicle mileage book</div>
                   <div class="div-table-col">
                    <input name="vehicle_mil_cond" id="vehicle_mil_cond">
                        
                         
    </div>
                   <div class="div-table-col">
                       <!-- multi-line text input control -->
                    <input name="vehicle_mil_remarks" id="vehicle_mil_remarks"
                    >
                
                   </div>
                   </div>
                   
                    <div class="div-table-row">
                     <div class="div-table-col">*Weight chart file</div>
                   <div class="div-table-col">
                    <input name="weight_chart_line_cond" id="weight_chart_line_cond">
                        
                         
    </div>
                   <div class="div-table-col">
                       <!-- multi-line text input control -->
                    <input name="weight_chart_file_remarks" id="weight_chart_file_remarks"
                    >
                
                   </div>
                   </div>
                   
                    <div class="div-table-row">
                     <div class="div-table-col">*Underweight chart file</div>
                   <div class="div-table-col">
                    <input name="underweight_chart_file_cond" id="underweight_chart_file_cond">
                        
                         
    </div>
                   <div class="div-table-col">
                       <!-- multi-line text input control -->
                    <input name="underweight_chart_line_remarks" id="underweight_chart_line_remarks"
                    >
                
                   </div>
                   </div>

               </div>
                    
                </div>
               
                <h3><p>11) .Motor Vehicles</p></h3>
    
                <div class="div-table">
                    <div class="div-table-row">
                       <div class="div-table-col">Description</div>
                       <div  class="div-table-col">Condition</div>
                       <div  class="div-table-col">Remarks</div>
                    </div>
                   <div class="div-table-row">
                         <div class="div-table-col">*Driver allocated one vehicle constant</div>
                       <div class="div-table-col">
                        <input name="driver_allocation_cond" id="driver_allocation_cond">
                            
        </div>
                       <div class="div-table-col">
                           <!-- multi-line text input control -->
                        <input name="driver_allocation_remarks" id="driver_allocation_remarks"
                        >
                    
                       </div>
                   </div>
                   <div class="div-table-row">
                       <div class="div-table-col">* Millege per litre of fuel vehicle</div>
                       <div class="div-table-col">
                        <input name="mil_per_litre_veh_cond" id="mil_per_litre_veh_cond">
                            
        </div>
        <div class="div-table-col">
           <!-- multi-line text input control -->
           <input name="mil_per_litre_veh_remar" id="mil_per_litre_veh_remar"
           >
        
          </div>
          </div>
                   <div class="div-table-row">
                       <div class="div-table-col">*Motor vehicles cleanliness</div>
                       <div class="div-table-col">
                        <input name="motor_veh_clean_cond" id="motor_veh_clean_cond">
                            
                       </div>
                       <div class="div-table-col">   
                             <!-- multi-line text input control -->
                        <input name="motor_veh_clean_remarks" id="motor_veh_clean_remarks"
                        >
                    
                       </div>
        
                       </div>                
                        </div>
                </div>
                </div>
                        
                <label for="role" id="label-role">
                   <b><h3><p> 12 )Customer Service and Communication</p></h3></b>
                    <div class="div-table">
                        <div class="div-table-row">
                           <div class="div-table-col">Description</div>
                           <div  class="div-table-col">Condition</div>
                           <div  class="div-table-col">Remarks</div>
                        </div>
                       <div class="div-table-row">
                             <div class="div-table-col">*Customer Complain </div>
                           <div class="div-table-col">
                            <input name="cus_comp_cond" id="cus_comp_cond">
                               
            </div>
                           <div class="div-table-col">
                               <!-- multi-line text input control -->
                            <input name="cus_comp_remarks" id="cus_comp_remarks"
                            >
                        
                           </div>
                       <div class="div-table-row">
                           <div class="div-table-col">*Implementation of assignments</div>
                           <div class="div-table-col">
                            <input name="imp_ass_cond" id="imp_ass_cond">
                                
            </div>
            <div><div class="div-table-col"></div>
               <!-- multi-line text input control -->
               <input name="imp_ass_remarks" id="imp_ass_remarks"
               >
            
              </div>
              </div>
                       <div class="div-table-row">
                           <div class="div-table-col">*Communication</div>
                           <div class="div-table-col">
                            <input name="comm_cond" id="comm_cond">
                                
                           </div>
                           <div class="div-table-col">   
                                 <!-- multi-line text input control -->
                            <input name="comm_remarks" id="comm_remarks"
                            >
                        
                           </div>
            
                           </div>
                           
                  
                       </div>  
                    </div>
                    
            <label for="role" id="label-role">
                   <b><h3><p> Accounts</p></h3></b>
                    <div class="div-table">
                        <div class="div-table-row">
                           <div class="div-table-col">Description</div>
                           <div  class="div-table-col">Condition</div>
                           <div  class="div-table-col">Remarks</div>
                        </div>
                       <div class="div-table-row">
                             <div class="div-table-col">13) .Monitor loading trend so as to plan production accordingly</div>
                           <div class="div-table-col">
                            <input name="mon_load_trend_cond" id="mon_load_trend_cond">
                               
            </div>
                           <div class="div-table-col">
                               <!-- multi-line text input control -->
                            <input name="mon_load_trend_remarks" id="mon_load_trend_remarks"
                            >
                        
                           </div>
                           </div>
                           
                       <div class="div-table-row">
                           <div class="div-table-col">14) .Verification of cashflow</div>
                           <div class="div-table-col">
                            <input name="ver_cashflow_cond" id="ver_cashflow_cond">
                               
            </div>
            <div><div class="div-table-col"></div>
               <!-- multi-line text input control -->
               <input name="ver_cashflow_remarks" id="ver_cashflow_remarks"
               >
            
              </div>
              </div>
                       <div class="div-table-row">
                           <div class="div-table-col">15) .Verification of bakery stock as per cashflow balances</div>
                           <div class="div-table-col">
                            <input name="ver_bak_stock_cond" id="ver_bak_stock_cond">
                               
                           </div>
                           <div class="div-table-col">   
                                 <!-- multi-line text input control -->
                            <input name="ver_bak_stock_remarks" id="ver_bak_stock_remarks"
                            >
                        
                           </div>
            
                           </div>
                           <div class="div-table-row">
                            <div class="div-table-col">16) .Cash verification for cashiers as per cashflow balances</div>
                            <div class="div-table-col">
                             <input name="cash_ver_cashier_cond" id="cash_ver_cashier_cond">
                                
                            </div>
                            <div class="div-table-col">   
                                  <!-- multi-line text input control -->
                             <input name="cash_ver_cashier_remarks" id="cash_ver_cashier_remarks"
                             >
                         
                            </div>
             
    
                        </div>
                        <div class="div-table-row">
                            <div class="div-table-col">17) .Insuring control of debtors and credit limits</div>
                            <div class="div-table-col">
                             <input name="insuring_cont_debt_cred_cond" id="insuring_cont_debt_cred_cond">
                                
                            </div>
                            <div class="div-table-col">   
                                  <!-- multi-line text input control -->
                             <input name="insuring_cont_debt_cred_remarks" id="insuring_cont_debt_cred_remarks"
                             >
                         
                            </div>
             
    
                        </div>
                  
                       </div> 

                        
                       
                    </div>
        
    </div>
    </b></form>    
</body>
</html>
ENDHTML;
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'potrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("hello.pdf");
?>