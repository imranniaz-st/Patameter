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
        <form action="{{ route('avatar_leads.store') }}" method="POST">
            @csrf <!-- CSRF token for Laravel -->
            <p>LEAD ID: <input type="text" name="lead_id" value="{{$lead_id}}"></p>
             <p>CLOSER: <input type="text" name="closer" value="{{$closer}}"></p>
            <div class="form-group">
                <label for="agent_id">Agent ID</label>
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
            
            <button type="submit">Submit</button> <!-- Submit button -->
        </form>
        <!-- Form end -->
    </div>

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
