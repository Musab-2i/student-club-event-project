<x-layout>
    <x-slot:heading>تفاصيل الفعالية</x-slot:heading>

    <div style="max-width: 600px; margin: 0 auto; padding: 30px; border: 1px solid #e5e7eb; border-radius: 12px; background: #fff; box-shadow: 0 4px 10px rgba(0,0,0,0.05);">
        <h2 style="color: #1e3a8a; border-bottom: 2px solid #e5e7eb; padding-bottom: 15px; margin-top: 0;">{{ $event['title'] }}</h2>

        <p style="font-size: 1.1em; color: #374151;">📅 <strong>التاريخ:</strong> {{ $event['date'] }}</p>
        <p style="font-size: 1.1em; color: #374151;">📍 <strong>المكان:</strong> {{ $event['location'] }}</p>
        <p style="font-size: 1.1em; color: #374151;">🏷️ <strong>الفئة:</strong> {{ $event['category'] }}</p>
        <p style="font-size: 1.1em; color: #374151;">✅ <strong>الحالة:</strong> 
            <span style="color: {{ $event['status'] == 'متاح' ? '#10b981' : '#ef4444' }}; font-weight: bold;">
                {{ $event['status'] }}
            </span>
        </p>

        <div style="margin-top: 40px; text-align: center; display: flex; gap: 15px; justify-content: center;">
            <a href="{{ route('events.index') }}" style="background-color: #6b7280; color: white; padding: 12px 24px; text-decoration: none; border-radius: 8px; font-weight: bold;">العودة للفعاليات</a>

            @if($event['status'] == 'متاح')
                <a href="{{ route('events.register') }}" style="background-color: #2563eb; color: white; padding: 12px 24px; text-decoration: none; border-radius: 8px; font-weight: bold;">سجّل اهتمامك الآن</a>
            @endif
        </div>
    </div>
</x-layout>
