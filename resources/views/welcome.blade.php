@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

<p>Current Date and Time: {{ date('Y-m-d H:i:s') }}</p>

<form action="{{ route('avatar_leads.store') }}" method="POST">
    @csrf
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
        <label for="Smoker">Smoker</label>
        <input type="text" class="form-control" id="Smoker" name="Smoker" placeholder="Smoker" value="No">
    </div>
    <div class="form-group">
        <label for="verifier">Verifier</label>
        <input type="text" class="form-control" id="verifier_name" name="verifier_name" placeholder="Verifier" value="John Doe">
    </div>
    <div class="form-group">
        <label for="center">Center</label>
        <input type="text" class="form-control" id="center" name="center" placeholder="Center" value="ABC Center">
    </div>
     
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
