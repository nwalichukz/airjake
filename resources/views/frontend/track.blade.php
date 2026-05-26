@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-12">
    <div class="bg-white border border-slate-200 rounded-2xl p-6 mb-8 shadow-sm flex flex-col lg:flex-row justify-between items-start lg:items-center gap-4">
        <div class="flex items-center space-x-4">
            <div class="w-12 h-12 rounded-xl bg-brand-navy/5 text-brand-navy flex items-center justify-center text-xl"><i class="fa-solid fa-box-open"></i></div>
            <div>
                <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest block">Waybill Token</span>
                <h2 class="text-xl font-mono font-black text-brand-navy uppercase tracking-wide">AJD-LN-49210-PH</h2>
            </div>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-3 gap-6 text-xs font-bold uppercase tracking-wider">
            <div>
                <span class="text-[10px] font-black text-slate-400 block mb-0.5">Current Phase</span>
                <span class="text-amber-600 bg-amber-50 px-2.5 py-1 rounded-md border border-amber-200/60 inline-block font-extrabold">Custom Hold</span>
            </div>
            <div>
                <span class="text-[10px] font-black text-slate-400 block mb-0.5">Weight Manifest</span>
                <span class="text-slate-700 block font-mono">42.80 KG</span>
            </div>
            <div class="col-span-2 sm:col-span-1">
                <span class="text-[10px] font-black text-slate-400 block mb-0.5">Destination Node</span>
                <span class="text-slate-800 block"><i class="fa-solid fa-location-dot text-brand-red mr-1"></i>Manila, PH</span>
            </div>
        </div>
    </div>

    <div class="bg-white border border-slate-100 rounded-2xl p-8 mb-8 shadow-md">
        <h3 class="text-xs font-black uppercase tracking-widest text-slate-400 mb-8 flex items-center"><i class="fa-solid fa-bars-staggered mr-2 text-brand-red"></i>Consignment Flow Map</h3>
        
        <div class="relative flex flex-col lg:flex-row justify-between items-center w-full gap-8 lg:gap-0">
            <div class="absolute bg-slate-200 h-1 w-0.5 lg:w-full left-1/2 lg:left-0 top-0 lg:top-6 transform -translate-x-1/2 lg:translate-x-0 z-0"></div>
            <div class="absolute bg-brand-navy h-1 left-0 top-6 z-0 hidden lg:block transition-all duration-500" style="width: 75%"></div>

            <div class="relative z-10 flex flex-col lg:items-center text-center">
                <div class="w-12 h-12 rounded-full bg-brand-navy text-white flex items-center justify-center font-bold shadow-lg"><i class="fa-solid fa-circle-check"></i></div>
                <p class="mt-3 font-black text-xs uppercase tracking-wide text-brand-navy">Order Confirmed</p>
                <span class="text-[9px] bg-slate-100 text-slate-600 px-2 py-0.5 rounded font-mono font-bold mt-1">Mar 10, 2026</span>
            </div>
            <div class="relative z-10 flex flex-col lg:items-center text-center">
                <div class="w-12 h-12 rounded-full bg-brand-navy text-white flex items-center justify-center font-bold shadow-lg"><i class="fa-solid fa-truck-ramp-box"></i></div>
                <p class="mt-3 font-black text-xs uppercase tracking-wide text-brand-navy">Picked by Courier</p>
                <span class="text-[9px] bg-slate-100 text-slate-600 px-2 py-0.5 rounded font-mono font-bold mt-1">Mar 12, 2026</span>
            </div>
            <div class="relative z-10 flex flex-col lg:items-center text-center">
                <div class="w-12 h-12 rounded-full bg-brand-navy text-white flex items-center justify-center font-bold shadow-lg"><i class="fa-solid fa-plane-departure"></i></div>
                <p class="mt-3 font-black text-xs uppercase tracking-wide text-brand-navy">On The Way</p>
                <span class="text-[9px] bg-slate-100 text-slate-600 px-2 py-0.5 rounded font-mono font-bold mt-1">Mar 12, 2026</span>
            </div>
            <div class="relative z-10 flex flex-col lg:items-center text-center">
                <div class="w-12 h-12 rounded-full bg-amber-500 text-white flex items-center justify-center font-bold shadow-lg ring-4 ring-amber-100"><i class="fa-solid fa-building-shield"></i></div>
                <p class="mt-3 font-black text-xs uppercase tracking-wide text-amber-600">Custom Hold</p>
                <span class="text-[9px] bg-amber-100 text-amber-800 px-2 py-0.5 rounded font-mono font-bold mt-1">Mar 13, 2026</span>
            </div>
            <div class="relative z-10 flex flex-col lg:items-center text-center">
                <div class="w-12 h-12 rounded-full bg-slate-200 text-slate-400 flex items-center justify-center font-bold"><i class="fa-solid fa-warehouse"></i></div>
                <p class="mt-3 font-black text-xs uppercase tracking-wide text-slate-400">Delivered</p>
                <span class="text-[9px] text-slate-400 font-mono mt-1">Pending</span>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch">
        <div class="bg-white border border-slate-100 rounded-2xl p-6 shadow-sm lg:col-span-1 flex flex-col">
            <h3 class="text-sm font-black text-brand-navy border-b border-slate-100 pb-4 mb-6 uppercase tracking-wider flex items-center">
                <i class="fa-solid fa-clock-rotate-left mr-2 text-brand-red"></i> Dispatch Manifest History
            </h3>
            <div class="flex-grow space-y-8 relative before:absolute before:inset-0 before:left-3.5 before:bg-slate-100 before:w-0.5">
                <div class="relative pl-8">
                    <div class="absolute left-1.5 top-1.5 w-4 h-4 rounded-full bg-amber-500 ring-4 ring-amber-100 z-10"></div>
                    <span class="text-[10px] text-slate-400 font-mono block">Mar 13, 2026 - 06:26 AM</span>
                    <span class="inline-block text-[9px] font-black px-2 py-0.5 rounded bg-amber-50 text-amber-800 uppercase tracking-widest mt-1 border border-amber-200/50">Custom Hold Trigger</span>
                    <p class="text-xs font-black text-slate-800 mt-1.5 uppercase"><i class="fa-solid fa-building-shield mr-1 text-slate-400"></i> MANILA TERMINAL GATEWAY</p>
                    <p class="text-xs text-slate-500 mt-1 leading-relaxed">CONSIGNMENT FLAG INTERCEPTED AT PORT TERMINAL COMPLIANCE GATEWAY FOR DOCK DOCUMENTATION AUDITING.</p>
                </div>
                <div class="relative pl-8">
                    <div class="absolute left-1.5 top-1.5 w-4 h-4 rounded-full bg-brand-navy ring-4 ring-blue-50 z-10"></div>
                    <span class="text-[10px] text-slate-400 font-mono block">Mar 12, 2026 - 04:30 PM</span>
                    <span class="inline-block text-[9px] font-black px-2 py-0.5 rounded bg-blue-50 text-brand-navy uppercase tracking-widest mt-1 border border-blue-100">Transit Progression</span>
                    <p class="text-xs font-black text-slate-800 mt-1.5 uppercase"><i class="fa-solid fa-plane-departure mr-1 text-slate-400"></i> ORIGIN CARGO HUB HUB DEPARTURE</p>
                    <p class="text-xs text-slate-500 mt-1 leading-relaxed">FREIGHT PACKAGING LOADED TO COMPARTMENT ROUTE MATRIX FOR INTERMEDIATE OVERSEAS DIRECT TRANSIT.</p>
                </div>
            </div>
        </div>

        <div class="bg-white border border-slate-100 rounded-2xl p-6 shadow-sm lg:col-span-2 flex flex-col min-h-[400px]">
            <h3 class="text-sm font-black text-brand-navy border-b border-slate-100 pb-4 mb-6 uppercase tracking-wider flex items-center justify-between">
                <span><i class="fa-solid fa-satellite mr-2 text-brand-red"></i> Live Vector Satellite Tracking Map</span>
                <span class="text-[10px] bg-red-50 text-brand-red font-black px-2.5 py-1 rounded border border-red-100 animate-pulse">SYSTEM TRACKING ACTIVE</span>
            </h3>
            <div id="manifest-map" class="w-full rounded-xl flex-grow border border-slate-200 shadow-inner bg-slate-50"></div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Centering mapping matrix explicitly to Manila coordinate geometry configuration parameters
        var map = L.map('manifest-map').setView([14.599512, 120.984222], 5);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

        var customizedMarkerIcon = L.divIcon({
            className: 'relative flex items-center justify-center',
            html: `<div class="animate-ping absolute inline-flex h-8 w-8 rounded-full bg-amber-400 opacity-75"></div>
                   <div class="relative inline-flex rounded-full h-4 w-4 bg-amber-600 border-2 border-white"></div>`,
            iconSize: [24, 24]
        });

        L.marker([14.599512, 120.984222], { icon: customizedMarkerIcon }).addTo(map)
            .bindPopup(`<div class="p-1 font-sans"><p class="text-[10px] uppercase text-slate-400 font-bold">Vector Lock Point</p><p class="text-xs font-black text-slate-900">MANILA CUSTOMS COMPACT AREA</p></div>`)
            .openPopup();
    });
</script>
@endsection