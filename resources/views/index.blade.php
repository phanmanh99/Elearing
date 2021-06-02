<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="WHO SAID EDUCATION WAS BORING?, Best Pre School Education!, Service We Provide, Innovative Methodsof Teaching, Best Pre School Education!, Make your Children's life Special, Relaxation and comfort">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Home</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.13.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "index.html",
		"logo": "images/K_W8LgcY_400x400.jpg",
		"sameAs": []
}</script>
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#fe7ec9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
  </head>
  <body data-home-page="Home.html" data-home-page-title="Home" class="u-backlink-hidden u-body"><header class="u-clearfix u-header" id="sec-d515"><div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="text-transform: uppercase; font-weight: 600;">
            <a class="u-btn-text u-button-style u-nav-link" href="#" style="padding: 4px 0px; font-size: calc(1em + 8px);">
              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 302 302" style="undefined"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-a760"></use></svg>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-a760" x="0px" y="0px" viewBox="0 0 302 302" style="enable-background:new 0 0 302 302;" xml:space="preserve" class="u-svg-content"><g><rect y="36" width="302" height="30"></rect><rect y="236" width="302" height="30"></rect><rect y="136" width="302" height="30"></rect>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-25 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-grey-dark-3" href="{{route('index')}}" style="padding: 42px 30px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-grey-dark-3" href="{{ route('home') }}" style="padding: 42px 30px;">Khóa học</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-grey-dark-3" href="{{ route('user.account', [Auth::id()]) }}" style="padding: 42px 30px;">Thông tin</a>
  @guest
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-grey-dark-3" href="{{Route('login')}}" style="padding: 42px 30px;">Đăng nhập</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-grey-dark-3" href="{{ route('register') }}" style="padding: 42px 30px;">Đăng ký</a>
  @else
                    <li class="u-nav-item">
                        {{-- {!! Form::open(["method" => "post", "action" =>  route('logout') ]) !!} --}}
                        {{-- <a class="u-button-style u-nav-link u-text-grey-dark-3" href=" {{ route('logout') }}">Logout</a> --}}
                        {{-- {!! Form::submit('Logout', ['class' => 'nav-link', 'id' => 'logoutbutton']) !!} --}}
                        {{-- {!! Form::close() !!} --}}
                                <a class="u-button-style u-nav-link u-text-grey-dark-3" id="logoutbutton" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logoutform').submit();">
                                    Đăng xuất
                                </a>
                                <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                    </li>
  @endguest
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html" style="padding: 42px 30px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ route('home') }}" style="padding: 42px 30px;">Khóa học</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ route('user.account', [Auth::id()]) }}" style="padding: 42px 30px;">Thông tin</a>
  @guest
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{Route('login')}}" style="padding: 42px 30px;">Đăng nhập</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ route('register') }}" style="padding: 42px 30px;">Đăng Ký</a>
  @else
                    <li class="u-nav-item">
                        {{-- {!! Form::open(["method" => "post", "action" =>  route('logout') ]) !!} --}}
                        {{-- <a class="u-button-style u-nav-link" href=" {{ route('logout') }}">Logout</a> --}}
                        {{-- {!! Form::submit('Logout', ['class' => 'nav-link', 'id' => 'logoutbutton']) !!} --}}
                        {{-- {!! Form::close() !!} --}}
                                <a class="u-button-style u-nav-link" id="logoutbutton" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logoutform').submit();">
                                    Đăng xuất
                                </a>
                                <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                    </li>
  @endguest
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <img src="images/K_W8LgcY_400x400.jpg" alt="" class="u-image u-image-default u-preserve-proportions u-image-1" data-image-width="400" data-image-height="400">
      </div></header> 
    <section class="u-clearfix u-white u-section-1" id="sec-fad6">
      <div class="u-clearfix u-sheet u-valign-bottom-xs ">
        <div class="u-gradient u-shape u-shape-rectangle u-shape-1"></div>
        <div class="u-align-center u-container-style u-group u-similar-fill u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h1 class="u-text u-text-palette-4-base u-text-1">CÙNG BẠN BĂNG QUA VŨ TRỤ KIẾN THỨC</h1>
            <h5 class="u-text u-text-2">We learn and we grow</h5>
          </div>
        </div>
        <div class="u-carousel u-expanded-width-xs u-gallery u-layout-thumbnails u-lightbox u-no-transition u-show-text-always u-gallery-1" data-interval="5000" data-u-ride="carousel" id="carousel-54f8">
          <div class="u-carousel-inner u-gallery-inner" role="listbox">
            <div class="u-active u-carousel-item u-gallery-item">
              <div class="u-back-slide" data-image-width="530" data-image-height="750">
                <img class="u-back-image u-expanded" src="images/online-coursess.jpg">
              </div>
              <div class="u-over-slide u-over-slide-1">
                <h3 class="u-gallery-heading">Sample Title</h3>
                <p class="u-gallery-text">Sample Text</p>
              </div>
            </div>
            <div class="u-carousel-item u-gallery-item">
              <div class="u-back-slide" data-image-width="795" data-image-height="1124">
                <img class="u-back-image u-expanded" src="images/1.jpg">
              </div>
              <div class="u-over-slide u-over-slide-2">
                <h3 class="u-gallery-heading">Sample Title</h3>
                <p class="u-gallery-text">Sample Text</p>
              </div>
            </div>
            <div class="u-carousel-item u-gallery-item" data-image-width="640" data-image-height="640">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="images/134756131_2750497941933194_1153463551736771950_n.jpg">
              </div>
              <div class="u-over-slide u-over-slide-3">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
          </div>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-hover-grey-50 u-icon-circle u-opacity u-opacity-70 u-text-hover-grey-50 u-text-white u-carousel-control-1" href="#carousel-54f8" role="button" data-u-slide="prev">
            <span aria-hidden="true">
              <svg viewBox="0 0 129 129"><path d="m64.5,122.6c32,0 58.1-26 58.1-58.1s-26-58-58.1-58-58,26-58,58 26,58.1 58,58.1zm0-108c27.5,5.32907e-15 49.9,22.4 49.9,49.9s-22.4,49.9-49.9,49.9-49.9-22.4-49.9-49.9 22.4-49.9 49.9-49.9z"></path><path d="m70,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2 1.6-1.6 1.6-4.2 0-5.8l-23.5-23.5 23.5-23.5c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-26.4,26.4c-0.8,0.8-1.2,1.8-1.2,2.9s0.4,2.1 1.2,2.9l26.4,26.4z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 129 129"><path d="m64.5,122.6c32,0 58.1-26 58.1-58.1s-26-58-58.1-58-58,26-58,58 26,58.1 58,58.1zm0-108c27.5,5.32907e-15 49.9,22.4 49.9,49.9s-22.4,49.9-49.9,49.9-49.9-22.4-49.9-49.9 22.4-49.9 49.9-49.9z"></path><path d="m70,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2 1.6-1.6 1.6-4.2 0-5.8l-23.5-23.5 23.5-23.5c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-26.4,26.4c-0.8,0.8-1.2,1.8-1.2,2.9s0.4,2.1 1.2,2.9l26.4,26.4z"></path></svg>
            </span>
          </a>
          <a class="u-carousel-control u-carousel-control-next u-hover-grey-50 u-icon-circle u-opacity u-opacity-70 u-text-hover-grey-50 u-text-white u-carousel-control-2" href="#carousel-54f8" role="button" data-u-slide="next">
            <span aria-hidden="true">
              <svg viewBox="0 0 129 129"><path d="M64.5,122.6c32,0,58.1-26,58.1-58.1S96.5,6.4,64.5,6.4S6.4,32.5,6.4,64.5S32.5,122.6,64.5,122.6z M64.5,14.6    c27.5,0,49.9,22.4,49.9,49.9S92,114.4,64.5,114.4S14.6,92,14.6,64.5S37,14.6,64.5,14.6z"></path><path d="m51.1,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l26.4-26.4c0.8-0.8 1.2-1.8 1.2-2.9 0-1.1-0.4-2.1-1.2-2.9l-26.4-26.4c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l23.5,23.5-23.5,23.5c-1.6,1.6-1.6,4.2 0,5.8z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 129 129"><path d="M64.5,122.6c32,0,58.1-26,58.1-58.1S96.5,6.4,64.5,6.4S6.4,32.5,6.4,64.5S32.5,122.6,64.5,122.6z M64.5,14.6    c27.5,0,49.9,22.4,49.9,49.9S92,114.4,64.5,114.4S14.6,92,14.6,64.5S37,14.6,64.5,14.6z"></path><path d="m51.1,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l26.4-26.4c0.8-0.8 1.2-1.8 1.2-2.9 0-1.1-0.4-2.1-1.2-2.9l-26.4-26.4c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l23.5,23.5-23.5,23.5c-1.6,1.6-1.6,4.2 0,5.8z"></path></svg>
            </span>
          </a>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-grey-5 u-section-2" id="sec-d1bd">
      <h2 class="u-align-center u-text u-text-5">Các khóa học</h2>
      <div class="u-blog u-layout-horizontal u-blog-1">
        <div class="u-list-control"></div>
        <div class="u-repeater u-repeater-1"><!--blog_post-->
          @foreach ($courses as $course)
          <div class="u-blog-post u-container-style u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-5"><!--blog_post_header-->
              <h2 class="u-blog-control u-text">
                <a class="u-post-header-link" href="{{ route('course.show', [$course->id]) }}">{{ $course['title'] }}</a>
              </h2><!--/blog_post_header-->
              <a class="u-post-header-link" href="{{ route('course.show', [$course->id]) }}"><!--blog_post_image-->
                <img src="{{ url('storage/'. $course->thumbnail )}}" alt="" class="u-blog-control u-expanded-width u-image u-image-default u-image-1"><!--/blog_post_image-->
              </a><!--blog_post_content-->
              <div class="u-blog-control u-post-content u-text">{{ $course['information'] }}</div><!--/blog_post_content-->
            </div>
          </div><!--/blog_post-->
          @endforeach
        </div>
        <div class="u-list-control"></div>
        <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-1" href="#" role="button">
          <span aria-hidden="true">
            <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
          </span>
          <span class="sr-only">
            <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
          </span>
        </a>
        <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-2" href="#" role="button">
          <span aria-hidden="true">
            <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
          </span>
          <span class="sr-only">
            <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
          </span>
        </a>
      </div><!--/blog-->
    <section class="u-clearfix u-palette-2-light-3 u-section-4" id="sec-bb77">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-align-center u-text u-text-1">Giảng viên</h1>
        <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
                @foreach($users as $user)
                  @if ($user->role->first()->id == 2)
              <div class="u-align-center u-container-style u-layout-cell u-size-12 u-white u-layout-cell-1">
                <div class="u-border-5 u-border-grey-75 u-container-layout u-container-layout-1">
                  <div alt="" class="u-image u-image-circle u-preserve-proportions u-image-2" data-image-width="626" data-image-height="626"></div>
                  <p class="u-text u-text-4"><span class="u-icon u-icon-2"><svg class="u-svg-content" viewBox="0 0 45.947 45.947" x="0px" y="0px" style="width: 1em; height: 1em;"><g><g><circle cx="22.986" cy="8.596" r="8.596"></circle><path d="M31.68,20.067h-0.108l-0.367,4.769c-0.052,0.667-0.539,1.219-1.194,1.352l-2.736,0.557l0.673,1.984    c0.13,0.383,0.099,0.801-0.085,1.161c0,0-2.656,5.202-3.542,6.935c-0.003,0.006-0.436,0.688-1.302,0.688    c-1.07,0-1.359-0.683-1.361-0.688c-0.887-1.732-3.543-6.935-3.543-6.935c-0.183-0.36-0.214-0.778-0.085-1.159l0.673-1.984    l-2.738-0.557c-0.654-0.132-1.142-0.684-1.192-1.35l-0.368-4.772h-0.108c-5.95,0-10.772,4.823-10.772,10.772v12.09    c0,1.667,1.351,3.018,3.018,3.018h32.865c1.667,0,3.018-1.351,3.018-3.018V30.808C42.42,24.876,37.612,20.067,31.68,20.067z     M35.527,40.723h-2.27v2.23c0,0.826-0.662,1.494-1.486,1.494c-0.825,0-1.486-0.668-1.486-1.494v-2.23h-2.232    c-0.824,0-1.494-0.66-1.494-1.486s0.67-1.487,1.494-1.487h2.232v-2.271c0-0.826,0.661-1.496,1.486-1.496    c0.824,0,1.486,0.67,1.486,1.496v2.271h2.27c0.824,0,1.494,0.661,1.494,1.487S36.352,40.723,35.527,40.723z"></path><path d="M25.014,24.15l3.297-0.67l0.263-3.414H17.399l0.263,3.414l3.296,0.67c0.422,0.086,0.784,0.348,0.999,0.721    c0.214,0.371,0.258,0.818,0.12,1.225l-1.015,2.995l1.924,3.767l1.925-3.767l-1.016-2.995c-0.138-0.406-0.094-0.854,0.121-1.225    C24.23,24.498,24.594,24.236,25.014,24.15z"></path>
            }
</g>
</g></svg><img></span>&nbsp;Giáo viên
                  </p>
                  <h4>{{$user->name}}</h4>
                </div>
              </div>
                  @endif
                @endforeach
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-palette-4-base u-section-6" id="carousel_c2c0">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-left u-container-style u-expanded-width-xl u-expanded-width-xs u-group u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <h3 class="u-text u-text-1">Team-19 EDU luôn cam kết chất lượng cho mỗi học viên</h3>
          </div>
        </div>
        <div class="u-clearfix u-expanded-width u-gutter-30 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-valign-middle u-container-layout-2">
                  <p class="u-align-left-sm u-align-left-xs u-text u-text-2">Công việc của người thầy ưu tú là kích thích những người có vẻ tầm thường có nỗ lực phi thường. Vấn đề hóc búa là không phải xác định những người chiến thắng; mà làm cho những người bình thường trở thành người chiến thắng.</p>
                </div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-valign-top u-container-layout-3">
                  <p class="u-text u-text-3">Mục tiêu của&nbsp;giáo dục&nbsp;không phải là dạy cách kiếm sống hay cung cấp công cụ để đạt được sự giàu có, mà đó phải là con đường dẫn lối tâm hồn con người vươn đến cái “Chân” và thực hành cái “Thiện”.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-7" id="sec-5b85">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-group u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h2 class="u-align-center u-text u-text-1">Cùng bạn vươn tới những ước mơ</h2>
          </div>
        </div>
        <div class="u-clearfix u-expanded-width u-gutter-24 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-size-20 u-size-30-md">
                <div class="u-layout-col">
                  <div class="u-container-style u-layout-cell u-left-cell u-size-20 u-layout-cell-1">
                    <div class="u-container-layout u-valign-middle u-container-layout-2">
                      <h5 class="u-align-right u-text u-text-2">Niềm vui và Hạnh phúc</h5>
                      <p class="u-align-left u-text u-text-3">Không chỉ là kiến thức mà còn là niềm vui cho học viên</p>
                    </div>
                  </div>
                  <div class="u-align-right u-container-style u-layout-cell u-left-cell u-size-20 u-layout-cell-2">
                    <div class="u-container-layout u-valign-middle u-container-layout-3">
                      <h5 class="u-text u-text-4">Fulfill With Love</h5>
                      <p class="u-text u-text-5">Lan tỏa yêu thương, vun đắp tình người</p>
                    </div>
                  </div>
                  <div class="u-align-right u-container-style u-layout-cell u-left-cell u-size-20 u-layout-cell-3">
                    <div class="u-container-layout u-valign-middle u-container-layout-4">
                      <h5 class="u-text u-text-6">Phương pháp giáo dục mới lạ&nbsp;</h5>
                      <p class="u-text u-text-7">Nhữn khóa học đặc biệt và những bài kiểm tra vui nhộn không mang lại áp lực cho học viên</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-size-20 u-size-30-md">
                <div class="u-layout-row">
                  <div class="u-container-style u-layout-cell u-size-60 u-layout-cell-4">
                    <div class="u-container-layout">
                      <div class="u-carousel u-expanded-width u-gallery u-layout-carousel u-lightbox u-no-transition u-show-text-always u-gallery-1" data-interval="5000" data-u-ride="carousel" id="carousel-752d">
                        <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
                          @for($i=0;$i<10;$i++)
                          <li data-u-target="#carousel-752d" data-u-slide-to="0" class="@if($i==0) u-active @endif u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
                          @endfor
                        </ol>
                        <div class="u-carousel-inner u-gallery-inner" role="listbox">
                          @for($i=0;$i<10;$i++)
                          <div class="@if($i==0) u-active @endif u-carousel-item u-gallery-item">
                            <div class="u-back-slide" data-image-width="1280" data-image-height="854">
                              <img class="u-back-image u-expanded" src="images/1.jpg">
                            </div>
                          </div>
                          @endfor
                          
                        </div>
                        <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-icon-circle u-opacity u-opacity-70 u-text-body-alt-color u-text-hover-black u-carousel-control-1" href="#carousel-752d" role="button" data-u-slide="prev">
                          <span aria-hidden="true">
                            <svg viewBox="0 0 129 129"><path d="m64.5,122.6c32,0 58.1-26 58.1-58.1s-26-58-58.1-58-58,26-58,58 26,58.1 58,58.1zm0-108c27.5,5.32907e-15 49.9,22.4 49.9,49.9s-22.4,49.9-49.9,49.9-49.9-22.4-49.9-49.9 22.4-49.9 49.9-49.9z"></path><path d="m70,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2 1.6-1.6 1.6-4.2 0-5.8l-23.5-23.5 23.5-23.5c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-26.4,26.4c-0.8,0.8-1.2,1.8-1.2,2.9s0.4,2.1 1.2,2.9l26.4,26.4z"></path></svg>
                          </span>
                          <span class="sr-only">
                            <svg viewBox="0 0 129 129"><path d="m64.5,122.6c32,0 58.1-26 58.1-58.1s-26-58-58.1-58-58,26-58,58 26,58.1 58,58.1zm0-108c27.5,5.32907e-15 49.9,22.4 49.9,49.9s-22.4,49.9-49.9,49.9-49.9-22.4-49.9-49.9 22.4-49.9 49.9-49.9z"></path><path d="m70,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2 1.6-1.6 1.6-4.2 0-5.8l-23.5-23.5 23.5-23.5c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-26.4,26.4c-0.8,0.8-1.2,1.8-1.2,2.9s0.4,2.1 1.2,2.9l26.4,26.4z"></path></svg>
                          </span>
                        </a>
                        <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-icon-circle u-opacity u-opacity-70 u-text-body-alt-color u-text-hover-black u-carousel-control-2" href="#carousel-752d" role="button" data-u-slide="next">
                          <span aria-hidden="true">
                            <svg viewBox="0 0 129 129"><path d="M64.5,122.6c32,0,58.1-26,58.1-58.1S96.5,6.4,64.5,6.4S6.4,32.5,6.4,64.5S32.5,122.6,64.5,122.6z M64.5,14.6    c27.5,0,49.9,22.4,49.9,49.9S92,114.4,64.5,114.4S14.6,92,14.6,64.5S37,14.6,64.5,14.6z"></path><path d="m51.1,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l26.4-26.4c0.8-0.8 1.2-1.8 1.2-2.9 0-1.1-0.4-2.1-1.2-2.9l-26.4-26.4c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l23.5,23.5-23.5,23.5c-1.6,1.6-1.6,4.2 0,5.8z"></path></svg>
                          </span>
                          <span class="sr-only">
                            <svg viewBox="0 0 129 129"><path d="M64.5,122.6c32,0,58.1-26,58.1-58.1S96.5,6.4,64.5,6.4S6.4,32.5,6.4,64.5S32.5,122.6,64.5,122.6z M64.5,14.6    c27.5,0,49.9,22.4,49.9,49.9S92,114.4,64.5,114.4S14.6,92,14.6,64.5S37,14.6,64.5,14.6z"></path><path d="m51.1,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l26.4-26.4c0.8-0.8 1.2-1.8 1.2-2.9 0-1.1-0.4-2.1-1.2-2.9l-26.4-26.4c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l23.5,23.5-23.5,23.5c-1.6,1.6-1.6,4.2 0,5.8z"></path></svg>
                          </span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-size-20 u-size-60-md">
                <div class="u-layout-col">
                  <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-20 u-layout-cell-5">
                    <div class="u-container-layout u-valign-middle u-container-layout-6">
                      <h5 class="u-text u-text-8">Chương tình dạy chuyên nghiệp</h5>
                      <p class="u-text u-text-9">Đội ngũ giáo viên tận tình và trẻ trung, nhiệt huyết với từng buổi lên lớp</p>
                    </div>
                  </div>
                  <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-20 u-layout-cell-6">
                    <div class="u-container-layout u-valign-middle u-container-layout-7">
                      <h5 class="u-text u-text-10">Hệ thống đầy đủ hiện đại</h5>
                      <p class="u-text u-text-11">Hệ thống giảng dạy đạt chuẩn này và nọ...</p>
                    </div>
                  </div>
                  <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-20 u-layout-cell-7">
                    <div class="u-container-layout u-valign-middle u-container-layout-8">
                      <h5 class="u-text u-text-12">Lộ trình đảm bảo&nbsp;</h5>
                      <p class="u-text u-text-13">Lộ trình phù hợp cho mọi thành viên từ bắt đầu tới nâng cao</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-clearfix u-footer u-grey-dark-2" id="sec-ae6f">
        <div class="u-clearfix u-expanded-width u-gutter-30 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-20 u-size-20-md u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1"><!--position-->
                  <div data-position="" class="u-position u-position-1"><!--block-->
                    <div class="u-block">
                      <div class="u-block-container u-clearfix"><!--block_header-->
                        <h5 class="u-block-header u-text u-text-1"><!--block_header_content-->Địa chỉ<!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                        <div class="u-block-content u-text u-text-2"><!--block_content_content-->Đại học Vinh<br>170 Lê Duẩn Tp. Vinh Nghệ An<br>(+84) xxx vvv bbb<!--/block_content_content-->
                        </div><!--/block_content-->
                      </div>
                    </div><!--/block-->
                  </div><!--/position-->
                </div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-size-20 u-size-20-md u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2"><!--position-->
                  <div data-position="" class="u-position u-position-2"><!--block-->
                    <div class="u-block">
                      <div class="u-block-container u-clearfix"><!--block_header-->
                        <h5 class="u-block-header u-text u-text-3"><!--block_header_content--> Contact<!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                        <div class="u-block-content u-text u-text-4"><!--block_content_content-->Team19-edu.online@gmail.com<br>(+84) 977 258 105<!--/block_content_content-->
                        </div><!--/block_content-->
                      </div>
                    </div><!--/block-->
                  </div><!--/position-->
                </div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-20 u-size-20-md u-layout-cell-3">
                <div class="u-container-layout u-container-layout-3"><!--position-->
                  <div data-position="" class="u-position u-position-3"><!--block-->
                    <div class="u-block">
                      <div class="u-block-container u-clearfix"><!--block_header-->
                        <h5 class="u-block-header u-text u-text-5"><!--block_header_content-->Teammates<!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                        <div class="u-block-content u-text u-text-6"><!--block_content_content-->Phan Nguyễn Dũng Mạnh<br>Nguyễn Trường Sơn<br>Phạm Lê Trung Hiếu<br>Phạm Văn Hoàng<!--/block_content_content-->
                        </div><!--/block_content-->
                      </div>
                    </div><!--/block-->
                  </div><!--/position-->
                </div>
              </div>
            </div>
          </div>

      </footer>
  </body>
</html>