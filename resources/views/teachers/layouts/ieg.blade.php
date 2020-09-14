<div class="footer-container">
    <div class="contact-us">
        <div class="contact-us-container container">
            <div class="title col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <p>Bạn có thắc mắc? Hãy liên hệ với chúng tôi:</p>
            </div>
            <div class="phone col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <a href="tel:{{$site_setting['company::phone']}}">
                    <img src="{{ asset('imgs/phone_contact.png') }}">
                    <span>{{$site_setting['company::phone']}}</span>
                </a>

            </div>
            <div class="phone col-xs-6 col-sm-6 col-md-3 col-lg-3">
                <a href="mailto:{{$site_setting['company::email']}}">
                    <img src="{{ asset('imgs/email-contact.png') }}">
                    <span>{{$site_setting['company::email']}}</span>
                </a>
            </div>

        </div>
    </div>
    <div id="ieg-footer" class="ieg-footer">
        <div class="col-md-2 col-lg-2 background-footer left">
            <div class="img-footer">
                <img class="left-img-footer" src="{{ asset('/imgs/left-img-footer.png') }}">
            </div>
        </div>
        <div class="container">

            <div class="subscriber-wrapper col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="row-header">
                    <h4>CÔNG TY CỔ PHẦN IEG TOÀN CẦU</h4>
                </div>
                <ul class="footer-list" style="font-size: 14px;">
                    <li>GPĐKKD số 0106655729 do Sở Kế hoạch và Đầu tư Thành phố Hà Nội cấp lần đầu ngày 06/10/2014, đăng
                        ký thay đổi lần thứ 8 ngày 13/06/2019</li>
                    <li>MST: 0106655729</li>
                </ul>
                {{-- <form class="user-subscriber" id="subscriberForm">
                    {{csrf_field()}}
                <input id="subscriber-input" class="" name="email" type="text"
                    placeholder="@lang('fe/homepage.footer.subscriber_input_placeholder')" />
                </form> --}}
                {{-- <div class="social-icon">
                    <a
                        href="{{ isset($site_setting['company::facebook']) && $site_setting['company::facebook'] ? $site_setting['company::facebook'] : '#'}}">
                <img src="{{ asset('imgs/facebook-icon.png') }}">
                </a>
                <a
                    href="{{ isset($site_setting['company::instagram']) && $site_setting['company::instagram'] ? $site_setting['company::instagram'] : '#'}}">
                    <img src="{{ asset('imgs/instagram-icon.png') }}">
                </a>
                <a
                    href="{{ isset($site_setting['company::twitter']) && $site_setting['company::twitter'] ? $site_setting['company::twitter'] : '#'}}">
                    <img src="{{ asset('imgs/twitter-icon.png') }}">
                </a>
                <a
                    href="{{ isset($site_setting['company::youtube']) && $site_setting['company::youtube'] ? $site_setting['company::youtube'] : '#'}}">
                    <img src="{{ asset('imgs/youtube-icon.png') }}">
                </a>
            </div> --}}
        </div>
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 link-block">
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="row-header">
                        <h4>Tìm hiểu về IEG</h4>
                    </div>
                    <ul class="footer-list">
                        <li><a href="{{route('fe.about.index')}}">Giới thiệu</a></li>
                        <li><a href="{{route('fe.ieg_team.index')}}">Đội ngũ đào tạo</a></li>
                        <li><a href="{{route('fe.term-condition.index')}}">Điều khoản & chính sách</a></li>
                    </ul>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="row-header">
                        <h4>Tin tức</h4>
                    </div>
                    <ul class="footer-list">
                        <li><a href="{{route('fe.events.events')}}">Sự kiện</a></li>
                        </li>
                        <li><a href="{{route('fe.events.events').'#ieg-and-newspaper'}}">IEG và báo chí</a></li>
                        <li><a href="{{route('fe.events.events').'#ieg-community-activities'}}">Hoạt động cộng
                                đồng</a></li>
                    </ul>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="row-header">
                        <h4>Liên hệ</h4>
                    </div>
                    <ul class="footer-list" style="font-size: 14px;">
                        <li><i class="fa fa-phone" aria-hidden="true"></i> 128 Nguyễn Thái Học, Ba Đình, Hà Nội</li>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> 091.6688.208 - 096.169.7998</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <div class="col-md-2 col-lg-2 img-footer-right background-footer right">
        <div class="img-footer">
            <img class="right-img-footer" src="{{ asset('/imgs/right-img-footer.png') }}">
        </div>
    </div>

    <div class="hr-element">
        <hr class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    </div>
    <div class="col-xs-12 ieg-label-footer">
        <b>{{ $site_setting['company::name']}}</b>
    </div>
</div>
</div>