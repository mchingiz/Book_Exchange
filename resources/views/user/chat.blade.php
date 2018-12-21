@extends('layouts.layout')

@section('title')
Chat
@endsection

@section('content')

<div class="unit-6 overlayrel overlay" style="background-image: url('/img/shelf.jpg');">
	<div class="overlayBox"></div>
	<div class="text-center breads">
	  <h2 class="mb-0 capitalize">{{ $user->name }}</h2>
	  <p class="mb-0 unit-6"><a href="index.html">Əsas səhifə</a> <span class="sep">></span> <span>Mesajlarım</span> </p>
	</div>
</div>

<div class="container">
    <div class="row chat">
    	<div class="">

	        <div class="container">
	            <h3 style="margin-bottom: 20px; padding-bottom: 10px; border-bottom: 1px solid darkred;" class="text-left">Mesaj qutum</h3>
	            <div class="messaging">
	              	<div class="inbox_msg">
	                    <div class="inbox_people">
		                    <div class="headind_srch">
		                        <div class="recent_heading">
		                          <h4>Ən son</h4>
		                        </div>

		                        <div class="srch_bar">
		                        	<div class="stylish-input-group">
			                            <input type="text" class="search-bar"  placeholder="Axtar" >
			                            <span class="input-group-addon">
			                            	<button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
			                            </span> 
		                            </div>
		                        </div>
		                    </div>

	                      	<div class="inbox_chat">
		                        <div class="chat_list active_chat">
		                          <div class="chat_people">
		                            <div class="chat_img"> <img src="/img/person1.jpg" alt="sunil"> </div>
		                            <div class="chat_ib">
		                              <h5>Ayaz Sadigli <span class="chat_date">25 Noy</span></h5>
		                              <p>Kitablar dünyamızı gözəlləşdirən bir neçə təməl ünsürdən bəlkə də birincisidir.</p>
		                            </div>
		                          </div>
		                        </div>
		                        <div class="chat_list">
		                          <div class="chat_people">
		                            <div class="chat_img"> <img src="/img/person1.jpg" alt="sunil"> </div>
		                            <div class="chat_ib">
		                              <h5>Ayaz Sadigli <span class="chat_date">25 Noy</span></h5>
		                              <p>Kitablar dünyamızı gözəlləşdirən bir neçə təməl ünsürdən bəlkə də birincisidir.</p>
		                            </div>
		                          </div>
		                        </div>
		                        <div class="chat_list">
		                          <div class="chat_people">
		                            <div class="chat_img"> <img src="/img/person1.jpg" alt="sunil"> </div>
		                            <div class="chat_ib">
		                              <h5>Ayaz Sadigli <span class="chat_date">25 Noy</span></h5>
		                              <p>Kitablar dünyamızı gözəlləşdirən bir neçə təməl ünsürdən bəlkə də birincisidir.</p>
		                            </div>
		                          </div>
		                        </div>
		                        <div class="chat_list">
		                          <div class="chat_people">
		                            <div class="chat_img"> <img src="/img/person1.jpg" alt="sunil"> </div>
		                            <div class="chat_ib">
		                              <h5>Ayaz Sadigli <span class="chat_date">25 Noy</span></h5>
		                              <p>Kitablar dünyamızı gözəlləşdirən bir neçə təməl ünsürdən bəlkə də birincisidir.</p>
		                            </div>
		                          </div>
		                        </div>
		                        <div class="chat_list">
		                          <div class="chat_people">
		                            <div class="chat_img"> <img src="/img/person1.jpg" alt="sunil"> </div>
		                            <div class="chat_ib">
		                              <h5>Ayaz Sadigli <span class="chat_date">25 Noy</span></h5>
		                              <p>Kitablar dünyamızı gözəlləşdirən bir neçə təməl ünsürdən bəlkə də birincisidir.</p>
		                            </div>
		                          </div>
		                        </div>
		                        <div class="chat_list">
		                          <div class="chat_people">
		                            <div class="chat_img"> <img src="/img/person1.jpg" alt="sunil"> </div>
		                            <div class="chat_ib">
		                              <h5>Ayaz Sadigli <span class="chat_date">25 Noy</span></h5>
		                              <p>Kitablar dünyamızı gözəlləşdirən bir neçə təməl ünsürdən bəlkə də birincisidir.</p>
		                            </div>
		                          </div>
		                        </div>
		                        <div class="chat_list">
		                          <div class="chat_people">
		                            <div class="chat_img"> <img src="/img/person1.jpg" alt="sunil"> </div>
		                            <div class="chat_ib">
		                              <h5>Ayaz Sadigli <span class="chat_date">25 Noy</span></h5>
		                              <p>Kitablar dünyamızı gözəlləşdirən bir neçə təməl ünsürdən bəlkə də birincisidir.</p>
		                            </div>
		                          </div>
		                        </div>
	                      	</div>
	                    </div>

	                    <div class="mesgs">
	                      	<div class="msg_history">
		                        <div class="incoming_msg">
		                          <!-- <div class="incoming_msg_img"> <img src="img/person1.jpg" alt="sunil"> </div> -->
		                          <div class="received_msg">
		                            <div class="received_withd_msg">
		                              <p>Salam, zəhmət olmasa mənə haqqında elan yerləşdirdiyiniz "Kwai körpüsü" əsərinin vəziyyəti barədə məlumat verin.</p>
		                              <span class="time_date"> 11:01    |    10 Noy</span></div>
		                          </div>
		                        </div>
		                        <div class="outgoing_msg">
		                          <div class="sent_msg">
		                            <p>Salam, kitab yenidir, heç oxunmayıb.</p>
		                            <span class="time_date"> 12:16    |    15 Noy</span> </div>
		                        </div>
		                        <div class="incoming_msg">
		                          <!-- <div class="incoming_msg_img"> <img src="img/person1.jpg" alt="sunil"> </div> -->
		                          <div class="received_msg">
		                            <div class="received_withd_msg">
		                              <p>Hansı dildə olduğunu bilə bilərəm?</p>
		                              <span class="time_date"> 12:01    |    Dünən</span></div>
		                          </div>
		                        </div>
		                        <div class="outgoing_msg">
		                          <div class="sent_msg">
		                            <p>Əlbəttə, türk dilindədir. İstanbuldan alınıb.</p>
		                            <span class="time_date"> 11:56    |    Bu gün</span> </div>
		                        </div>
		                        <div class="incoming_msg">
		                          <!-- <div class="incoming_msg_img"> <img src="img/person1.jpg" alt="sunil"> </div> -->
		                          <div class="received_msg">
		                            <div class="received_withd_msg">
		                              <p>Əla! Qarşılığında sizə Haruki Murakaminin "Kafka Sahildə" kitabını verə bilərəm. Uyğundursa sabah metro yaxınlığında görüşək.</p>
		                              <span class="time_date"> 17:15    |    Bu gün</span></div>
		                          </div>
		                        </div>
	                      	</div>

	                      	<div class="type_msg">
		                        <div class="input_msg_write">
		                        	<input type="text" class="write_msg" placeholder="Type a message" />
		                          	<button class="msg_send_btn" type="button"><i class="fas fa-paper-plane"></i></i></button>
		                        </div>
	                      	</div>
	                    </div>
	              	</div>
	            </div>
	      	</div>
    	</div>
  	</div>
</div>

@endsection