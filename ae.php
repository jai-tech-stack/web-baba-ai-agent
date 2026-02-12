<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Meta Tags -->
    <title>WebBaba - Custom Websites in 48 Hours | Fast Website Development India</title>
    <meta name="description" content="Get professional, custom-designed websites delivered in just 48 hours. Expert web development services in India starting at ₹19,999. No templates, rapid delivery, 100% satisfaction guaranteed.">
    <meta name="keywords" content="website development, custom website design, 48 hour website, fast website development India, affordable web design, professional website services, responsive web design">
    <meta name="author" content="WebBaba">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://webbaba.com/">
    <meta property="og:title" content="WebBaba - Custom Websites in 48 Hours">
    <meta property="og:description" content="Professional custom-designed websites delivered in 48 hours. Starting at ₹19,999. No templates, just results.">
    <meta property="og:image" content="https://webbaba.com/images/og-image.jpg">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://webbaba.com/">
    <meta property="twitter:title" content="WebBaba - Custom Websites in 48 Hours">
    <meta property="twitter:description" content="Professional custom-designed websites delivered in 48 hours. Starting at ₹19,999.">
    <meta property="twitter:image" content="https://webbaba.com/images/og-image.jpg">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://webbaba.com/">
    
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    
    <!-- Structured Data / Schema Markup -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ProfessionalService",
      "name": "WebBaba",
      "image": "https://webbaba.com/images/logo.png",
      "url": "https://webbaba.com",
      "telephone": "+91-555-123-4567",
      "priceRange": "₹₹",
      "address": {
        "@type": "PostalAddress",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 19.0760,
        "longitude": 72.8777
      },
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday",
          "Saturday",
          "Sunday"
        ],
        "opens": "00:00",
        "closes": "23:59"
      },
      "sameAs": [
        "https://www.facebook.com/profile.php?id=61582170124254",
        "https://www.linkedin.com/company/webbaba",
        "https://www.instagram.com/webba_ba48/"
      ],
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "127"
      },
      "offers": [
        {
          "@type": "Offer",
          "name": "Starter Package",
          "price": "19999",
          "priceCurrency": "INR"
        },
        {
          "@type": "Offer",
          "name": "Professional Package",
          "price": "45000",
          "priceCurrency": "INR"
        },
        {
          "@type": "Offer",
          "name": "Enterprise Package",
          "price": "75000",
          "priceCurrency": "INR"
        }
      ]
    }
    </script>

    <style>
        :root {
            --orange: hsl(25, 95%, 53%);
            --navy: 223 84% 9%;
            --navy-light: 223 47% 17%;
            --gradient-hero: linear-gradient(135deg, hsl(var(--navy)), hsl(var(--navy-light)));
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
 
        .line-through {
            text-decoration-line: line-through;
        }
        
        body {
            font-family: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            color: #333;
            line-height: 1.6;
            font-weight: 400;
        }
        
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 14px 80px;
            background: white;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        
        .logo {
            font-size: 0px;
            font-weight: 700;
        }
        
        .logo span:first-child {
            color: #1a1a2e;
        }
        
        .logo span:last-child {
            color: var(--orange);
        }
        
        .nav-links {
            display: flex;
            gap: 40px;
            list-style: none;
        }
        
        .nav-links a {
            color: #333;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }
        
        .nav-links a:hover {
            color: var(--orange);
        }
        
        .location-switch-modern {
            position: relative;
            display: inline-block;
            font-family: ui-sans-serif, system-ui, sans-serif;
        }

        .switch-btn {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 6px 10px;
            background: #f97415;
            color: #fff;
            border-radius: 8px;
            cursor: pointer;
            user-select: none;
            min-width: 70px;
            font-weight: 600;
            font-size: 15px;
        }

        .switch-btn .arrow {
            font-size: 10px;
            transition: transform 0.3s ease;
        }

        #location-toggle {
            display: none;
        }

        #location-toggle:checked + .switch-btn .arrow {
            transform: rotate(180deg);
        }

        .location-options {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: #fff;
            color: #333;
            border-radius: 8px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.15);
            margin-top: 4px;
            padding: 0;
            list-style: none;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
            z-index: 10;
        }

        #location-toggle:checked ~ .location-options {
            max-height: 200px;
        }

        .location-options li a {
            display: block;
            padding: 5px 16px;
            text-decoration: none;
            color: #333;
            font-weight: 500;
        }

        .location-options li a:hover {
            background-color: #f1f1f1;
        }
        
        .btn-primary {
            background: var(--orange);
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            font-weight: 700;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }
        
        .hero {
            background-image: var(--gradient-hero), url('images/hero-bg.jpg');
            background-size: cover;
            background-position: center;
            background-blend-mode: hard-light;
            color: white;
            text-align: center;
            padding: 80px 20px 100px;
            position: relative;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.3);
            z-index: 1;
        }
        
        .hero > * {
            position: relative;
            z-index: 2;
        }
        
        .hero-badge {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 8px 20px;
            border-radius: 20px;
            margin-bottom: 30px;
            font-size: 14px;
        }
            
        .hero h1 {
            font-size: 56px;
            font-weight: 800;
            margin-bottom: 10px;
        }
        
        .hero h1 span {
            color: var(--orange);
        }
        
        .hero p {
            font-size: 18px;
            max-width: 700px;
            margin: 0 auto 40px;
            color: rgba(255, 255, 255, 0.95);
        }
        
        .hero-features {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }
        
        .hero-chat-cta {
            margin-top: 20px;
            font-size: 15px;
            opacity: 0.95;
        }
        .hero-chat-link, .pricing-chat-link {
            background: none;
            border: none;
            color: white;
            text-decoration: underline;
            cursor: pointer;
            font-size: inherit;
            padding: 0;
            font-weight: 600;
        }
        .hero-chat-link:hover, .pricing-chat-link:hover { opacity: 0.9; }
        .pricing-chat-cta { margin-bottom: 30px; color: #666; }
        .pricing-chat-link { color: var(--orange); }
        .hero-feature {
            display: flex;
            align-items: center;
            gap: 10px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            padding: 8px 20px;
            border-radius: 20px;
            font-size: 14px;
        }
         
        .scroll-indicator {
            margin-top: 40px;
            font-size: 32px;
            opacity: 0.7;
            animation: bounce 2s infinite;
        }
        
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-10px); }
            60% { transform: translateY(-5px); }
        }
        
        .why-choose {
            padding: 80px 20px;
            text-align: center;
            background: #f8f9fa;
        }
        
        .why-choose h2 {
            font-size: 42px;
            margin-bottom: 10px;
            color: #1a1a2e;
            font-weight: 700;
        }
        
        .why-choose > p {
            color: #666;
            margin-bottom: 60px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .feature-card {
            background: white;
            padding: 40px 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        }
        
        .feature-icon {
            margin-bottom: 20px;
        }
        
        .feature-icon img {
            width: 80px;
            height: 80px;
            object-fit: contain;
        }
        
        .feature-card h3 {
            font-size: 22px;
            margin-bottom: 15px;
            color: #1a1a2e;
            font-weight: 700;
        }
        
        .feature-card p {
            color: #666;
            margin-bottom: 20px;
            font-size: 14px;
        }
        .Timeline {
    background-color: #f974151a;
    display: inline;
    padding: 4px 10px;
    border-radius: 100px;
    position: relative;
    bottom: 7px;
    color:  var(--orange);
}
        .feature-list {
            list-style: none;
            text-align: left;
        }
        
        .feature-list li {
            padding: 8px 0;
            color: #555;
            font-size: 14px;
        }
        
        .feature-list li::before {
            content: "✓";
            color: #4CAF50;
            font-weight: bold;
            margin-right: 10px;
        }
        
        .process {
            padding: 80px 20px;
            text-align: center;
            background: white;
        }
        
        .process h2 {
            font-size: 42px;
            margin-bottom: 10px;
            color: #1a1a2e;
            font-weight: 700;
        }
        
        .process > p {
            color: #666;
            margin-bottom: 60px;
        }
        
        .process-steps {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .process-step {
            text-align: center;
        }
        
        .step-number {
            background: var(--orange);
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            margin-bottom: 20px;
        }
        
        .step-icon {
            font-size: 48px;
            margin-bottom: 20px;
        }
        
        .step-icon svg {
            width: 48px;
            height: 48px;
        }
        
        .process-step h3 {
            font-size: 20px;
            margin-bottom: 15px;
            color: #1a1a2e;
            font-weight: 700;
        }
        
        .process-step p {
            color: #666;
            font-size: 14px;
        }
        
        .process-step-cta {
            margin-top: 16px;
            font-size: 14px;
            background: transparent;
            border: 1px solid var(--orange);
            color: var(--orange);
            padding: 8px 16px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 600;
            transition: background 0.2s, color 0.2s;
        }
        .process-step-cta:hover {
            background: var(--orange);
            color: white;
        }
        .process-questions-modal {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.5);
            z-index: 10000;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .process-questions-modal.open { display: flex; }
        .process-questions-modal .modal-inner {
            background: white;
            border-radius: 12px;
            max-width: 520px;
            width: 100%;
            max-height: 90vh;
            overflow-y: auto;
            padding: 28px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
        }
        .process-questions-modal h3 { margin-top: 0; margin-bottom: 20px; color: #1a1a2e; font-size: 22px; }
        .process-questions-modal label { display: block; margin-bottom: 6px; font-weight: 600; color: #333; font-size: 14px; }
        .process-questions-modal input[type="text"],
        .process-questions-modal input[type="email"],
        .process-questions-modal textarea {
            width: 100%; padding: 10px 12px; margin-bottom: 16px; border: 1px solid #ddd; border-radius: 6px; font-size: 15px; box-sizing: border-box;
        }
        .process-questions-modal textarea { min-height: 80px; resize: vertical; }
        .process-questions-modal .modal-actions { display: flex; gap: 12px; margin-top: 24px; flex-wrap: wrap; }
        .process-questions-modal .btn-submit-process { background: var(--orange); color: white; border: none; padding: 12px 24px; border-radius: 6px; font-weight: 600; cursor: pointer; font-size: 15px; }
        .process-questions-modal .btn-submit-process:hover { opacity: 0.9; }
        .process-questions-modal .btn-close-modal { background: #eee; color: #333; border: none; padding: 12px 24px; border-radius: 6px; cursor: pointer; font-size: 15px; }
        .process-questions-modal .process-form-success { display: none; color: #0a0; font-weight: 600; margin-top: 12px; }
        
        .pricing {
            padding: 80px 20px;
            text-align: center;
            background: #f8f9fa;
        }
        
        .pricing h2 {
            font-size: 42px;
            margin-bottom: 10px;
            color: #1a1a2e;
            font-weight: 700;
        }
        
        .pricing > p {
            color: #666;
            margin-bottom: 60px;
        }
        
        .pricing-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .pricing-card {
            background: white;
            padding: 40px 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            text-align: left;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .pricing-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.12);
        }
        
        .pricing-card h3 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #1a1a2e;
            font-weight: 700;
        }
        
        .price {
            margin-bottom: 30px;
        }
        
        .original-price {
            text-decoration: line-through;
            color: #102102;
            font-size: 18px;
            font-weight: 900;
        }
        
        .current-price {
            color: var(--orange);
            font-size: 32px;
            font-weight: 700;
        }
        
        .pricing-features {
            list-style: none;
            margin-bottom: 30px;
        }
        
        .pricing-features li {
            padding: 10px 0;
            color: #555;
            font-size: 14px;
        }
        
        .pricing-features li::before {
            content: "✓";
            color: #4CAF50;
            font-weight: bold;
            margin-right: 10px;
        }
        
        .btn-secondary {
            background: transparent;
            color: var(--orange);
            border: 2px solid var(--orange);
            padding: 12px 30px;
            border-radius: 5px;
            font-weight: 700;
            cursor: pointer;
            width: 100%;
            transition: all 0.3s;
        }
        
        .btn-secondary:hover {
            background: var(--orange);
            color: white;
        }
        
        .cta-section {
            padding: 80px 20px;
            background: white;
        }
        
        .cta-section h2 {
            font-size: 42px;
            text-align: center;
            margin-bottom: 10px;
            color: #1a1a2e;
            font-weight: 700;
        }
        
        .cta-section > p {
            text-align: center;
            color: #666;
            margin-bottom: 60px;
        }
        
        .cta-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .form-section h3 {
            font-size: 28px;
            margin-bottom: 10px;
            color: #1a1a2e;
            font-weight: 700;
        }
        
        .form-section p {
            color: #666;
            margin-bottom: 30px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 500;
        }
        
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: ui-sans-serif, system-ui, sans-serif;
            transition: border-color 0.3s;
        }
        
        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--orange);
        }
        
        .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }
        
        .btn-submit {
            background: var(--orange);
            color: white;
            padding: 15px 40px;
            border: none;
            border-radius: 5px;
            font-weight: 700;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        
        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }
        
        .btn-submit:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }
        
        .contact-info {
            background: #f8f9fa;
            padding: 40px;
            border-radius: 10px;
        }
        
        .contact-info h3 {
            font-size: 28px;
            margin-bottom: 30px;
            color: #1a1a2e;
            font-weight: 700;
        }
        
        .contact-item {
            display: flex;
            align-items: start;
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .contact-icon {
            background: var(--orange);
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            flex-shrink: 0;
        }
        
        .contact-details h4 {
            color: #1a1a2e;
            margin-bottom: 5px;
            font-weight: 700;
        }
        
        .contact-details p {
            color: #666;
            font-size: 14px;
        }
        
        .why-wait-box {
            background: var(--orange);
            color: white;
            padding: 40px;
            border-radius: 10px;
            margin-top: 30px;
        }
        
        .why-wait-box h4 {
            font-size: 24px;
            margin-bottom: 15px;
            font-weight: 700;
        }
        
        .why-wait-box p {
            font-size: 14px;
            line-height: 1.8;
        }
        
        footer {
            background: #0a0e1a;
            color: white;
            padding: 60px 80px 30px;
        }
        
        .footer-content {
            display: grid;
           grid-template-columns: 2fr 1fr .4fr .6fr;
            gap: 40px;
            margin-bottom: 40px;
        }
        .social ul li {margin: 0 10px 0 0;}
        .footer-about h3 {
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: 700;
        }
        
        .footer-about h3 span:first-child {
            color: white;
        }
        
        .footer-about h3 span:last-child {
            color: var(--orange);
        }
        
        .footer-about p {
            color: #aaa;
            margin-bottom: 20px;
            font-size: 14px;
            line-height: 1.8;
        }
        
        .footer-contact p {
            color: #aaa;
            margin-bottom: 10px;
            font-size: 14px;
        }
        
        .footer-links h4 {
            margin-bottom: 20px;
            font-size: 18px;
            font-weight: 700;
        }
        
        .footer-links ul {
            list-style: none;
        }
        
        .footer-links a {
            color: #aaa;
            text-decoration: none;
            display: block;
            margin-bottom: 10px;
            font-size: 14px;
            transition: color 0.3s;
        }
        
        .footer-links a:hover {
            color: var(--orange);
        }
        
        .footer-bottom {
            border-top: 1px solid #222;
            padding-top: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 14px;
            color: #666;
            flex-wrap: wrap;
            gap: 10px;
        }
        
        .footer-bottom a {
            color: var(--orange);
            text-decoration: none;
        }
        
        .footer-legal {
            display: flex;
            gap: 20px;
        }
        
        .success-message, .error-message {
            display: none;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: 500;
        }
        
        .success-message {
            background: #4CAF50;
            color: white;
        }
        
        .error-message {
            background: #f44336;
            color: white;
        }
        
        .success-message.show, .error-message.show {
            display: block;
        }
        
        @media (max-width: 768px) {
            nav {
                padding: 20px;
                flex-direction: column;
                gap: 20px;
            }
            
            .nav-links {
                gap: 20px;
            }
            
            .hero h1 {
                font-size: 36px;
            }
            
            .hero-features {
                flex-direction: column;
                gap: 15px;
            }
            
            .cta-grid {
                grid-template-columns: 1fr;
            }
            
            .form-row {
                grid-template-columns: 1fr;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            
            .footer-bottom {
                flex-direction: column;
                gap: 10px;
                text-align: center;
            }
            
            footer {
                padding: 40px 20px 20px;
            }
        }
    </style>
</head>
<body>
    <nav>
        <div class="logo">
            <a href="/" style="text-decoration:none;"><img src="/images/WebBaba-logo.png" style="height:60px;" alt="WebBaba"/></a>
        </div>
        <ul class="nav-links">
            <li><a href="#services">Services</a></li>
            <li><a href="#process">Process</a></li>
            <li><a href="#pricing">Pricing</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#about">About</a></li>
        </ul>
        <div class="location-switch-modern">
            <input type="checkbox" id="location-toggle" />
            <label for="location-toggle" class="switch-btn">
                <span class="selected">UAE</span>
                <span class="arrow">▼</span>
            </label>
            <ul class="location-options">
                <li><a href="/">IND</a></li>
                <li><a href="#">UAE</a></li>
            </ul>
        </div>
    </nav>

    <section class="hero">
        <div class="hero-badge">
           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 text-orange" data-lov-id="src/components/Hero.tsx:22:12" data-lov-name="Star" data-component-path="src/components/Hero.tsx" data-component-line="22" data-component-file="Hero.tsx" data-component-name="Star" data-component-content="%7B%22className%22%3A%22w-4%20h-4%20text-orange%22%7D"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path></svg> Expert team. Rapid results.
        </div>
        <h1>Custom Websites<br><span>In 48 Hours</span></h1>
        <p>Professional, custom-designed websites tailored to your business and target audience. No templates, no delays—just results.</p>
        <div class="hero-features">
            <div class="hero-feature"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock w-5 h-5 text-orange" data-lov-id="src/components/Hero.tsx:42:14" data-lov-name="Clock" data-component-path="src/components/Hero.tsx" data-component-line="42" data-component-file="Hero.tsx" data-component-name="Clock" data-component-content="%7B%22className%22%3A%22w-5%20h-5%20text-orange%22%7D"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> 48-Hour Delivery</div>
            <div class="hero-feature"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap w-5 h-5 text-orange" data-lov-id="src/components/Hero.tsx:46:14" data-lov-name="Zap" data-component-path="src/components/Hero.tsx" data-component-line="46" data-component-file="Hero.tsx" data-component-name="Zap" data-component-content="%7B%22className%22%3A%22w-5%20h-5%20text-orange%22%7D"><path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"></path></svg> Custom Design</div>
            <div class="hero-feature"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-5 h-5 text-orange" data-lov-id="src/components/Hero.tsx:50:14" data-lov-name="Star" data-component-path="src/components/Hero.tsx" data-component-line="50" data-component-file="Hero.tsx" data-component-name="Star" data-component-content="%7B%22className%22%3A%22w-5%20h-5%20text-orange%22%7D"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path></svg> Cost Effective</div>
        </div>
        <a href="#contact" class="btn-primary">Start Your Project Now</a>
        <p class="hero-chat-cta">Need help choosing? <button type="button" class="hero-chat-link" id="heroChatCta">Chat with our AI assistant</button></p>
    </section>

    <section class="why-choose" id="services">
        <h2>Why Choose Our 48-Hour Service?</h2>
        <p>Combining speed with quality, we deliver custom websites that don't compromise on design or functionality.</p>
        
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><img src="images/speed-icon.png" alt="Speed"></div>
                <h3>Lightning Fast Delivery</h3>
                <p>We execute with exceptional speed without compromising quality. Our streamlined process ensures your website launches fast and on time.</p>
                <ul class="feature-list">
                    <li>48-hour guaranteed delivery</li>
                    <li>Responsive design</li>
                    <li>Mobile optimized</li>
                    <li>SEO ready</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon"><img src="images/custom-icon.png" alt="Custom Design"></div>
                <h3>Custom Design Approach</h3>
                <p>No templates here. Every project is uniquely crafted to match your brand identity and resonate with your audience preferences.</p>
                <ul class="feature-list">
                    <li>Unique custom design</li>
                    <li>Brand-focused approach</li>
                    <li>Target audience research</li>
                    <li>Conversion optimized</li>
                </ul>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon"><img src="images/expertise-icon.png" alt="Expertise"></div>
                <h3>Extreme Efficiency</h3>
                <p>Get the best value in the market. Our expert team delivers professional-grade websites for a fraction of the typical cost with efficient and online marketing, ensuring your website drives real business results.</p>
                <ul class="feature-list">
                    <li>Marketing expertise</li>
                    <li>Conversion optimization</li>
                    <li>Performance focused</li>
                    <li>Business growth tools</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="process" id="process">
        <h2>Our 48-Hour Process</h2>
        <p>From concept to launch in just one day. Here's exactly how we make it happen:</p>
        
        <div class="process-steps">
            <div class="process-step">
                <div class="step-number">1</div>
                <div class="step-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-square w-12 h-12 text-navy group-hover:text-orange transition-colors duration-300" data-lov-id="src/components/Process.tsx:55:18" data-lov-name="step.icon" data-component-path="src/components/Process.tsx" data-component-line="55" data-component-file="Process.tsx" data-component-name="step.icon" data-component-content="%7B%22className%22%3A%22w-12%20h-12%20text-navy%20group-hover%3Atext-orange%20transition-colors%20duration-300%22%7D"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg></div>
                 
                <h3>Brief & Planning</h3>
                 <div class="Timeline">
                    0-4 Hours
                </div>
                <p>We start by understanding your business, your target audience, and your business goals, and create a detailed plan for your project.</p>
                <button type="button" class="process-step-cta" data-step="1" data-step-title="Brief & Planning">Answer a few questions</button>
            </div>
            
            <div class="process-step">
                <div class="step-number">2</div>
                <div class="step-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock w-12 h-12 text-navy group-hover:text-orange transition-colors duration-300" data-lov-id="src/components/Process.tsx:55:18" data-lov-name="step.icon" data-component-path="src/components/Process.tsx" data-component-line="55" data-component-file="Process.tsx" data-component-name="step.icon" data-component-content="%7B%22className%22%3A%22w-12%20h-12%20text-navy%20group-hover%3Atext-orange%20transition-colors%20duration-300%22%7D"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></div>
                
                <h3>Design & Development</h3>
                  <div class="Timeline">
                  4-32 Hours
                </div>
                <p>Our expert team gets to work creating your custom website using the latest technologies and best practices.</p>
                <button type="button" class="process-step-cta" data-step="2" data-step-title="Design & Development">Answer a few questions</button>
            </div>
            
            <div class="process-step">
                <div class="step-number">3</div>
                <div class="step-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big w-12 h-12 text-navy group-hover:text-orange transition-colors duration-300" data-lov-id="src/components/Process.tsx:55:18" data-lov-name="step.icon" data-component-path="src/components/Process.tsx" data-component-line="55" data-component-file="Process.tsx" data-component-name="step.icon" data-component-content="%7B%22className%22%3A%22w-12%20h-12%20text-navy%20group-hover%3Atext-orange%20transition-colors%20duration-300%22%7D"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg></div>
                <h3>Review & Refinement</h3>
                  <div class="Timeline">
                 32-44 Hours
                </div>
                <p>We share the completed site for your review and refine until it meets your expectations.</p>
                <button type="button" class="process-step-cta" data-step="3" data-step-title="Review & Refinement">Answer a few questions</button>
            </div>
            
            <div class="process-step">
                <div class="step-number">4</div>
                <div class="step-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-rocket w-12 h-12 text-navy group-hover:text-orange transition-colors duration-300" data-lov-id="src/components/Process.tsx:55:18" data-lov-name="step.icon" data-component-path="src/components/Process.tsx" data-component-line="55" data-component-file="Process.tsx" data-component-name="step.icon" data-component-content="%7B%22className%22%3A%22w-12%20h-12%20text-navy%20group-hover%3Atext-orange%20transition-colors%20duration-300%22%7D"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"></path><path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"></path><path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"></path><path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path></svg></div>
                <h3>Launch & Delivery</h3>
                  <div class="Timeline">
                 44-48 Hours
                </div>
                <p>Your website goes live. We handle all the technical details, ensuring everything is ready to start generating leads for your business.</p>
                <button type="button" class="process-step-cta" data-step="4" data-step-title="Launch & Delivery">Answer a few questions</button>
            </div>
        </div>
    </section>

    <div id="processQuestionsModal" class="process-questions-modal" aria-hidden="true" role="dialog" aria-labelledby="processModalTitle">
        <div class="modal-inner">
            <h3 id="processModalTitle">Answer a few questions</h3>
            <form id="processQuestionsForm">
                <input type="hidden" id="processStepNum" name="step" value="">
                <input type="hidden" id="processStepTitle" name="step_title" value="">
                <label for="processName">Your name <span style="color:#c00">*</span></label>
                <input type="text" id="processName" name="name" required placeholder="e.g. John">
                <label for="processEmail">Email <span style="color:#c00">*</span></label>
                <input type="email" id="processEmail" name="email" required placeholder="you@example.com">
                <div id="processQuestionsContainer"></div>
                <div class="modal-actions">
                    <button type="submit" class="btn-submit-process">Save answers</button>
                    <button type="button" class="btn-close-modal" id="processModalClose">Cancel</button>
                </div>
                <p class="process-form-success" id="processFormSuccess"></p>
            </form>
        </div>
    </div>

    <section class="pricing" id="pricing">
        <h2>Transparent Pricing</h2>
        <p>Choose the package that fits your business needs. All packages include our 48-hour delivery guarantee.</p>
        <p class="pricing-chat-cta">Need help choosing a package? <button type="button" class="pricing-chat-link" id="pricingChatCta">Chat with our AI assistant</button></p>
        <div class="pricing-grid">
            <div class="pricing-card">
                <h3>Starter</h3>
                <div class="price">
                    <div class="original-price">AED 3,999</div>
                    <div class="current-price">AED 2,999 </div>
                </div>
                <ul class="pricing-features">
                    <li>Up to 5 pages*</li>
                    <li>Mobile responsive design</li>
                    <li>Basic SEO optimization</li>
                    <li>Contact form integration</li>
                    <li>48-hour delivery</li>
                    <li>Social media links</li>
                    <li>1 round of revisions</li>
                    <li>30-day support</li>
                    <li>100% money-back guarantee</li>
                      <li class="line-through">Free Domain</li>
                    <li class="line-through">SSL certificate</li>
                    <li class="line-through">Hosting setup</li>
                </ul>
                <button class="btn-secondary">Get Started</button>
            </div>
            
            <div class="pricing-card">
                <h3>Professional</h3>
                <div class="price">
                    <div class="original-price">AED 6,999</div>
                    <div class="current-price">AED 4,999</div>
                </div>
                <ul class="pricing-features">
                    <li>Up to 10 pages</li>
                    <li>Premium custom design</li>
                    <li>Advanced SEO optimization</li>
                    <li>E-commerce integration</li>
                    <li>Blog/News section</li>
                    <li>Social media integration</li>
                    <li>5-7 days delivery</li>
                    <li>2 rounds of revisions</li>
                    <li>30-day support</li>
                    <li>Performance optimization</li>
                    <li>100% money-back guarantee</li>
                     <li class="">Free Domain</li>
                    <li class="line-through">SSL certificate</li>
                    <li class="line-through">Hosting setup</li>
                </ul>
                <button class="btn-secondary">Get Started</button>
            </div>
            
            <div class="pricing-card">
                <h3>Enterprise</h3>
                <div class="price">
                    <div class="original-price">AED 13,999</div>
                    <div class="current-price">AED 9,999</div>
                </div>
                <ul class="pricing-features">
                    <li>Up to 20 pages</li>
                    <li>Premium custom design</li>
                    <li>Full SEO optimization</li>
                    <li>Advanced e-commerce</li>
                    <li>Custom functionality</li>
                    <li>Third-party integrations</li>
                    <li>Performance optimization</li>
                    <li>Analytics integration</li>
                    <li>10 -15 days delivery</li>
                    <li>Unlimited revisions</li>
                    <li>90-day support</li>
                    <li>100% money-back guarantee</li>
                    <li>Free domain</li>
                    <li>SSL certificate</li>
                    <li class="">Hosting setup</li>
                </ul>
                <button class="btn-secondary">Get Started</button>
            </div>
        </div>
    </section>

    <section class="cta-section" id="contact">
        <h2>Ready to Get Started?</h2>
        <p>Let's discuss your project and get your website launched in 48 hours.</p>
        
        <div class="cta-grid">
            <div class="form-section">
                <h3>Start Your Project</h3>
                <p>Fill in your details and we'll respond within 2 hours.</p>
                
                <div id="successMessage" class="success-message">
                    Thank you! Your message has been sent successfully. We'll get back to you within 2 hours.
                </div>
                
                <div id="errorMessage" class="error-message">
                    Sorry, there was an error sending your message. Please try again or email us directly at jaikumar.d@origamicrative.com
                </div>
                
                <form id="contactForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label>Full Name *</label>
                            <input type="text" name="fullName" placeholder="Your full name" required>
                        </div>
                        <div class="form-group">
                            <label>Email Address *</label>
                            <input type="email" name="email" placeholder="Your email address" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" name="company" placeholder="Your company">
                        </div>
                        <div class="form-group">
                            <label>Investment Package</label>
                            <select name="package">
                                <option>Select a package</option>
                                <option>Starter - AED 2,999</option>
                                <option>Professional - AED 4,999</option>
                                <option>Enterprise - AED 9,999</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Project Timeline</label>
                        <input type="text" name="timeline" placeholder="When do you need this?">
                    </div>
                    
                    <div class="form-group">
                        <label>Project Details *</label>
                        <textarea name="details" placeholder="Tell us about your business, target audience, and what you need..." required></textarea>
                    </div>
                    
                    <button type="submit" class="btn-submit" id="submitBtn">Start My Website Project</button>
                </form>
            </div>
            
            <div class="contact-info">
                <h3>Get in Touch</h3>
                
                <div class="contact-item">
                    <div class="contact-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail w-6 h-6 text-orange" data-lov-id="src/components/Contact.tsx:176:22" data-lov-name="Mail" data-component-path="src/components/Contact.tsx" data-component-line="176" data-component-file="Contact.tsx" data-component-name="Mail" data-component-content="%7B%22className%22%3A%22w-6%20h-6%20text-orange%22%7D"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg></div>
                    <div class="contact-details">
                        <h4>Email Us</h4>
                        <p>vrishank.m@origamicreative.ae</p>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone w-6 h-6 text-orange" data-lov-id="src/components/Contact.tsx:186:22" data-lov-name="Phone" data-component-path="src/components/Contact.tsx" data-component-line="186" data-component-file="Contact.tsx" data-component-name="Phone" data-component-content="%7B%22className%22%3A%22w-6%20h-6%20text-orange%22%7D"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg></div>
                    <div class="contact-details">
                        <h4>Call Us</h4>
                        <p>+971 509864674</p>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock w-6 h-6 text-orange" data-lov-id="src/components/Contact.tsx:196:22" data-lov-name="Clock" data-component-path="src/components/Contact.tsx" data-component-line="196" data-component-file="Contact.tsx" data-component-name="Clock" data-component-content="%7B%22className%22%3A%22w-6%20h-6%20text-orange%22%7D"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></div>
                    <div class="contact-details">
                        <h4>Response Time</h4>
                        <p>We reply within 2 hours<br>Mon–Sat</p>
                    </div>
                </div>
                
                <div class="why-wait-box">
                    <h4>Why Wait Weeks?</h4>
                    <p>Most agencies take 4-6 weeks to deliver a website. We deliver better results in just 48 hours, and provide full project visibility so you know exactly what's happening every step of the way.</p>
                </div>
            </div>
        </div>
    </section>

    <footer id="about">
        <div class="footer-content">
            <div class="footer-about">
                <h3> <a href="/" style="text-decoration:none;"><img src="/images/WebBaba-logo2.png" style="height:60px;"/></a></h3>
                <p>WebBaba is a web development company specializing in delivering high-quality, responsive websites with rapid-fire turnaround. Our team of expert developers, designers, and strategists work collaboratively to bring your vision to life, ensuring that each website is not just beautiful but functional.</p>
                <div class="footer-contact">
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" style="position: relative;top: 4px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg> <a style="color:white; text-decoration:none;" href="mailto:vrishank.m@origamicreative.ae">vrishank.m@origamicreative.ae</a></p>
                    <p><svg style="position: relative; top: 4px;" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg> <a href="tel:+971509864674">+971 509864674</a></p>
                </div>
            </div>
            
            <div class="footer-links">
                <h4>Services</h4>
                <ul>
                    <li><a href="#services">48-Hour Websites</a></li>
                    <li><a href="#services">Custom Design</a></li>
                    <li><a href="#services">E-commerce Solutions</a></li>
                    <li><a href="#services">Mobile Design</a></li>
                </ul>
            </div>
            
            <div class="footer-links">
                <h4>Company</h4>
                <ul>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#contact">Contact</a></li>

                </ul>
            </div>
             <div class="footer-links social">
                <h4>Follow Us</h4>
                <ul style="display:flex;">
                    <li><a href="https://www.facebook.com/profile.php?id=61582170124254" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><svg fill="#F97415" width="18px" height="18px" viewBox="-7 -2 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d='M2.046 3.865v2.748H.032v3.36h2.014v9.986H6.18V9.974h2.775s.26-1.611.386-3.373H6.197V4.303c0-.343.45-.805.896-.805h2.254V0H6.283c-4.34 0-4.237 3.363-4.237 3.865z' /></svg></a></li>
                    <li><a href="https://www.linkedin.com/company/webbaba" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><svg fill="#F97415" width="18px" height="18px" viewBox="-2 -2 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d='M19.959 11.719v7.379h-4.278v-6.885c0-1.73-.619-2.91-2.167-2.91-1.182 0-1.886.796-2.195 1.565-.113.275-.142.658-.142 1.043v7.187h-4.28s.058-11.66 0-12.869h4.28v1.824l-.028.042h.028v-.042c.568-.875 1.583-2.126 3.856-2.126 2.815 0 4.926 1.84 4.926 5.792zM2.421.026C.958.026 0 .986 0 2.249c0 1.235.93 2.224 2.365 2.224h.028c1.493 0 2.42-.989 2.42-2.224C4.787.986 3.887.026 2.422.026zM.254 19.098h4.278V6.229H.254v12.869z' /></svg></a></li>
                    <li><a href="https://www.instagram.com/webba_ba48/" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><svg width="18px" height="18px" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M11 3.5H12M4.5 0.5H10.5C12.7091 0.5 14.5 2.29086 14.5 4.5V10.5C14.5 12.7091 12.7091 14.5 10.5 14.5H4.5C2.29086 14.5 0.5 12.7091 0.5 10.5V4.5C0.5 2.29086 2.29086 0.5 4.5 0.5ZM7.5 10.5C5.84315 10.5 4.5 9.15685 4.5 7.5C4.5 5.84315 5.84315 4.5 7.5 4.5C9.15685 4.5 10.5 5.84315 10.5 7.5C10.5 9.15685 9.15685 10.5 7.5 10.5Z" stroke="#F97415"/></svg></a></li>
                </ul>
            </div>
           
        </div>
        
        <div class="footer-bottom">
            <p>© 2025 WebBaba. All rights reserved. Powered by <a href="https://origamicreative.com" target="_blank" rel="noopener noreferrer">Origami Creative</a></p>
            <div class="footer-legal">
                <a href="privacy-policy.php">Privacy Policy</a>
                <a href="terms-conditions.php">Terms & Conditions</a>
            </div>
        </div>
    </footer>
    

    <script>
        // Form submission with email functionality
        document.getElementById('contactForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const submitBtn = document.getElementById('submitBtn');
            const successMessage = document.getElementById('successMessage');
            const errorMessage = document.getElementById('errorMessage');
            
            // Disable submit button
            submitBtn.disabled = true;
            submitBtn.textContent = 'Sending...';
            
            // Hide previous messages
            successMessage.classList.remove('show');
            errorMessage.classList.remove('show');
            
            // Get form data
            const formData = new FormData(this);
            const data = {
                fullName: formData.get('fullName'),
                email: formData.get('email'),
                company: formData.get('company') || 'Not provided',
                package: formData.get('package'),
                timeline: formData.get('timeline') || 'Not specified',
                details: formData.get('details')
            };
            
            try {
                // Send email using FormSubmit.co (free email service)
                const response = await fetch('https://formsubmit.co/ajax/vrishank.m@origamicreative.ae', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({
                        name: data.fullName,
                        email: data.email,
                        company: data.company,
                        package: data.package,
                        timeline: data.timeline,
                        message: data.details,
                        _subject: `New Website Project Inquiry from ${data.fullName}`,
                        _template: 'table',
                        _captcha: 'false'
                    })
                });
                
                if (response.ok) {
                    // Show success message
                    successMessage.classList.add('show');
                    
                    // Reset form
                    this.reset();
                    
                    // Scroll to success message
                    successMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    
                    // Hide success message after 10 seconds
                    setTimeout(() => {
                        successMessage.classList.remove('show');
                    }, 10000);
                } else {
                    throw new Error('Form submission failed');
                }
            } catch (error) {
                console.error('Error:', error);
                errorMessage.classList.add('show');
                
                // Scroll to error message
                errorMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
                
                // Hide error message after 10 seconds
                setTimeout(() => {
                    errorMessage.classList.remove('show');
                }, 10000);
            } finally {
                // Re-enable submit button
                submitBtn.disabled = false;
                submitBtn.textContent = 'Start My Website Project';
            }
        });
        
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
        
        // Pricing card button handling
        document.querySelectorAll('.btn-secondary').forEach(button => {
            button.addEventListener('click', function() {
                const card = this.closest('.pricing-card');
                const packageName = card.querySelector('h3').textContent;
                
                // Scroll to contact form
                document.getElementById('contact').scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
                
                // Pre-fill package selection
                setTimeout(() => {
                    const packageSelect = document.querySelector('select[name="package"]');
                    const options = packageSelect.options;
                    for (let i = 0; i < options.length; i++) {
                        if (options[i].text.includes(packageName)) {
                            packageSelect.selectedIndex = i;
                            break;
                        }
                    }
                }, 500);
            });
        });
        
        // Process step questions: save answers to backend for easy reference in meetings
        var PROCESS_STEP_QUESTIONS = {
            1: [
                { key: 'Business/company name', type: 'text', placeholder: 'e.g. Acme Pvt Ltd' },
                { key: 'What does your business do?', type: 'textarea', placeholder: 'Brief description' },
                { key: 'Who is your target audience?', type: 'text', placeholder: 'e.g. small business owners' },
                { key: 'Main goals for the website?', type: 'textarea', placeholder: 'e.g. generate leads, sell online' },
                { key: 'Existing brand colors or logo?', type: 'text', placeholder: 'Yes/No and details' },
                { key: 'Any competitor sites you like?', type: 'text', placeholder: 'Optional URLs or names' }
            ],
            2: [
                { key: 'Which pages do you need?', type: 'text', placeholder: 'e.g. Home, About, Services, Contact' },
                { key: 'Blog or news section?', type: 'text', placeholder: 'Yes / No / Maybe' },
                { key: 'Specific features?', type: 'textarea', placeholder: 'e.g. contact form, booking' },
                { key: 'Content (text/images) ready?', type: 'text', placeholder: 'Yes / No / Partially' }
            ],
            3: [
                { key: 'Who will review the site?', type: 'text', placeholder: 'Name and role' },
                { key: 'Preferred way to share feedback?', type: 'text', placeholder: 'e.g. email, call' },
                { key: 'Must-have changes from past experiences?', type: 'textarea', placeholder: 'Optional' }
            ],
            4: [
                { key: 'Domain name (if already purchased)?', type: 'text', placeholder: 'e.g. mycompany.com' },
                { key: 'Hosting: we provide or you have existing?', type: 'text', placeholder: 'We provide / I have' },
                { key: 'Post-launch support needed?', type: 'text', placeholder: 'Optional' }
            ]
        };
        var processApiBase = (typeof WEBBABA_CHATBOT_API !== 'undefined') ? WEBBABA_CHATBOT_API : 'https://web-production-b2647.up.railway.app';
        document.querySelectorAll('.process-step-cta').forEach(function(btn) {
            btn.addEventListener('click', function() {
                var step = parseInt(this.getAttribute('data-step'), 10);
                var stepTitle = this.getAttribute('data-step-title') || ('Step ' + step);
                var modal = document.getElementById('processQuestionsModal');
                var titleEl = document.getElementById('processModalTitle');
                var container = document.getElementById('processQuestionsContainer');
                document.getElementById('processStepNum').value = step;
                document.getElementById('processStepTitle').value = stepTitle;
                titleEl.textContent = stepTitle + ' – a few questions';
                container.innerHTML = '';
                (PROCESS_STEP_QUESTIONS[step] || []).forEach(function(q) {
                    var label = document.createElement('label');
                    label.textContent = q.key;
                    label.setAttribute('for', 'pq_' + q.key.replace(/\s+/g, '_'));
                    container.appendChild(label);
                    var el = document.createElement(q.type === 'textarea' ? 'textarea' : 'input');
                    el.id = 'pq_' + q.key.replace(/\s+/g, '_');
                    el.name = 'q_' + q.key;
                    el.type = q.type === 'textarea' ? null : 'text';
                    if (q.placeholder) el.placeholder = q.placeholder;
                    if (q.type === 'textarea') el.rows = 3;
                    container.appendChild(el);
                });
                document.getElementById('processFormSuccess').style.display = 'none';
                document.getElementById('processFormSuccess').textContent = '';
                modal.classList.add('open');
                modal.setAttribute('aria-hidden', 'false');
            });
        });
        document.getElementById('processModalClose').addEventListener('click', function() {
            document.getElementById('processQuestionsModal').classList.remove('open');
            document.getElementById('processQuestionsModal').setAttribute('aria-hidden', 'true');
        });
        document.getElementById('processQuestionsModal').addEventListener('click', function(e) {
            if (e.target === this) {
                this.classList.remove('open');
                this.setAttribute('aria-hidden', 'true');
            }
        });
        document.getElementById('processQuestionsForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            var step = document.getElementById('processStepNum').value;
            var stepTitle = document.getElementById('processStepTitle').value;
            var name = document.getElementById('processName').value.trim();
            var email = document.getElementById('processEmail').value.trim();
            var answers = {};
            document.getElementById('processQuestionsContainer').querySelectorAll('input, textarea').forEach(function(input) {
                var qText = (input.name || '').replace(/^q_/, '');
                if (qText) answers[qText] = input.value.trim();
            });
            var payload = { email: email, name: name, step: parseInt(step, 10), step_title: stepTitle, answers: answers };
            try {
                var res = await fetch(processApiBase + '/process-answers', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(payload)
                });
                var data = res.ok ? await res.json().catch(function() { return {}; }) : {};
                var msg = (data && data.message) ? data.message : 'Thanks! We have your answers—easy to reference in our meeting.';
                document.getElementById('processFormSuccess').textContent = msg;
                document.getElementById('processFormSuccess').style.display = 'block';
                setTimeout(function() {
                    document.getElementById('processQuestionsModal').classList.remove('open');
                    document.getElementById('processQuestionsModal').setAttribute('aria-hidden', 'true');
                }, 2000);
            } catch (err) {
                document.getElementById('processFormSuccess').textContent = "Saved. We'll use this in our meeting.";
                document.getElementById('processFormSuccess').style.display = 'block';
            }
        });
    </script>
 

</body>
</html>