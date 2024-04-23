<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parameter Display</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h1>Xfer Form</h1>
        <p>CURRENTDATETIME: {{$currentDateTime}}</p>
        
        <!-- Form start -->
       
            <!-- Form start -->
            <form action="{{ route('avatar_leads.store') }}" method="POST">
                @csrf <!-- CSRF token for Laravel -->
                <p>LEAD ID: <input disabled type="text" name="lead_id" value="{{$lead_id}}"></p>
                 <p>CLOSER: <input type="text" name="closer" value="{{$closer}}"></p>
                <div class="form-group">
                    <label   for="agent_id">Agent ID</label>
                    <input type="text" class="form-control" id="agent_id" name="agent_id" placeholder="Agent ID" value="12345">
                </div>
                <div class="form-group">
                    <label for="agent_id">Agent Name</label>
                    <input type="text" class="form-control" id="agent_name" name="agent_name" placeholder="Agent ID" value="ali ">
                </div>
                <div class="form-group">
                    <label for="lead_id">Lead ID</label>
                    <input type="text" class="form-control" id="lead_id" name="lead_id" placeholder="Lead ID" value="67890">
                </div>
                <div class="form-group">
                    <label for="dialer_id">Dialer ID</label>
                    <input type="text" class="form-control" id="dialer_id" name="dailer_no" placeholder="Dialer ID" value="ABCDE">
                </div>
                <div class="form-group">
                    <label for="dialer_id">smoker</label>
                    <input type="text" class="form-control" id="smoker" name="smoker" placeholder="smoker" >
                </div>
                <div class="form-group">
                    <label for="AGE">AGE</label>
                    <input type="text" class="form-control" id="AGE" name="AGE" placeholder="AGE" value="30">
                </div>
                <div class="form-group">
                    <label for="verifier">Verifier</label>
                    <input type="text" class="form-control" id="verifier_name" name="verifier_name" placeholder="Verifier" value="John Doe">
                </div>
                <div class="form-group">
                    <label for="center">Center</label>
                    <input type="text" class="form-control" id="center" name="center" placeholder="Center" value="ABC Center">
                </div>
                <?php
                $closercode = strtolower(substr($closer, 0, 3));
    
                if ($closercode == "emp") {
                    echo "<p>CENTER: <input type='text' name='center' value='J.Sons Communication'></p>";
                } else if ($closercode == "slz") {
                    echo "<p>CENTER: <input type='text' name='center' value='Sellerz'></p>";
                } else {
                    echo "Error";
                }
                ?>  
                                  <input type="text"   name="recording_link" id="recording_link" class="form-control" value="http://{{$server_ip}}/RECORDINGS/MP3/{{$SQLdate}}_{{$lead_id}}-all.mp3" target="_blank">http://{{$server_ip}}/RECORDINGS/MP3/{{$recording_filename}}-all.mp3</input> 

                
                <button type="submit">Submit</button> <!-- Submit button -->
            </form>
            <!-- Form end -->
      
    

            
        </form>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Function to handle click event on recording link
                function handleRecordingLinkClick(event) {
                    event.preventDefault(); // Prevent default link behavior
    
                    // Extract parameters from the URL
                    var url = event.target.href;
                    var params = new URLSearchParams(url.split('?')[1]);
    
                    // Extract necessary parameters
                    var leadId = params.get('lead_id');
                    var closer = params.get('closer');
    
                    // Send AJAX request to Laravel backend
                    var xhr = new XMLHttpRequest();
                    xhr.open('POST', '{{ route("avatar_leads.store") }}', true);
                    xhr.setRequestHeader('Content-Type', 'application/json');
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState === XMLHttpRequest.DONE) {
                            if (xhr.status === 200) {
                                console.log('Data saved successfully');
                            } else {
                                console.error('Error saving data');
                            }
                        }
                    };
                    xhr.send(JSON.stringify({ lead_id: leadId, closer: closer }));
                }
    
                // Attach click event listener to the recording link
                document.getElementById('recording_link').addEventListener('click', handleRecordingLinkClick);
            });
        </script>
        <!-- Form end -->
    </div>
{{----}}<h1> Other Details </h1>

<p>VENDOR ID: {{$vendor_id}}</p>
<p>LIST ID: {{$list_id}}</p>
<p>GMT OFFSET NOW: {{$gmt_offset_now}}</p>
<p>PHONE CODE: {{$phone_code}}</p>
<p>PHONE NUMBER: {{$phone_number}}</p>
<p>TITLE: {{$title}}</p>
<p>FIRST NAME: {{$first_name}}</p>
<p>MIDDLE INITIAL: {{$middle_initial}}</p>
<p>LAST NAME: {{$last_name}}</p>
<p>ADDRESS1: {{$address1}}</p>
<p>ADDRESS2: {{$address2}}</p>
<p>ADDRESS3: {{$address3}}</p>
<p>CITY: {{$city}}</p>
<p>STATE: {{$state}}</p>
<p>PROVINCE: {{$province}}</p>
<p>POSTAL CODE: {{$postal_code}}</p>
<p>COUNTRY CODE: {{$country_code}}</p>
<p>GENDER: {{$gender}}</p>
<p>DATE OF BIRTH: {{$date_of_birth}}</p>
<p>ALT PHONE: {{$alt_phone}}</p>
<p>EMAIL: {{$email}}</p>
<p>SECURITY PHRASE: {{$security_phrase}}</p>
<p>COMMENTS: {{$comments}}</p>
<p>USER: {{$user}}</p>
<p>PASS: {{$pass}}</p>
<p>ORIG PASS: {{$orig_pass}}</p>
<p>CAMPAIGN: {{$campaign}}</p>
<p>PHONE LOGIN: {{$phone_login}}</p>
<p>ORIGINAL PHONE LOGIN: {{$original_phone_login}}</p>
<p>PHONE PASS: {{$phone_pass}}</p>
<p>FRONTER: {{$fronter}}</p>
<p>GROUP A: {{$group_a}}</p>
<p>CHANNEL GROUP: {{$channel_group}}</p>
<p>SQLDATE: {{$SQLdate}}</p>
<p>EPOCH: {{$epoch}}</p>
<p>UNIQUEID: {{$uniqueid}}</p>
<p>CUSTOMER ZAP CHANNEL: {{$customer_zap_channel}}</p>
<p>CUSTOMER SERVER IP: {{$customer_server_ip}}</p>



<p>SERVERIP: {{$server_ip}}</p>

<p>SIPEXTEN: {{$SIPexten}}</p>
<p>SESSION ID: {{$session_id}}</p>
<p>PHONE: {{$phone}}</p>
<p>PARKED BY: {{$parked_by}}</p>
<p>DISPO: {{$dispo}}</p>
<p>DIALED NUMBER: {{$dialed_number}}</p>
<p>DIALED LABEL: {{$dialed_label}}</p>
<p>SOURCE ID: {{$source_id}}</p>
<p>RANK: {{$rank}}</p>
<p>OWNERN: {{$ownern}}</p>
<p>CAMP SCRIPT: {{$camp_script}}</p>
<p>IN SCRIPT: {{$in_script}}</p>
<p>IN SCRIPT TWO: {{$in_script_two}}</p>
<p>SCRIPT WIDTH: {{$script_width}}</p>
<p>SCRIPT HEIGHT: {{$script_height}}</p>
<p>AGENT EMAIL: {{$agent_email}}</p>
<p>RECORDING FILENAME: {{$recording_filename}}</p>
<p>RECORDING ID: {{$recording_id}}</p>
<p>USER CUSTOM ONE: {{$user_custom_one}}</p>
<p>USER CUSTOM TWO: {{$user_custom_two}}</p>
<p>USER CUSTOM THREE: {{$user_custom_three}}</p>
<p>USER CUSTOM FOUR: {{$user_custom_four}}</p>
<p>USER CUSTOM FIVE: {{$user_custom_five}}</p>
<p>PRESET NUMBER A: {{$preset_number_a}}</p>
<p>PRESET NUMBER B: {{$preset_number_b}}</p>
<p>PRESET NUMBER C: {{$preset_number_c}}</p>
<p>PRESET NUMBER D: {{$preset_number_d}}</p>
<p>PRESET NUMBER E: {{$preset_number_e}}</p>
<p>PRESET DTMF A: {{$preset_dtmf_a}}</p>
<p>PRESET DTMF B: {{$preset_dtmf_b}}</p>
<p>DID ID: {{$did_id}}</p>
<p>DID EXTENSION: {{$did_extension}}</p>
<p>DID PATTERN: {{$did_pattern}}</p>
<p>DID DESCRIPTION: {{$did_description}}</p>
<p>CLOSECALLID: {{$closecallid}}</p>
<p>XFERCALLID: {{$xfercallid}}</p>
<p>AGENT LOG ID: {{$agent_log_id}}</p>
<p>ENTRY LIST ID: {{$entry_list_id}}</p>
<p>CALL ID: {{$call_id}}</p>
<p>USER GROUP: {{$user_group}}</p>
<p>LIST NAME: {{$list_name}}</p>
<p>LIST DESCRIPTION: {{$list_description}}</p>
<p>ENTRY DATE: {{$entry_date}}</p>
<p>DID CUSTOM ONE: {{$did_custom_one}}</p>
<p>DID CUSTOM TWO: {{$did_custom_two}}</p>
<p>DID CUSTOM THREE: {{$did_custom_three}}</p>
<p>DID CUSTOM FOUR: {{$did_custom_four}}</p>
<p>DID CUSTOM FIVE: {{$did_custom_five}}</p>
<p>CALLED COUNT: {{$called_count}}</p>
<p>EMAIL ROW ID: {{$email_row_id}}</p>
<p>LOGINVARONE: {{$LOGINvarONE}}</p>
<p>LOGINVARTWO: {{$LOGINvarTWO}}</p>
<p>LOGINVARTHREE: {{$LOGINvarTHREE}}</p>
<p>LOGINVARFOUR: {{$LOGINvarFOUR}}</p>
<p>LOGINVARFIVE: {{$LOGINvarFIVE}}</p>
<p>HIDE RELOGIN FIELDS: {{$hide_relogin_fields}}</p>
<p>WEB VARS: {{$web_vars}}</p>
<p>SESSION NAME: {{$session_name}}</p>
</body>
</html>


    <style>
    /* styles.css */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
    }

    h1 {
        color: #333;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    p {
        margin-bottom: 20px;
    }
    </style>
</body>
</html> 