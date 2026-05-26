<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Air Jake Executive Admin Management Console</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-slate-950 text-slate-100 flex min-h-screen font-sans antialiased">

    <div class="w-80 bg-slate-900 border-r border-slate-800 p-6 flex flex-col justify-between shadow-2xl">
        <div class="space-y-8">
            <div class="flex items-center space-x-3 text-sm font-black tracking-widest text-white border-b border-slate-800 pb-6">
                <div class="bg-red-600 p-2 rounded-md"><i class="fa-solid fa-terminal text-white"></i></div>
                <span>AJ OPERATION TERMINAL</span>
            </div>
            <nav class="space-y-2 text-xs font-bold uppercase tracking-wider">
                <a href="#" class="flex items-center space-x-3 bg-red-600 text-white px-4 py-3.5 rounded-xl shadow-lg shadow-red-600/10"><i class="fa-solid fa-circle-plus"></i> <span>Cargo Booking Desk</span></a>
                <a href="#" class="flex items-center space-x-3 text-slate-400 hover:text-white px-4 py-3.5 rounded-xl transition-all hover:bg-slate-800/40"><i class="fa-solid fa-globe"></i> <span>Public Portal View</span></a>
            </nav>
        </div>
        <div class="bg-slate-950 p-4 rounded-xl border border-slate-800/80 text-[11px]">
            <span class="text-slate-500 block font-black uppercase tracking-widest">Active Security Protocol</span>
            <p class="text-white font-mono mt-1 font-semibold">Terminal Master Operator Token</p>
        </div>
    </div>

    <div class="flex-grow p-10 overflow-y-auto max-h-screen">
        <div class="mb-10">
            <h2 class="text-3xl font-black text-white uppercase tracking-tight">Logistics Management Desk</h2>
            <p class="text-xs text-slate-400 mt-1">Onboard priority cargo entries, update geographic coordinates checkpoints, and configure terminal hold indicators.</p>
        </div>

        <div class="grid grid-cols-1 xl:grid-cols-3 gap-8 items-start">
            <div class="bg-slate-900 border border-slate-800 p-6 rounded-2xl shadow-xl xl:col-span-1">
                <h3 class="text-xs font-black mb-6 text-white border-b border-slate-800 pb-3 flex items-center uppercase tracking-widest"><i class="fa-solid fa-square-plus text-red-500 mr-2 text-sm"></i>Book New Consignment Cargo</h3>
                
                <form action="#" method="POST" class="space-y-4">
                    <div>
                        <label class="block text-[10px] font-bold uppercase text-slate-400 mb-1 tracking-wider">Sender Manifest Identity</label>
                        <input type="text" name="sender_name" placeholder="E.g., Global Electronics Inc" class="w-full bg-slate-950 border border-slate-700 rounded-xl p-3 text-white focus:outline-none focus:border-red-500 text-xs font-medium transition" required>
                    </div>
                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <label class="block text-[10px] font-bold uppercase text-slate-400 mb-1 tracking-wider">Receiver Full Name</label>
                            <input type="text" name="receiver_name" class="w-full bg-slate-950 border border-slate-700 rounded-xl p-3 text-white focus:outline-none focus:border-red-500 text-xs font-medium transition" required>
                        </div>
                        <div>
                            <label class="block text-[10px] font-bold uppercase text-slate-400 mb-1 tracking-wider">Receiver Email Account</label>
                            <input type="email" name="receiver_email" class="w-full bg-slate-950 border border-slate-700 rounded-xl p-3 text-white focus:outline-none focus:border-red-500 text-xs font-medium transition" required>
                        </div>
                    </div>
                    <div>
                        <label class="block text-[10px] font-bold uppercase text-slate-400 mb-1 tracking-wider">Final Delivery Destination Node</label>
                        <input type="text" name="delivery_address" placeholder="City, Country Zip Code" class="w-full bg-slate-950 border border-slate-700 rounded-xl p-3 text-white focus:outline-none focus:border-red-500 text-xs font-medium transition" required>
                    </div>
                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <label class="block text-[10px] font-bold uppercase text-slate-400 mb-1 tracking-wider">Weight Value Metrics</label>
                            <input type="text" name="weight" placeholder="E.g., 14.50 KG" class="w-full bg-slate-950 border border-slate-700 rounded-xl p-3 text-white focus:outline-none focus:border-red-500 text-xs font-medium transition">
                        </div>
                        <div>
                            <label class="block text-[10px] font-bold uppercase text-slate-400 mb-1 tracking-wider">Valuation Tariff Charge ($)</label>
                            <input type="number" step="0.01" name="cost" placeholder="0.00" class="w-full bg-slate-950 border border-slate-700 rounded-xl p-3 text-white focus:outline-none focus:border-red-500 text-xs font-medium transition" required>
                        </div>
                    </div>
                    
                    <div class="border-t border-slate-800 pt-4 mt-2">
                        <span class="text-[10px] font-black text-red-500 uppercase tracking-widest block mb-3">Live Map Coordinates Localization System</span>
                        <div class="grid grid-cols-3 gap-2">
                            <div>
                                <label class="block text-[9px] uppercase text-slate-400 font-bold">Node Name</label>
                                <input type="text" name="current_location" placeholder="MANILA, PH" class="w-full bg-slate-950 border border-slate-700 rounded-lg p-2 text-white focus:outline-none text-[11px] font-mono" required>
                            </div>
                            <div>
                                <label class="block text-[9px] uppercase text-slate-400 font-bold">Latitude</label>
                                <input type="number" step="0.000001" name="latitude" value="14.599512" class="w-full bg-slate-950 border border-slate-700 rounded-lg p-2 text-white focus:outline-none text-[11px] font-mono" required>
                            </div>
                            <div>
                                <label class="block text-[9px] uppercase text-slate-400 font-bold">Longitude</label>
                                <input type="number" step="0.000001" name="longitude" value="120.984222" class="w-full bg-slate-950 border border-slate-700 rounded-lg p-2 text-white focus:outline-none text-[11px] font-mono" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white font-black p-3.5 rounded-xl transition-all text-xs uppercase tracking-widest shadow-lg shadow-red-600/10">Commit Manifest & Print Waybill</button>
                </form>
            </div>

            <div class="xl:col-span-2">
                <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 shadow-xl">
                    <h3 class="text-xs font-black mb-6 text-white uppercase tracking-widest flex items-center"><i class="fa-solid fa-list-check text-red-500 mr-2 text-sm"></i>Active Cargo Fleet Ledger</h3>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-xs text-slate-300">
                            <thead class="bg-slate-950 text-[10px] font-black uppercase tracking-widest text-slate-400 border-b border-slate-800">
                                <tr>
                                    <th class="p-4">Tracking Code</th>
                                    <th class="p-4">Consignee Target</th>
                                    <th class="p-4">Pipeline Checkpoint Phase</th>
                                    <th class="p-4 text-right">Actions Panel</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-800/40 font-semibold text-slate-200">
                                <tr class="hover:bg-slate-800/20 transition-colors">
                                    <td class="p-4 font-mono font-bold text-white tracking-wider text-xs">AJD-LN-49210-PH</td>
                                    <td class="p-4">Jane Winters</td>
                                    <td class="p-4">
                                        <span class="bg-amber-500/10 text-amber-400 border border-amber-500/20 px-2.5 py-1 rounded-md text-[10px] font-black tracking-wider uppercase">Custom Hold</span>
                                    </td>
                                    <td class="p-4 text-right space-x-2 whitespace-nowrap">
                                        <button class="bg-slate-950 hover:bg-slate-800 text-white font-bold text-[10px] uppercase px-3 py-2 rounded-lg border border-slate-800 transition-all"><i class="fa-solid fa-receipt text-red-500 mr-1"></i> Invoice</button>
                                        <button class="bg-red-600 hover:bg-red-700 text-white font-bold text-[10px] uppercase px-3 py-2 rounded-lg transition-all shadow-md">Shift Checkpoint Vector</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>