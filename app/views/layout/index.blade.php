<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title') - Data Analyser</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('css/nv.d3.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
	<script src="{{url('js/jquery-1.10.2.js')}}"></script>
	<script src="{{url('js/bootstrap.min.js')}}"></script>

</head>
<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{url('/')}}">Data Analyser</a>
        </div>
        <div>
            <ul class="nav navbar-nav">
                <li class="{{ Request::is('*dashboard') ? 'active' : '' }}"><a href="{{url('/dashboard')}}">Dashboard</a></li>
                <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{url('/')}}">Import</a></li>
                <li role="presentation" class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Gainers<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="{{ Request::is('*market/top') ? 'active' : '' }}"><a href="{{url('/market/top')}}">Top</a></li>
                        <li class="{{ Request::is('*market/top1') ? 'active' : '' }}"><a href="{{url('/market/top1')}}">Always Top</a></li>
                        <li class="{{ Request::is('*market/lasttop') ? 'active' : '' }}"><a href="{{url('/market/lasttop')}}">Last Top</a></li>
                    </ul>
                </li>
                <li role="presentation" class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Losers<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="{{ Request::is('*market/lose') ? 'active' : '' }}"><a href="{{url('/market/lose')}}">Top Losers</a></li>
                        <li class="{{ Request::is('*market/lose1') ? 'active' : '' }}"><a href="{{url('/market/lose1')}}">Always Losers</a></li>
                        <li class="{{ Request::is('*market/lastlose') ? 'active' : '' }}"><a href="{{url('/market/lastlose')}}">Last Losers</a></li>
                    </ul>
                </li>
                <li class="{{ Request::is('*news') ? 'active' : '' }}"><a href="{{url('/news')}}">News</a></li>
                <li class="{{ Request::is('*screener') ? 'active' : '' }}"><a href="{{url('/screener')}}">Screener</a></li>
                <li class="{{ Request::is('*strategy/first15') ? 'active' : '' }}"><a href="{{url('/strategy/first15')}}">First 15M</a></li>
                <li class="{{ Request::is('*strategy/uptrend') ? 'active' : '' }}"><a href="{{url('/strategy/uptrend')}}">Uptrend</a></li>
                <li class="{{ Request::is('*strategy/upDown') ? 'active' : '' }}"><a href="{{url('/strategy/upDown')}}">upDown</a></li>
                <li class="{{ Request::is('*strategy/open') ? 'active' : '' }}"><a href="{{url('/strategy/open')}}">Open High Low</a></li>
                <li class="{{ Request::is('*intra-suggest') ? 'active' : '' }}"><a href="{{url('/intra-suggest')}}">Suggestions</a></li>
                <li class="{{ Request::is('*backtest') ? 'active' : '' }}"><a href="{{url('/backtest')}}">Backtest</a></li>
                <li class="{{ Request::is('*callreport') ? 'active' : '' }}"><a href="{{url('/callreport')}}">Report</a></li>
                <!-- <li><a href="{{url('/buysell')}}">Buy/Sell Calls</a></li> -->
                <!-- <li><a href="{{url('/call')}}">Trade Script</a></li> -->
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    @yield('content')
</div>

</body>
</html>
