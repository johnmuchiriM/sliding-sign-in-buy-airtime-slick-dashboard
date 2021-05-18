<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Sacco Member</title>
    <link rel= "stylesheet" href= "{{asset('bootstrap-5.0.0-dist/css/dashboard.css')}}">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>
    <input type="checkbox" id = "nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="las la-people-carry"></span><span>Digital Sacco</span></h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                <a href="" class="active"><span class="las la-sliders-h"></span>
                <span>Dashboard</span></a>
                
                </li>
                <li>
                <a href=""><span class="las la-users"></span>
                <span>Members</span></a>
                
                </li>
                <li>
                <a href=""><span class="las la-hand-holding-usd"></span>
                <span>Loans</span></a>
                </li>
                <li>
                <a href=""><span class="las la-hand-holding-usd"></span>
                <span>Total Loans</span></a>
                </li>
                <li>
                <a href=""><span class="las la-hand-holding-usd"></span>
                <span>Active Loans</span></a>
                </li>
                <li>
                <a href=""><span class="las la-hand-holding-usd"></span>
                <span>Pending Loans</span></a>
                </li>
                <li>
                <a href=""><span class="las la-envelope"></span>
                <span>Messages</span></a>
                </li>
                <li>
                <a href=""><span class="las la-clipboard-list"></span>
                <span>Guanratorship</span></a>
                </li>
                <li>
                <a href=""><span class="las la-users"></span>
                <span>Guanratees</span></a>
                </li>
                <li>
                <a href=""><span class="las la-wallet"></span>
                <span>E-Wallet</span></a>
                </li>
                <li>
                <a href=""><span class="las la-wallet"></span>
                <span>Savings</span></a>
                </li>
                
            </ul>
        
        </div>
    </div>

    <div class="main-content">
        <header class="header">
            <h2>
            <label for="nav-toggle">
                    <span class="las la-bars">
                    
                    </span>
                </label>
                Dashboard
            </h2>

                <div class="search-wrapper">
                    <span class="las la-search">
                        <input type="search" placeholder="Search here"/>
                    </span>
                </div>

                <div class="user-wrapper">
                    <img src="public/../../img/2.jpg" width="40px" height="40px" alt="">
                    <div>
                        <h4>John Muchiri<h4>
                        <small>Member10</small>
                    </div>
                </div>
        </header>
        <main>
            <div class="cards">

                <div class="card-single">
                    <div>
                        <h1>65,080</h1>
                        <span>Members</span>
                    </div>
                    <div>
                        <span class="las la-users">
                        
                        </span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>Ksh 90,000</h1>
                        <span>Total Loans</span>
                    </div>
                    <div>
                        <span class="las la-hand-holding-usd">
                        
                        </span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>+5</h1>
                        <span>Messages</span>
                    </div>
                    <div>
                        <span class="las la-envelope">
                        
                        </span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>Ksh 50,000</h1>
                        <span>Savings</span>
                    </div>
                    <div>
                        <span class="las la-wallet">
                        
                        </span>
                    </div>
                </div>
            
            </div>
            <div class="recent-grid">
                <div class= "loans">
                    <div class="card">
                        <div class="card-header">
                            <h3>Recent Loans</h3>

                            <button>See all <span class="las la-arrow-right"></span></button>
                        </div>

                        <div class="card-body">
                        <div class="table-responsive">
                        <table width="100%">
                            <thead>
                                <tr>
                                    <td>Loan id</td>
                                    <td>Loan type</td>
                                    <td>status</td>
                                </tr>
                            </thead> 
                                <tbody>
                                    <tr>
                                        <td>LXDE34456</td>
                                        <td>DEVELOPMENT</td>
                                        <td>
                                            <span class="status purple"></span>
                                                review
                                            </td>
                                    </tr>
                                        <tr>
                                        <td>LXDE34789</td>
                                        <td>RENT</td>
                                        <td>
                                            <span class="status pink"></span>
                                                in progress
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td>LXDE37890</td>
                                            <td>EMERGENCY</td>
                                        <td>
                                            <span class="status orange"></span>
                                                pending
                                            </td>
                                        </tr> 
                                        <tr>
                                        <td>LXDE34456</td>
                                        <td>DEVELOPMENT</td>
                                        <td>
                                            <span class="status purple"></span>
                                                review
                                            </td>
                                    </tr>
                                        <tr>
                                        <td>LXDE34789</td>
                                        <td>RENT</td>
                                        <td>
                                            <span class="status pink"></span>
                                                in progress
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td>LXDE37890</td>
                                            <td>EMERGENCY</td>
                                        <td>
                                            <span class="status orange"></span>
                                                pending
                                            </td>
                                        </tr> 
                                        
                                </tbody>
                            </table>
                        </div>

                        </div>
                        
                    </div>

                </div>
                <div class= "Guarantees">
                <div class="card">
                        <div class="card-header">
                            <h3>Guarantors</h3>

                            <button>See all <span class="las la-arrow-right"></span></button>
                        </div>

                        <div class="card-body">
                            <div class="guarantor">
                            <div class="info">
                                        <img src="public/../../img/2.jpg" width="40px" height="40px" alt="">
                                        <div>
                                            <h4>Ken Mbugua</h4>
                                            <small>Member34</small>
                                        </div>
                                    </div>
                            <div class = "contact">
                                <span class="las la-user-circle"></span> 
                                <span class="las la-envelope"></span> 
                                <span class="las la-phone"></span> 

                            </div>
                            </div>
                            <div class="guarantor">
                            <div class="info">
                                        <img src="public/../../img/2.jpg" width="40px" height="40px" alt="">
                                        <div>
                                            <h4>Corny Okaya</h4>
                                            <small>Member45</small>
                                        </div>
                                    </div>
                            <div class = "contact">
                                <span class="las la-user-circle"></span> 
                                <span class="las la-envelope"></span> 
                                <span class="las la-phone"></span> 

                            </div>
                            </div>
                            <div class="guarantor">
                            <div class="info">
                                        <img src="public/../../img/2.jpg" width="40px" height="40px" alt="">
                                        <div>
                                            <h4>Geff Miringo</h4>
                                            <small>Member67</small>
                                        </div>
                                    </div>
                            <div class = "contact">
                                <span class="las la-user-circle"></span> 
                                <span class="las la-envelope"></span> 
                                <span class="las la-phone"></span> 

                            </div>
                            </div>
                            <div class="guarantor">
                            <div class="info">
                                        <img src="public/../../img/2.jpg" width="40px" height="40px" alt="">
                                        <div>
                                            <h4>Bruno Wabwire</h4>
                                            <small>Member789</small>
                                        </div>
                                    </div>
                            <div class = "contact">
                                <span class="las la-user-circle"></span> 
                                <span class="las la-envelope"></span> 
                                <span class="las la-phone"></span> 
                            </div>
                            </div>
                        </div>

                </div>



                </div>

            </div>

        </main>

    </div>
    
</body>
</html>