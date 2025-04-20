<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .toast-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
        }
        .toast {
            padding: 12px;
            margin-bottom: 10px;
            min-width: 250px;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            opacity: 0;
            transform: translateX(100%);
            animation: fadeIn 0.3s ease forwards;
        }
        .toast.success { background-color: #4CAF50; }
        .toast.error { background-color: #f44336; }
    
        @keyframes fadeIn {
            from { opacity: 0; transform: translateX(100%); }
            to { opacity: 1; transform: translateX(0); }
        }
        @keyframes fadeOut {
            from { opacity: 1; transform: translateX(0); }
            to { opacity: 0; transform: translateX(100%); }
        }
    </style>

</head>
<body>
    <div class="toast-container" id="toastContainer"></div>

    
    <script>
     

        showToast('success', "hello");
        
    
        function showToast(type, message) {
            const toastContainer = document.getElementById('toastContainer');
            const toast = document.createElement('div');
            toast.classList.add('toast', type);
            toast.innerText = message;
    
            toastContainer.appendChild(toast);
    
            setTimeout(() => {
                toast.style.animation = "fadeOut 0.3s ease forwards";
                setTimeout(() => toast.remove(), 300);
            }, 3000);
        }
    </script>


</body>
</html>