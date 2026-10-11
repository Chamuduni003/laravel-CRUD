<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    body{
        background-color: #f4f7f9;
        font-family: 'Segoe UI', sans-serif;
    }
    .custom-card{
        background: #ffffff;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        border: none;
        overflow: hidden;
    }
    .form-header{
        background-color: #b8e0ff;
        padding: 25px;
    }
    .form-label{
        font-size: 13px;
        font-weight: 600;
        color: #2c3e50;
    }
    .form-control{
        border-radius: 8px;
        font-size: 14px;
        border: 1px solid #d0d7de;
    }
    .form-control:focus{
        box-shadow: 0 0 0 3px rgba(13,110,253,0.15);
        border-color: #0d6efd;
    }
    .table thead th{
        background-color: #f8f9fa;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: #6c757d;
    }
    .table tbody td{
        font-size: 14px;
        vertical-align: middle;
    }
</style>

@stack('css')