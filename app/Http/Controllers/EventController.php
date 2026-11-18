<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
private function getEvents()
    {
        return [
            [
                'id' => 1, 
                'title' => 'معسكر تطوير الويب (Web Bootcamp)', 
                'date' => '2026-11-20', 
                'location' => 'مبنى تكنولوجيا المعلومات - مختبر 1', 
                'status' => 'متاح', 
                'category' => 'تقني'
            ],
            [
                'id' => 2, 
                'title' => 'ورشة الأمن السيبراني (Cybersecurity)', 
                'date' => '2026-11-25', 
                'location' => 'المدرج الرئيسي', 
                'status' => 'مكتمل', 
                'category' => 'أمن معلومات'
            ],
            [
                'id' => 3, 
                'title' => 'هاكاثون الذكاء الاصطناعي (AI Hackathon)', 
                'date' => '2026-12-05', 
                'location' => 'مركز الابتكار', 
                'status' => 'متاح', 
                'category' => 'مسابقة'
            ],
            [
                'id' => 4, 
                'title' => 'ورشة بناء الأنظمة الخلفية (Backend & APIs)', 
                'date' => '2026-12-12', 
                'location' => 'مبنى تكنولوجيا المعلومات - مختبر 3', 
                'status' => 'متاح', 
                'category' => 'برمجة'
            ],
            [
                'id' => 5, 
                'title' => 'مختبر تصميم تجربة المستخدم (UI/UX Design)', 
                'date' => '2026-12-18', 
                'location' => 'قاعة الندوات - الطابق الأول', 
                'status' => 'متاح', 
                'category' => 'تصميم'
            ],
            [
                'id' => 6, 
                'title' => 'إدارة المشاريع البرمجية عبر (Git & GitHub)', 
                'date' => '2026-12-24', 
                'location' => 'مختبر الشبكات - مبنى IT', 
                'status' => 'مكتمل', 
                'category' => 'تطوير برمجيات'
            ],
            [
                'id' => 7, 
                'title' => 'بطولة البرمجة التنافسية (Problem Solving Cup)', 
                'date' => '2027-01-05', 
                'location' => 'مركز المؤتمرات الجامعي', 
                'status' => 'متاح', 
                'category' => 'مسابقة'
            ],
        ];
    }

    public function index()
    {
        $events = $this->getEvents();
        return view('events.index', ['events' => $events]);
    }

    public function show($id)
    {
        $events = $this->getEvents();
        
        // البحث عن الفعالية المطلوبة، وإرجاع خطأ 404 إذا لم تكن موجودة
        $event = collect($events)->first(fn($e) => $e['id'] == $id);
        abort_if(!$event, 404);

        return view('events.show', ['event' => $event]);
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        return "تم استلام طلب تسجيلك بنجاح! سنتواصل معك قريباً.";
    }
}