@extends('frontendpages.header') 
@section('content') 
		
		
<div style="max-width: 900px; margin: auto; font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'">

<!-- <form role="form" id="membertkt"  method="post" action="{{url('storememberticket')}}" enctype="multipart/form-data"> 
       <input type="hidden" name="_token" value="{{csrf_token()}}">  
	   <input type="hidden" name="persondate" value="{{ $persondate }}">  
	   <input type="hidden" name="persontodate" value="{{ $persontodate }}">  
	   <input type="hidden" name="photo" value="{{ $passportimage }}">  
	   <input type="hidden" name="sign" value="{{ $signature }}">  
	   <input type="hidden" name="proof_age" value="{{ $ageproof }}">  
	   <input type="hidden" name="paymenttype_id" value="{{ $paymenttype_id }}">  
	   <input type="hidden" name="code" value="{{ $code }}">  
	   <input type="hidden" name="title" value="{{ $title }}">  
	   <input type="hidden" name="amount" value="{{ $amount }}">  
	   <input type="hidden" name="shortcode" value="{{ $ageproof }}">  
	   <input type="hidden" name="aadhaar" value="{{ $aadhaar }}">  -->
	   
	   
	   <form role="form" id="membertkt"  method="post" action="https://test.payu.in/_payment">
<input type="hidden" name="firstname" value="{{ $data->personname }}" />
<input type="hidden" name="lastname" value="" />
{{-- <input type="hidden" name="surl" value="http://122.175.55.219/bgtesting/paymentsuccess" /> --}}
<input type="hidden" name="surl" value="https://fdc.telangana.gov.in/paymentsuccess" />
<input type="hidden" name="phone" value="{{ $data->personcontact }}" />
<input type="hidden" name="key" value="7rnFly" />
<input type="hidden" name="hash" value ="{{$output}}" />
<input type="hidden" name="curl" value="https://fdc.telangana.gov.in/paymentcancel" />
<input type="hidden" name="furl" value="https://fdc.telangana.gov.in/paymentfail" />
<input type="hidden" name="txnid" value="{{$orderid}}" />
<input type="hidden" name="productinfo" value="{{$title}}" />
<input type="hidden" name="amount" value="{{$amount}}" />
<input type="hidden" name="udf1" value="{{$passportimage}},{{$signature}},{{$ageproof}},{{$orderid}},{{$amount}}" />
<input type="hidden" name="udf2" value="{{$persondate}},{{$persontodate}},{{$data->dob}}" />
<input type="hidden" name="udf3" value="{{$code}},{{ $paymenttype_id }},{{ $data->membertype }},{{ $data->pid }},{{$data->card_num}}" />
<input type="hidden" name="udf4" value="{{ $data->fathername }},{{ $data->gender }},{{ $data->occupation }},{{ $data->place }},{{$aadhaar}}" />
<input type="hidden" name="udf5" value="{{$data->address}}" />
<input type="hidden" name="email" value="{{ $data->personemail}}" />
<input type="hidden" name="gender1" value="{{ $data->gender}}" />

	<div style="text-align: center">
		<table width="100%" border="0">
		  <tbody>
			<tr>
			  <td style="font-size: 24px; font-weight: 700; padding-bottom: 15px">Telangana State Forest Development Corporation Ltd.</td>
			</tr>
			<tr>
			  <td style="font-size: 21px; font-weight: 700; padding-bottom: 10px">SKVBR Botanical Garden, Kothaguda RF.</td>
			</tr>
			@php($cyear = date('Y'))
			@php($nxtyear = $cyear+1)
			  <td  style="font-size: 19px; font-weight: 700; padding-bottom: 30px;">Application form for annual entry permit for the year <input style="width:100px;border:none; border-bottom:1px solid #000; type="text" name="year" value="{{ $cyear }}-{{ $nxtyear }}"/></td>
			</tr>
		  </tbody>
		</table>
	</div>
	<div>
		
		<table width="70%" border="0" style="float: left">
		  <tbody>
			<tr>
			  <td width="40%">1. Name of the applicant (in block letters) </td>
			  <td width="5%" align="right">:</td>
			  <td width="55%"><input style="width:100%;border:none;" type="text" name="personname" value="{{ $data->personname }}"/></td>
			</tr>
			<tr>
			  <td width="40%">2. Gender </td>
			  <td width="5%" align="right">:</td>
			  <td width="55%"><input style="width:100%;border:none;" type="text" name="gender" value="{{ ($data->gender == 'M') ? 'Male' : 'Female' }}"/></td>
			</tr>
			<tr>
			  <td width="40%">3. Father’s/ Husband’s Name  </td>
			  <td width="5%" align="right">:</td>
			  <td width="55%"><input style="width:100%;border:none;" type="text" name="fathername" value="{{ $data->fathername }}"/></td>
			</tr>
			<tr>
			  <td width="40%">4. Date of Birth (Enclose Xerox copy of age proof) </td>
			  <td width="5%" align="right">:</td>
			  <td width="55%"><input style="width:100%;border:none;" type="text" name="dob" value="{{ $data->dob }}"/></td>
			</tr>
			<tr>
			  <td width="40%">5. Occupation </td>
			  <td width="5%" align="right">:</td>
			  <td width="55%"><input style="width:100%;border:none;" type="text" name="occupation" value="{{ $data->occupation }}"/></td>
			</tr>
			<tr>
			  <td width="40%">6. Residential Address  </td>
			  <td width="5%" align="right">:</td>
			  <td width="55%"><textarea style="width: 300px;">{{ $data->address }}</textarea>
				  {{-- <input style="width:100%;border:none;" type="text" name="address" value="{{ $data->address }}"/> --}}
			  </td>
			</tr>
			<tr>
			  <td width="40%">7. Contact Details </td>
			  <td width="5%" align="right">:</td>
			  <td width="55%"><input style="width:100%;border:none;" type="text"/></td>
			</tr>
			<tr>
			  <td width="40%" align="right"> Mobile Phone </td>
			  <td width="5%" align="right">:</td>
			  <td width="55%"><input style="width:100%;border:none;" type="text" name="personcontact" value="{{ $data->personcontact }}"/></td>
			</tr>
			<tr>
			  <td width="40%" align="right">E-mail Address </td>
			  <td width="5%" align="right">:</td>
			  <td width="55%"><input style="width:100%;border:none;" type="text" name="personemail" value="{{ $data->personemail }}"/></td>
			</tr>
			 
			
		  </tbody>
		</table>
		<table width="30%" border="0" style="float:right;">
		  <tbody>
			<tr>
			  <td style="padding-top: 20px;"></td>
			</tr>
			<tr>
				<td><div style="width:170px; height: 180px"><img src="{{url('public/passport/' .$passportimage)}}" alt="Image"/></div>
				
				</td>  
			</tr>  
		  </tbody>
		</table>
		<div style="clear: both"></div>

	
	</div>
		<div>
			<div style="text-align: center; font-size: 20px; text-decoration: underline; margin-top: 60px">UNDERTAKING </div>
			<div style="text-align:center; padding-top: 30px;">
			I <span style="border-bottom: 1px solid #000; display: inline-block; width:300px; padding-bottom: 4px;">{{ $data->personname}}</span> S/o. / D/o./ W/o.<span style="border-bottom: 1px solid #000; display: inline-block; width:300px; padding-bottom: 4px;">{{ $data->fathername}}</span>
			</div>
			<div style="padding-top: 20px">
			<table width="100%" border="0">
  <tbody>
    <tr>
      <td>1. The space belongs to plants and animals please respect the space belonging to them. </td>
    </tr>
    <tr>
      <td>2. Shall use the designed footpaths for walking.</td>
    </tr>
    <tr>
      <td>3. Shall avoid doing any of the things Prohibited in the Park, namely Smoking,
Consumption of Alcohol, Feeding or teasing of Wildlife, littering, carrying polythene /
plastic materials, pets, public address system and other audio-video, equipment, play
things, etc., 
</td>
    </tr>
    <tr>
      <td>4. Shall not organize any meeting, campaigns, rise slogans, for laughing or crying clubs,
which will disturb the habitat. 
</td>
    </tr>
    <tr>
      <td>5. Shall not distribute pamphlets or any others reading material in the park. </td>
    </tr>
    <tr>
      <td>6. Shall not cause any nuisance or obstruction to other visitors.</td>
    </tr>
	  <tr>
      <td>7. Shall not interfere in the official duties of the Park Staff.</td>
    </tr>
	  <tr>
      <td>8. Shall not cause any noise pollution. </td>
    </tr>
	  <tr>
      <td>9. Don’t pluck plants, flowers, fruit and leaves. </td>
    </tr>
	  <tr>
      <td>10. Normal timings is morning 5.30 AM – 9.30AM & Evening 3.30PM – 7.30PM (seasonal
variation will be there) 
</td>
    </tr>
	  <tr style="padding-top: 20px; display: block; padding-bottom: 20px;">
      <td>I understand that violation of the above rules may lead to the cancellation of the Entry
Permit besides legal action like prosecution as per the provision of the Forest Act. 
</td>
    </tr>
	  
  </tbody>
</table>
		<div>
		<table width="100%" border="0">
		  <tbody>
			<tr>
			  <td width="15%">Date </td>
			  <td width="5%" align="right">:</td>
			  <td width="80%"><input style="width:100%;border:none;" type="text" name="date" value="{{ date('d-m-Y')}}"/></td>
			</tr>
			<tr>
			  <td width="15%">Place </td>
			  <td width="5%" align="right">:</td>
			  <td width="80%"><input style="width:100%;border:none;" type="text" name="place" value="{{$data->place}}"/></td>
			</tr>
			<tr>
			  <td width="15%" style="vertical-align:top">Encl  </td>
			  <td width="5%" style="vertical-align:top" align="right">:</td>
			  <td width="80%" >
					<div>1. One Passport size Photograph </div>
				  <div>2. Copy of the Aadhar Card </div>
			  </td>
			</tr>
			  
			
			 
			
		  </tbody>
		</table>
		
		<div style="text-align: right; padding-top:40px; padding-bottom: 20px">
		{{-- <img width="200" src="{{url('public/signature/' .$signature)}}" alt="Image"/> --}}
		<br>Signature of the Applicant 
</div>
<div style="margin-bottom:20px; text-align:center">
		<input type="submit" class="btn btn-success btn-sm" onclick="return confirm('Are you sure?')"   name="submit" id="submit" placeholder="submit" value="PAY NOW" aria-controls="dataTable">
		{{-- <a class="btn btn-success btn-sm" href="{{ url('downloadapplicationform')}}">Download</a> --}}
</div>
		


	</div>		

			</div>
		</div>
		</form>
		
	</div>	


@endsection