<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cojo's Librairie</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Cormorant Garamond', serif;
        }
        
        body {
            font-family: 'Cormorant Garamond', serif;
            color: #333;
            line-height: 1.6;
        }
        
        header {
            height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/api/placeholder/1200/800') center/cover no-repeat;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
        }

     
        nav  {
            position: absolute;
            top: 0;
            right: 0;
            padding: 20px;
        }
        
        .login-btn {
            color: black;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 14px;
            letter-spacing: 1px;
            padding: 8px 16px;
            border: 1px solid #d4c19c;
            border-radius: 4px;
            transition: all 0.3s ease;
            background: black;
        }
        
        .login-btn:hover {
            background: #d4c19c;
            color: #333;
        }
        
        .header-content h1 {
            font-size: 60px;
            margin-bottom: 20px;
            letter-spacing: 3px;
        }
        
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            border: 1px solidrgb(198, 175, 130);
            
            color: #fff;
            text-decoration: none;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }
        
        .btn:hover {
            background: #d4c19c;
            color: #333;
        }
        
        .about {
            display: flex;
            padding: 80px 10%;
            background-color: #f9f9f9;
        }
        
        .about-content {
            flex: 1;
            padding-right: 50px;
        }
        
        .about-info {
            flex: 1;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .about h2, .services h2 {
            font-size: 36px;
            margin-bottom: 20px;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
        .services {
            padding: 80px 10%;
            text-align: center;
            background-color: #eee;
        }
        
        .services-container {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }
        
        .service-card {
            flex: 0 0 48%;
            padding: 20px;
            margin: 10px;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('/api/placeholder/600/400') center/cover no-repeat;
            color: white;
            text-align: center;
            height: 250px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        
        .service-card h3 {
            font-size: 24px;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .service-card p {
            margin-bottom: 20px;
        }
        
        footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 20px;
        }
        
        .contact-info {
            margin: 20px 0;
        }
        
        @media (max-width: 768px) {
            .about, .services-container {
                flex-direction: column;
            }
            
            .about-content, .about-info {
                padding: 20px 0;
            }
            
            .service-card {
                margin: 10px 0;
            }
        }
    
  

</style>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    
