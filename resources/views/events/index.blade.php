<x-layout>
    <x-slot:heading>جدول الفعاليات</x-slot:heading>
    
    @if(count($events) > 0)
        <!-- استخدام نظام Grid لعرض البطاقات بجانب بعضها --> <!-- [div] Written by an AI for design -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px;">
            
            @foreach($events as $event)
                <div style="border: 1px solid #e5e7eb; border-radius: 10px; padding: 20px; background: #fff; box-shadow: 0 4px 6px rgba(0,0,0,0.05);">
                    <h3 style="color: #1e3a8a; margin-top: 0; border-bottom: 1px solid #eee; padding-bottom: 10px;">{{ $event['title'] }}</h3>
                    <p style="color: #4b5563;">📅 <strong>التاريخ:</strong> {{ $event['date'] }}</p>
                    <p style="color: #4b5563;">📍 <strong>المكان:</strong> {{ $event['location'] }}</p>
                    
                    <div style="margin-top: 20px; display: flex; justify-content: space-between; align-items: center;">
                        <!-- تغيير اللون بناء على الحالة-->
                        @if($event['status'] == 'متاح')
                            <span style="background-color: #10b981; color: white; padding: 5px 12px; border-radius: 20px; font-size: 0.85em; font-weight: bold;">{{ $event['status'] }}</span>
                        @else
                            <span style="background-color: #ef4444; color: white; padding: 5px 12px; border-radius: 20px; font-size: 0.85em; font-weight: bold;">{{ $event['status'] }}</span>
                        @endif
                        <!-- عند الضغط على التفاصيل يتم الذهاب لشاشة عرض التافصيل الخاصة بال id -->
                        <a href="{{ route('events.show', ['id' => $event['id']]) }}" style="color: #2563eb; text-decoration: none; font-weight: bold;">التفاصيل &larr;</a>
                    </div>
                </div>
            @endforeach
            
        </div>
    @else
        <p style="text-align: center; color: #6b7280; font-size: 1.2em;">لا توجد فعاليات متاحة حالياً.</p>
    @endif
</x-layout>