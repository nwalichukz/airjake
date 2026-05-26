<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cargo Manifest Waybill Receipt - AJD-LN-49210-PH</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @media print {
            body { background: white; color: black; }
            .no-print { display: none; }
            .print-layout { border: 2px solid #000 !important; box-shadow: none !important; border-radius: 0 !important; }
        }
    </style>
</head>
<body class="bg-slate-100 py-12 px-4 flex justify-center items-center min-h-screen">

    <div class="max-w-3xl w-full bg-white p-10 rounded-2xl shadow-2xl border border-slate-200 print-layout relative">
        <div class="absolute top-0 inset-x-0 h-2 bg-slate-900"></div>
        
        <div class="flex justify-between items-start border-b-2 border-slate-900 pb-6 mb-8 mt-2">
            <div>
                <h1 class="text-2xl font-black text-slate-900 tracking-tight">AIR JAKE DELIVERY SERVICES</h1>
                <p class="text-[10px] font-black text-red-600 uppercase tracking-widest mt-1">Secure Global Air Freight Manifest Waybill Receipt</p>
            </div>
            <div class="text-right">
                <span class="text-[10px] uppercase text-slate-400 font-bold block tracking-wider">Tracking Reference</span>
                <span class="font-mono text-lg font-black bg-slate-900 text-white px-3 py-1.5 rounded-lg inline-block mt-1 tracking-widest uppercase shadow-md">AJD-LN-49210-PH</span>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-8 border-b border-slate-100 pb-8 mb-8 text-xs leading-relaxed">
            <div>
                <h3 class="text-[10px] uppercase text-slate-400 font-black mb-2 tracking-widest">Consignment Shipper / Origin</h3>
                <p class="font-black text-slate-900 text-sm">Global Distribution Network Axis Corp.</p>
                <p class="text-slate-500 mt-1">Authorized Hub Dispatch Manifest Node terminal 01</p>
            </div>
            <div>
                <h3 class="text-[10px] uppercase text-slate-400 font-black mb-2 tracking-widest">Declared Consignee Destination Target</h3>
                <p class="font-black text-slate-900 text-sm">Jane Winters</p>
                <p class="text-slate-500 font-mono text-[11px] mt-0.5">j.winters@domain.com</p>
                <p class="text-slate-700 font-medium mt-2"><span class="font-bold text-red-600">Drop Vector:</span> Manila Port Entry Cargo Complex Facility Area Axis, Philippines</p>
            </div>
        </div>

        <table class="w-full text-left text-xs text-slate-700 mb-10">
            <thead>
                <tr class="bg-slate-50 border-b border-slate-200 text-[10px] uppercase font-black text-slate-500 tracking-wider">
                    <th class="p-4">Priority Freight Service Classification Description</th>
                    <th class="p-4">Declared Weight</th>
                    <th class="p-4 text-right">Tariff Rate Total</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 font-medium">
                <tr>
                    <td class="p-4 text-slate-900">
                        International Fast-Track Express Priority Air Cargo Freight Carrier Routing Protocol
                        <p class="text-[10px] text-slate-400 font-normal mt-1 leading-relaxed">Includes continuous real-time multi-node logging updates, satellite coordinate positioning markers system lookup access validation, and custom border hold clearance indicators.</p>
                    </td>
                    <td class="p-4 font-mono text-slate-600 font-bold">42.80 KG</td>
                    <td class="p-4 text-right font-mono font-black text-slate-900 text-sm">$1,450.00</td>
                </tr>
            </tbody>
        </table>

        <div class="flex justify-between items-end border-t-2 border-slate-900 pt-6">
            <div class="text-[10px] text-slate-400 max-w-sm leading-relaxed">
                <p class="font-bold uppercase text-slate-700 mb-1 tracking-wider">Waybill Protocol Compliance Statement</p>
                This transactional receipt acts as active verification of cargo processing routing carriage conditions under the regulatory framework profiles of Air Jake Delivery Services.
            </div>
            <div class="text-right">
                <span class="text-[10px] text-slate-400 uppercase font-black block tracking-wider">Total Charges Invoiced</span>
                <span class="text-2xl font-black font-mono text-slate-900 tracking-tight">$1,450.00</span>
            </div>
        </div>

        <div class="no-print mt-12 border-t border-slate-100 pt-6 flex justify-end space-x-3">
            <button onclick="window.close()" class="bg-slate-100 hover:bg-slate-200 px-5 py-2.5 rounded-xl text-xs font-black uppercase tracking-wider text-slate-600 transition-all">Dismiss Receipt</button>
            <button onclick="window.print()" class="bg-slate-900 hover:bg-slate-800 text-white font-black px-6 py-2.5 rounded-xl text-xs uppercase tracking-widest transition-all shadow-lg"><i class="fa-solid fa-print mr-2 text-brand-red"></i> Print Waybill Invoice</button>
        </div>
    </div>

</body>
</html>