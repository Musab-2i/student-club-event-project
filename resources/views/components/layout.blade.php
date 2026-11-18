<!DOCTYPE html>
<!-- أضفنا id للـ html لنتحكم فيه برمجياً -->
<html lang="ar" dir="rtl" id="html-root">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>النادي الطلابي | {{ $heading ?? 'بوابة الفعاليات' }}</title>
    
    <!-- Generate with AI -->
    <style>
        /* المتغيرات الأساسية (الوضع النهاري - Light Mode) */
        :root {
            --bg-color: #f4f7f6;
            --text-color: #333;
            --header-bg: #1e3a8a;
            --header-text: white;
            --nav-bg: #ffffff;
            --card-bg: white;
            --border-color: #e5e7eb;
            --footer-text: #6b7280;
            --nav-link-hover: #e5e7eb;
            --nav-link-text: #4b5563;
        }

        /* متغيرات الوضع الليلي (Dark Mode) - تتفعل عندما نضع كلاس dark على الـ html */
        html.dark {
            --bg-color: #111827;
            --text-color: #e5e7eb;
            --header-bg: #1f2937;
            --header-text: #e5e7eb;
            --nav-bg: #1f2937;
            --card-bg: #1f2937;
            --border-color: #374151;
            --footer-text: #9ca3af;
            --nav-link-hover: #374151;
            --nav-link-text: #e5e7eb;
        }

        /* تطبيق المتغيرات على العناصر الأساسية */
        body { 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            margin: 0; 
            background-color: var(--bg-color); 
            color: var(--text-color);
            transition: background-color 0.3s, color 0.3s; /* انتقال ناعم */
        }
        
        header { 
            background-color: var(--header-bg); 
            color: var(--header-text); 
            padding: 20px; 
            text-align: center; 
            box-shadow: 0 4px 6px rgba(0,0,0,0.1); 
            position: relative; /* مهم لزر الدارك مود */
        }
        
        header h1 { margin: 0; font-size: 24px; }
        
        nav { 
            background-color: var(--nav-bg); 
            padding: 15px; 
            text-align: center; 
            box-shadow: 0 2px 4px rgba(0,0,0,0.05); 
            margin-bottom: 30px; 
            transition: background-color 0.3s;
        }
        
        .nav-link { 
            color: var(--nav-link-text); 
            text-decoration: none; 
            padding: 10px 20px; 
            margin: 0 5px; 
            border-radius: 6px; 
            font-weight: bold; 
            transition: all 0.3s ease; 
        }
        
        .nav-link:hover { 
            background-color: var(--nav-link-hover); 
            color: var(--header-bg); 
        }
        
        .active-link { 
            background-color: #1e3a8a; /* لون ثابت للرابط الفعال */
            color: white; 
            text-decoration: none; 
            padding: 10px 20px; 
            margin: 0 5px; 
            border-radius: 6px; 
            font-weight: bold; 
        }
        
        main { 
            max-width: 1100px; 
            margin: 0 auto; 
            padding: 20px; 
            background: var(--card-bg); 
            border-radius: 10px; 
            box-shadow: 0 4px 6px rgba(0,0,0,0.05); 
            min-height: 400px; 
            border: 1px solid var(--border-color);
            transition: background-color 0.3s, border-color 0.3s;
        }
        
        footer { 
            text-align: center; 
            padding: 20px; 
            margin-top: 40px; 
            color: var(--footer-text); 
            font-size: 0.9em; 
            border-top: 1px solid var(--border-color); 
        }

        /* تنسيق زر الدارك مود */
        #theme-toggle {
            position: absolute;
            left: 20px;
            top: 20px;
            background: rgba(255,255,255,0.2);
            border: none;
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s;
        }
        #theme-toggle:hover {
            background: rgba(255,255,255,0.4);
        }
    </style>
</head>
<body>

    <header>
        <h1>{{ $heading ?? 'بوابة الفعاليات' }}</h1>
        <!-- زر التبديل بين الوضعين -->
        <button id="theme-toggle">🌙</button>
    </header>

    <nav>
        <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">الرئيسية</x-nav-link>
        <x-nav-link href="{{ route('events.index') }}" :active="request()->is('events*')">الفعاليات</x-nav-link>
        <x-nav-link href="{{ route('about') }}" :active="request()->routeIs('about')">عن النادي</x-nav-link>
        <x-nav-link href="{{ route('contact') }}" :active="request()->routeIs('contact')">تواصل معنا</x-nav-link>
    </nav>

    <main>
        {{ $slot }}
    </main>

    <!-- Generate with AI-->
    <script>
        const themeToggle = document.getElementById('theme-toggle');
        const htmlElement = document.getElementById('html-root');
        
        // التحقق مما إذا كان المستخدم قد اختار وضعاً مسبقاً
        if (localStorage.getItem('theme') === 'dark') {
            htmlElement.classList.add('dark');
            themeToggle.innerText = '☀️';
        }

        // حدث الضغط على الزر
        themeToggle.addEventListener('click', () => {
            htmlElement.classList.toggle('dark');
            
            if (htmlElement.classList.contains('dark')) {
                localStorage.setItem('theme', 'dark');
                themeToggle.innerText = '☀️';
            } else {
                localStorage.setItem('theme', 'light');
                themeToggle.innerText = '🌙';
            }
        });
    </script>
</body>
</html>