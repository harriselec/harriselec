<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <!--icons-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
       <section class="side-nav-bar">
            <div class="container">
                <aside>
                    <div class="top">
                        <div class="logo">
                            <img src={{'/images/thelogo.png'}} class="logo">
                            <h2>Harris<span class="danger"><h2>Elec</h2></span>
                        </div>
                        <div class="close" id="close-btn" >
                            <i class="material-icons">close</i>
                        </div>
                    </div>
                    <div class="sidebar">
                        <a href="#" class="active"><span class="material-icons">home</span><h3>Home</h3></a>
                        <a href="#" class="active"><span class="material-icons">calendar_month</span><h3>Calendar</h3></a>
                        <a href="#" class="active"><span class="material-icons">payments</span><h3>finance</h3></a>
                        <a href="#" class="active"><span class="material-icons">work</span><h3>Job info</h3></a>
                        <a href="#" class="active"><span class="material-icons">gas_meter</span><h3>Tester Docs</h3></a>
                        <a href="#" class="active"><span class="material-icons">card_membership</span><h3>Repoting</h3></a>
                        <a href="#" class="active"><span class="material-icons">logout</span><h3>Logout</h3></a>
                    </div>
                </aside>
                <!---------------------------------------------- End of Aside ---------------------------------->
                <main>
                    <h1>Home</h1>
                    <div class="date">
                        <input type="date">
                    </div>
                    <div class="insights">
                        <div class="total-cash">
                            <span class="material-icons">currency_pound</span>
                            <div class="middle">
                                <div class="left">
                                    <h3>Total Cash</h3>
                                    <h1></h1>
                                </div>
                                <div class="progress">
                                    <svg><circle cx='38' cy='38' r='36'></circle></svg>
                                    <div class="number">
                                        <p>81%</p>
                                    </div>
                                </div>                                   
                            </div>
                            <small class="text-muted">Last 24 Hours</small>
                        </div>
                   
                    <!--------- End of cashflow card------->
                    
                        <div class="another-thing">
                            <span class="material-icons">currency_pound</span>
                            <div class="middle">
                                <div class="left">
                                    <h3>total cash</h3>
                                    <h1>bank link</h1>
                                </div>
                                <div class="progress">
                                    <svg><circle cx='38' cy='38' r='36'></circle></svg>
                                    <div class="number">
                                        <p>81%</p>
                                    </div>
                                </div>                                   
                            </div>
                            <small class="text-muted">Last 24 Hours</small>
                        </div>
                       
                    <!--------- End of cashflow card-------> 
                    
                        <div class="whatever-i-choose">
                            <span class="material-icons">currency_pound</span>
                            <div class="middle">
                                <div class="left">
                                    <h3>total cash</h3>
                                    <h1>bank link</h1>
                                </div>
                                <div class="progress">
                                    <svg><circle cx='38' cy='38' r='36'></circle></svg>
                                    <div class="number">
                                        <p>81%</p>
                                    </div>
                                </div>                                   
                            </div>
                            <small class="text-muted">Last 24 Hours</small>
                        </div>
                    </div>
                    <!--------- End of cashflow card------->     
                    </div>
                </main>
            </div>
        
    
    </body>
</html>
