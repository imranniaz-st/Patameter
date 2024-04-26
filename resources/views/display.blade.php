<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parameter Display</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"></head>
   
<body>
            <div class="container">
                <h1>Xfer Form</h1>
                <p>CURRENTDATETIME: {{$currentDateTime}}</p>
                
                <!-- Form start -->
                <form action="{{ route('avatar_leads.store') }}" method="POST">
                    @csrf <!-- CSRF token for Laravel -->
                     <div class="form-group">
                        <label for="verifier">Lead ID </label>
                        <input type="text" class="form-control" id="lead_id" name="lead_id" placeholder="Lead ID" value="{{$lead_id}}" >
                    </div>
                    
                    <div class="form-group">
                        <label for="agent_id">Agent Name</label>
                        <input type="text" class="form-control" id="agent_name" name="agent_name" placeholder="Agent Name" value="{{$fullname}}" >
                    </div>
                    
                     
                    <div class="form-group">
                        <label for="dialer_id">Dialer ID</label>
                    <input type="text" class="form-control" id="dialer_id" name="dailer_no" placeholder="Dialer ID" value="{{$closer}}">
                        </div>
                        <div class="form-group">
                            <label for="smoker">Smoker</label>
                            <select class="form-control" id="smoker" name="smoker">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                            <select class="form-control" id="closer_name" name="closer_name">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="AGE">AGE</label>
                            <select class="form-control">
                                <option disabled selected>Select</option>
                                @for($i = 18; $i <= 100; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="dialer">Dialer No</label>
                            <input type="text" class="form-control" id="dialer_no" name="dialer_no" placeholder="dialer_no" value="{{ $dialerMatch }}">
                            <label for="dialer">Center Name</label>
                            <input type="text" class="form-control" id="dialer_no" name="dialer_no" placeholder="dialer_no" value="{{ $centerMatch }}">
                        </div>
                    </div>
                     
<input type="hidden" name="lead_id" class="hidden" value="{{ $lead_id }}">
<input type="hidden" name="list_id" id="list_id" class="hidden" value="{{ $list_id }}">
<input type="hidden" name="closer" class="hidden" value="{{ $closer }}">

<input type="hidden" name="fullname" class="hidden" value="{{ $fullname }}">
<input type="hidden" name="vendor_id" class="hidden" value="{{ $vendor_id }}">
<input type="hidden" name="gmt_offset_now" class="hidden" value="{{ $gmt_offset_now }}">
<input type="hidden" name="phone_code" class="hidden" value="{{ $phone_code }}">
<input type="hidden" name="phone_number" class="hidden" value="{{ $phone_number }}">
<input type="hidden" name="title" class="hidden" value="{{ $title }}">
<input type="hidden" name="first_name" class="hidden" value="{{ $first_name }}">
<input type="hidden" name="middle_initial" class="hidden" value="{{ $middle_initial }}">
<input type="hidden" name="last_name" class="hidden" value="{{ $last_name }}">
<input type="hidden" name="address1" class="hidden" value="{{ $address1 }}">
<input type="hidden" name="address2" class="hidden" value="{{ $address2 }}">
<input type="hidden" name="address3" class="hidden" value="{{ $address3 }}">
<input type="hidden" name="city" class="hidden" value="{{ $city }}">
<input type="hidden" name="state" class="hidden" value="{{ $state }}">
<input type="hidden" name="province" class="hidden" value="{{ $province }}">
<input type="hidden" name="postal_code" class="hidden" value="{{ $postal_code }}">
<input type="hidden" name="country_code" class="hidden" value="{{ $country_code }}">
<input type="hidden" name="gender" class="hidden" value="{{ $gender }}">
<input type="hidden" name="date_of_birth" class="hidden" value="{{ $date_of_birth }}">
<input type="hidden" name="alt_phone" class="hidden" value="{{ $alt_phone }}">
<input type="hidden" name="email" class="hidden" value="{{ $email }}">
<input type="hidden" name="security_phrase" class="hidden" value="{{ $security_phrase }}">
<input type="hidden" name="comments" class="hidden" value="{{ $comments }}">
<input type="hidden" name="user" class="hidden" value="{{ $user }}">
<input type="hidden" name="pass" class="hidden" value="{{ $pass }}">
<input type="hidden" name="orig_pass" class="hidden" value="{{ $orig_pass }}">
<input type="hidden" name="campaign" class="hidden" value="{{ $campaign }}">
<input type="hidden" name="phone_login" class="hidden" value="{{ $phone_login }}">
<input type="hidden" name="original_phone_login" class="hidden" value="{{ $original_phone_login }}">
<input type="hidden" name="phone_pass" class="hidden" value="{{ $phone_pass }}">
<input type="hidden" name="fronter" class="hidden" value="{{ $fronter }}">
<input type="hidden" name="group_a" class="hidden" value="{{ $group_a }}">
<input type="hidden" name="channel_group" class="hidden" value="{{ $channel_group }}">
<input type="hidden" name="SQLdate" class="hidden" value="{{ $SQLdate }}">
<input type="hidden" name="epoch" class="hidden" value="{{ $epoch }}">
<input type="hidden" name="uniqueid" class="hidden" value="{{ $uniqueid }}">
<input type="hidden" name="customer_zap_channel" class="hidden" value="{{ $customer_zap_channel }}">
<input type="hidden" name="customer_server_ip" class="hidden" value="{{ $customer_server_ip }}">
 <input type="hidden" name="serverip" id="server_ip" class="hidden" value="{{$server_ip}}">
<input type="hidden" name="SIPexten" class="hidden" value="{{ $SIPexten }}">
<input type="hidden" name="session_id" class="hidden" value="{{ $session_id }}">
<input type="hidden" name="phone" class="hidden" value="{{ $phone }}">
<input type="hidden" name="parked_by" class="hidden" value="{{ $parked_by }}">
<input type="hidden" name="dispo" class="hidden" value="{{ $dispo }}">
<input type="hidden" name="dialed_number" class="hidden" value="{{ $dialed_number }}">
<input type="hidden" name="dialed_label" class="hidden" value="{{ $dialed_label }}">
<input type="hidden" name="source_id" class="hidden" value="{{ $source_id }}">
<input type="hidden" name="rank" class="hidden" value="{{ $rank }}">
<input type="hidden" name="ownern" class="hidden" value="{{ $owner }}">
<input type="hidden" name="camp_script" class="hidden" value="{{ $camp_script }}">
<input type="hidden" name="in_script" class="hidden" value="{{ $in_script }}">
<input type="hidden" name="in_script_two" class="hidden" value="{{ $in_script_two }}">
<input type="hidden" name="script_width" class="hidden" value="{{ $script_width }}">
<input type="hidden" name="script_height" class="hidden" value="{{ $script_height }}">
<input type="hidden" name="agent_email" class="hidden" value="{{ $agent_email }}">
<input type="hidden" name="recording_filename" class="hidden" value="{{ $recording_filename }}">
<input type="hidden" name="recording_id" class="hidden" value="{{ $recording_id }}">
<input type="hidden" name="user_custom_one" class="hidden" value="{{ $user_custom_one }}">
<input type="hidden" name="user_custom_two" class="hidden" value="{{ $user_custom_two }}">
<input type="hidden" name="user_custom_three" class="hidden" value="{{ $user_custom_three }}">
<input type="hidden" name="user_custom_four" class="hidden" value="{{ $user_custom_four }}">
<input type="hidden" name="user_custom_five" class="hidden" value="{{ $user_custom_five }}">
<input type="hidden" name="preset_number_a" class="hidden" value="{{ $preset_number_a }}">
<input type="hidden" name="preset_number_b" class="hidden" value="{{ $preset_number_b }}">
<input type="hidden" name="preset_number_c" class="hidden" value="{{ $preset_number_c }}">
<input type="hidden" name="preset_number_d" class="hidden" value="{{ $preset_number_d }}">
<input type="hidden" name="preset_number_e" class="hidden" value="{{ $preset_number_e }}">
<input type="hidden" name="preset_dtmf_a" class="hidden" value="{{ $preset_dtmf_a }}">
<input type="hidden" name="preset_dtmf_b" class="hidden" value="{{ $preset_dtmf_b }}">
<input type="hidden" name="did_id" class="hidden" value="{{ $did_id }}">
<input type="hidden" name="did_extension" class="hidden" value="{{ $did_extension }}">
<input type="hidden" name="did_pattern" class="hidden" value="{{ $did_pattern }}">
<input type="hidden" name="did_description" class="hidden" value="{{ $did_description }}">
<input type="hidden" name="closecallid" class="hidden" value="{{ $closecallid }}">
<input type="hidden" name="xfercallid" class="hidden" value="{{ $xfercallid }}">
<input type="hidden" name="agent_log_id" class="hidden" value="{{ $agent_log_id }}">
<input type="hidden" name="entry_list_id" class="hidden" value="{{ $entry_list_id }}">
<input type="hidden" name="call_id" class="hidden" value="{{ $call_id }}">
<input type="hidden" name="user_group" class="hidden" value="{{ $user_group }}">
<input type="hidden" name="list_name" class="hidden" value="{{ $list_name }}">
<input type="hidden" name="list_description" class="hidden" value="{{ $list_description }}">
<input type="hidden" name="entry_date" class="hidden" value="{{ $entry_date }}">
<input type="hidden" name="did_custom_one" class="hidden" value="{{ $did_custom_one }}">
<input type="hidden" name="did_custom_two" class="hidden" value="{{ $did_custom_two }}">
<input type="hidden" name="did_custom_three" class="hidden" value="{{ $did_custom_three }}">
<input type="hidden" name="did_custom_four" class="hidden" value="{{ $did_custom_four }}">
<input type="hidden" name="did_custom_five" class="hidden" value="{{ $did_custom_five }}">
<input type="hidden" name="called_count" class="hidden" value="{{ $called_count }}">
<input type="hidden" name="email_row_id" class="hidden" value="{{ $email_row_id }}">
<input type="hidden" name="LOGINvarONE" class="hidden" value="{{ $LOGINvarONE }}">
<input type="hidden" name="LOGINvarTWO" class="hidden" value="{{ $LOGINvarTWO }}">
<input type="hidden" name="LOGINvarTHREE" class="hidden" value="{{ $LOGINvarTHREE }}">
<input type="hidden" name="LOGINvarFOUR" class="hidden" value="{{ $LOGINvarFOUR }}">
<input type="hidden" name="LOGINvarFIVE" class="hidden" value="{{ $LOGINvarFIVE }}">
<input type="hidden" name="hide_relogin_fields" class="hidden" value="{{ $hide_relogin_fields }}">
<input type="hidden" name="web_vars" class="hidden" value="{{ $web_vars }}">
<input type="hidden" name="session_name" class="hidden" value="{{ $session_name }}">
                    <!-- End of container div -->
                                


                    <!-- PHP code and other fields -->
                    
                    <button type="submit">Submit</button> <!-- Submit button -->
                </form>
                <!-- Form end -->
            </div>

</body>
</html>

{{-- ?lead_id=37621185&vendor_id=&list_id=2878&gmt_offset_now=-4.00&phone_code=1&phone_number=4432041818&title=&first_name=&middle_initial=&last_name=&address1=&address2=&address3=&city=&state=MD&province=&postal_code=&country_code=&gender=U&date_of_birth=0000-00-00&alt_phone=&email=&security_phrase=&comments=&user=EMP0000125&pass=Cody123&orig_pass=Cody123&campaign=003&phone_login=EMP0000125&original_phone_login=EMP0000125&phone_pass=Cody123&fronter=&closer=EMP0000125&group=INBOUND1&channel_group=INBOUND1&SQLdate=2024-03-14+005836&epoch=1710359916&uniqueid=1710359916.59919&customer_zap_channel=SIP/json-2-0000329f&customer_server_ip=136.243.93.73&server_ip=136.243.93.73&SIPexten=EMP0000125&session_id=8600053&phone=4432041818&parked_by=37621185&dispo=&dialed_number=4432041818&dialed_label=MAIN&source_id=&rank=0&owner=&camp_script=&in_script=&in_script_two=&script_width=810&script_height=654&fullname=Cody+Walker&agent_email=&recording_filename=&recording_id=&user_custom_one=&user_custom_two=&user_custom_three=&user_custom_four=&user_custom_five=&preset_number_a=&preset_number_b=&preset_number_c=&preset_number_d=&preset_number_e=&preset_dtmf_a=&preset_dtmf_b=&did_id=11&did_extension=18884411155&did_pattern=18884411155&did_description=Sip2SIp+jsontojson3&closecallid=311520&xfercallid=0&agent_log_id=550637&entry_list_id=2878&call_id=Y3131558370037621185&user_group=BB&list_name=Scrubbing&list_description=IA6March%20Exclusive-Sales&entry_date=2024-03-06+094825&did_custom_one=&did_custom_two=&did_custom_three=&did_custom_four=&did_custom_five=&called_count=0&email_row_id=&inOUT=IN&LOGINvarONE=&LOGINvarTWO=&LOGINvarTHREE=&LOGINvarFOUR=&LOGINvarFIVE=&hide_relogin_fields=&web_vars=&session_name=1710359908_EMP000012517398307		 --}}
     
</body>
</html>  