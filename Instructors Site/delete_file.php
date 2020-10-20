<?php


    if(isset($_GET["pdfid"]))
    {
        
        $idofpdf=$_GET['pdfid'];
        //echo $idofpdf;
        
        
        
        
        
		 if ($dbc = @mysqli_connect('localhost','root', ''))
						{
							if (@mysqli_select_db($dbc,'helperexam'))
							{
                                
                                
                                $sql="SELECT * FROM pdf_matier_name1 WHERE pdf_id='$idofpdf' ";
                                $r=mysqli_query($dbc,$sql);
                                if($r)
                                {
                                     while($row=mysqli_fetch_array($r,MYSQLI_ASSOC))
                                     {
                                         
                                         $crsname=$row['matier_name'];
                                         $lang=$row['matier_lang'];
                                         $type=$row['matier_option'];
                                         $pdfname=$row['pdf_name'];
                                         
                                     }
                                }
                                
                                
                                
									$query="DELETE FROM pdf_matier_name1 WHERE  pdf_id='$idofpdf' ";
									
									if($r=mysqli_query($dbc,$query)){
										 echo("delete seccussefly!");
										 
                                        
                                        //$path="C:/xampp/htdocs/helper_exam/$fac/$sec/$major/$coursename/$language/$type/$pdfname.pdf";
		 
                                        $path="C:/xampp/htdocs/module_ulfs5/data/$crsname/$lang/$type/$pdfname.pdf";
                                        
											unlink($path);//this function delete a file 
											sleep(2);
											 header("location: firstactivity.php");
											 //echo $path;
		 
									 }
									 else{echo("not row");}
							}
						}
        
        
        
    }


?>