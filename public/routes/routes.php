<?php

	Route('/test', function (){
		return "PatientsController@index";
	},'get');

	Route('/test', function (){
		return "PatientsController@update";
	},'post');
