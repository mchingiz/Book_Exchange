@extends('layouts.layout')

@section('title')
    Edit Profile
@endsection

@section('content')

<div class="unit-6 overlayrel overlay" style="background-image: url('/img/shelf.jpg');">
    <div class="overlayBox"></div>
    <div class="text-center breads">
      <h2 class="mb-0">Bəhruz Aydınlı</h2>
      <p class="mb-0 unit-6"><a href="index.html">Əsas səhifə</a> <span class="sep">></span> <span>İstifadəçi</span><span class="sep">></span> <span>Profili redaktə et</span> </p>
    </div>
</div>

<div class="container">
	<div class="row profile">
	  	<div class="col-md-4">
	      	<div class="profile-sidebar profile-content">
	    		<div class="text-center">
	                <img src="/img/person1.jpg" class="avatar img-circle img-thumbnail" alt="avatar">
	                <br/>
	                <h6 style="margin-top: 5px;">Fərqli şəkildən istifadə et</h6>
	                <input type="file" class="text-center photoload center-block file-upload">
	            </div>

	            </hr>
	            <br>
	                  
	          	<ul class="list-group">
	            	<li class="list-group-item text-muted">
	            		Statistika <i class="fa fa-dashboard fa-1x"></i>
	            	</li>

	            	<li class="list-group-item text-left">
	            		<strong>Kitablarınız</strong><span class="text-right"> {{ $user->books->count() }}</span>
	            	</li>

	            	<li class="list-group-item text-left">
	            		<span class="pull-left"><strong>Verdiyiniz təkliflər</strong></span> 12
	            	</li>

	            	<li class="list-group-item text-left">
	            		<span class="pull-left"><strong>Aldığınız təkliflər</strong></span> 13
	            	</li>

	          	</ul> 
	      	</div>                        
	  	</div>
	  	<div class="col-md-8">
	        <div id="settings" class="profile-editbox profile-content">            	               	
	            <form class="form" action="##" method="post" id="registrationForm" enctype="multipart/form-data">
	                <div class="form-group">
	                    <div class="col-xs-6">
	                        <label for="first_name"><h5>Adınız</h5></label>
	                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="məs: Çingiz" title="enter your first name if any." value="{{ $user->name }}">
	                    </div>
	                </div>
	                <div class="form-group">
	                    <div class="col-xs-6">
	                      <label for="last_name"><h5>Soyadınız</h5></label>
	                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="məs: Məmmədli" title="enter your last name if any.">
	                    </div>
	                </div>
	                <div class="form-group">
	                    <div class="col-xs-6">
	                       <label for="mobile"><h5>Mobil nömrə</h5></label>
	                        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="məs: 0503747472" title="enter your mobile number if any.">
	                    </div>
	                </div>
	                <div class="form-group">
	                    <div class="col-xs-6">
	                        <label for="email"><h5>Elektron poçtunuz</h5></label>
	                        <input type="email" class="form-control" name="email" id="email" placeholder="məs: chingiz.mammadli@hotmail.com" title="enter your email." value=" {{ $user->email }}">
	                    </div>
	                </div>
	                <div class="form-group">
	                    <div class="col-xs-6">
	                        <label for="password"><h5>Şifrəniz</h5></label>
	                        <input type="password" class="form-control" name="password" id="password" placeholder="Şifrəniz" title="enter your password." >
	                    </div>
	                </div>
	                <div class="form-group">
	                    <div class="col-xs-6">
	                      <label for="password2"><h5>Şifrənizi təsdiqləyin</h5></label>
	                        <input type="text" class="form-control" name="password2" id="password2" placeholder="Yenidən şifrəniz" title="enter your password2." >
	                    </div>
	                </div>
	                <div class="form-group">
	                     <div class="col-xs-12">
	                          <br>
	                            <button class="btn btn-lg btn-primary pull-right" type="submit"><i class="fas fa-check"></i> Yadda saxla</button>
	                      </div>
	                </div>
	            </form>
	        </div>
	  	</div>
	</div>
</div>

@endsection