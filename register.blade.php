<table>
<form name="name" method="post" action="/user/register">
<input type="hidden" name="_token" value="<?php echo csrf_token()?>">
<tr><td>name<input type= "text" name="name"></td></tr>
<tr><td>password<input type="password" name="password"></td></tr>

<tr><td><input type="submit" name="sub">submit</td></tr>
@extends('common.app')
@section('yield')
