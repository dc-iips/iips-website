
<?php
//DBConnect.php include the code for Database connectivity
include('DBConnect.php');
$user = $_SESSION['username'];
$year = $_SESSION['pbasYear'];
//Query for clicking on 'SAVE' button in 'Published Papers' form.
if(isset($_POST['ppij_save'])){
	$user = $_SESSION['username'];
	$year = $_SESSION['pbasYear'];
	 $PPIJ_TNO = $_POST['PPIJ_TNO'];
	$PPIJ_Journal = $_POST['PPIJ_Journal'];
	$PPIJ_ISBN = $_POST['PPIJ_ISBN'];
	$PPIJ_PR = $_POST['PPIJ_PR'];
	$PPIJ_NCA = $_POST['PPIJ_NCA'];
	$PPIJ_YN = $_POST['PPIJ_YN'];
	$PPIJ_API = $_POST['PPIJ_API'];

	$sql="SELECT * FROM teach_ppij WHERE User_Id='$user' and Teach_PPIJ_TNO = '$PPIJ_TNO' and year='$year'";
		$result = mysqli_query($con,$sql) or die('Error'.mysqli_error($con));
		 $row = mysqli_fetch_array($result);

		if($row>0){

			$updateQuery = "UPDATE teach_ppij SET Teach_PPIJ_Journal='$PPIJ_Journal', Teach_PPIJ_ISBN='$PPIJ_ISBN', Teach_PPIJ_PR='$PPIJ_PR', Teach_PPIJ_NCA='$PPIJ_NCA', Teach_PPIJ_MA='$PPIJ_YN', Teach_PPIJ_API='$PPIJ_API' where User_Id='$user' and year='$year' and Teach_PPIJ_TNO='$PPIJ_TNO'" ;
			$result1 = mysqli_query($con,$updateQuery);
			if($result1){
				header('location:ppij.php');
			}
			else{
				die("error : ".mysqli_error($con));
			}
		}
 		else{

		$sql = "Insert into `teach_ppij` (User_Id,year,Teach_PPIJ_Tno,Teach_PPIJ_Journal,Teach_PPIJ_ISBN,Teach_PPIJ_PR,Teach_PPIJ_NCA, Teach_PPIJ_MA,Teach_PPIJ_API) Values('$user','$year','$PPIJ_TNO','$PPIJ_Journal','$PPIJ_ISBN','$PPIJ_PR','$PPIJ_NCA','$PPIJ_YN','$PPIJ_API')";
	$result = mysqli_query($con,$sql) or die("error : ".mysqli_error($con));
	if($result){
				header('location:ppij.php');
			}
			else{
				die("error : ".mysqli_error($con));
			}
	}
}


if(isset($_POST['ppij_delete'])){
	$user = $_SESSION['username'];
	$year = $_SESSION['pbasYear'];
	 $PPIJ_TNO = $_POST['PPIJ_TNO'];
	$PPIJ_Journal = $_POST['PPIJ_Journal'];
	$PPIJ_ISBN = $_POST['PPIJ_ISBN'];
	$PPIJ_PR = $_POST['PPIJ_PR'];
	$PPIJ_NCA = $_POST['PPIJ_NCA'];
	$PPIJ_YN = $_POST['PPIJ_YN'];
	$PPIJ_API = $_POST['PPIJ_API'];

	$sqlppijdelete="Delete From teach_ppij where User_Id='$user' and year='$year' and Teach_PPIJ_TNO='$PPIJ_TNO'";
	$ppijdeleteresult = mysqli_query($con,$sqlppijdelete);
		if($ppijdeleteresult){
			header('location:ppij.php');
		}
		else{
			die("Error : ".mysqli_error($con) );
		}
}
//Query for clicking on "Save" Button in 'Article/Chapetrs' form
if(!empty($_POST['acpb_save'])){
	$user=$_SESSION['username'];
	$year=$_SESSION['pbasYear'];
	$APB_TNO = $_POST['APB_TNO'];
	$APB_BEP = $_POST['APB_BEP'];
	$APB_ISSN = $_POST['APB_ISSN'];
	$APB_WPR = $_POST['APB_WPR'];
	$APB_NOC = $_POST['APB_NOC'];
	$ACPB_Yes = $_POST['ACPB_YN'];
	$APB_API = $_POST['APB_API'];
	$sql="SELECT * FROM teach_apb  WHERE User_Id='$user' and Teach_APB_TNO = '$APB_TNO' and year='$year'";
		$result = mysqli_query($con,$sql) or die('Error'.mysqli_error($con));
		 $row = mysqli_fetch_array($result);
		if($row>0){
			$updateQuery = "UPDATE teach_apb SET Teach_APB_BEP='$APB_BEP', Teach_APB_ISSN='$APB_ISSN', Teach_APB_WPR='$APB_WPR', Teach_APB_NOC='$APB_NOC', Teach_APB_MA='$ACPB_Yes', Teach_APB_API='$APB_API' where User_Id='$user' and year='$year' and Teach_APB_TNO='$APB_TNO'" ;
			$result1 = mysqli_query($con,$updateQuery);
			if($result1){
				header('location:apb.php');
			}
			else{
				die("error : ".mysqli_error($con));
			}
		}
 		else{
	$sql2 = "INSERT into teach_apb (User_Id,Year,Teach_APB_Tno,Teach_APB_BEP,Teach_APB_ISSN,Teach_APB_WPR,Teach_APB_NOC, Teach_APB_MA,Teach_APB_API) Values('$user','$year','$APB_TNO','$APB_BEP','$APB_ISSN','$APB_WPR','$APB_NOC','$ACPB_Yes','$APB_API')";
	$result2 = mysqli_query($con,$sql2) or die("error : ").mysqli_error($con);
}
	if($result2){
		header('Location:apb.php');
	}
	else{
		echo "Error".mysqli_error();
	}

}


if(!empty($_POST['apb_delete'])){
	$user=$_SESSION['username'];
	$year=$_SESSION['pbasYear'];
	$APB_TNO = $_POST['APB_TNO'];
	$APB_BEP = $_POST['APB_BEP'];
	$APB_ISSN = $_POST['APB_ISSN'];
	$APB_WPR = $_POST['APB_WPR'];
	$APB_NOC = $_POST['APB_NOC'];
	$ACPB_Yes = $_POST['ACPB_Yes'];
	$APB_API = $_POST['APB_API'];

	$sqlapbdelete="Delete From teach_apb where User_Id='$user' and year='$year' and Teach_APB_TNO='$APB_TNO'";
	$apbdeleteresult = mysqli_query($con,$sqlapbdelete);
		if($apbdeleteresult){
			header('location:apb.php');
		}
		else{
			die("Error : ".mysqli_error($con) );
		}
}



if(!empty($_POST['fpcp_save'])){
	$FCP_TNO = $_POST['FCP_TNO'];
	$FCP_BEP = $_POST['FCP_BEP'];
	$FCP_ISSN = $_POST['FCP_ISSN'];
	$FCP_NOC = $_POST['FCP_NOC'];
	$FCP_YN = $_POST['FCP_YN'];
	$FCP_API = $_POST['FCP_API'];
	$user=$_SESSION['username'];
	$year=$_SESSION['pbasYear'];

	$sql= " SELECT * FROM teach_fcp WHERE User_Id ='$user' AND YEAR ='$year' AND Teach_FCP_TNO = '$FCP_TNO' ";
	$result = mysqli_query($con,$sql) or die('Error'.mysqli_error($con));
	$row = mysqli_fetch_array($result);

		if($row  > 0){

			$updateQuery = " UPDATE teach_fcp SET Teach_FCP_BEP='$FCP_BEP', Teach_FCP_ISSN='$FCP_ISSN', Teach_FCP_NOC='$FCP_NOC', Teach_FCP_MA='$FCP_YN', Teach_FCP_API='$FCP_API' " ;
			$result1 = mysqli_query($con,$updateQuery);
			if($result1){
				header('location:fcp.php');
				
			}
			else{
				die("error : ".mysqli_error($con));
			}
		}
 		else{
				$sql2 = "INSERT into teach_fcp (User_Id,year,Teach_FCP_TNO,Teach_FCP_BEP,Teach_FCP_ISSN,Teach_FCP_NOC, Teach_FCP_MA,Teach_FCP_API) Values('$user','$year','$FCP_TNO','$FCP_BEP','$FCP_ISSN','$FCP_NOC','$FCP_YN','$FCP_API')";
				$result2 = mysqli_query($con,$sql2) or die("error : ").mysqli_error($con);
			
		if($result2){
			header('Location:fcp.php');
		}
		else{
			echo "Error".mysqli_error();
		}
	}

}


if(!empty($_POST['fcp_delete'])){
	$FCP_TNO = $_POST['FCP_TNO'];
	$FCP_BEP = $_POST['FCP_BEP'];
	$FCP_ISSN = $_POST['FCP_ISSN'];
	$FCP_NOC = $_POST['FCP_NOC'];
	$FCP_YN = $_POST['FCP_YN'];
	$FCP_API = $_POST['FCP_API'];
	$user=$_SESSION['username'];
	$year=$_SESSION['pbasYear'];

	$sqlfcpdelete="DELETE FROM teach_fcp WHERE User_Id='$user' AND year='$year' AND Teach_FCP_TNO='$FCP_TNO'";
	$fcpdeleteresult = mysqli_query($con,$sqlfcpdelete);
		if($fcpdeleteresult){
			header('location:fcp.php');
		}
		else{
			die("Error : ".mysqli_error($con) );
		}

}



if(!empty($_POST['bpe_save'])){
	$BPE_TPN = $_POST['BPE_TPN'];
	$BPE_TBA = $_POST['BPE_TBA'];
	$BPE_PISSN = $_POST['BPE_PISSN'];
	$BPE_WPR = $_POST['BPE_WPR'];
	$BPE_NOC = $_POST['BPE_NOC'];
	$BPE_YN = $_POST['BPE_YN'];
	$BPE_API = $_POST['BPE_API'];
	$year = $_SESSION['pbasYear'];
			$bpeinsertquery = "Insert into `teach_bpe` (User_Id,Year,Teach_BPE_TPN,Teach_BPE_TBA,Teach_BPE_PISSN,Teach_BPE_WPR,Teach_BPE_NOC,Teach_BPE_YN,Teach_BPE_API) Values('$user','$year','$BPE_TPN','$BPE_TBA','$BPE_PISSN','$BPE_WPR','$BPE_NOC','$BPE_YN','$BPE_API')";
			$bpeinsertresult = mysqli_query($con,$bpeinsertquery) or die("error : ").mysqli_error($con);
			if($bpeinsertresult){
				header('Location:bpe.php');
			}
			else{
				echo "Error".mysqli_error();
			}
			

}



if(!empty($_POST['bpe_delete'])){
	$BPE_TPN = $_POST['BPE_TPN'];
	$BPE_TBA = $_POST['BPE_TBA'];
	$BPE_PISSN = $_POST['BPE_PISSN'];
	$BPE_WPR = $_POST['BPE_WPR'];
	$BPE_NOC = $_POST['BPE_NOC'];
	$BPE_YN = $_POST['BPE_YN'];
	$BPE_API = $_POST['BPE_API'];
	$user=$_SESSION['username'];
	$year = $_SESSION['pbasYear'];

	$sqlbpedelete="Delete From teach_bpe where User_Id='$user' and year='$year' and Teach_BPE_TPN='$BPE_TPN'";
	$bpedeleteresult = mysqli_query($con,$sqlbpedelete);
		if($bpedeleteresult){
			header('location:bpe.php');
		}
		else{
			die("Error : ".mysqli_error($con) );
		}
}



if(!empty($_POST['opc_save'])){
	$OPC_Title = $_POST['OPC_Title'];
	$OPC_Agency = $_POST['OPC_Agency'];
	$OPC_Period = $_POST['OPC_Period'];
	$OPC_Gam = $_POST['OPC_GAM'];
	$OPC_API = $_POST['OPC_API'];
	$user=$_SESSION['username'];
	$year = $_SESSION['pbasYear'];


	$sql="SELECT * FROM teach_opc WHERE User_Id='$user' and Teach_OPC_Title = '$OPC_Title' and year='$year'";
		$result = mysqli_query($con,$sql) or die('Error'.mysqli_error($con));
		 $row = mysqli_fetch_array($result);

		if($row>0){

			$opcupdateQuery = "UPDATE teach_opc SET Teach_OPC_Agency='$OPC_Agency', Teach_OPC_Period='$OPC_Period', Teach_OPC_Gam='$OPC_Gam', Teach_OPC_API='$OPC_API' where User_Id='$user' and year='$year' and Teach_OPC_Title='$OPC_Title'" ;
			$opcupdateresult = mysqli_query($con,$opcupdateQuery);
			if($opcupdateresult){
				header('location:opc.php');
			}
			else{
				die("error : ".mysqli_error($con));
			}
		}
 		else{

		$opcinsertquery = "Insert into teach_opc (user_id,year,Teach_OPC_Title,Teach_OPC_Agency,Teach_OPC_Period,Teach_OPC_Gam,Teach_OPC_API) Values('$user','$year','$OPC_Title','$OPC_Agency','$OPC_Period','$OPC_Gam','$OPC_API')";
		$opcinsertresult = mysqli_query($con,$opcinsertquery) or die("error : ").mysqli_error($con);
		if($opcinsertresult){
			header('Location:opc.php');
		}
		else{
			echo "Error".mysqli_error();
		}
	}


	
}


if(!empty($_POST['opc_delete'])){
	$OPC_Title = $_POST['OPC_Title'];
	$OPC_Agency = $_POST['OPC_Agency'];
	$OPC_Period = $_POST['OPC_Period'];
	$OPC_Gam = $_POST['OPC_GAM'];
	$OPC_API = $_POST['OPC_API'];
	$user=$_SESSION['username'];
	$year = $_SESSION['pbasYear'];

	$sqlopcdelete="Delete From teach_opc where User_Id='$user' and year='$year' and Teach_OPC_Title='$OPC_Title'";
	$opcdeleteresult = mysqli_query($con,$sqlopcdelete);
		if($opcdeleteresult){
			header('location:opc.php');
		}
		else{
			die("Error : ".mysqli_error($con) );
		}
}	


if(!empty($_POST['cpc_save'])){
	$CPC_Title = $_POST['CPC_Title'];
	$CPC_Agency = $_POST['CPC_Agency'];
	$CPC_Period = $_POST['CPC_Period'];
	$CPC_Gam = $_POST['CPC_GAM'];
	$CPC_WPD = $_POST['CPC_WPD'];
	$CPC_API = $_POST['CPC_API'];
	$user=$_SESSION['username'];
	$year = $_SESSION['pbasYear'];

	$sql="SELECT * FROM teach_cpc WHERE User_Id='$user' and Teach_CPC_Title = '$CPC_Title' and year='$year'";
		$result = mysqli_query($con,$sql) or die('Error'.mysqli_error($con));
		 $row = mysqli_fetch_array($result);

		if($row>0){

			$cpcupdateQuery = "UPDATE teach_cpc SET Teach_CPC_Agency='$CPC_Agency', Teach_CPC_Period='$CPC_Period', Teach_CPC_Gam='$CPC_Gam', Teach_CPC_WPD='$CPC_WPD', Teach_CPC_API='$CPC_API' where User_Id='$user' and Year='$year' and Teach_CPC_Title='$CPC_Title'" ;
			$cpcupdateresult = mysqli_query($con,$cpcupdateQuery);
			if($cpcupdateresult){
				header('location:cpc.php');
			}
			else{
				die("error : ".mysqli_error($con));
			}
		}
 		else{


		$cpcinsertquery = "INSERT into teach_cpc (User_Id,Year,Teach_CPC_Title,Teach_CPC_Agency,Teach_CPC_Period,Teach_CPC_Gam,Teach_CPC_WPD,Teach_CPC_API) Values('$user','$year','$CPC_Title','$CPC_Agency','$CPC_Period','$CPC_Gam','$CPC_WPD','$CPC_API')";
		$cpcinsertresult = mysqli_query($con,$cpcinsertquery) or die("error : ").mysqli_error();

		if($cpcinsertresult){
			header('Location: cpc.php');
			}
		else{
			echo "Error".mysqli_error();
			}
	}

	
}



if(!empty($_POST['cpc_delete'])){
	$CPC_Title = $_POST['CPC_Title'];
	$CPC_Agency = $_POST['CPC_Agency'];
	$CPC_Period = $_POST['CPC_Period'];
	$CPC_Gam = $_POST['CPC_GAM'];
	$CPC_API = $_POST['CPC_API'];
	$user=$_SESSION['username'];
	$year = $_SESSION['pbasYear'];

	$sqlcpcdelete="Delete From teach_cpc where User_Id='$user' and year='$year' and Teach_CPC_Title='$CPC_Title'";
	$cpcdeleteresult = mysqli_query($con,$sqlcpcdelete);
		if($cpcdeleteresult){
			header('location:cpc.php');
		}
		else{
			die("Error : ".mysqli_error($con) );
		}
}


if(!empty($_POST['rg_save'])){
	$RG_NE = $_POST['RG_NE'];
	$RG_TS = $_POST['RG_TS'];
	$RG_DA = $_POST['RG_DA'];
	$RG_API = $_POST['RG_API'];

	$sql="SELECT * FROM teach_rg WHERE User_Id='$user' and Teach_RG_NE = '$RG_NE' and year='$year'";
		$result = mysqli_query($con,$sql) or die('Error'.mysqli_error($con));
		 $row = mysqli_fetch_array($result);

		if($row>0){

			$rgupdateQuery = "UPDATE teach_rg SET Teach_RG_TS='$RG_TS', Teach_RG_DA='$RG_DA', Teach_RG_API='$RG_API' where User_Id='$user' and year='$year' and Teach_RG_NE='$RG_NE'" ;
			$rgupdateresult = mysqli_query($con,$rgupdateQuery);
			if($rgupdateresult){
				header('location:rg.php');
			}
			else{
				die("error : ".mysqli_error($con));
			}
		}
 		else{

			$rginsertquery = "Insert into `teach_rg` (user_id,year,Teach_RG_NE,Teach_RG_TS,Teach_RG_DA,Teach_RG_API) Values('$user','$year','$RG_NE','$RG_TS','$RG_DA','$RG_API')";
			$rginsertresult = mysqli_query($con,$rginsertquery) or die("error : ").mysqli_error($con);
			if($rginsertresult){
				header('Location:rg.php');
			}
			else{
				echo "Error".mysqli_error();
			}
		}
			
}

if(!empty($_POST['rg_delete'])){
	$RG_NE = $_POST['RG_NE'];
	$RG_TS = $_POST['RG_TS'];
	$RG_DA = $_POST['RG_DA'];
	$RG_API = $_POST['RG_API'];

	$sqlrgdelete="Delete From teach_rg where User_Id='$user' and year='$year' and Teach_RG_NE='$RG_NE'";
	$rgdeleteresult = mysqli_query($con,$sqlrgdelete);
		if($rgdeleteresult){
			header('location:rg.php');
		}
		else{
			die("Error : ".mysqli_error($con) );
		}
}	


if(!empty($_POST['fdp_save'])){
	$FDP_Programme = $_POST['FDP_Programme'];
	$FDP_Duration = $_POST['FDP_Duration'];
	$FDP_Organized = $_POST['FDP_Organized'];
	$FDP_API = $_POST['FDP_API'];

	$sql="SELECT * FROM teach_fdp WHERE User_Id='$user' and Teach_FDP_Programme = '$FDP_Programme' and year='$year'";
		$result = mysqli_query($con,$sql) or die('Error'.mysqli_error($con));
		 $row = mysqli_fetch_array($result);

		if($row>0){

			$fdpupdateQuery = "UPDATE teach_fdp SET Teach_FDP_Duration='$FDP_Duration', Teach_FDP_Organized='$FDP_Organized', Teach_FDP_API='$FDP_API' where User_Id='$user' and year='$year' and Teach_FDP_Programme='$FDP_Programme'" ;
			$fdpupdateresult = mysqli_query($con,$fdpupdateQuery);
			if($fdpupdateresult){
				header('location:fdp.php');
			}
			else{
				die("error : ".mysqli_error($con));
			}
		}
 		else{

			$fdpinsertquery = "Insert into `teach_fdp` (User_Id,Year,Teach_FDP_Programme,Teach_FDP_Duration,Teach_FDP_Organized,Teach_FDP_API) Values('$user','$year','$FDP_Programme','$FDP_Duration','$FDP_Organized','$FDP_API')";
			$fdpinsertresult = mysqli_query($con,$fdpinsertquery) or die("error : ").mysqli_error($con);
			if($fdpinsertresult){
				header('Location:fdp.php');
			}
			else{
				echo "Error".mysqli_error();
			}
		}
	
}



if(!empty($_POST['fdp_delete'])){
	$FDP_Programme = $_POST['FDP_Programme'];
	$FDP_Duration = $_POST['FDP_Duration'];
	$FDP_Organized = $_POST['FDP_Organized'];
	$FDP_API = $_POST['FDP_API'];

	$sqlfdpdelete="Delete From teach_fdp where User_Id='$user' and year='$year' and Teach_FDP_Programme='$FDP_Programme'";
	$fdpdeleteresult = mysqli_query($con,$sqlfdpdelete);
		if($fdpdeleteresult){
			header('location:fdp.php');
		}
		else{
			die("Error : ".mysqli_error($con) );
		}
}




if(!empty($_POST['ppc_save'])){
	$PPC_TPP = $_POST['PPC_TPP'];
	$PPC_TCS = $_POST['PPC_TCS'];
	$PPC_DOE = $_POST['PPC_DOE'];
	$PPC_Organized = $_POST['PPC_Organized'];
	$PPC_WINS = $_POST['PPC_WINS'];
	$PPC_API = $_POST['PPC_API'];

	$sql="SELECT * FROM teach_ppc WHERE User_Id='$user' and Teach_PPC_TPP = '$PPC_TPP' and year='$year'";
		$result = mysqli_query($con,$sql) or die('Error'.mysqli_error($con));
		 $row = mysqli_fetch_array($result);

		if($row>0){

			$ppcupdateQuery = "UPDATE teach_ppc SET Teach_PPC_TCS='$PPC_TCS', Teach_PPC_DOE='$PPC_DOE', Teach_PPC_Organized='$PPC_Organized', Teach_PPC_WINS='$PPC_WINS', Teach_PPC_API='$PPC_API' where User_Id='$user' and year='$year' and Teach_PPC_TPP='$PPC_TPP'" ;
			$ppcupdateresult = mysqli_query($con,$ppcupdateQuery);
			if($ppcupdateresult){
				header('location:ppc.php');
			}
			else{
				die("error : ".mysqli_error($con));
			}
		}
 		else{

			$ppcinsertquery = "Insert into `teach_ppc` (User_Id,Year,Teach_PPC_TPP,Teach_PPC_TCS,Teach_PPC_DOE, Teach_PPC_Organized, Teach_PPC_WINS,Teach_PPC_API) Values('$user','$year','$PPC_TPP','$PPC_TCS','$PPC_DOE','$PPC_Organized','$PPC_WINS','$PPC_API')";
			$ppcinsertresult = mysqli_query($con,$ppcinsertquery) or die("error : ").mysqli_error($con);
			if($ppcinsertresult){
				header('Location:ppc.php');
			}
			else{
				echo "Error".mysqli_error();
			}
		}
	
}


if(!empty($_POST['ppc_delete'])){
	$PPC_TPP = $_POST['PPC_TPP'];
	$PPC_TCS = $_POST['PPC_TCS'];
	$PPC_DOE = $_POST['PPC_DOE'];
	$PPC_Organized = $_POST['PPC_Organized'];
	$PPC_WINS = $_POST['PPC_WINS'];
	$PPC_API = $_POST['PPC_API'];

	$sqlppcdelete="Delete From teach_ppc where User_Id='$user' and year='$year' and Teach_PPC_TPP='$PPC_TPP'";
	$ppcdeleteresult = mysqli_query($con,$sqlppcdelete);
		if($ppcdeleteresult){
			header('location:ppc.php');
		}
		else{
			die("Error : ".mysqli_error($con) );
		}
}	

if(!empty($_POST['ilc_save'])){
	$ILC_TOL = $_POST['ILC_TOL'];
	$ILC_TCS = $_POST['ILC_TCS'];
	$ILC_DOE = $_POST['ILC_DOE'];
	$ILC_Organized = $_POST['ILC_Organized'];
	$ILC_WINS = $_POST['ILC_WINS'];
	$ILC_API = $_POST['ILC_API'];

	$sql="SELECT * FROM teach_ilc WHERE User_Id='$user' and Teach_ILC_TOL = '$ILC_TOL' and year='$year'";
		$result = mysqli_query($con,$sql) or die('Error'.mysqli_error($con));
		 $row = mysqli_fetch_array($result);

		if($row>0){

			$ilcupdateQuery = "UPDATE teach_ilc SET Teach_ILC_TCS='$ILC_TCS', Teach_ILC_DOE='$ILC_DOE', Teach_ILC_Organized='$ILC_Organized', Teach_ILC_WINS='$ILC_WINS', Teach_ILC_API='$ILC_API' where User_Id='$user' and year='$year' and Teach_ILC_TOL='$ILC_TOL'" ;
			$ilcupdateresult = mysqli_query($con,$ilcupdateQuery);
			if($ilcupdateresult){
				header('location:ilc.php');
			}
			else{
				die("error : ".mysqli_error($con));
			}
		}
 		else{

			$ilcinsertquery = "Insert into `teach_ilc` (User_Id,Year,Teach_ILC_TOL,Teach_ILC_TCS,Teach_ILC_DOE,Teach_ILC_Organized,Teach_ILC_WINS,Teach_ILC_API) Values('$user','$year','$ILC_TOL','$ILC_TCS','$ILC_DOE','$ILC_Organized','$ILC_WINS','$IlC_API')";
			$ilcinsertresult = mysqli_query($con,$ilcinsertquery) or die("error : ").mysqli_error($con);
			if($ilcinsertresult){
				header('Location:ilc.php');
			}
			else{
				echo "Error".mysqli_error();
			}
		}
	
}

if(!empty($_POST['ilc_delete'])){
	$ILC_TOL = $_POST['ILC_TOL'];
	$ILC_TCS = $_POST['ILC_TCS'];
	$ILC_DOE = $_POST['ILC_DOE'];
	$ILC_Organized = $_POST['ILC_Organized'];
	$ILC_WINS = $_POST['ILC_WINS'];
	$IlC_API = $_POST['ILC_API'];

	$sqlilcdelete="Delete From teach_ilc where User_Id='$user' and year='$year' and Teach_ILC_TOL='$ILC_TOL'";
	$ilcdeleteresult = mysqli_query($con,$sqlilcdelete);
		if($ilcdeleteresult){
			header('location:ilc.php');
		}
		else{
			die("Error : ".mysqli_error($con) );
		}
}	


//Query for showing submitted data (by selecting combobox value and then clicking on 'SHOW' button
//in the 'Published Papers' form.).
if(!empty($_POST['ppij_show'])){
	$_SESSION['ppij_show'] = 'show';
include('DBConnect.php');
	$opt = $_POST['pp'];
	$result = mysqli_query($con,"Select * from teach_ppij where Teach_PPIJ_TNO='".$opt."'") or die('error');
	$row = mysqli_fetch_array($result);
	$PPIJ_TNO = $row['Teach_PPIJ_TNO'];
	$PPIJ_Journal = $row['Teach_PPIJ_Journal'];
	$PPIJ_ISBN = $row['Teach_PPIJ_ISBN'];
	$PPIJ_PR = $row['Teach_PPIJ_PR'];
	$PPIJ_NCA = $row['Teach_PPIJ_NCA'];
	$PPIJ_YN = $row['Teach_PPIJ_MA'];
	$PPIJ_API = $row['Teach_PPIJ_API'];
}
if(!empty($_POST['apb_show'])){
	$_SESSION['apb_show'] = 'show';
include('DBConnect.php');
	$opt = $_POST['ap'];
	$result = mysqli_query($con,"Select * from teach_apb where Teach_APB_TNO='".$opt."'") or die('error');
	$row = mysqli_fetch_array($result);
	$APB_TNO = $row['Teach_APB_TNO'];
	$APB_BEP = $row['Teach_APB_BEP'];
	$APB_ISSN = $row['Teach_APB_ISSN'];
	$APB_WPR = $row['Teach_APB_WPR'];
	$APB_NOC = $row['Teach_APB_NOC'];
	$APB_YN = $row['Teach_APB_MA'];
	$APB_API = $row['Teach_APB_API'];
	
}
if(!empty($_POST['ppij_delete'])){
	$PPIJ_TNO = $_POST['PPIJ_TNO'];
	$del = "DELETE from teach_ppij where Teach_PPIJ_TNO='".$PPIJ_TNO."'";
	$rel = mysqli_query($con, $del);
	unset($_SESSION['ppij_show']);
}

?>

