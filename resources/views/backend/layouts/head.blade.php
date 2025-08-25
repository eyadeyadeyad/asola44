<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Ecommerce Laravel || DASHBOARD</title>
  
    <!-- Custom fonts for this template-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template-->
    <link href="{{asset('backend/css/sb-admin-2.min.css')}}" rel="stylesheet" onerror="this.remove()">
    
    <!-- Complete Admin Panel Styles -->
    <style>
    /* Admin Layout */
    #wrapper { display: flex; }
    .sidebar { width: 224px; min-height: 100vh; background: linear-gradient(180deg, #4e73df 10%, #224abe 100%); position: fixed; left: 0; top: 0; z-index: 1000; }
    #content-wrapper { margin-left: 224px; width: calc(100% - 224px); min-height: 100vh; background: #f8f9fc; }
    .topbar { background: #fff; height: 4.375rem; box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15); display: flex; align-items: center; padding: 0 1.5rem; }
    
    /* Sidebar */
    .sidebar-brand { display: flex; align-items: center; justify-content: center; height: 4.375rem; text-decoration: none; font-size: 1rem; font-weight: 800; padding: 1.5rem 1rem; color: #fff; }
    .sidebar .nav-item .nav-link { color: rgba(255, 255, 255, 0.8); padding: 1rem; display: flex; align-items: center; text-decoration: none; }
    .sidebar .nav-item .nav-link:hover { color: #fff; }
    .sidebar .nav-item .nav-link i { margin-right: 0.5rem; }
    
    /* Cards */
    .card { background: #fff; border: 1px solid #e3e6f0; border-radius: 0.35rem; box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15); margin-bottom: 1.5rem; }
    .card-header { background: #f8f9fc; border-bottom: 1px solid #e3e6f0; padding: 0.75rem 1.25rem; font-weight: 600; }
    .card-body { padding: 1.25rem; }
    
    /* Buttons */
    .btn { padding: 0.375rem 0.75rem; margin-bottom: 0; font-size: 0.875rem; font-weight: 400; line-height: 1.5; border-radius: 0.35rem; }
    .btn-primary { background-color: #4e73df; border-color: #4e73df; color: #fff; }
    .btn-success { background-color: #1cc88a; border-color: #1cc88a; color: #fff; }
    .btn-danger { background-color: #e74a3b; border-color: #e74a3b; color: #fff; }
    .btn-warning { background-color: #f6c23e; border-color: #f6c23e; color: #3a3b45; }
    
    /* Tables */
    .table { width: 100%; margin-bottom: 1rem; color: #858796; }
    .table th { background-color: #f8f9fc; border-color: #e3e6f0; font-weight: 600; padding: 0.75rem; }
    .table td { padding: 0.75rem; border-top: 1px solid #e3e6f0; }
    
    /* Forms */
    .form-control { background-color: #fff; border: 1px solid #d1d3e2; border-radius: 0.35rem; padding: 0.375rem 0.75rem; font-size: 0.875rem; }
    .form-control:focus { border-color: #bac8f3; box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25); }
    
    /* Mobile */
    @media (max-width: 768px) {
        .sidebar { width: 100%; position: relative; min-height: auto; }
        #content-wrapper { margin-left: 0; width: 100%; }
    }
    </style>
    <!-- Arabic Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <style>
        /* RTL Admin Panel */
        body[dir="rtl"] {
            font-family: 'Cairo', 'Nunito', sans-serif;
        }
        
        /* Move Sidebar to Right */
        #wrapper {
            direction: rtl;
        }
        
        #wrapper #content-wrapper {
            margin-right: 14rem;
            margin-left: 0;
        }
        
        .sidebar {
            position: fixed;
            top: 0;
            right: 0;
            left: auto;
            width: 14rem;
            height: 100vh;
            z-index: 1000;
            background: linear-gradient(180deg, #4e73df 10%, #224abe 100%);
            box-shadow: -0.15rem 0 1.75rem 0 rgba(58, 59, 69, 0.15);
        }
        
        .sidebar .nav-item .nav-link {
            text-align: right;
            padding: 0.75rem 1rem;
            color: rgba(255, 255, 255, 0.9);
            font-weight: 500;
            font-size: 0.9rem;
            border-radius: 0.35rem;
            margin: 0.1rem 0.5rem;
        }
        
        .sidebar .nav-item .nav-link:hover {
            color: #fff;
            background: rgba(255, 255, 255, 0.15);
        }
        
        .sidebar .nav-item .nav-link.active {
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
        }
        
        .sidebar .nav-item .nav-link i {
            margin-left: 0.5rem;
            margin-right: 0;
        }
        
        /* Topbar adjustments */
        .topbar {
            margin-right: 14rem;
            margin-left: 0;
        }
        
        /* Cards and content */
        .card {
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
            border: 1px solid #e3e6f0;
            border-radius: 0.35rem;
        }
        
        .card-header {
            background-color: #f8f9fc;
            border-bottom: 1px solid #e3e6f0;
            font-weight: 600;
            color: #5a5c69;
        }
        
        /* Better visibility for text */
        .text-primary {
            color: #4e73df !important;
        }
        
        .btn-primary {
            background-color: #4e73df;
            border-color: #4e73df;
        }
        
        .btn-primary:hover {
            background-color: #2e59d9;
            border-color: #2653d4;
        }
        
        /* Table improvements */
        .table {
            color: #5a5c69;
        }
        
        .table th {
            background-color: #f8f9fc;
            border-color: #e3e6f0;
            font-weight: 600;
        }
        
        /* Mobile responsive */
        @media (max-width: 768px) {
            #wrapper #content-wrapper {
                margin-right: 0;
            }
            
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }
            
            .topbar {
                margin-right: 0;
            }
        }
        
        /* Sidebar brand */
        .sidebar-brand {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 4.375rem;
            text-decoration: none;
            font-size: 1rem;
            font-weight: 800;
            padding: 1.5rem 1rem;
            text-align: center;
            text-transform: uppercase;
            color: #fff;
        }
        
        .sidebar-brand:hover {
            color: #fff;
            text-decoration: none;
        }
        
        /* Sidebar headings */
        .sidebar-heading {
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.75rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.05rem;
            padding: 1.5rem 1rem 0.5rem;
        }
        
        /* Collapse items */
        .collapse-item {
            color: #5a5c69;
            padding: 0.5rem 1rem;
            font-size: 0.85rem;
        }
        
        .collapse-item:hover {
            color: #3a3b45;
            background-color: #f8f9fc;
        }
        
        /* Sidebar divider */
        .sidebar-divider {
            border-top: 1px solid rgba(255, 255, 255, 0.15);
            margin: 1rem 0;
        }
        
        /* Make sidebar scrollable */
        .sidebar {
            overflow-y: auto;
        }
        
        .sidebar::-webkit-scrollbar {
            width: 6px;
        }
        
        .sidebar::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
        }
        
        .sidebar::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.3);
            border-radius: 3px;
        }
    </style>
    
    @stack('styles')
  
</head>