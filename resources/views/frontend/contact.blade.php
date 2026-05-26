@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-6 py-24">
    <div class="bg-white border border-slate-200 rounded-3xl p-12 shadow-2xl text-center relative overflow-hidden">
        <div class="absolute top-0 inset-x-0 h-2 bg-brand-red"></div>
        
        <div class="w-20 h-20 bg-brand-navy text-white rounded-full flex items-center justify-center mx-auto mb-6 text-3xl shadow-xl shadow-brand-navy/20">
            <i class="fa-solid fa-headset text-brand-red"></i>
        </div>
        
        <h2 class="text-3xl font-black mb-2 text-brand-navy uppercase tracking-tight">Contact Logistical Operations Control</h2>
        <p class="text-xs text-slate-500 mb-10 max-w-md mx-auto leading-relaxed">Direct communication line for administrative waybill amendments, high-value asset storage escrow holds, or physical terminal inspection audits.</p>
        
        <div class="bg-brand-navy text-white border border-slate-900 rounded-2xl p-8 max-w-xl mx-auto shadow-inner relative">
            <div class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-brand-red text-white text-[9px] font-black uppercase tracking-widest px-3 py-1 rounded">
                Official Intake Channel
            </div>
            <span class="text-[10px] uppercase tracking-widest font-bold text-slate-400 block mb-1">Central Administration Email Support</span>
            <a href="mailto:airjakedeliveryservices@gmail.com" class="text-xl md:text-2xl font-mono font-black text-white hover:text-brand-red transition-colors break-all tracking-wide">
                airjakedeliveryservices@gmail.com
            </a>
        </div>
    </div>
</div>
@endsection