<!DOCTYPE html>
<html lang="{{__('language')['lang']}}">

<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stay Docs</title>
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon.ico" />
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <meta name="description" content="{{__('language')['description']}}">
    <meta name="keywords" content="{{__('language')['keywords']}}">
    <meta name="robots" content="index, follow">
    <meta name="language" content="{{__('language')['fullname']}}">
    <meta name="title" content="Stay Docs">
    <meta name="author" content="M&P">

    <link rel="alternate" href="https://stay.com.ar/es/docs" hreflang="es" />
    <link rel="alternate" href="https://stay.com.ar/en/docs" hreflang="en" />
    <link rel="alternate" href="https://stay.com.ar/it/docs" hreflang="it" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://stay.com.ar/{{__('language')['lang']}}/docs" />
    <meta property="og:title" content="Stay" />
    <meta property="og:description" content="{{__('language')['description']}}" />
    <meta property="og:image" content="/assets/images/coderdocs-logo.png" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://stay.com.ar/{{__('language')['lang']}}/docs" />
    <meta property="twitter:title" content="Stay" />
    <meta property="twitter:description" content="{{__('language')['description']}}" />
    <meta property="twitter:image" content="/assets/images/coderdocs-logo.png" />

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

	<!-- FontAwesome JS-->
	<script defer src="/assets/fontawesome/js/all.min.js"></script>

	<!-- Plugins CSS -->
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.2/styles/atom-one-dark.min.css">
	<link rel="stylesheet" href="/assets/plugins/simplelightbox/simple-lightbox.min.css">

	<!-- Theme CSS -->
	<link id="theme-style" rel="stylesheet" href="/assets/css/theme.css">

</head>

<body class="docs-page">
	<header class="header fixed-top">
		<div class="branding docs-branding">
			<div class="container-fluid position-relative py-2">
				<div class="docs-logo-wrapper">
					<button id="docs-sidebar-toggler" class="docs-sidebar-toggler docs-sidebar-visible me-2 d-xl-none"
						type="button">
						<span></span>
						<span></span>
						<span></span>
					</button>
					<div class="site-logo"><a class="navbar-brand" href="/">
                        <img class="logo-icon me-2" height="40px" width="54px" src="/assets/images/coderdocs-logo.png" alt="logo">
                        <span class="logo-text">Stay</span></a></div>
				</div><!--//docs-logo-wrapper-->
				<div class="docs-top-utilities d-flex justify-content-end align-items-center">

					<ul class="social-list list-inline mx-md-3 mx-lg-5 mb-0 d-none d-lg-flex">
						<li class="list-inline-item"><a href="https://github.com/MaximoBrandi/stay"><i class="fab fa-github fa-fw"></i></a></li>
						<li class="list-inline-item"><a href="https://www.threads.net/@stay_attendance"><i class="fas fa-at fa-fw"></i></a></li>
						<li class="list-inline-item"><a href="https://www.instagram.com/stay_attendance"><i class="fab fa-instagram"></i></a></li>
					</ul><!--//social-list-->
					<a href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/coderdocs-free-bootstrap5-documentation-template-for-software-projects/"
						class="btn btn-primary d-none d-lg-flex">{{__('header')['download']}}</a>
				</div><!--//docs-top-utilities-->
			</div><!--//container-->
		</div><!--//branding-->
	</header><!--//header-->


	<div class="docs-wrapper">
		<div id="docs-sidebar" class="docs-sidebar">
			<div class="top-search-box d-lg-none p3">
				<form class="search-form">
					<input type="text" placeholder="Search the docs..." name="search" class="form-control search-input">
					<button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
				</form>
			</div>
			<nav id="docs-nav" class="docs-nav navbar">
                <ul class="section-items list-unstyled nav flex-column pb-3">
                    <li class="nav-item section-title"><a class="nav-link scrollto active" href="#section-1"><span
                                class="theme-icon-holder me-2"><i class="fas fa-map-signs"></i></span>{{ __('navigation')['Despliegue Rapido'] }}</a>
                    </li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-1">{{ __('navigation')['Requisitos'] }}</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-2">{{ __('navigation')['Instalacion'] }}</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-5">{{ __('navigation')['Concideraciones'] }}</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#aspects"><span
                                class="theme-icon-holder me-2"><i class="fas fa-tablet-alt"></i></span>{{ __('navigation')['Caracteristicas'] }}</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-3">{{ __('navigation')['Estadisticas'] }}</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-4">{{ __('navigation')['Presentismo y retiros'] }}</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-9-2">{{ __('navigation')['Exportar'] }}</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-9-3">{{ __('navigation')['Roles'] }}</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#import"><span
                                class="theme-icon-holder me-2"><i class="fas fa-arrow-down"></i></span>{{ __('navigation')['Importar'] }}</a>
                    </li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-2-2">{{ __('navigation')['Equipos'] }}</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-2-3">{{ __('navigation')['Presentismos'] }}</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-2-4">{{ __('navigation')['Retiros'] }}</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-2-5">{{ __('navigation')['Feriados'] }}</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-2-6">{{ __('navigation')['Estaciones de escaneo'] }}</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-2-7">{{ __('navigation')['Miembros'] }}</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#errors"><span
                                class="theme-icon-holder me-2"><i class="fas fa-lightbulb"></i></span>{{ __('navigation')['Errores'] }}</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#400">{{ __('navigation')['400'] }}</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#401-403">{{ __('navigation')['401-403'] }}</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#404">{{ __('navigation')['404'] }}</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#405">{{ __('navigation')['405'] }}</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#409">{{ __('navigation')['409'] }}</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#500">{{ __('navigation')['500'] }}</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#503">{{ __('navigation')['503'] }}</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#updates-section"><span
                                class="theme-icon-holder me-2"><i class="fas fa-lightbulb"></i></span>{{ __('navigation')['Actualizaciones'] }}</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#updates">{{ __('navigation')['Notas de cambio'] }}</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#update-guide">{{ __('navigation')['Guia de actualizacion'] }}</a></li>
                </ul>

			</nav><!--//docs-nav-->
		</div><!--//docs-sidebar-->
		<div class="docs-content">
			<div class="container">
				<article class="docs-article" id="section-1">
					<header class="docs-header">
						<h1 class="docs-heading"> {{__('section-1')['deploy']['heading']}} <span class="docs-time"> {{__('section-1')['deploy']['updated-heading']}}:  {{__('section-1')['deploy']['updated']}}</span>
						</h1>
						<section class="docs-intro">
							<p>
                                {{__('section-1')['docs-intro']['p1']}}
                            </p>
                            <p>
                                {{__('section-1')['docs-intro']['p2']}}
                            </p>
						</section><!--//docs-intro-->

					</header>

					<section class="docs-section" id="item-1-1">
						<h2 class="section-heading">{{__('section-1')['item-1-1']['h2']}}</h2>

						<h5>{{__('section-1')['item-1-1']['h5-1']}}</h5>

                        <p>
                            {{__('section-1')['item-1-1']['p1-1']}}
                        </p>

                        <p>
                            {{__('section-1')['item-1-1']['p2-1']}}
                        </p>

                        <p>
                            {{__('section-1')['item-1-1']['p3-1']}}
                        </p>

						<h5>{{__('section-1')['item-1-1']['h5-2']}}</h5>

                        <p>
                            {{__('section-1')['item-1-1']['p1-2']}}
                        </p>

						<h5>{{__('section-1')['item-1-1']['h5-3']}}</h5>

                        <p>
                            {{__('section-1')['item-1-1']['p1-3']}}
                            <a href="https://codinary.dev/blog/article/how-to-set-appropriate-laravel-permissions-on-linux-server"> {{__('section-1')['item-1-1']['a']}}</a>
                            {{__('section-1')['item-1-1']['p-coso']}}
                        </p>

					</section>


					<section class="docs-section" id="item-1-2">
						<h2 class="section-heading"> {{__('section-1')['item-1-2']['h2']}}</h2>
						<p>
                            {{__('section-1')['item-1-2']['p1-1']}}
                        </p>
                        <p>
                            {{__('section-1')['item-1-2']['p2-1']}}
                        </p>
                        <div class="callout-block callout-block-warning">
							<div class="content">
								<h4 class="callout-title">
									<span class="callout-icon-holder me-1">
										<i class="fas fa-bullhorn"></i>
									</span><!--//icon-holder-->
									{{__('section-1')['item-1-2']['warning']}}
								</h4>
								<p>
                                    {{__('section-1')['item-1-2']['callout-block-warning']}}
                                </p>
							</div><!--//content-->
						</div><!--//callout-block-->
                        <div class="callout-block callout-block-info">

							<div class="content">
								<h4 class="callout-title">
									<span class="callout-icon-holder me-1">
										<i class="fas fa-info-circle"></i>
									</span><!--//icon-holder-->
									{{__('section-1')['item-1-2']['info']}}
								</h4>
								<p>
                                    {{__('section-1')['item-1-2']['callout-block-info']}} <a href="https://laravel.com/docs/master/deployment">Laravel.</a>
                                </p>
							</div><!--//content-->
						</div><!--//callout-block-->
                        <p>
                            {{__('section-1')['item-1-2']['p-cloning']}}
                        </p>
                        <pre >
                            <code class="php hljs">git clone https://github.com/MaximoBrandi/stay

cd stay</code>
                        </pre>
                        <h5>{{__('section-1')['item-1-2']['h5']}}</h5>
						<p>{{__('section-1')['item-1-2']['p1-2-1']}}<code>bash DEPLOY.sh </code></p>
                        <p>{{__('section-1')['item-1-2']['p1-2-2']}}</p>
                        <div class="">
							<pre class="">
                                <code class="php hljs">APP_USER=
APP_URL=http://localhost

// Informacion basica de la aplicacion, como el nombre de la empresa y la url bajo la que estara alojada la aplicacion.

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=1234

// La informacion de la base de datos bajo la que estara la aplicacion

APP_TIMEZONE=''

// La zona horaria bajo la que estara la aplicacion, veanse en https://www.php.net/manual/es/timezones.php

MAIL_MAILER=smtp
MAIL_HOST=
MAIL_PORT=
MAIL_USERNAME=email@domain.com
MAIL_PASSWORD=
MAIL_ENCRYPTION=
MAIL_FROM_ADDRESS="email@domain.com"
MAIL_FROM_NAME="${APP_USER} - ${APP_NAME}"

// Es importante para el envio de emails</code>
                            </pre>
						</div>
                        <p>{{__('section-1')['item-1-2']['p2-2-1']}}<code>npm run dev</code>{{__('section-1')['item-1-2']['p2-2-2']}}</p>
                        <p>{{__('section-1')['item-1-2']['p3-1-1']}}<code>admin@admin.com</code> {{__('section-1')['item-1-2']['p3-1-2']}} <code>1234</code></p>

                        <div class="simplelightbox-gallery row mb-3">
                            <div class="col-12 col-md-4 mb-3">
								<a href="/assets/images/Login.avif"><img
										class="figure-img img-fluid shadow rounded"
										src="/assets/images/Login.avif" alt=""
										title="Stay login page" /></a>
							</div>
                            <div class="col-12 col-md-4 mb-3">
								<a href="/assets/images/Change-Password.avif"><img
										class="figure-img img-fluid shadow rounded"
										src="/assets/images/Change-Password.avif" alt=""
										title="Stay change password page" /></a>
							</div>
                            <div class="col-12 col-md-4 mb-3">
								<a href="/assets/images/2FA.avif"><img
										class="figure-img img-fluid shadow rounded"
										src="/assets/images/2FA.avif" alt=""
										title="Stay two factor auth page" /></a>
							</div>

						</div><!--//gallery-->

                        <p>{{__('section-1')['item-1-2']['p4']}}</p>

                        <div class="callout-block callout-block-info">

							<div class="content">
								<h4 class="callout-title">
									<span class="callout-icon-holder me-1">
										<i class="fas fa-info-circle"></i>
									</span><!--//icon-holder-->
									{{__('section-1')['item-1-2']['info']}} {{__('section-1')['item-1-2']['important']}}
								</h4>
								<p>
                                    {{__('section-1')['item-1-2']['important-note']}}
                                </p>
							</div><!--//content-->
						</div><!--//callout-block-->

                        <div class="simplelightbox-gallery row mb-3">
                            <div class="col-12 col-md-4 mb-3">
								<a href="/assets/images/Startup.avif"><img
										class="figure-img img-fluid shadow rounded"
										src="/assets/images/Startup.avif" alt=""
										title="Stay startup page" /></a>
							</div>
                            <div class="col-12 col-md-4 mb-3">
								<a href="/assets/images/Home.avif"><img
										class="figure-img img-fluid shadow rounded"
										src="/assets/images/Home.avif" alt=""
										title="Stay accountant home page" /></a>
							</div>

						</div><!--//gallery-->

                        <p>
                            {{__('section-1')['item-1-2']['p5']}}
                        </p>

                        <div class="callout-block callout-block-info">

							<div class="content">
								<h4 class="callout-title">
									<span class="callout-icon-holder me-1">
										<i class="fas fa-info-circle"></i>
									</span><!--//icon-holder-->
									{{__('section-1')['item-1-2']['info']}}
								</h4>
								<p>
                                    {{__('section-1')['item-1-2']['p6']}}
                                </p>
							</div><!--//content-->
						</div><!--//callout-block-->

                        <p>{{__('section-1')['item-1-2']['p7']}}</p>

					</section><!--//section-->

                    <section class="docs-section" id="item-1-5">
                        <h1>{{__('section-1')['item-1-5']['h1']}}</h1>
						<div class="table-responsive my-4">
							<table class="table table-bordered">
								<tbody>
                                    @foreach (__('section-1')['item-1-5']['table'] as $coso)
                                        <tr>
                                            <th class="theme-bg-light"><a class="theme-link" href="#{{$coso['reference']}}">{{$coso['title']}}</a></th>
                                            <td>{{$coso['description']}}</td>
                                        </tr>
                                    @endforeach
								</tbody>
							</table>
						</div><!--//table-responsive-->
                    </section>

                </article>

                <article class="docs-article" id="aspects">
					<header class="docs-header">
						<h1 class="docs-heading">{{ __('aspects')['heading'] }}</h1>
						<section class="docs-intro">
							<p>{{ __('aspects')['section-intro'] }}</p>
						</section><!--//docs-intro-->
					</header>

					<section class="docs-section" id="item-1-3">
						<h2 class="section-heading">{{ __('aspects')['item-1-3']['heading'] }}</h2>
						<p>{{ __('aspects')['item-1-3']['description'] }}</p>

                        <div class="callout-block callout-block-info">

							<div class="content">
								<h4 class="callout-title">
									<span class="callout-icon-holder me-1">
										<i class="fas fa-info-circle"></i>
									</span><!--//icon-holder-->
									{{ __('aspects')['item-1-3']['note-heading'] }}
								</h4>
								<p>
                                    {{ __('aspects')['item-1-3']['note'] }}
                                </p>
							</div><!--//content-->
						</div><!--//callout-block-->

                        <div class="simplelightbox-gallery row mb-3">
                            <div class="col-12 col-md-4 mb-3">
								<a href="/assets/images/Stadistics.avif"><img
										class="figure-img img-fluid shadow rounded"
										src="/assets/images/Stadistics.avif" alt=""
										title="Stay database page" /></a>
							</div>

						</div><!--//gallery-->

						<h5>{{ __('aspects')['item-1-3']['stats-heading'] }}</h5>
						<div class="table-responsive my-4">
							<table class="table table-bordered">
								<tbody>
                                    @foreach (__('aspects')['item-1-3']['individual-stats'] as $stat)
                                        <tr>
                                            <th class="theme-bg-light">{{$stat['title']}}</th>
                                            <td>{{$stat['description']}}</td>
                                        </tr>
                                    @endforeach
								</tbody>
							</table>
						</div><!--//table-responsive-->

                        <h5> {{ __('aspects')['item-1-3']['divison-heading'] }} </h5>
						<div class="table-responsive my-4">
							<table class="table table-bordered">
								<tbody>
                                    @foreach (__('aspects')['item-1-3']['division-stats'] as $stat)
                                        <tr>
                                            <th class="theme-bg-light">{{$stat['title']}}</th>
                                            <td>{{$stat['description']}}</td>
                                        </tr>
                                    @endforeach
								</tbody>
							</table>
						</div><!--//table-responsive-->

					</section><!--//section-->

					<section class="docs-section" id="item-1-4">
						<h2 class="section-heading">{{ __('aspects')['item-1-4']['heading'] }}</h2>
						<p>
                            {{ __('aspects')['item-1-4']['description'] }}
                        </p>

                        <h5>
                            {{ __('aspects')['item-1-4']['member-heading'] }}
                        </h5>

                        <div class="simplelightbox-gallery row mb-3">
                            @foreach (__('aspects')['item-1-4']['member-vision'] as $stat)
                                <div class="col-12 col-md-4 mb-3">
                                    <a href="{{$stat['img']}}"><img
                                            class="figure-img img-fluid shadow rounded"
                                            src="{{$stat['img']}}" alt=""
                                            title="{{$stat['title']}}" /></a>
                                </div>
                            @endforeach

						</div><!--//gallery-->

                        <h5>
                            {{ __('aspects')['item-1-4']['supervisor-heading'] }}
                        </h5>

                        <div class="simplelightbox-gallery row mb-3">
                            @foreach (__('aspects')['item-1-4']['supervisor-vision'] as $stat)
                                <div class="col-12 col-md-4 mb-3">
                                    <a href="{{$stat['img']}}"><img
                                            class="figure-img img-fluid shadow rounded"
                                            src="{{$stat['img']}}" alt=""
                                            title="{{$stat['title']}}" /></a>
                                </div>
                            @endforeach

						</div><!--//gallery-->

					</section><!--//section-->

					<section class="docs-section" id="item-9-2">
						<h2 class="section-heading"> {{ __('aspects')['item-9-2']['heading'] }} </h2>
                        <p>
                            {{ __('aspects')['item-9-2']['description'] }}
                        </p>

                        <h4>{{ __('aspects')['item-9-2']['actions-heading'] }}</h4>

                        <div class="table-responsive my-4">
                            <table class="table table-bordered">
                                <tbody>
                                    @foreach (__('aspects')['item-9-2']['from-actions-tab'] as $team)
                                        <tr>
                                            <th class="theme-bg-light">{{$team['title']}}</th>
                                            <td>
                                                {{$team['description']}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div><!--//table-responsive-->

                        <h4>{{ __('aspects')['item-9-2']['tables-heading'] }}</h4>

                        <div class="table-responsive my-4">
                            <table class="table table-bordered">
                                <tbody>
                                    @foreach (__('aspects')['item-9-2']['general-database-tables'] as $team)
                                        <tr>
                                            <th class="theme-bg-light">{{$team['title']}}</th>
                                            <td>
                                                {{$team['description']}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div><!--//table-responsive-->
					</section><!--//section-->

                    <section class="docs-section" id="item-9-3">
						<h2 class="section-heading">{{ __('aspects')['item-9-3']['heading'] }}</h2>
                        <p>
                            {{ __('aspects')['item-9-3']['description'] }}
                        </p>
                        <div class="simplelightbox-gallery row mb-3">
                            <div class="col-12 col-md-4 mb-3">
                                <a href="/assets/images/ProfileConfig.avif"><img
                                        class="figure-img img-fluid shadow rounded"
                                        src="/assets/images/ProfileConfig.avif" alt=""
                                        title="Stay profile configuration page" /></a>
                            </div>

                        </div><!--//gallery-->
                        <p>
                            {{ __('aspects')['item-9-3']['roles-description'] }}
                        </p>

                        @foreach (__('aspects')['item-9-3']['roles'] as $role)
                            <h5 class="pt-3"><i class="fas fa-user me-1"></i> {{$role['title']}} </h5>
                            <p>
                                {{$role['description']}}


                                <div class="simplelightbox-gallery row mb-3">
                                    @foreach ($role['vision'] as $stat)
                                        <div class="col-12 col-md-4 mb-3">
                                            <a href="{{$stat['img']}}"><img
                                                    class="figure-img img-fluid shadow rounded"
                                                    src="{{$stat['img']}}" alt=""
                                                    title="{{$stat['title']}}" /></a>
                                        </div>
                                    @endforeach

                                </div><!--//gallery-->

                                @if (isset($role['note']))
                                    <div class="callout-block callout-block-info">

                                        <div class="content">
                                            <h4 class="callout-title">
                                                <span class="callout-icon-holder me-1">
                                                    <i class="fas fa-info-circle"></i>
                                                </span><!--//icon-holder-->
                                                {{$role['note-heading']}}
                                            </h4>
                                            <p>
                                                {{$role['note']}}
                                            </p>
                                        </div><!--//content-->
                                    </div><!--//callout-block-->
                                @endif

                            </p>
                        @endforeach
					</section><!--//section-->
				</article><!--//docs-article-->

                <article class="docs-article" id="import">

                    <h2 class="section-heading">{{ __('import')['heading'] }}</h2>

                    <div class="table-responsive my-4">
                        <table class="table table-bordered">
                            <tbody>
                                @foreach (__('import')['table'] as $table)
                                <tr>
                                    <th class="theme-bg-light"><a class="theme-link" href="#item-{{ $table['title'] }}">{{ $table['title'] }}</a></th>
                                    <td>{{ $table['description'] }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div><!--//table-responsive-->

                    <p>
                        {{ __('import')['format-info'] }}
                    </p>

                    <div class="callout-block callout-block-info">
                        <div class="content">
                            <h4 class="callout-title">
                                <span class="callout-icon-holder me-1">
                                    <i class="fas fa-info-circle"></i>
                                </span><!--//icon-holder-->
                                {{ __('import')['note-1']['title'] }}
                            </h4>
                            <p>
                                {{ __('import')['note-1']['content'] }}
                            </p>
                        </div><!--//content-->
                    </div><!--//callout-block-->

                    <div class="callout-block callout-block-info">
                        <div class="content">
                            <h4 class="callout-title">
                                <span class="callout-icon-holder me-1">
                                    <i class="fas fa-info-circle"></i>
                                </span><!--//icon-holder-->
                                {{ __('import')['note-2']['title'] }}
                            </h4>
                            <p>
                                {{ __('import')['note-2']['content'] }}
                            </p>
                        </div><!--//content-->
                    </div><!--//callout-block-->

                    <div class="callout-block callout-block-warning">
                        <div class="content">
                            <h4 class="callout-title">
                                <span class="callout-icon-holder me-1">
                                    <i class="fas fa-bullhorn"></i>
                                </span><!--//icon-holder-->
                                {{__('import')['important-formats']}}
                            </h4>
                            <p>
                                Time: “23:14:00”
                                Date: "2023-02-27T23:14:00.00"
                                Cycle: "2023-02-27T”
                            </p>
                        </div><!--//content-->
                    </div><!--//callout-block-->

                    <h4 id="item-2-2">
                        {{ __('import')['division']['heading'] }}
                    </h4>
                    <p>
                        {{ __('import')['division']['description'] }}
                    </p>

                    <h5>{{ __('import')['division']['preceptors'] }}</h5>
                    <div class="table-responsive my-4">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">1</th>
                                    <th scope="col">2</th>
                                    <th scope="col">3</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"></th>
                                    <td>OWNER_NAME</td>
                                    <td>OWNER_EMAIL</td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!--//table-responsive-->

                    <h5>{{ __('import')['division']['courses'] }}</h5>
                    <div class="table-responsive my-4">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">1</th>
                                    <th scope="col">2</th>
                                    <th scope="col">3</th>
                                    <th scope="col">4</th>
                                    <th scope="col">5</th>
                                    <th scope="col">6</th>
                                    <th scope="col">7</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"></th>
                                    <td>OWNER_ID</td>
                                    <td>TEAM_NAME</td>
                                    <td>SHIFT</td>
                                    <td></td>
                                    <td>START_CYCLE</td>
                                    <td>END_CYCLE</td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!--//table-responsive-->

                    <h5>{{ __('import')['division']['students'] }}</h5>
                    <div class="table-responsive my-4">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">1</th>
                                    <th scope="col">2</th>
                                    <th scope="col">3</th>
                                    <th scope="col">4</th>
                                    <th scope="col">5</th>
                                    <th scope="col">6</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"></th>
                                    <td>STUDENT_NAME</td>
                                    <td>STUDENT_EMAIL</td>
                                    <td></td>
                                    <td></td>
                                    <td>TEAM_ID</td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!--//table-responsive-->

                    <h5>{{ __('import')['division']['attendances'] }}</h5>
                    <div class="table-responsive my-4">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">1</th>
                                    <th scope="col">2</th>
                                    <th scope="col">3</th>
                                    <th scope="col">4</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"></th>
                                    <td>USER_ID</td>
                                    <td>DATE</td>
                                    <td>DATE</td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!--//table-responsive-->

                    <h5>{{ __('import')['division']['retirements'] }}</h5>
                    <div class="table-responsive my-4">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">1</th>
                                    <th scope="col">2</th>
                                    <th scope="col">3</th>
                                    <th scope="col">4</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"></th>
                                    <td>USER_ID</td>
                                    <td>DATE</td>
                                    <td>DATE</td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!--//table-responsive-->

                    <h5>{{ __('import')['division']['schedules'] }}</h5>
                    <div class="table-responsive my-4">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">1</th>
                                    <th scope="col">2</th>
                                    <th scope="col">3</th>
                                    <th scope="col">4</th>
                                    <th scope="col">5</th>
                                    <th scope="col">6</th>
                                    <th scope="col">7</th>
                                    <th scope="col">8</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"></th>
                                    <td>TEAM_ID</td>
                                    <td>SHIFT</td>
                                    <td>openTIME</td>
                                    <td>startTIME</td>
                                    <td>lateTIME</td>
                                    <td>absentTIME</td>
                                    <td>closeTIME</td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!--//table-responsive-->

                    <h4 id="item-2-3">
                        {{ __('import')['presentism']['heading'] }}
                    </h4>
                    <p>
                        {{ __('import')['presentism']['description'] }}
                    </p>

                    <h5>{{ __('import')['division']['attendances'] }}</h5>
                    <div class="table-responsive my-4">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">1</th>
                                    <th scope="col">2</th>
                                    <th scope="col">3</th>
                                    <th scope="col">4</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"></th>
                                    <td>USER_ID</td>
                                    <td>DATE</td>
                                    <td>DATE</td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!--//table-responsive-->

                    <h4 id="item-2-3">
                        {{ __('import')['retirements']['heading'] }}
                    </h4>
                    <p>
                        {{ __('import')['retirements']['description'] }}
                    </p>

                    <h5>{{ __('import')['division']['retirements'] }}</h5>
                    <div class="table-responsive my-4">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">1</th>
                                    <th scope="col">2</th>
                                    <th scope="col">3</th>
                                    <th scope="col">4</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"></th>
                                    <td>USER_ID</td>
                                    <td>DATE</td>
                                    <td>DATE</td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!--//table-responsive-->

                    <h4 id="item-2-3">
                        {{ __('import')['holidays']['heading'] }}
                    </h4>
                    <p>
                        {{ __('import')['holidays']['description'] }}
                    </p>

                    <h5>{{ __('import')['holidays']['holidays'] }}</h5>
                    <div class="table-responsive my-4">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">1</th>
                                    <th scope="col">2</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>DATE</td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!--//table-responsive-->

                    <h4 id="item-2-3">
                        {{ __('import')['scan-station']['heading'] }}
                    </h4>
                    <p>
                        {{ __('import')['scan-station']['description'] }}
                    </p>

                    <h5>{{ __('import')['scan-station']['scan-station'] }}</h5>
                    <div class="table-responsive my-4">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">1</th>
                                    <th scope="col">2</th>
                                    <th scope="col">3</th>
                                    <th scope="col">4</th>
                                    <th scope="col">5</th>
                                    <th scope="col">6</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"></th>
                                    <td>STUDENT_NAME</td>
                                    <td>STUDENT_EMAIL</td>
                                    <td></td>
                                    <td></td>
                                    <td>TEAM_ID</td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!--//table-responsive-->

                    <h4 id="item-2-3">
                        {{ __('import')['members']['heading'] }}
                    </h4>
                    <p>
                        {{ __('import')['members']['description'] }}
                    </p>

                    <h5>{{ __('import')['division']['students'] }}</h5>
                    <div class="table-responsive my-4">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">1</th>
                                    <th scope="col">2</th>
                                    <th scope="col">3</th>
                                    <th scope="col">4</th>
                                    <th scope="col">5</th>
                                    <th scope="col">6</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"></th>
                                    <td>STUDENT_NAME</td>
                                    <td>STUDENT_EMAIL</td>
                                    <td></td>
                                    <td></td>
                                    <td>TEAM_ID</td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!--//table-responsive-->

                </article>

                <article class="docs-article" id="errors">
                    <header class="docs-header">
                        <h1 class="docs-heading">{{ __('errors')['errors'] }}</h1>
                        <section class="docs-intro">
                            <p>{{ __('errors')['warning-content'] }}</p>
                        </section><!--//docs-intro-->
                    </header>
                    <div class="callout-block callout-block-warning">
                        <div class="content">
                            <h4 class="callout-title">
                                <span class="callout-icon-holder me-1">
                                    <i class="fas fa-bullhorn"></i>
                                </span><!--//icon-holder-->
                                {{ __('errors')['warning'] }}
                            </h4>
                            <p>
                                {{ __('errors')['warning-content'] }}
                            </p>
                        </div><!--//content-->
                    </div><!--//callout-block-->
                    <section class="docs-section" id="400">
                        <h2 class="section-heading">{{ __('errors')['400-heading'] }}</h2>
                        <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>
                            {{ __('errors')['400-1'] }}
                        </h5>
                        <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>
                            {{ __('errors')['400-2'] }}
                        </h5>
                        <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>
                            {{ __('errors')['400-3'] }}
                        </h5>
                        <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>
                            {{ __('errors')['400-4'] }}
                        </h5>
                    </section><!--//section-->
                    <section class="docs-section" id="401-403">
                        <h2 class="section-heading">{{ __('errors')['401-403-heading'] }}</h2>
                        <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>
                            {{ __('errors')['401-403-1'] }}
                        </h5>
                        <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>
                            {{ __('errors')['401-403-2'] }}
                        </h5>
                    </section><!--//section-->
                    <section class="docs-section" id="404">
                        <h2 class="section-heading">{{ __('errors')['404-heading'] }}</h2>
                        <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>
                            {{ __('errors')['404-1'] }}
                        </h5>
                        <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>
                            {{ __('errors')['404-2'] }}
                        </h5>
                    </section><!--//section-->
                    <section class="docs-section" id="405">
                        <h2 class="section-heading">{{ __('errors')['405-heading'] }}</h2>
                        <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>
                            {{ __('errors')['405-1'] }}
                        </h5>
                    </section><!--//section-->
                    <section class="docs-section" id="409">
                        <h2 class="section-heading">{{ __('errors')['409-heading'] }}</h2>
                        <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>
                            {{ __('errors')['409-1'] }}
                        </h5>
                    </section><!--//section-->
                    <section class="docs-section" id="500">
                        <h2 class="section-heading">{{ __('errors')['500-heading'] }}</h2>
                        <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>
                            {{ __('errors')['500-1'] }}
                        </h5>
                        <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>
                            {{ __('errors')['500-2'] }}
                        </h5>
                    </section><!--//section-->
                    <section class="docs-section" id="503">
                        <h2 class="section-heading">{{ __('errors')['503-heading'] }}</h2>
                        <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>
                            {{ __('errors')['503-1'] }}
                        </h5>
                        <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>
                            {{ __('errors')['503-2'] }}
                        </h5>
                    </section><!--//section-->
                </article><!--//docs-article-->

                <article class="docs-article" id="updates-section">
					<header class="docs-header">
						<h1 class="docs-heading">{{__('updates')['header']}}</h1>
						<section class="updates">
							<p>
                                {{__('updates')['description']}}
                            </p>
						</section><!--//docs-intro-->
					</header>
					<section class="docs-section" id="updates">
						<h2 class="section-heading"> {{__('updates')['changes']['header']}} </h2>
                        <h5 class="pt-3">
                            {{__('updates')['changes']['description']}}
						</h5>
					</section><!--//section-->
                    <section class="docs-section" id="update-guide">
						<h2 class="section-heading"> {{__('updates')['guide']['header']}} </h2>
                        <h5 class="pt-3">
                            {{__('updates')['guide']['description']}}
						</h5>
					</section><!--//section-->

				</article><!--//docs-article-->

				<footer class="footer">
					<div class="container text-center py-5">
						<!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
						<small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"
								style="color: #fb866a;"></i> by <a class="theme-link"
								href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for
							developers</small>
						<ul class="social-list list-unstyled pt-4 mb-0">
							<li class="list-inline-item"><a href="https://github.com/MaximoBrandi/stay"><i class="fab fa-github fa-fw"></i></a></li>
							<li class="list-inline-item"><a href="https://www.threads.net/@stay_attendance"><i class="fas fa-at fa-fw"></i></a></li>
							<li class="list-inline-item"><a href="https://www.instagram.com/stay_attendance"><i class="fab fa-instagram fa-fw"></i></a></li>
						</ul><!--//social-list-->
					</div>
				</footer>
			</div>
		</div>
	</div><!--//docs-wrapper-->


	<!-- Javascript -->
	<script src="/assets/plugins/popper.min.js"></script>
	<script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>


	<!-- Page Specific JS -->
	<script src="/assets/plugins/smoothscroll.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
	<script src="/assets/js/highlight-custom.js"></script>
	<script src="/assets/plugins/simplelightbox/simple-lightbox.min.js"></script>
	<script src="/assets/plugins/gumshoe/gumshoe.polyfills.min.js"></script>
	<script src="/assets/js/docs.js"></script>

</body>

</html>
