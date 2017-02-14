
<?php
require_once("dompdf_config.inc.php");
include('../DBConnect.php');
session_start();
$year=$_SESSION['pbasYear'];
$user = $_SESSION['username'];

//Select query for general information
$sqlgen="SELECT * from gen_info where user_id='$user'";
                $genresult=mysqli_query($con,$sqlgen) or die('Error'.mysqli_error($con));
                $genrow=mysqli_fetch_array($genresult);
                $name=$genrow['Gen_Info_Name'];
                $fname=$genrow['Gen_Info_Fname'];
                $mname=$genrow['Gen_Info_Mname'];
               $dept=$genrow['Gen_Info_Department'];
                $cd=$genrow['Gen_Info_CD'];
                $gp=$genrow['Gen_Info_GP'];
                $dlp=$genrow['Gen_Info_DLP'];
                $afc=$genrow['Gen_Info_AFC'];
                $pa=$genrow['Gen_Info_PA'];
                $tno=$genrow['Gen_Info_TNO'];
                $email=$genrow['Gen_Info_Email'];

//Select query for academic activity
$sqlacad="SELECT * FROM acad_act where user_id='$user' and year='$year'";
                $acadresult = mysqli_query($con,$sqlacad) or die('Error'.mysqli_error($con));
                $acresult = mysqli_query($con,$sqlacad) or die('Error'.mysqli_error($con));
                $acrw=mysqli_fetch_array($acresult);
                
                if($acrw>0)
                {

                    $acno="Yes";

                }
                else
                {
                	$acno="No";
                }	

//Select query for Lectures, Seminar,Tutorial, Practical, Contact Hours
$sqllstp="SELECT * from teach_lstp where user_id='$user' and year='$year'";
				$lstpresult=mysqli_query($con , $sqllstp) or die('Error'.mysqli_error($con));
				$lstpapi=mysqli_fetch_array($lstpresult);
				
//Select query for Reading/Instructional material consulted and additional knowledge resources provided to students

$sqlrimc="SELECT * from teach_rimc where user_id='$user' and year='$year'";
                $rimcresult=mysqli_query($con , $sqlrimc) or die('Error'.mysqli_error($con));


//Select query for Use of Participatory and innovative Teaching-Learning Methodologies, Updating of subject contents

$sqltlm="SELECT * from teach_tlm where user_id='$user' and year='$year'";
                $tlmresult=mysqli_query($con , $sqltlm) or die('Error'.mysqli_error($con));

//Select query for  Examination Duties Assigned and Performed 

$sqledap="SELECT * from teach_edap where user_id='$user' and year='$year'";
                $edapresult=mysqli_query($con , $sqledap) or die('Error'.mysqli_error($con));
                

 //Select query for (i) Extension, Co-curricular & Field based activities.

$sqlecfa="SELECT * from teach_ecfa where user_id='$user' and year='$year'";
                $ecfaresult=mysqli_query($con , $sqlecfa) or die('Error'.mysqli_error($con));


//Select query for Contribution to Corporate Life and Management of the Institution.

$sqlclmi="SELECT * from teach_clmi where user_id='$user' and year='$year'";
                $clmiresult=mysqli_query($con , $sqlclmi) or die('Error'.mysqli_error($con));


//Select query for Professional Development Activities.

$sqlpda="SELECT * from teach_pda where user_id='$user' and year='$year'";
                $pdaresult=mysqli_query($con , $sqlpda) or die('Error'.mysqli_error($con));


//Select query for Published Papers in Journals.

$sqlppij="SELECT * from teach_ppij where user_id='$user' and year='$year'";
                $ppijresult=mysqli_query($con , $sqlppij) or die('Error'.mysqli_error($con));


//Select query for Articles/ Chapters published in Books.                 

$sqlapb="SELECT * from teach_apb where user_id='$user' and year='$year'";
                $apbresult=mysqli_query($con , $sqlapb) or die('Error'.mysqli_error($con));


//Select query for Full papers in Conference Proceedings. 

$sqlfcp="SELECT * from teach_fcp where user_id='$user' and year='$year'";
                $fcpresult=mysqli_query($con , $sqlfcp) or die('Error'.mysqli_error($con));



// Select query for Books published as single author or as editor. 

$sqlbpe="SELECT * from teach_bpe where user_id='$user' and year='$year'";
                $bperesult=mysqli_query($con , $sqlbpe) or die('Error'.mysqli_error($con));


// Select query for Ongoing Projects/ Consultancies.

$sqlopc="SELECT * from teach_opc where user_id='$user' and year='$year'";
                $opcresult=mysqli_query($con , $sqlopc) or die('Error'.mysqli_error($con));


// Select query for Completed Projects/ Consultancies.

$sqlcpc="SELECT * from teach_cpc where user_id='$user' and year='$year'";
                $cpcresult=mysqli_query($con , $sqlcpc) or die('Error'.mysqli_error($con));


// Select query for Completed Projects/ Consultancies.

$sqlrg="SELECT * from teach_rg where user_id='$user' and year='$year'";
                $rgresult=mysqli_query($con , $sqlrg) or die('Error'.mysqli_error($con));


// Select query for Training Courses, Teaching-Learning-Evaluation Technology, Faculty Development Programmes

$sqlfdp="SELECT * from teach_fdp where user_id='$user' and year='$year'";
                $fdpresult=mysqli_query($con , $sqlfdp) or die('Error'.mysqli_error($con));


// Select query for  Papers presented in Conferences, Seminars, Workshops, Symposia

$sqlppc="SELECT * from teach_ppc where user_id='$user' and year='$year'";
                $ppcresult=mysqli_query($con , $sqlppc) or die('Error'.mysqli_error($con));


//Select query for Invited Lectures and Chairmanship at National or International Conference/ Seminar

$sqlilc="SELECT * from teach_ilc where user_id='$user' and year='$year'";
                $ilcresult=mysqli_query($con , $sqlilc) or die('Error'.mysqli_error($con));



//Calculation of Summary of API.


            $get1 = mysqli_query($con, "select sum(Teach_LSTP_CTAPI) as value_sum  from Teach_LSTP where user_id='$user' and year='$year'");
                  $row1 = mysqli_fetch_assoc($get1); 
                  $lstp1 = $row1['value_sum'];

                  $get2 = mysqli_query($con, "select sum(Teach_LSTP_TLAPI) as value_sum  from Teach_LSTP where user_id='$user' and year='$year'");
                  $row2 = mysqli_fetch_assoc($get2); 
                  $lstp2 = $row2['value_sum'];
                  
                  $lstp=$lstp1+$lstp2;
                  

                  $get3 = mysqli_query($con, "select sum(Teach_TLM_API) as value_sum  from Teach_TLM where user_id='$user' and year='$year'");
                  $row3 = mysqli_fetch_assoc($get3); 
                  $tlm = $row3['value_sum'];
                  

                  $get4 = mysqli_query($con, "select sum(Teach_EDAP_API) as value_sum  from Teach_EDAP where user_id='$user' and year='$year'");
                  $row4 = mysqli_fetch_assoc($get4); 
                  $edap = $row4['value_sum'];
                  

                  $teachinglearning=$lstp+$tlm+$edap;
                  
                  
            $get5 = mysqli_query($con, "select sum(Teach_ECFA_API) as value_sum  from Teach_ECFA where user_id='$user' and year='$year'");
            $row5 = mysqli_fetch_assoc($get5); 
            $ecfa = $row5['value_sum'];

            $get6 = mysqli_query($con, "select sum(Teach_CLMI_API) as value_sum  from Teach_CLMI where user_id='$user' and year='$year'");
            $row6 = mysqli_fetch_assoc($get6); 
            $clmi = $row6['value_sum'];

            $get7 = mysqli_query($con, "select sum(Teach_PDA_API) as value_sum  from Teach_PDA where user_id='$user' and year='$year'");
            $row7 = mysqli_fetch_assoc($get7); 
            $pda = $row7['value_sum'];

            $CoCurricular=$ecfa+$clmi+$pda;
            
        $sum=$teachinglearning+$CoCurricular;
        
        $get8 = mysqli_query($con, "select sum(Teach_PPIJ_API) as value_sum  from Teach_PPIJ where user_id='$user' and year='$year'");
        $row8 = mysqli_fetch_assoc($get8); 
        $ppij = $row8['value_sum']; 

        $get9 = mysqli_query($con, "select sum(Teach_APB_API) as value_sum  from Teach_APB where user_id='$user' and year='$year'");
        $row9 = mysqli_fetch_assoc($get9); 
        $apb = $row9['value_sum'];  

        $get10 = mysqli_query($con, "select sum(Teach_FCP_API) as value_sum  from Teach_FCP where user_id='$user' and year='$year'");
        $row10 = mysqli_fetch_assoc($get10); 
        $fcp = $row10['value_sum']; 

        $get11 = mysqli_query($con, "select sum(Teach_BPE_API) as value_sum  from Teach_BPE where user_id='$user' and year='$year'");
        $row11 = mysqli_fetch_assoc($get11); 
        $bpe= $row11['value_sum'];  

        $get12 = mysqli_query($con, "select sum(Teach_OPC_API) as value_sum  from Teach_OPC where user_id='$user' and year='$year'");
        $row12 = mysqli_fetch_assoc($get12); 
        $opc = $row12['value_sum']; 

        $get13 = mysqli_query($con, "select sum(Teach_CPC_API) as value_sum  from Teach_CPC where user_id='$user' and year='$year'");
        $row13 = mysqli_fetch_assoc($get13); 
        $cpc = $row13['value_sum']; 

        $get14 = mysqli_query($con, "select sum(Teach_RG_API) as value_sum  from Teach_RG where user_id='$user' and year='$year'");
        $row14 = mysqli_fetch_assoc($get14); 
        $rg = $row14['value_sum'];  

        $get15 = mysqli_query($con, "select sum(Teach_FDP_API) as value_sum  from Teach_FDP where user_id='$user' and year='$year'");
        $row15 = mysqli_fetch_assoc($get15); 
        $fdp = $row15['value_sum']; 

        $get16 = mysqli_query($con, "select sum(Teach_PPC_API) as value_sum  from Teach_PPC where user_id='$user' and year='$year'");
        $row16 = mysqli_fetch_assoc($get16); 
        $ppc = $row16['value_sum']; 

        $get17 = mysqli_query($con, "select sum(Teach_ILC_API) as value_sum  from Teach_ILC where user_id='$user' and year='$year'");
        $row17 = mysqli_fetch_assoc($get17); 
        $ilc = $row17['value_sum']; 

        $research=$ppij+$apb+$fcp+$bpe+$opc+$cpc+$rg+$fdp+$ppc+$ilc;                


 /*General Information Table */
  $html =
    '<html><head>
     <style>
     .center{
       text-align:center;
     }
     .strong{
       font-weight:bold;
     }
     table {
       width: 100%;
       border-collapse: collapse;
     }
     th, td {
       border: 1px solid #333;
     }
     </style>
      </head><body>'.
    '<h3><center>University of Indore</center></h3><br/>'.
    '<h3><center>Devi Ahilya University, Indore</center></h3><br/>'.
    '<h4><center>Annual Self-Assessment for the Performance Based Appraisal System (PBAS)</center></h4><br/>'.
    '<h4><center>Session/Year :'.$year.' </center></h4><br/>'.
    '<h3><center>PART A : GENERAL INFORMATION</center></h3><br/>'.
    '<table border="1px" width="100%"><tr><th>Name</th><td>'.$name.'</td></tr>'.
    '<tr><th>Father`s Name</th><td>'.$fname.'</td></tr>'.
    '<tr><th>Mother`s Name</th><td>'.$mname.'</td></tr>'.
    '<tr><th>Department</th><td>'.$dept.'</td></tr>'.
    '<tr><th>Current Designation</th><td>'.$cd.'</td></tr>'.
    '<tr><th>Grade Pay</th><td>'.$gp.'</td></tr>'.
    '<tr><th>Date of Last Promotion</th><td>'.$dlp.'</td></tr>'.
    '<tr><th>Address for Correspondance</th><td>'.$afc.'</td></tr>'.
    '<tr><th>Permanent Address</th><td>'.$pa.'</td></tr>'.
    '<tr><th>Contact No.</th><td>'.$tno.'</td></tr>'.
    '<tr><th>Email</th><td>'.$email.'</td></tr>'.
    '</table>';

/*Academic activity table    */

    $acrow = mysqli_fetch_array($acresult);
    $html.=

    '<br><b>Whether acquired any degree or fresh academic qualification during the year : '.$acrow['Gen_Info_AQ'].'</b>'.
    '<br><b>Whether acquired any degree or fresh academic qualification during the year: '.$acno.'</b>'.
    '<br><table width="100%" border="1px">'.
    '<tr><th>Name of Course</th><th>Place</th><th>Duration</th><th>Sponsoring Agency</th></tr>';
   while($acadrow = mysqli_fetch_array($acadresult)){
    $html .='<tr><th>'.$acadrow['Gen_Info_Noc'].'</th><th>'.$acadrow['Gen_Info_Place'].'</th><th>'.$acadrow['Gen_Info_Duration'].'</th><th>'.$acadrow['Gen_Info_SA'].'</th></tr>';}

    $html.='</table><br/><h3><b><center>PART B : ACADEMIC PERFORMACE INDICATORS</center></b></h3><br/>'.


/*CATEGORY  I : TEACHING LEARNING AND EVALUATION RELATED ACTIVITES*/

/*LSTP Table*/    

    '<h3><center><b>CATEGORY  I : TEACHING LEARNING AND EVALUATION RELATED ACTIVITES</b> </center></h3><br/>'.
    '<h4>(i) Lecture, Seminar, Tutorial, Practical, Contact Hours (Semester Wise)</h4>'.
    '<table width="100%" border="1px">'.
    '<tr><th>Course/Paper</th><th>Level</th><th>Mode of Teaching</th> <th>No. of classes/per week allocated</th> <th>Total no. of classes conducted</th> <th>Practicals</th> <th>% of classes taken as per documented record</th></tr>';
    while($lstprow=mysqli_fetch_array($lstpresult)){
    $html .='<tr><td>'.$lstprow['Teach_LSTP_Course'].'</td> <td>'.$lstprow['Teach_LSTP_Level'].'</td><td>'.$lstprow['Teach_LSTP_MOT'].'</td><td>'.$lstprow['Teach_LSTP_NOCA'].'</td> <td>'.$lstprow['Teach_LSTP_NOCC'].'</td> <td>'.$lstprow['Teach_LSTP_Practicals'].'</td> <td>'.$lstprow['Teach_LSTP_CTDR'].'</td></tr> ';}

    $html .='</table><br/><b><h4>Lecture (L), Seminars (S), Tutorials (T), Practical (P), Contact Hours (C)</h4></b>'.
    	'<table border="1px" width="100%">'.
    	'<tr><th></th> <th></th> <th>API Score</th></tr>'.
    	'<tr><th>(a)</th><th>Classes Taken (max 50 for 100% performance & Proportionate Score upto 80% performance, below which no score may be given) </th><td>'.$lstpapi['Teach_LSTP_CTAPI'].'</td></tr>'.
    	'<tr><th>(b)</th><th>Teaching Load in excess of UGC norm (max score:10)</th><td>'.$lstpapi['Teach_LSTP_TLAPI'].'</td></tr>'.
		
/*RIMC Table*/

        '</table><br/><h4>(ii) Reading/Instructional material consulted and additional knowledge resources provided to students :</h4>'.
        '<table width="100%" border="1px">'.
        '<tr><th>Course Paper</th><th>Consulted </th><th>Prescribed</th> <th>Additional Resources Provided</th></tr>';
        while($rimcrow = mysqli_fetch_array($rimcresult)){
        $html .='<tr><th>'.$rimcrow['Teach_RIMC_Course'].'</th><th>'.$rimcrow['Teach_RIMC_Consulted'].'</th><th>'.$rimcrow['Teach_RIMC_Prescribed'].'</th><th>'.$rimcrow['Teach_RIMC_ARP'].'</th></tr>';}
        
/*TLM Table*/

        $html.='</table><br/><h4>(iii) Use of Participatory and innovative Teaching-Learning Methodologies, Updating of subject contents :</h4>'.
        '<table width="100%" border="1px">'.
        '<tr><th>Short Description</th><th>API Score</th></tr>';
        while($tlmrow = mysqli_fetch_array($tlmresult)){
        $html .='<tr><th>'.$tlmrow['Teach_TLM_SD'].'</th><th>'.$tlmrow['Teach_TLM_API'].'</th></tr>';}

/*EDAP Table*/ 

        $html.='</table><br/><h4>(iv) Examination Duties Assigned and Performed </h4>'.
        '<table width="100%" border="1px">'.
        '<tr><th>Type of Examination duties</th><th>Duties Assigned</th><th>Extent to which carried out(%) </th><th>API Score</th></tr>';
        while($edaprow = mysqli_fetch_array($edapresult)){
        $html .='<tr><th>'.$edaprow['Teach_EDAP_TED'].'</th><th>'.$edaprow['Teach_EDAP_DA'].'</th><th>'.$edaprow['Teach_EDAP_ECO'].'</th><th>'.$edaprow['Teach_EDAP_API'].'</th></tr>';}      

/*CATEGORY  II : CO-CURRICULAR, EXTENSION, PROFESSIONAL DEVELOPMENT  RELATED  ACTIVITIES */
        $html.='</table><br/><h3><center><b>CATEGORY  II : CO-CURRICULAR, EXTENSION, PROFESSIONAL DEVELOPMENT  RELATED  ACTIVITIES </b> </center></h3><br/>'.

        
/*ECFA Table*/

        '<br/><h4>(i) Extension, Co-curricular & Field based activities </h4><br/>'.
        
        '<table width="100%" border="1px">'.
        '<tr><th>Type of Activity</th><th>Average Hrs per Week</th><th>API Score</th></tr>';

        while($ecfarow = mysqli_fetch_array($ecfaresult)){
        $html .='<tr><th>'.$ecfarow['Teach_ECFA_TOA'].'</th><th>'.$ecfarow['Teach_ECFA_AH'].'</th><th>'.$ecfarow['Teach_ECFA_API'].'</th></tr>';}      

/*CLMI Table*/
        
        $html.='</table><br/><h4>(ii) Contribution to Corporate Life and Management of the Institution </h4><br/>'.
        '<table width="100%" border="1px">'.
        '<tr><th>Type of Activity</th><th>Yearly/Semester wise responsibility</th><th>API Score</th></tr>';
        while($clmirow = mysqli_fetch_array($clmiresult)){
        $html .='<tr><th>'.$clmirow['Teach_CLMI_TOA'].'</th><th>'.$clmirow['Teach_CLMI_YSR'].'</th><th>'.$clmirow['Teach_CLMI_API'].'</th></tr>';}      

/*PDA Table*/

        $html.='</table><br/><h4>(iii) Professional Development Activities</h4><br/>'.
        '<table width="100%" border="1px">'.
        '<tr><th>Type of Activity</th><th>Yearly/Semester wise responsibility</th><th>API Score</th></tr>';
        while($pdarow = mysqli_fetch_array($pdaresult)){
        $html .='<tr><th>'.$pdarow['Teach_PDA_TOA'].'</th><th>'.$pdarow['Teach_PDA_YWR'].'</th><th>'.$pdarow['Teach_PDA_API'].'</th></tr>';}      

/*CATEGORY   III : RESEARCH, PUBLICATION AND ACADEMIC CONTRIBUTION*/


        $html.='</table><br/><br/><h3><center><b>CATEGORY   III : RESEARCH, PUBLICATION AND ACADEMIC CONTRIBUTION</b> </center></h3><br/>'.

/*PPIJ Table*/

        '<br/><h4>A) Published Papers in Journals</h4>'.
        '<table width="100%" border="1px">'.
        '<tr><th>Title with page no.</th><th>Journal</th><th>ISSN/ISBN No.</th> <th>Whether peer reviewed.Impact factor,if any</th> <th>No. of Co.authors</th> <th>Whether you are the main author</th> <th>API Score</th></tr>';
        while($ppijrow = mysqli_fetch_array($ppijresult)){
        $html.='<tr><th>'.$ppijrow['Teach_PPIJ_TNO'].'</th><th>'.$ppijrow['Teach_PPIJ_Journal'].'</th> <th>'.$ppijrow['Teach_PPIJ_ISBN'].'</th> <th>'.$ppijrow['Teach_PPIJ_PR'].'</th> <th>'.$ppijrow['Teach_PPIJ_NCA'].'</th> <th>'.$ppijrow['Teach_PPIJ_MA'].'</th>  <th>'.$ppijrow['Teach_PPIJ_API'].'</th></tr>';}      
        
/*APB Table*/

        $html.='</table>'.
        '<br/><h4>B (i) Articles/ Chapters published in Books.</h4>'.
        '<table width="100%" border="1px">'.
        '<tr><th>Title with page no.</th><th>Book Title,editor & publisher</th><th>ISSN/ISBN No.</th> <th>Whether peer reviewed.Impact factor,if any</th> <th>No. of Co.authors</th> <th>Whether you are the main author</th> <th>API Score</th></tr>';
        while($apbrow=mysqli_fetch_array($apbresult)){
        $html.='<tr><th>'.$apbrow['Teach_APB_TNO'].'</th> <th>'.$apbrow['Teach_APB_BEP'].'</th> <th>'.$apbrow['Teach_APB_ISSN'].'</th> <th>'.$apbrow['Teach_APB_WPR'].'</th> <th>'.$apbrow['Teach_APB_NOC'].'</th> <th>'.$apbrow['Teach_APB_MA'].'</th> <th>'.$apbrow['Teach_APB_API'].'</th></tr>';}      
       
/*FCP Table*/

       $html.='</table>'.
        '<br/><h4>B(ii) Full papers in Conference Proceedings.</h4>'.
        '<table width="100%" border="1px">'.
        '<tr><th>Title with page no.</th><th>Details of Conference publication</th><th>ISSN/ISBN No.</th> <th>No. of Co.authors</th> <th>Whether you are the main author</th> <th>API Score</th></tr>';
        while($fcprow=mysqli_fetch_array($fcpresult)){
        $html.='<tr><th>'.$fcprow['Teach_FCP_TNO'].'</th> <th>'.$fcprow['Teach_FCP_BEP'].'</th> <th>'.$fcprow['Teach_FCP_ISSN'].'</th> <th>'.$fcprow['Teach_FCP_NOC'].'</th> <th>'.$fcprow['Teach_FCP_MA'].'</th> <th>'.$fcprow['Teach_FCP_API'].'</th></tr>';}      
 
/*BPE Table*/

        $html.='</table>'.
        '<br/><h4>B (iii) Books published as single author or as editor. </h4>'.
        '<table width="100%" border="1px">'.
        '<tr><th>Title with page no.</th><th>Type of Book & Authorship</th><th>Publisher & ISSN/ISBN No.</th> <th>Whether peer reviewed</th> <th>No. of Co.authors</th> <th>Whether you are the main author</th> <th>API Score</th></tr>';
        while($bperow=mysqli_fetch_array($bperesult)){
        $html.='<tr><th>'.$bperow['Teach_BPE_TPN'].'</th> <th>'.$bperow['Teach_BPE_TBA'].'</th> <th>'.$bperow['Teach_BPE_PISSN'].'</th> <th>'.$bperow['Teach_BPE_WPR'].'</th> <th>'.$bperow['Teach_BPE_NOC'].'</th> <th>'.$bperow['Teach_BPE_MA'].'</th> <th>'.$bperow['Teach_BPE_API'].'</th></tr>';}      
 
/*OPC Table*/

        $html.='</table><br/><h4>C) Ongoing and Completed Research projects and consultancies</h4>'.
        '<h4>Ongoing Projects/ Consultancies.<br/></h4>'.
        '<table width="100%" border="1px">'.
        '<tr><th>Title </th><th>Agency</th><th>Period</th> <th>Grant/Amount Mobilized(Rs. Lakh)</th> <th>API Score</th></tr>';
        while($opcrow=mysqli_fetch_array($opcresult)){
        $html.='<tr><th>'.$opcrow['Teach_OPC_Title'].'</th> <th>'.$opcrow['Teach_OPC_Agency'].'</th> <th>'.$opcrow['Teach_OPC_Period'].'</th> <th>'.$opcrow['Teach_OPC_GAM'].'</th> <th>'.$opcrow['Teach_OPC_API'].'</th></tr>';}      
 

/*CPC Table*/

        $html.='</table><br/>'.
        '<h4>Completed Projects/ Consultancies.<br/></h4>'.
        '<table width="100%" border="1px">'.
        '<tr><th>Title </th><th>Agency</th><th>Period</th> <th>Grant/Amount Mobilized(Rs. Lakh)</th> <th> Whether policy document/Patent as outcome </th> <th>API Score</th></tr>';
        while($cpcrow=mysqli_fetch_array($cpcresult)){
        $html.='<tr><th>'.$cpcrow['Teach_CPC_Title'].'</th> <th>'.$cpcrow['Teach_CPC_Agency'].'</th> <th>'.$cpcrow['Teach_CPC_Period'].'</th> <th>'.$cpcrow['Teach_CPC_GAM'].'</th> <th>'.$cpcrow['Teach_CPC_WPD'].'</th> <th>'.$cpcrow['Teach_CPC_API'].'</th></tr>';}      



/*RG Table*/

        $html.='</table>'.
        '<br/><h4>Research Guidance.<br/></h4>'.
        '<table width="100%" border="1px">'.
        '<tr><th>Number Enrolled </th><th>Thesis Submitted</th><th>Degree Awarded</th> <th>API Score</th></tr>';
        while($rgrow=mysqli_fetch_array($rgresult)){
        $html.='<tr><th>'.$rgrow['Teach_RG_NE'].'</th> <th>'.$rgrow['Teach_RG_TS'].'</th> <th>'.$rgrow['Teach_RG_DA'].'</th> <th>'.$rgrow['Teach_RG_API'].'</th></tr>';}      


/*FDP Table*/

        $html.='</table>'.
        '<br/><h4>E (i) Training Courses, Teaching-Learning-Evaluation Technology, Faculty Development Programmes.<br/></h4>'.
        '<table width="100%" border="1px">'.
        '<tr><th>Programme </th><th>Duration</th><th>Organized By</th> <th>API Score</th></tr>';
        while($fdprow=mysqli_fetch_array($fdpresult)){
        $html.='<tr><th>'.$fdprow['Teach_FDP_Programme'].'</th> <th>'.$fdprow['Teach_FDP_Duration'].'</th> <th>'.$fdprow['Teach_FDP_Organized'].'</th> <th>'.$fdprow['Teach_FDP_API'].'</th></tr>';}      


/*PPC Table*/

        $html.='</table>'.
        '<br/><h4>E (ii) Papers presented in Conferences, Seminars, Workshops, Symposia.<br/></h4>'.
        '<table width="100%" border="1px">'.
        '<tr><th>Title of paper presented </th><th>Title of Conference/Seminar etc.</th><th>Date of the event</th> <th> Organized By </th> <th> Whether International/National/State </th> <th>API Score</th></tr>';
        while($ppcrow=mysqli_fetch_array($ppcresult)){
        $html.='<tr><th>'.$ppcrow['Teach_PPC_TPP'].'</th> <th>'.$ppcrow['Teach_PPC_TCS'].'</th> <th>'.$ppcrow['Teach_PPC_DOE'].'</th> <th>'.$ppcrow['Teach_PPC_Organized'].'</th> <th>'.$ppcrow['Teach_PPC_WINS'].'</th> <th>'.$ppcrow['Teach_PPC_API'].'</th></tr>';}      


/*ILC Table*/

        $html.='</table>'.
        '<br/><h4>E(iii) Invited Lectures and Chairmanship at National or International Conference/ Seminar.<br/></h4>'.
        '<table width="100%" border="1px">'.
        '<tr><th>Title of the Lecture/Academic Session </th><th>Title of Conference/Seminar etc.</th><th>Date of the event</th> <th> Organized By </th> <th> Whether International/National/State </th> <th>API Score</th></tr>';
        while($ilcrow=mysqli_fetch_array($ilcresult)){
        $html.='<tr><th>'.$ilcrow['Teach_ILC_TOL'].'</th> <th>'.$ilcrow['Teach_ILC_TCS'].'</th> <th>'.$ilcrow['Teach_ILC_DOE'].'</th> <th>'.$ilcrow['Teach_ILC_Organized'].'</th> <th>'.$ilcrow['Teach_ILC_WINS'].'</th> <th>'.$ilcrow['Teach_ILC_API'].'</th></tr>';}      
        $html.='</table><br/><br/>'.


/*Table of API summary */

        '<h3>IV. SUMMARY OF API SCORES</h3>'.
        '<table width="100%" border="1px">'.
        '<tr align="center"><th> </th><th>Criteria</th><th>Last Academic Year</th> <th> Total API Score for Assessment Period</th> <th>Annual Average API Score for Assessment Period </th></tr>'.
        '<tr align="center"><td> I </td> <td> TEACHING LEARNING AND EVALUATION RELATED ACTIVITIES</td><td> </td><td>'.$teachinglearning.' </td><td> </td></tr>'.
        '<tr align="center"><td>II</td><td>CO-CURRICULAR,EXTENSION PROFESSIONAL DEVELOPMENT RELATED ACTIVITIES</td><td> </td><td>'.$CoCurricular.' </td> <td> </td></tr>'.
        '<tr align="center"><td> </td> <td>TOTAL I + II </td> <td> </td><td>'.$sum.' </td><td> </td></tr>'.
        '<tr align="center"><td> III</td> <td> RESEARCH,PUBLICATION AND ACADEMIC CONTRIBUTION</td> <td> </td> <td>'.$research.' </td> <td> </td></tr>'.
        '</table> <br/><br/>'.
        '<h3><center>PART C: OTHER RELEVANT INFORMATION</center></h3> <br/> <br/> <br/> <br/>'.


/*Footer Detail*/

        
        '<h4>I certify that the information provided is correct as per records available with the University and/or documents enclosed along with the duly filled PBAS proforma. </h4>'.
        '<br/><div align="right"><h4>Signature of the faculty</h4>'.
        '<h4>Designation : '.$cd.'</h4>'.
        '<h4>Place : Indore</h4>'.
        '<h4>Date : '.Date("d/m/Y").'</h4><br/><br/><br/>'.
        '<h4>Signature of HOD</h4></div>'.
        '</body></html>'; 
        
        
        
        

$dompdf = new DOMPDF();
$dompdf->load_html($html);

$dompdf->render();
$dompdf->stream("PBAS.pdf");

?>

