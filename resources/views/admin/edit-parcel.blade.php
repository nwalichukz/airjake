<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Transit Node | Air Jake Delivery Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .bg-brand-navy { background-color: #071D3A; }
        .bg-brand-red { background-color: #D90429; }
        .text-brand-navy { color: #071D3A; }
        .text-brand-red { color: #D90429; }
        .border-brand-red { border-color: #D90429; }
        .bg-slate-dark { background-color: #0B2545; }
    </style>
</head>
<body class="bg-slate-900 text-slate-100 font-sans antialiased min-h-screen flex flex-col justify-between">

    <!-- Top Navigation Header Context -->
    <nav class="bg-brand-navy border-b border-slate-800 shadow-xl px-6 py-4">
        <div class="max-w-4xl mx-auto flex justify-between items-center">
            <a href="#" class="flex items-center space-x-3 group">
                <div class="bg-brand-red p-2 rounded-lg shadow-md">
                    <i class="fa-solid fa-plane-up text-white text-sm"></i>
                </div>
                <span class="text-md font-black tracking-tight uppercase text-white">AIR JAKE <span class="text-brand-red font-light">SYSTEMS</span></span>
            </a>
            <div class="text-xs font-bold uppercase tracking-widest text-slate-400">
                <i class="fa-solid fa-sliders text-brand-red mr-1.5"></i> Logistics Control Matrix
            </div>
        </div>
    </nav>

    <!-- Main Central Form Wrapper Frame Component -->
    <main class="flex-grow flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-xl w-full bg-slate-dark rounded-2xl border border-slate-800 shadow-2xl overflow-hidden p-8">
            
            <div class="mb-8 border-b border-slate-700/50 pb-5">
                <h2 class="text-lg font-black tracking-wide uppercase text-white">Update Consignment Milestone</h2>
                <p class="text-xs text-slate-400 mt-1">Alter current coordinates, global positioning markers, and processing status tags.</p>
            </div>

            <!-- Global Validation Notification Engine Banner Block -->
            @if ($errors->any())
                <div class="bg-red-950/40 border-2 border-brand-red text-red-200 p-4 rounded-xl mb-6 shadow-md">
                    <div class="flex items-center space-x-2 mb-1.5 font-bold uppercase text-xs tracking-wider text-white">
                        <i class="fa-solid fa-triangle-exclamation text-brand-red"></i>
                        <span>Input Integrity Validation Error</span>
                    </div>
                    <ul class="list-disc list-inside text-[11px] space-y-0.5 text-slate-300">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('success'))
    <div class="bg-green-950/40 border-2 border-green-500 text-green-200 p-4 rounded-xl mb-6 shadow-md">
        <div class="flex items-center space-x-2 mb-1.5 font-bold uppercase text-xs tracking-wider text-white">
            <i class="fa-solid fa-circle-check text-green-500"></i>
            <span>Operation Successful</span>
        </div>
        <p class="text-[11px] text-slate-300">{{ session('success') }}</p>
    </div>
@endif
@if (session('error'))
    <div class="bg-red-950/40 border-2 border-red-500 text-red-200 p-4 rounded-xl mb-6 shadow-md">
        <div class="flex items-center space-x-2 mb-1.5 font-bold uppercase text-xs tracking-wider text-white">
            <i class="fa-solid fa-circle-xmark text-red-500"></i>
            <span>Operation Failed</span>
        </div>
        <p class="text-[11px] text-slate-300">{{ session('error') }}</p>
    </div>
@endif

            <!-- Core {{ url('/admin/parcel-update/' . $parcel->id) }} Input Update Pipeline Action Form -->
            <form action="{{ url('/admin/parcel-update/' . $parcel->id) }}" method="POST" class="space-y-5">
                @csrf
                @method('PUT') <!-- Use PUT/PATCH for semantic resource modification updates -->

                <!-- Hidden Reference Record Key to track layout targets -->
                <input type="hidden" name="parcel_id" value="{{ $parcel->id }}">

                <!-- Transit Step Status Dropdown Matrix Section -->
                <div>
                    <label class="block text-[10px] font-bold uppercase text-slate-400 mb-1.5 tracking-wider">Consignment Logistics Status</label>
                    <div class="relative">
                        <select name="status" class="w-full bg-slate-950 border rounded-xl p-3 text-white appearance-none focus:outline-none focus:border-brand-red text-xs font-medium transition cursor-pointer">
               
                   <?php
                   $allItems  = ['In Transit', 'Custom Hold', 'Delivered'];
                       $usedItems = $parcel->logs->pluck('status')->toArray();
                       $excluded  = array_diff($allItems, $usedItems);
                       ?>

                    @foreach($excluded as $item)
                      <option value="{{ $item }}">{{ $item }}</option>
                      @endforeach

                        {{--  <option value="In Transit">In Transit</option>
                            <option value="Customs Clearing">Customs Holding</option>
                            <option value="Out For Local Last-Mile Delivery Node">Out For Local Last-Mile Delivery Node</option>
                            <option value="Delivered">Delivered</option>--}}
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-slate-400">
                            <i class="fa-solid fa-chevron-down text-[10px]"></i>
                        </div>
                    </div>
                    @error('status')
                        <p class="text-brand-red font-medium text-[11px] mt-1"><i class="fa-solid fa-circle-exclamation mr-1"></i> {{ $message }}</p>
                    @enderror
                </div>

                <!-- Node Location Base Text Box Field input -->
                <div>
                    <label class="block text-[10px] font-bold uppercase text-slate-400 mb-1.5 tracking-wider">Current Terminal Node Location (City, Country)</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-slate-500 text-xs">
                            <i class="fa-solid fa-location-dot"></i>
                        </span>
                        <input type="text" name="current_location" value="{{ old('current_location', $parcel->current_location) }}" 
                               placeholder="e.g. Lagos Gateway Hub Terminal, Nigeria"
                               class="w-full bg-slate-950 border @error('current_location') border-brand-red @else border-slate-700 @enderror rounded-xl py-3 pl-9 pr-3 text-white focus:outline-none focus:border-brand-red text-xs font-medium transition">
                    </div>
                    @error('current_location')
                        <p class="text-brand-red font-medium text-[11px] mt-1"><i class="fa-solid fa-circle-exclamation mr-1"></i> {{ $message }}</p>
                    @enderror
                </div>

                <!-- Geospatial Map Coordinate Matrix (Two-Column Layout Grid) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <!-- Latitude Component Coordinate Box -->
                    <div>
                        <label class="block text-[10px] font-bold uppercase text-slate-400 mb-1.5 tracking-wider">Geo Latitude Coordinate</label>
                        <input type="text" name="latitude" value="{{ old('latitude', $parcel->latitude) }}" placeholder="e.g. 6.5244"
                               class="w-full bg-slate-950 border @error('latitude') border-brand-red @else border-slate-700 @enderror rounded-xl p-3 text-white focus:outline-none focus:border-brand-red text-xs font-mono transition" required>
                        @error('latitude')
                            <p class="text-brand-red font-medium text-[11px] mt-1"><i class="fa-solid fa-circle-exclamation mr-1"></i> {{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Longitude Component Coordinate Box -->
                    <div>
                        <label class="block text-[10px] font-bold uppercase text-slate-400 mb-1.5 tracking-wider">Geo Longitude Coordinate</label>
                        <input type="text" name="longitude" value="{{ old('longitude', $parcel->longitude) }}" placeholder="e.g. 3.3792"
                               class="w-full bg-slate-950 border @error('longitude') border-brand-red @else border-slate-700 @enderror rounded-xl p-3 text-white focus:outline-none focus:border-brand-red text-xs font-mono transition" required>
                        @error('longitude')
                            <p class="text-brand-red font-medium text-[11px] mt-1"><i class="fa-solid fa-circle-exclamation mr-1"></i> {{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Dynamic Status Description Milestone Logs Text Area Module -->
                <div>
                    <label class="block text-[10px] font-bold uppercase text-slate-400 mb-1.5 tracking-wider">Custom Status Description/Activity Log Context</label>
                    <textarea name="status_description" rows="3" placeholder="Describe package checkpoint conditions, flight arrival statuses, or ground network customs tracking operations detail..."
                              class="w-full bg-slate-950 border @error('status_description') border-brand-red @else border-slate-700 @enderror rounded-xl p-3 text-white focus:outline-none focus:border-brand-red text-xs font-medium transition leading-relaxed">{{ old('status_description', $parcel->status_description) }}</textarea>
                    @error('status_description')
                        <p class="text-brand-red font-medium text-[11px] mt-1"><i class="fa-solid fa-circle-exclamation mr-1"></i> {{ $message }}</p>
                    @enderror
                </div>

                <!-- Form Operations Submission Actions Control Base Panel -->
                <div class="pt-4 border-t border-slate-700/50 flex flex-col sm:flex-row sm:justify-end space-y-2 sm:space-y-0 sm:space-x-3">
                    <a href="{{ url()->previous() }}" class="text-center bg-slate-800 text-slate-300 hover:text-white px-5 py-3 rounded-xl transition text-xs font-bold tracking-wide uppercase">
                        Cancel Matrix
                    </a>
                    <button type="submit" class="bg-brand-red hover:bg-red-700 text-white font-extrabold px-6 py-3 rounded-xl shadow-lg transition text-xs tracking-widest uppercase flex items-center justify-center space-x-2">
                        <i class="fa-solid fa-rotate-right animate-spin-slow"></i>
                        <span>Deploy Cargo Update</span>
                    </button>
                </div>
            </form>

        </div>
    </main>

    <!-- Base Operations Tracking Layout Footer -->
    <footer class="bg-brand-navy py-4 text-center text-xs border-t border-slate-950 text-slate-500">
        &copy; 2026 Air Jake Delivery Services. Authorized Infrastructure Operations Level 3 Administration Terminal.
    </footer>

</body>
</html>