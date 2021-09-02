@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
	

<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Edit Employee </h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

	 <form method="post" action="{{ route('update.employee.registration',$editData->id) }}" enctype="multipart/form-data">
	 	@csrf
					  <div class="row">
						<div class="col-12">	
 

 	
 		<div class="row"> <!-- 1st Row -->
 			
 			<div class="col-md-4">

 		 <div class="form-group">
		<h5>Employee Name <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="name" class="form-control" required="" value="{{ $editData->name }}" > 
	  </div>		 
	  </div>

 			</div> <!-- End Col md 4 -->


	<div class="col-md-4">

 		 <div class="form-group">
		<h5>Father's Name <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="fname" class="form-control" required="" value="{{ $editData->fname }}"> 
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 4 -->



	<div class="col-md-4">

 		 <div class="form-group">
		<h5>Mother's Name <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="mname" class="form-control" required="" value="{{ $editData->mname }}"> 
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 4 --> 
 
 			
 		</div> <!-- End 1stRow -->






	<div class="row"> <!-- 2nd Row -->
 			
 			<div class="col-md-4">

 		 <div class="form-group">
		<h5>Mobile Number <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="mobile" class="form-control" required="" value="{{ $editData->mobile }}" > 
	  </div>		 
	  </div>

 			</div> <!-- End Col md 4 -->


	<div class="col-md-4">

 		 <div class="form-group">
		<h5>Address <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="address" class="form-control" required="" value="{{ $editData->address }}" > 
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 4 -->



	<div class="col-md-4">

 		 <div class="form-group">
		<h5>Gender <span class="text-danger">*</span></h5>
		<div class="controls">
	 <select name="gender" id="gender" required="" class="form-control">
			<option value="" selected="" disabled="">Select Gender</option>
			<option value="Male" {{ ($editData->gender == 'Male')? 'selected': '' }} >Male</option>
			<option value="Female" {{ ($editData->gender == 'Female')? 'selected': '' }}>Female</option>
			 
		</select>
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 4 --> 
 
 			
 		</div> <!-- End 2nd Row -->



<div class="row"> <!-- 3rd Row -->


<div class="col-md-4">

 		 <div class="form-group">
		<h5>Nationality <span class="text-danger">*</span></h5>
		<div class="controls">
	 <select name="religion" id="religion" required="" class="form-control">
			<option value="" selected="" disabled="">Select Nationality</option>
			<option value="afghan"{{ ($editData['student']['religion'] == 'Afghan')? 'selected':'' }}>Afghan</option>
			<option value="albanian"{{ ($editData['student']['religion'] == 'Albanian')? 'selected':'' }}>Albanian</option>
			<option value="algerian"{{ ($editData['student']['religion'] == 'Algerian')? 'selected':'' }}>Algerian</option>
			<option value="american"{{ ($editData['student']['religion'] == 'American')? 'selected':'' }}>American</option>
			<option value="andorran"{{ ($editData['student']['religion'] == 'Andorran')? 'selected':'' }}>Andorran</option>
			<option value="angolan"{{ ($editData['student']['religion'] == 'Angolan')? 'selected':'' }}>Angolan</option>
			<option value="antiguans"{{ ($editData['student']['religion'] == 'Antiguans')? 'selected':'' }}>Antiguans</option>
			<option value="argentinean"{{ ($editData['student']['religion'] == 'Argentinean')? 'selected':'' }}>Argentinean</option>
			<option value="armenian"{{ ($editData['student']['religion'] == 'Armenian')? 'selected':'' }}>Armenian</option>
			<option value="australian"{{ ($editData['student']['religion'] == 'Australian')? 'selected':'' }}>Australian</option>
			<option value="austrian"{{ ($editData['student']['religion'] == 'Austrian')? 'selected':'' }}>Austrian</option>
			<option value="azerbaijani"{{ ($editData['student']['religion'] == 'Azerbaijani')? 'selected':'' }}>Azerbaijani</option>
			<option value="bahamian"{{ ($editData['student']['religion'] == 'Bahamian')? 'selected':'' }}>Bahamian</option>
			<option value="bahraini"{{ ($editData['student']['religion'] == 'Bahraini')? 'selected':'' }}>Bahraini</option>
			<option value="bangladeshi"{{ ($editData['student']['religion'] == 'Bangladeshi')? 'selected':'' }}>Bangladeshi</option>
			<option value="barbadian"{{ ($editData['student']['religion'] == 'Barbadian')? 'selected':'' }}>Barbadian</option>
			<option value="barbudans"{{ ($editData['student']['religion'] == 'Barbudans')? 'selected':'' }}>Barbudans</option>
			<option value="batswana"{{ ($editData['student']['religion'] == 'Batswana')? 'selected':'' }}>Batswana</option>
			<option value="belarusian"{{ ($editData['student']['religion'] == 'Belarusian')? 'selected':'' }}>Belarusian</option>
			<option value="belgian"{{ ($editData['student']['religion'] == 'Belgian')? 'selected':'' }}>Belgian</option>
			<option value="belizean"{{ ($editData['student']['religion'] == 'Belizean')? 'selected':'' }}>Belizean</option>
			<option value="beninese"{{ ($editData['student']['religion'] == 'Beninese')? 'selected':'' }}>Beninese</option>
			<option value="bhutanese"{{ ($editData['student']['religion'] == 'Bhutanese')? 'selected':'' }}>Bhutanese</option>
			<option value="bolivian"{{ ($editData['student']['religion'] == 'Bolivian')? 'selected':'' }}>Bolivian</option>
			<option value="bosnian"{{ ($editData['student']['religion'] == 'Bosnian')? 'selected':'' }}>Bosnian</option>
			<option value="brazilian"{{ ($editData['student']['religion'] == 'Brazilian')? 'selected':'' }}>Brazilian</option>
			<option value="british"{{ ($editData['student']['religion'] == 'British')? 'selected':'' }}>British</option>
			<option value="bruneian"{{ ($editData['student']['religion'] == 'Bruneian')? 'selected':'' }}>Bruneian</option>
			<option value="bulgarian"{{ ($editData['student']['religion'] == 'Bulgarian')? 'selected':'' }}>Bulgarian</option>
			<option value="burkinabe"{{ ($editData['student']['religion'] == 'Burkinabe')? 'selected':'' }}>Burkinabe</option>
			<option value="burmese"{{ ($editData['student']['religion'] == 'Burmese')? 'selected':'' }}>Burmese</option>
			<option value="burundian"{{ ($editData['student']['religion'] == 'Burundian')? 'selected':'' }}>Burundian</option>
			<option value="cambodian"{{ ($editData['student']['religion'] == 'Cambodian')? 'selected':'' }}>Cambodian</option>
			<option value="cameroonian"{{ ($editData['student']['religion'] == 'Cameroonian')? 'selected':'' }}>Cameroonian</option>
			<option value="canadian"{{ ($editData['student']['religion'] == 'Canadian')? 'selected':'' }}>Canadian</option>
			<option value="cape verdean"{{ ($editData['student']['religion'] == 'Cape Verdean')? 'selected':'' }}>Cape Verdean</option>
			<option value="central african"{{ ($editData['student']['religion'] == 'Central African')? 'selected':'' }}>Central African</option>
			<option value="chadian"{{ ($editData['student']['religion'] == 'Chadian')? 'selected':'' }}>Chadian</option>
			<option value="chilean"{{ ($editData['student']['religion'] == 'Chilean')? 'selected':'' }}>Chilean</option>
			<option value="chinese"{{ ($editData['student']['religion'] == 'Chinese')? 'selected':'' }}>Chinese</option>
			<option value="colombian"{{ ($editData['student']['religion'] == 'Colombian')? 'selected':'' }}>Colombian</option>
			<option value="comoran"{{ ($editData['student']['religion'] == 'Comoran')? 'selected':'' }}>Comoran</option>
			<option value="congolese"{{ ($editData['student']['religion'] == 'Congolese')? 'selected':'' }}>Congolese</option>
			<option value="costa rican"{{ ($editData['student']['religion'] == 'Costa Rican')? 'selected':'' }}>Costa Rican</option>
			<option value="croatian"{{ ($editData['student']['religion'] == 'Croatian')? 'selected':'' }}>Croatian</option>
			<option value="cuban"{{ ($editData['student']['religion'] == 'Cuban')? 'selected':'' }}>Cuban</option>
			<option value="cypriot"{{ ($editData['student']['religion'] == 'Cypriot')? 'selected':'' }}>Cypriot</option>
			<option value="czech"{{ ($editData['student']['religion'] == 'Czech')? 'selected':'' }}>Czech</option>
			<option value="danish"{{ ($editData['student']['religion'] == 'Danish')? 'selected':'' }}>Danish</option>
			<option value="djibouti"{{ ($editData['student']['religion'] == 'Djibouti')? 'selected':'' }}>Djibouti</option>
			<option value="dominican"{{ ($editData['student']['religion'] == 'Dominican')? 'selected':'' }}>Dominican</option>
			<option value="dutch"{{ ($editData['student']['religion'] == 'Dutch')? 'selected':'' }}>Dutch</option>
			<option value="east timorese"{{ ($editData['student']['religion'] == 'East Timorese')? 'selected':'' }}>East Timorese</option>
			<option value="ecuadorean"{{ ($editData['student']['religion'] == 'Ecuadorean')? 'selected':'' }}>Ecuadorean</option>
			<option value="egyptian"{{ ($editData['student']['religion'] == 'Egyptian')? 'selected':'' }}>Egyptian</option>
			<option value="emirian"{{ ($editData['student']['religion'] == 'Emirian')? 'selected':'' }}>Emirian</option>
			<option value="equatorial guinean"{{ ($editData['student']['religion'] == 'Equatorial Guinean')? 'selected':'' }}>Equatorial Guinean</option>
			<option value="eritrean"{{ ($editData['student']['religion'] == 'Eritrean')? 'selected':'' }}>Eritrean</option>
			<option value="estonian"{{ ($editData['student']['religion'] == 'Estonian')? 'selected':'' }}>Estonian</option>
			<option value="ethiopian"{{ ($editData['student']['religion'] == 'Ethiopian')? 'selected':'' }}>Ethiopian</option>
			<option value="fijian"{{ ($editData['student']['religion'] == 'Fijian')? 'selected':'' }}>Fijian</option>
			<option value="filipino"{{ ($editData['student']['religion'] == 'Filipino')? 'selected':'' }}>Filipino</option>
			<option value="finnish"{{ ($editData['student']['religion'] == 'Finnish')? 'selected':'' }}>Finnish</option>
			<option value="french"{{ ($editData['student']['religion'] == 'French')? 'selected':'' }}>French</option>
			<option value="gabonese"{{ ($editData['student']['religion'] == 'Gabonese')? 'selected':'' }}>Gabonese</option>
			<option value="gambian"{{ ($editData['student']['religion'] == 'Gambian')? 'selected':'' }}>Gambian</option>
			<option value="georgian"{{ ($editData['student']['religion'] == 'Georgian')? 'selected':'' }}>Georgian</option>
			<option value="german"{{ ($editData['student']['religion'] == 'German')? 'selected':'' }}>German</option>
			<option value="ghanaian"{{ ($editData['student']['religion'] == 'Ghanaian')? 'selected':'' }}>Ghanaian</option>
			<option value="greek"{{ ($editData['student']['religion'] == 'Greek')? 'selected':'' }}>Greek</option>
			<option value="grenadian"{{ ($editData['student']['religion'] == 'Grenadian')? 'selected':'' }}>Grenadian</option>
			<option value="guatemalan"{{ ($editData['student']['religion'] == 'Guatemalan')? 'selected':'' }}>Guatemalan</option>
			<option value="guinea-bissauan"{{ ($editData['student']['religion'] == 'Guinea-Bissauan')? 'selected':'' }}>Guinea-Bissauan</option>
			<option value="guinean"{{ ($editData['student']['religion'] == 'Guinean')? 'selected':'' }}>Guinean</option>
			<option value="guyanese"{{ ($editData['student']['religion'] == 'Guyanese')? 'selected':'' }}>Guyanese</option>
			<option value="haitian"{{ ($editData['student']['religion'] == 'Haitian')? 'selected':'' }}>Haitian</option>
			<option value="herzegovinian"{{ ($editData['student']['religion'] == 'Herzegovinian')? 'selected':'' }}>Herzegovinian</option>
			<option value="honduran"{{ ($editData['student']['religion'] == 'Honduran')? 'selected':'' }}>Honduran</option>
			<option value="hungarian"{{ ($editData['student']['religion'] == 'Hungarian')? 'selected':'' }}>Hungarian</option>
			<option value="icelander"{{ ($editData['student']['religion'] == 'Icelander')? 'selected':'' }}>Icelander</option>
			<option value="indian"{{ ($editData['student']['religion'] == 'Indian')? 'selected':'' }}>Indian</option>
			<option value="indonesian"{{ ($editData['student']['religion'] == 'Indonesian')? 'selected':'' }}>Indonesian</option>
			<option value="iranian"{{ ($editData['student']['religion'] == 'Iranian')? 'selected':'' }}>Iranian</option>
			<option value="iraqi"{{ ($editData['student']['religion'] == 'Iraqi')? 'selected':'' }}>Iraqi</option>
			<option value="irish"{{ ($editData['student']['religion'] == 'Irish')? 'selected':'' }}>Irish</option>
			<option value="israeli"{{ ($editData['student']['religion'] == 'Israeli')? 'selected':'' }}>Israeli</option>
			<option value="italian"{{ ($editData['student']['religion'] == 'Italian')? 'selected':'' }}>Italian</option>
			<option value="ivorian"{{ ($editData['student']['religion'] == 'Ivorian')? 'selected':'' }}>Ivorian</option>
			<option value="jamaican"{{ ($editData['student']['religion'] == 'Jamaican')? 'selected':'' }}>Jamaican</option>
			<option value="japanese"{{ ($editData['student']['religion'] == 'Japanese')? 'selected':'' }}>Japanese</option>
			<option value="jordanian"{{ ($editData['student']['religion'] == 'Jordanian')? 'selected':'' }}>Jordanian</option>
			<option value="kazakhstani"{{ ($editData['student']['religion'] == 'Kazakhstani')? 'selected':'' }}>Kazakhstani</option>
			<option value="kenyan"{{ ($editData['student']['religion'] == 'Kenyan')? 'selected':'' }}>Kenyan</option>
			<option value="kittian and nevisian"{{ ($editData['student']['religion'] == 'Kittian and Nevisian')? 'selected':'' }}>Kittian and Nevisian</option>
			<option value="kuwaiti"{{ ($editData['student']['religion'] == 'Kuwaiti')? 'selected':'' }}>Kuwaiti</option>
			<option value="kyrgyz"{{ ($editData['student']['religion'] == 'Kyrgyz')? 'selected':'' }}>Kyrgyz</option>
			<option value="laotian"{{ ($editData['student']['religion'] == 'Laotian')? 'selected':'' }}>Laotian</option>
			<option value="latvian"{{ ($editData['student']['religion'] == 'Latvian')? 'selected':'' }}>Latvian</option>
			<option value="lebanese"{{ ($editData['student']['religion'] == 'Lebanese')? 'selected':'' }}>Lebanese</option>
			<option value="liberian"{{ ($editData['student']['religion'] == 'Liberian')? 'selected':'' }}>Liberian</option>
			<option value="libyan"{{ ($editData['student']['religion'] == 'Libyan')? 'selected':'' }}>Libyan</option>
			<option value="liechtensteiner"{{ ($editData['student']['religion'] == 'Liechtensteiner')? 'selected':'' }}>Liechtensteiner</option>
			<option value="lithuanian"{{ ($editData['student']['religion'] == 'Lithuanian')? 'selected':'' }}>Lithuanian</option>
			<option value="luxembourger"{{ ($editData['student']['religion'] == 'Luxembourger')? 'selected':'' }}>Luxembourger</option>
			<option value="macedonian"{{ ($editData['student']['religion'] == 'Macedonian')? 'selected':'' }}>Macedonian</option>
			<option value="malagasy"{{ ($editData['student']['religion'] == 'Malagasy')? 'selected':'' }}>Malagasy</option>
			<option value="malawian"{{ ($editData['student']['religion'] == 'Malawian')? 'selected':'' }}>Malawian</option>
			<option value="malaysian"{{ ($editData['student']['religion'] == 'Malaysian')? 'selected':'' }}>Malaysian</option>
			<option value="maldivan"{{ ($editData['student']['religion'] == 'Maldivan')? 'selected':'' }}>Maldivan</option>
			<option value="malian"{{ ($editData['student']['religion'] == 'Malian')? 'selected':'' }}>Malian</option>
			<option value="maltese"{{ ($editData['student']['religion'] == 'Maltese')? 'selected':'' }}>Maltese</option>
			<option value="marshallese"{{ ($editData['student']['religion'] == 'Marshallese')? 'selected':'' }}>Marshallese</option>
			<option value="mauritanian"{{ ($editData['student']['religion'] == 'Mauritanian')? 'selected':'' }}>Mauritanian</option>
			<option value="mauritian"{{ ($editData['student']['religion'] == 'Mauritian')? 'selected':'' }}>Mauritian</option>
			<option value="mexican"{{ ($editData['student']['religion'] == 'Mexican')? 'selected':'' }}>Mexican</option>
			<option value="micronesian"{{ ($editData['student']['religion'] == 'Micronesian')? 'selected':'' }}>Micronesian</option>
			<option value="moldovan"{{ ($editData['student']['religion'] == 'Moldovan')? 'selected':'' }}>Moldovan</option>
			<option value="monacan"{{ ($editData['student']['religion'] == 'Monacan')? 'selected':'' }}>Monacan</option>
			<option value="mongolian"{{ ($editData['student']['religion'] == 'Mongolian')? 'selected':'' }}>Mongolian</option>
			<option value="moroccan"{{ ($editData['student']['religion'] == 'Moroccan')? 'selected':'' }}>Moroccan</option>
			<option value="mosotho"{{ ($editData['student']['religion'] == 'Mosotho')? 'selected':'' }}>Mosotho</option>
			<option value="motswana"{{ ($editData['student']['religion'] == 'Motswana')? 'selected':'' }}>Motswana</option>
			<option value="mozambican"{{ ($editData['student']['religion'] == 'Mozambican')? 'selected':'' }}>Mozambican</option>
			<option value="namibian"{{ ($editData['student']['religion'] == 'Namibian')? 'selected':'' }}>Namibian</option>
			<option value="nauruan"{{ ($editData['student']['religion'] == 'Nauruan')? 'selected':'' }}>Nauruan</option>
			<option value="nepalese"{{ ($editData['student']['religion'] == 'Nepalese')? 'selected':'' }}>Nepalese</option>
			<option value="new zealander"{{ ($editData['student']['religion'] == 'New Zealander')? 'selected':'' }}>New Zealander</option>
			<option value="ni-vanuatu"{{ ($editData['student']['religion'] == 'Ni-Vanuatu')? 'selected':'' }}>Ni-Vanuatu</option>
			<option value="nicaraguan"{{ ($editData['student']['religion'] == 'Nicaraguan')? 'selected':'' }}>Nicaraguan</option>
			<option value="nigerien"{{ ($editData['student']['religion'] == 'Nigerien')? 'selected':'' }}>Nigerien</option>
			<option value="north korean"{{ ($editData['student']['religion'] == 'North Korean')? 'selected':'' }}>North Korean</option>
			<option value="northern irish"{{ ($editData['student']['religion'] == 'Northern Irish')? 'selected':'' }}>Northern Irish</option>
			<option value="norwegian"{{ ($editData['student']['religion'] == 'Norwegian')? 'selected':'' }}>Norwegian</option>
			<option value="omani"{{ ($editData['student']['religion'] == 'Omani')? 'selected':'' }}>Omani</option>
			<option value="pakistani"{{ ($editData['student']['religion'] == 'Pakistani')? 'selected':'' }}>Pakistani</option>
			<option value="palauan"{{ ($editData['student']['religion'] == 'Palauan')? 'selected':'' }}>Palauan</option>
			<option value="panamanian"{{ ($editData['student']['religion'] == 'Panamanian')? 'selected':'' }}>Panamanian</option>
			<option value="papua new guinean"{{ ($editData['student']['religion'] == 'Papua New Guinean')? 'selected':'' }}>Papua New Guinean</option>
			<option value="paraguayan"{{ ($editData['student']['religion'] == 'Paraguayan')? 'selected':'' }}>Paraguayan</option>
			<option value="peruvian"{{ ($editData['student']['religion'] == 'Peruvian')? 'selected':'' }}>Peruvian</option>
			<option value="polish"{{ ($editData['student']['religion'] == 'Polish')? 'selected':'' }}>Polish</option>
			<option value="portuguese"{{ ($editData['student']['religion'] == 'Portuguese')? 'selected':'' }}>Portuguese</option>
			<option value="qatari"{{ ($editData['student']['religion'] == 'Qatari')? 'selected':'' }}>Qatari</option>
			<option value="romanian"{{ ($editData['student']['religion'] == 'Romanian')? 'selected':'' }}>Romanian</option>
			<option value="russian"{{ ($editData['student']['religion'] == 'Russian')? 'selected':'' }}>Russian</option>
			<option value="rwandan"{{ ($editData['student']['religion'] == 'Rwandan')? 'selected':'' }}>Rwandan</option>
			<option value="saint lucian"{{ ($editData['student']['religion'] == 'Saint Lucian')? 'selected':'' }}>Saint Lucian</option>
			<option value="salvadoran"{{ ($editData['student']['religion'] == 'Salvadoran')? 'selected':'' }}>Salvadoran</option>
			<option value="samoan"{{ ($editData['student']['religion'] == 'Samoan')? 'selected':'' }}>Samoan</option>
			<option value="san marinese"{{ ($editData['student']['religion'] == 'San Marinese')? 'selected':'' }}>San Marinese</option>
			<option value="sao tomean"{{ ($editData['student']['religion'] == 'Sao Tomean')? 'selected':'' }}>Sao Tomean</option>
			<option value="saudi"{{ ($editData['student']['religion'] == 'Saudi')? 'selected':'' }}>Saudi</option>
			<option value="scottish"{{ ($editData['student']['religion'] == 'Scottish')? 'selected':'' }}>Scottish</option>
			<option value="senegalese"{{ ($editData['student']['religion'] == 'Senegalese')? 'selected':'' }}>Senegalese</option>
			<option value="serbian"{{ ($editData['student']['religion'] == 'Serbian')? 'selected':'' }}>Serbian</option>
			<option value="seychellois"{{ ($editData['student']['religion'] == 'Seychellois')? 'selected':'' }}>Seychellois</option>
			<option value="sierra leonean"{{ ($editData['student']['religion'] == 'Sierra Leonean')? 'selected':'' }}>Sierra Leonean</option>
			<option value="singaporean"{{ ($editData['student']['religion'] == 'Singaporean')? 'selected':'' }}>Singaporean</option>
			<option value="slovakian"{{ ($editData['student']['religion'] == 'Slovakian')? 'selected':'' }}>Slovakian</option>
			<option value="slovenian"{{ ($editData['student']['religion'] == 'Slovenian')? 'selected':'' }}>Slovenian</option>
			<option value="solomon islander"{{ ($editData['student']['religion'] == 'Solomon Islander')? 'selected':'' }}>Solomon Islander</option>
			<option value="somali"{{ ($editData['student']['religion'] == 'Somali')? 'selected':'' }}>Somali</option>
			<option value="south african"{{ ($editData['student']['religion'] == 'South African')? 'selected':'' }}>South African</option>
			<option value="south korean"{{ ($editData['student']['religion'] == 'South Korean')? 'selected':'' }}>South Korean</option>
			
			<option value="spanish"{{ ($editData['student']['religion'] == 'Spanish')? 'selected':'' }}>Spanish</option>
			<option value="sri lankan"{{ ($editData['student']['religion'] == 'Sri Lankan')? 'selected':'' }}>Sri Lankan</option>
			<option value="sudanese"{{ ($editData['student']['religion'] == 'Sudanese')? 'selected':'' }}>Sudanese</option>
			<option value="surinamer"{{ ($editData['student']['religion'] == 'Surinamer')? 'selected':'' }}>Surinamer</option>
			<option value="swazi"{{ ($editData['student']['religion'] == 'Swazi')? 'selected':'' }}>Swazi</option>
			<option value="swedish"{{ ($editData['student']['religion'] == 'Swedish')? 'selected':'' }}>Swedish</option>
			<option value="swiss"{{ ($editData['student']['religion'] == 'Swiss')? 'selected':'' }}>Swiss</option>
			<option value="syrian"{{ ($editData['student']['religion'] == 'Syrian')? 'selected':'' }}>Syrian</option>
			<option value="taiwanese"{{ ($editData['student']['religion'] == 'Taiwanese')? 'selected':'' }}>Taiwanese</option>
			<option value="tajik"{{ ($editData['student']['religion'] == 'Tajik')? 'selected':'' }}>Tajik</option>
			<option value="tanzanian"{{ ($editData['student']['religion'] == 'Tanzanian')? 'selected':'' }}>Tanzanian</option>
			<option value="thai"{{ ($editData['student']['religion'] == 'Thai')? 'selected':'' }}>Thai</option>
			<option value="togolese"{{ ($editData['student']['religion'] == 'Togolese')? 'selected':'' }}>Togolese</option>
			<option value="tongan"{{ ($editData['student']['religion'] == 'Tongan')? 'selected':'' }}>Tongan</option>
			<option value="trinidadian or tobagonian"{{ ($editData['student']['religion'] == 'Trinidadian or Tobagonian')? 'selected':'' }}>Trinidadian or Tobagonian</option>
			<option value="tunisian"{{ ($editData['student']['religion'] == 'Tunisian')? 'selected':'' }}>Tunisian</option>
			<option value="turkish"{{ ($editData['student']['religion'] == 'Turkish')? 'selected':'' }}>Turkish</option>
			<option value="tuvaluan"{{ ($editData['student']['religion'] == 'Tuvaluan')? 'selected':'' }}>Tuvaluan</option>
			<option value="ugandan"{{ ($editData['student']['religion'] == 'Ugandan')? 'selected':'' }}>Ugandan</option>
			<option value="ukrainian"{{ ($editData['student']['religion'] == 'Ukrainian')? 'selected':'' }}>Ukrainian</option>
			<option value="uruguayan"{{ ($editData['student']['religion'] == 'Uruguayan')? 'selected':'' }}>Uruguayan</option>
			<option value="uzbekistani"{{ ($editData['student']['religion'] == 'Uzbekistani')? 'selected':'' }}>Uzbekistani</option>
			<option value="venezuelan"{{ ($editData['student']['religion'] == 'Venezuelan')? 'selected':'' }}>Venezuelan</option>
			<option value="vietnamese"{{ ($editData['student']['religion'] == 'Vietnamese')? 'selected':'' }}>Vietnamese</option>
			<option value="welsh"{{ ($editData['student']['religion'] == 'Welsh')? 'selected':'' }}>Welsh</option>
			<option value="yemenite"{{ ($editData['student']['religion'] == 'Yemenite')? 'selected':'' }}>Yemenite</option>
			<option value="zambian"{{ ($editData['student']['religion'] == 'Zambian')? 'selected':'' }}>Zambian</option>
			<option value="zimbabwean"{{ ($editData['student']['religion'] == 'Zimbabwean')? 'selected':'' }}>Zimbabwean</option>
			 
		</select>
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 4 --> 



 			
 			<div class="col-md-4">

 		 <div class="form-group">
		<h5>Date of Birth <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="date" name="dob" class="form-control" required="" value="{{ $editData->dob }}"  > 
	  </div>		 
	  </div>

 			</div> <!-- End Col md 4 -->


	<div class="col-md-4">

 		  <div class="form-group">
		<h5>Designation <span class="text-danger">*</span></h5>
		<div class="controls">
	 <select name="designation_id" required="" class="form-control">
			<option value="" selected="" disabled="">Select Year</option>
			 @foreach($designation as $desi)
 <option value="{{ $desi->id }}" {{ ($editData->designation_id == $desi->id)?'selected':'' }} >{{ $desi->name }}</option>
		 	@endforeach
			 
		</select>
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 4 --> 
 
 			
 		</div> <!-- End 3rd Row -->




<div class="row"> <!-- 4TH Row -->

@if(!@editData)
<div class="col-md-3">

 		 <div class="form-group">
		<h5>Salary <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="salary" class="form-control" required="" value="{{ $editData->salary }}" > 
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 3 --> 
@endif


 @if(!@editData)
 		<div class="col-md-3">

 		<div class="form-group">
		<h5>Joining Date <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="date" name="join_date" class="form-control" required="" value="{{ $editData->join_date }}"> 
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 3 --> 
@endif

           <div class="col-md-3">

<div class="form-group">
		<h5>Profile Image <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="file" name="image" class="form-control" id="image" >  </div>
	 </div>
 		 
	  
 			</div> <!-- End Col md 3 --> 


 			<div class="col-md-3">

 		 <div class="form-group">
		<div class="controls">
		<img id="showImage" src="{{ (!empty($editData->image))? url('upload/employee_images/'.$editData->image):url('upload/no_image.jpg') }}" style="width: 100px; width: 100px; border: 1px solid #000000;"> 

	 </div>
	 </div>
	  
 			</div> <!-- End Col md 3 --> 
 
 			
 		</div> <!-- End 4TH Row -->

 
							 
						<div class="text-xs-right">
	 <input type="submit" class="btn btn-rounded btn-info mb-5" value="Update">
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>


 
 
	  
	  </div>
  </div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>



@endsection
