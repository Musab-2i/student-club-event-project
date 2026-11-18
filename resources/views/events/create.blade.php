<x-layout>
    <x-slot:heading>تسجيل الاهتمام بفعالية</x-slot:heading>
    
    <div style="max-width: 500px; margin: 0 auto; background: white; padding: 40px; border-radius: 12px; box-shadow: 0 10px 15px rgba(0,0,0,0.1); border: 1px solid #e5e7eb;">
        
        <h3 style="text-align: center; color: #1e3a8a; margin-top: 0; margin-bottom: 25px;">نموذج التسجيل السريع</h3>
        
        <!-- مسار الفورم POST -->
        <form action="{{ route('events.store') }}" method="POST">
            <!-- Generate with AI -->
            @csrf
            
            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #374151;">الاسم الرباعي <span style="color: red;">*</span></label>
                <input type="text" name="name" required placeholder="أدخل اسمك الكامل" style="width: 100%; padding: 12px; border: 1px solid #d1d5db; border-radius: 8px; box-sizing: border-box; font-family: inherit;">
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #374151;">الرقم الجامعي <span style="color: red;">*</span></label>
                <input type="text" name="student_id" required placeholder="مثال: 2300902121" style="width: 100%; padding: 12px; border: 1px solid #d1d5db; border-radius: 8px; box-sizing: border-box; font-family: inherit;">
            </div>

            <div style="margin-bottom: 30px;">
                <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #374151;">الفعالية المطلوبة <span style="color: red;">*</span></label>
                <select name="event_id" required style="width: 100%; padding: 12px; border: 1px solid #d1d5db; border-radius: 8px; box-sizing: border-box; font-family: inherit; background-color: white;">
                    <option value="">-- يرجى الاختيار --</option>
                    <option value="1">معسكر تطوير الويب</option>
                    <option value="3">هاكاثون الذكاء الاصطناعي</option>
                </select>
            </div>

            <button type="submit" style="width: 100%; background-color: #1e3a8a; color: white; padding: 15px; border: none; border-radius: 8px; font-weight: bold; font-size: 1.1em; cursor: pointer; transition: 0.3s;">تأكيد التسجيل</button>
        </form>
    </div>
</x-layout>